<?php
    class Animal {
        public $name;
        function escolherNome($name){
            $this->name = $name;
        }
    }

    $dog1 = new Animal();
    echo "Nome: ".$dog1->name."<br />";
    $dog1->escolherNome("Carlinhos");
    echo "Nome: ".$dog1->name."<br />";
?>