<?php
    include_once("models/Category.php");
    class CategoryDAO implements CategoryModel {
        private \PDO $conn;
        public function __construct(\PDO $conn){
            $this->conn = $conn;
        }
        public function findAll(){
            $query = "SELECT * FROM categories";
            $category = $this->conn->query($query);
            return $category->fetchAll();
        }
        public function findOnePerId(int $id): Category | false {
            $query = "SELECT * FROM categories WHERE id = :id";
            $category = $this->conn->prepare($query);
            $category->bindParam(':id',$id);
            $category->execute();
            return $category->fetch();
        }
    }
?>