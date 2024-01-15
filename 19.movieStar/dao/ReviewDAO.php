<?php
    include_once("models/Review.php");
    class ReviewDAO implements ReviewModel {
        private \PDO $conn;
        private String $url;

        public function __construct(\PDO $conn, String $url){
            $this->conn = $conn;
            $this->url = $url;
        }
        public function findAll(int $movie_id){
            $query = "SELECT 
            reviews.id AS rv_id,
            reviews.review AS rv_note,
            reviews.body AS rv_body,
            users.id AS usr_id,
            users.name AS usr_name,
            users.image AS usr_image
        FROM reviews 
        LEFT JOIN users ON reviews.user_id = users.id
        WHERE reviews.movie_id = :movie_id
        ORDER BY reviews.id DESC";
            $rvw = $this->conn->prepare($query);
            $rvw->bindParam(":movie_id", $movie_id);
            $rvw->execute();
            return $rvw->fetchAll();
        }
        public function create(Review $data){
            $query = "INSERT INTO reviews 
                (review, body, user_id, movie_id) 
            VALUES 
                (:review, :body, :user_id, :movie_id)";
            $rvw = $this->conn->prepare($query);
            $rvw->bindParam(':review', $data->review);
            $rvw->bindParam(':body', $data->body);
            $rvw->bindParam(':user_id', $data->user_id);
            $rvw->bindParam(':movie_id', $data->movie_id);
            $rvw->execute();
        }
    }
?>