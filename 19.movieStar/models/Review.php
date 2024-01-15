<?php
    class Review {
        public  $id;
        public  $review;
        public  $body;
        public  $user_id;
        public  $movie_id;
    }

    interface ReviewModel {
        public function findAll(int $movie_id);
        public function create(Review $data);
    }
?>