<?php
    interface UserModel {
        const NAME = "Mateus";
        public function falar();
    }

    class User implements UserModel {
        public function falar(){
            echo "Olá mundo! Me chamo ".self::NAME;
        }
    }

    $user = new User();
    $user->falar();
?>