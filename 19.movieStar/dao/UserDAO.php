<?php
    include_once("models/User.php");
    include_once("models/Message.php");

    class UserDAO implements UserModel {
        private \PDO $conn;
        private $url;
        private $message;

        public function __construct($conn, $url){
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message();
        }
        public function buildUser($data): User{
            $user = new User();

            $user->id = $data["id"];
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->image = $data["image"];
            $user->bio = $data["bio"];
            $user->token = $data["token"];

            return $user;
        }
        public function create(User $data, bool $authentication = false): String{
            $query = "INSERT INTO users (name, lastname, email, password, image, token) VALUES (:name, :lastname, :email, :password, :image, :token)";
            $createUser = $this->conn->prepare($query);

            $createUser->bindParam(':name', $data->name);
            $createUser->bindParam(':lastname', $data->lastname);
            $createUser->bindParam(':email', $data->email);
            $createUser->bindParam(':password', $data->password);
            $createUser->bindParam(':image', $data->image);
            $createUser->bindParam(':token', $data->token);

            try {
                $createUser->execute();
                if($authentication){
                    $this->setTokenToSession($data->token);
                    return "Logado!";
                } else {
                    return "Usuário criado com sucesso!";
                }
            } catch (PDOException $err){
                return $err->getMessage();
            }
        }
        public function findByEmail(String $email): bool | User{
            if($email != ""){
                $query = "SELECT * FROM users WHERE email = :email";
                $user = $this->conn->prepare($query);
                $user->bindParam(':email', $email);
                $user->execute();
                if($user->rowCount() > 0){
                    $data = $user->fetch();
                    $newUser = $this->buildUser($data);
                    return $newUser;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        public function findByToken(string $token): bool | User {
            if($token){
                $query = "SELECT * FROM users WHERE token = :token";
                $user = $this->conn->prepare($query);
                $user->bindParam(':token', $token);
                $user->execute();
                if($user->rowCount() > 0){
                    $data = $user->fetch();
                    $data = $this->buildUser($data);
                    return $data;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        public function setTokenToSession(string $token, bool $redirect = true): void{
            $_SESSION['token'] = $token;
            if($redirect){
                $this->message->setMessage("Seja bem-vindo!", "success", $this->url . "editprofile.php");
            }
        }

        public function verifyToken(bool $protected = false): bool | User{
            if(!empty($_SESSION['token'])) {
                $token = $_SESSION['token'];
                $user = $this->findByToken($token);
                return $user;
            } else {
                if($protected){
                    $this->message->setMessage("Permissão para acessar a página negada, faça login!", "error", $this->url . "index.php");
                    return false;
                } else {
                    return false;
                }
            }
        }
        public function destroyToken(): void{
            $_SESSION['token'] = "";
            $this->message->setMessage("Deslogado com sucesso!", "success", $this->url . "index.php");
        }
        public function login(String $email, String $password): bool {
            $user = $this->findByEmail($email);
            if($user) {
                if(password_verify($password, $user->password)){
                    $token = $user->generateToken();

                    $this->setTokenToSession($token, false);

                    $user->token = $token;

                    $this->update($user, false);

                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        public function update(User $data, bool $redirect = true): void {
            $query = "UPDATE users SET
                name = :name,
                lastname = :lastname,
                image = :image,
                bio = :bio,
                token = :token
            WHERE id = :id";
            $user = $this->conn->prepare($query);
            $user->bindParam(":name", $data->name);
            $user->bindParam(":lastname", $data->lastname);
            $user->bindParam(":image", $data->image);
            $user->bindParam(":bio", $data->bio);
            $user->bindParam(":token", $data->token);
            $user->bindParam(":id", $data->id);

            $user->execute();

            if($redirect){
                $this->message->setMessage("Usuário atualizado com sucesso!", "success", $this->url . "editprofile.php");
            }
        }
    }
?>