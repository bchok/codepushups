<?php
    function arrayKeys(){
        $array = array(0 => 100, "color" => "red");
        print_r(array_keys($array));

        $array = array("blue", "red", "green", "blue", "blue");
        print_r(array_keys($array, "blue"));

        $array = array("color" => array("blue", "red", "green"), "size" => array("small", "medium", "large"));
        print_r(array_keys($array));
    }
    
    function arraySearch(){
        $array = array(0=> 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
        $key = array_search('green', $array);
        $key = array_search('red', $array);
    }
    
    function arrayWalk(){
            $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

            function test_alter(&$item1, $key, $prefix){
                $item1 = "$prefix: $item1";
            }

            function test_print($item2, $key){
                echo "$key. $item2<br />\n";
            }

            echo "Before ...:\n";
            array_walk($fruits, 'test_print');

            array_walk($fruits, 'test_alter', 'fruit');
            echo "... and after:\n";

            array_walk($fruits, 'test_print');
   } 
   
   function arrayPop(){
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_pop($stack);
        
        print_r($stack);
   }
?>