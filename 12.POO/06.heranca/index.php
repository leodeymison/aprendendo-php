<?php
    class Human {
        public $age = 20;
        protected $vivo = true;

        public function falar(){
            echo "Hello world!<br />";
        }
        public function get_status(){
            return $this->vivo;
        }
    }

    class Developer extends Human {
        public function morrer(){
            $this->vivo = false;
        }
    }

    $ze = new Developer();

    $ze->falar();
    echo $ze->age."<br />";
    $vivo = $ze->get_status() ? "SIM" : "NÃO";
    echo "Vivo? ".$vivo."<br />";
    $ze->morrer();
    $vivo = $ze->get_status() ? "SIM" : "NÃO";
    echo "Vivo? ".$vivo."<br />";
?>