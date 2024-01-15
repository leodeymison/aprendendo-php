<?php
    class User {
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;

        public function generateToken(): String{
            return bin2hex(random_bytes(50));
        }
        public function generateImageName(): String{
            return bin2hex(random_bytes(60)) . ".jpg";
        }
    }

    interface UserModel {
        public function buildUser($data): User;
        public function create(User $data, bool $authentication): String;
        public function findByEmail(String $email): bool | User;
        public function findByToken(String $token): bool | User;
        public function setTokenToSession(String $token, bool $redirect): void;
        public function verifyToken(bool $protected): bool | User;
        public function destroyToken(): void;
        public function login(String $email, String $password): bool;
        public function update(User $data, bool $redirect): void;
    }
?>