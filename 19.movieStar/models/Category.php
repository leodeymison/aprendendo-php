<?php
    class Category {
        public $id;
        public $title;
    };

    interface CategoryModel {
        public function findAll();
        public function findOnePerId(int $id): Category | false;
    }
?>