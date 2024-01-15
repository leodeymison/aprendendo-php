<?php
    include_once("models/Movie.php");
    include_once("models/Message.php");

    class MovieDAO implements MovieModel {
        public \PDO $conn;
        public $message;
        public $url;
        public function __construct(\PDO $conn, String $url){
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message();
        }
        public function create(Movie $data): void{
            $query = "INSERT INTO movies (
                title, 
                description, 
                image, 
                trailer, 
                length, 
                user_id, 
                category_id
            ) VALUES (
                :title, 
                :description, 
                :image, 
                :trailer, 
                :length, 
                :user_id, 
                :category_id
            )";
            $movie = $this->conn->prepare($query);
            $movie->bindParam(':title', $data->title);
            $movie->bindParam(':description', $data->description);
            $movie->bindParam(':image', $data->image);
            $movie->bindParam(':trailer', $data->trailer);
            $movie->bindParam(':length', $data->length);
            $movie->bindParam(':user_id', $data->user_id);
            $movie->bindParam(':category_id', $data->category_id);
            $movie->execute();
            $this->message->setMessage("Filme criado com sucesso!", "success", $this->url . "dashboard.php");
        }
        public function getAllCategoriesWithMovies(){
            $query = "SELECT categories.title AS cat_title, movies.id AS mov_id, movies.title AS mov_title, movies.image AS mov_image
            FROM categories
            LEFT JOIN movies ON categories.id = movies.category_id;";
            $catMov = $this->conn->query($query);
            $data = $catMov->fetchAll();

            $result = [];

            foreach ($data as $item) {
                $name = $item['cat_title'];
            
                if (!isset($result[$name])) {
                    if($item['mov_title']){
                        $result[$name] = [];
                    }
                }
                if($item['mov_title']){
                    $result[$name][] = [
                        'mov_id' => $item['mov_id'], 
                        'mov_title' => $item['mov_title'],
                        'mov_image' => $item['mov_image'],
                    ];
                }
            };
            
            return $result;
        }
        public function findAllById(int $user_id){
            $query = "SELECT * FROM movies WHERE user_id = :user_id";
            $cat = $this->conn->prepare($query);
            $cat->bindParam(':user_id', $user_id);
            $cat->execute();
            return $cat->fetchAll();
        }
        public function findOneById(int $id){
            $query = "SELECT 
            movies.id,
            movies.description,
            movies.image,
            movies.trailer,
            movies.length,
            movies.title,
            categories.title AS cat_title
        FROM 
            movies 
        LEFT JOIN 
            categories 
        ON 
            movies.category_id = categories.id 
        WHERE 
            movies.id = :id";
            $cat = $this->conn->prepare($query);
            $cat->bindParam(':id', $id);
            $cat->execute();
            return $cat->fetch();
        }
        public function delete(int $id){
            $query = "DELETE FROM movies WHERE id = :id";
            $mv = $this->conn->prepare($query);
            $mv->bindParam(':id', $id);
            $response = $mv->execute();
            if($response){
                $this->message->setMessage("Deletado com sucesso!", "success", $this->url . "dashboard.php");
            } else {
                $this->message->setMessage("Erro ao deletar!", "error", $this->url . "dashboard.php");
            }
        }
        public function findByTitle(String $s){
            $query = "SELECT * FROM movies WHERE title LIKE :title";
            $mv = $this->conn->prepare($query);
            $mv->bindValue(':title', "%$s%");
            $mv->execute();
            return $mv->fetchAll();
        }
    }
?>