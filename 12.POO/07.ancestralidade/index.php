<?php
    class User {
        public $name = 'Pedro';
    }
    class UserAdmin extends User {

    }

    $leo = new User();
    $pedro = new UserAdmin();

    if($leo instanceof User) {
        echo 'Leo é da class User <br />';
    }
    if($pedro instanceof UserAdmin) {
        echo 'Pedro é da class User <br />';
    }
?>