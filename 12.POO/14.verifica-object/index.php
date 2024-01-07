<?php
    // ● is_object() => verifica se uma variável é um objeto;
    // ● get_class() => verifica a classe de um objeto;
    // ● method_exists() => verifica se um método existe em um objeto;

    class Human {
        public function login(){}
    }

    $usr1 = new Human();
    if(is_object($usr1)){
        echo "Variável é um object <br />";
    }
    echo get_class($usr1)."<br />";
    if(method_exists($usr1, 'login')){
        echo "Method login exist in var <br />";
    }
?>