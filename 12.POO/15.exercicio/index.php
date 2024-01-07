<?php
    class Task {
        private $title;
        private $description;
        private $completed;
        
        function __construct($title, $description, $completed){
            $this->title = $title;
            $this->description = $description;
            $this->completed = $completed;
        }
        
        public function markAsCompleted(){
            $this->completed = true;
        }
        public function markAsIncomplete(){
            $this->completed = false;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getDescription(){
            return $this->description;
        }
        public function isCompleted(){
            return $this->completed;
        }
    }

    $tasks = new Task("Estudar", "Estudar para a prova", false);

    echo $tasks->getDescription();
?>  