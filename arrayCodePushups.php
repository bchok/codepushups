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
?>