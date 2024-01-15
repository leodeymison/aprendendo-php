<?php
    class Movie {
        public $id;
        public $title;
        public $description;
        public $image;
        public $trailer;
        public $length;
        public $user_id;
        public $category_id;

        public function generateImageName(): String{
            return bin2hex(random_bytes(60)) . ".jpg";
        }
    }
    interface MovieModel {
        public function create(Movie $data):void;
        public function getAllCategoriesWithMovies();
        public function findAllById(int $user_id);
        public function delete(int $id);
        public function findByTitle(String $s);
    }
?>