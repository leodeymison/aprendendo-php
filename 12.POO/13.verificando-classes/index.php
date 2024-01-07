<?php
    // ● class_exists() => verifica se uma classe existe;
    // ● get_class_methods() => verifica os métodos de uma classe;
    // ● get_class_vars() => mapeamento das propriedades de uma classe;
    
    class User {
        public $name;
        public $email;
        public function login(){
            echo "Fazendo login<br/>";
        }
    }

    if(class_exists("User")){
        echo "Class User existe";
    }
    echo "<br />";
    print_r(get_class_vars('User'));
    echo "<br />";
    print_r(get_class_methods('User'));
?>