<?php
    trait Object1 {
        public function test1(){
            echo "Testando trait de object1 <br />";
        }
    }

    trait Object2 {
        public function test2(){
            echo "Testando trait de object2 <br />";
        }
    }

    class Central {
        use Object1;
        use Object2;
    }

    $obj = new Central();

    $obj->test1();
    $obj->test2();
?>