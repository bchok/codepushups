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
	echo $key;
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
   
   function arrayPush(){
       $stack = array("orange", "banana");
       array_push($stack, "apple", "raspberry");
       
       print_r($stack);
   }
   
   function arrayCombine(){
       $a = array('green', 'red', 'yellow');
       $b = array('avacado', 'apple', 'banana');
       $c = array_combine($a, $b);
       
       print_r($c);
   }
   
   function fgetCSVTEST($file){
       $row = 1;
       if (($handle = fopen("test.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                for ($c=0; $c < $num; $c++) {
                    echo $data[$c] . "<br />\n";
                }
            }
            fclose($handle);
        }
   }
   
   function arrayImplode(){
       $array = array('lastname', 'email', 'phone');
       $comma_separated = implode(",", $array);
       
       echo $comma_separated;
       
       var_dump(implode('hello', array()));
   }
   
   function arrayExplode(){
       $pizza = "piece1 piece2 piece3 piece4 piece 5 piece6";
       $pieces = explode(" ", $pizza);
       echo $pieces[0];
       echo $pieces[1];
   }
   
   function arrayIntersect(){
       $array1 = array("a" => "green", "red", "blue");
       $array2 = array("b" => "green", "yellow", "red");
       $result = array_intersect($array1, $array2);
       print_r($result);
   }
   
   function arrayDiff(){
       $array1 = array("a" => "green", "red", "blue");
       $array2 = array("b" => "green", "yellow", "red");
       $result = array_diff($array1, $array2);
       
       print_r($result);
   }
   
   function arrayChunk(){
       $input_array = array('a','b','c','d','e');
       print_r(array_chunk($input_array, 2));
       print_r(array_chunk($input_array, 2, true));
   }
   
   function arrayCountValues(){
       $array = array(1, "hello", 1, "world", "hello");
       print_r(array_count_values($array));
   }
   
   function arrayFillKeys(){
       $keys = array('foo', 5, 10, 'bar');
       $a = array_fill_keys($keys, 'banana');
       print_r($a);
   }
   
   function arrayRand(){
       $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
       $rand_keys = array_rand($input, 2);
       echo $input[$rand_keys[0]] . "\n";
       echo $input[$rand_keys[1]] . "\n";
   }

echo 'this is array_keys<br>';
echo arrayKeys();
echo '<br><br>';

echo 'this is array_search<br>';
echo arraySearch();
echo '<br><br>';

echo 'this is array_walk<br>';
echo arrayWalk();
echo '<br><br>';

echo 'this is array_pop<br>';
echo arrayPop();
echo '<br><br>';

echo 'this is array_push<br>';
arrayChunk();
echo '<br><br>';

echo 'this is array_combine<br>';
echo arrayCombine();
echo '<br><br>';

echo 'this is array_keys<br>';
echo arrayKeys();
echo '<br><br>';

echo 'this is fgetcsv<br>';
echo fgetCSVTEST("test.csv");
echo '<br><br>';

echo 'this is implode<br>';
echo arrayImplode();
echo '<br><br>';

echo 'this is explode<br>';
echo arrayExplode();
echo '<br><br>';

echo 'this is array_intersect<br>';
echo arrayIntersect();
echo '<br><br>';

echo 'this is array_diff<br>';
echo arrayDiff();
echo '<br><br>';

echo 'this is array_chunk<br>';
echo arrayPush();
echo '<br><br>';

echo 'this is array_count_values<br>';
echo arrayCountValues();
echo '<br><br>';

echo 'this is array_fill_keys<br>';
echo arrayFillKeys();
echo '<br><br>';

echo 'this is array_rand<br>';
echo arrayRand();
echo '<br><br>';


   
?>
