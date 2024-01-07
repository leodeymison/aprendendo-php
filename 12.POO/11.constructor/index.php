<?php
    class User {
        public $name;
        public $email;

        function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }

        public function getDatas(){
            echo "Nome: ".$this->name."<br />";
            echo "E-mail: ".$this->email."<br />";
        }
    }

    $user = new User("Leodeymison", "leo@gmail.com");
    $user->getDatas();
?>