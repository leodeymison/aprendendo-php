<?php
    abstract class TestModel {
        public static function testFunc(){
            echo "Esse método é de uma class abstract <br />";
        }

        abstract function testObg();
    }
    TestModel::testFunc();

    class Test extends TestModel {
        public function testObg(){
            echo "Esse método é de um método abstract <br />";
        }
    }

    $my_class = new Test();

    $my_class->testObg();
    $my_class->testFunc();
?>