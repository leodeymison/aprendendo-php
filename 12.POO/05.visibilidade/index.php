<?php
    class User {
        public $name = 'Leodeymison';
        protected $permission = "admin";
        private $password = '1234leo';

        function get_password(){
            return $this->password;
        }
        function get_permission(){
            return $this->permission;
        }
    }

    $user1 = new User();

    echo "Nome: ".$user1->name."<br />";
    echo "Password: ".$user1->get_password()."<br />";
    echo "Permissão: ".$user1->get_permission()."<br />";
?>