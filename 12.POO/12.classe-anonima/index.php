<?php
    $pessoa = new class(){
        public $name = "Leodeymison";
        public function dizerNome(){
            echo "Meu nome é ".$this->name;
        }
    };
    echo $pessoa->name."<br />";
    $pessoa->dizerNome();
?>