<?php
    class Contact {
        private $id;
        private $name;
        private $phone;
        private $observations;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function setPhone($phone){
            $this->phone = $phone;
        }
        public function getObservations(){
            return $this->observations;
        }
        public function setObservations($observations){
            $this->observations = $observations;
        }
    }

    interface contactDAOInterface {
        public function create(Contact $contact);
        public function findAll();
    }
?>