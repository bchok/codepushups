<?php

    function chunkSplit(){
        //format $data using RFC 2045 semantics
        $data = "hello";
        $new_string = chunk_split(base64_encode($data));
        echo $new_string;
    }

    function countChars(){
        $data = "Two Ts and one F.";
        
        foreach (count_chars($data, 1) as $i => $val){
            echo "There were $val instance(s) of \"", chr($i), "\" in the string.\n";
        }
    }
    
    function stringExplode(){
        $pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo $pieces[0];
        echo $pieces[1];
    }
    
    function stringHTMLEntities(){
        $str = "A 'quote' is <b>bold</b>";
        echo htmlentities($str);
    }
    
    function htmlSpecialCharsEx(){
        $new = htmlspecialchars("<a href='test'> TEST</a>", ENT_QUOTES);
        echo $new;
    }
    
    function stringImplode(){
        $array = array('lastname', 'email', 'phone');
        $comma_separated = implode(",", $array);
        
        echo $comma_separated;//lastname, email, phone
    }
    
    function stringLcFirst(){
        $foo = 'Helloworld';
        $foo = lcfirst($foo); //helloWorld
        
        $bar = 'HELLO WORLD!';
        $bar = lcfirst($bar); //hELLO WORLD!
        $bar = lcfirst(strtoupper($bar)); // hELLO WORLD!
    }
    
    function stringLTrim(){
        $text = "\t\tThese are a few words :)...";
        $binary = "\x09Example string\x0A";
        $hello = "Hello World";
        var_dump($text, $binary, $hello);
        
        print "\n";
        
        $trimmed = ltrim($text);
        var_dump($trimmed);
        
        $trimmed = ltrim($text, "\t.");
        var_dump($trimmed);
        
        $trimmed = ltrim($hello, "Hdle");
        var_dump($trimmed);
        
        $clean = ltrim($binary, "\x00..\x1F");
        var_dump($clean);
        
    }
    
    function stringMD5(){
        $str = 'apple';
        if(md5($str) === '1f3870be274f6c49b3e31a0c6728957f'){
            echo "Would you like a green or red apple?";
        }
    }
    
    function stringRTrim(){
        $text = "\t\tThese are a few words :)...";
        $binary = "\x09Example string\x0A";
        $hello = "Hello World";
        var_dump($text, $binary, $hello);
        
        print "\n";
        
        $trimmed = rtrim($text);
        var_dump($trimmed);
        
        $trimmed = rtrim($text, "\t.");
        var_dump($trimmed);
        
        $trimmed = rtrim($hello, "Hdle");
        var_dump($trimmed);
        
        $clean = rtrim($binary, "\x00..\x1F");
        var_dump($clean);
        
    }
    
    function strReplace(){
        // Provides: <body text='black'>
        $bodytag = str_replace("%body%", "black", "<body text='%body%'>");

        // Provides: Hll Wrld f PHP
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

        // Provides: You should eat pizza, beer, and ice cream every day
        $phrase  = "You should eat fruits, vegetables, and fiber every day.";
        $healthy = array("fruits", "vegetables", "fiber");
        $yummy   = array("pizza", "beer", "ice cream");

        $newphrase = str_replace($healthy, $yummy, $phrase);

        // Provides: 2
        $str = str_replace("ll", "", "good golly miss molly!", $count);
        echo $count;
    }
    
    function strSplit(){
        $str = "Hello Friend";
        
        $arr1 = str_split($str);
        $arr2 = str_split($str, 3);
        
        print_r($arr1);
        print_r($arr2);
    }
    
    function stripPos(){
        $findme = 'a';
        $mystring1 = 'xyz';
        $mystring2 = 'ABC';

        $pos1 = stripos($mystring1, $findme);
        $pos2 = stripos($mystring2, $findme);

        // Nope, 'a' is certainly not in 'xyz'
        if ($pos1 === false) {
            echo "The string '$findme' was not found in the string '$mystring1'";
        }

        // Note our use of ===.  Simply == would not work as expected
        // because the position of 'a' is the 0th (first) character.
        if ($pos2 !== false) {
            echo "We found '$findme' in '$mystring2' at position $pos2";
        }
    }
    
    function stringToLower(){
        $str = "Mary Had A Little Lamb and She LOVED It So";
        $str = strtolower($str);
        echo $str; //prints mary had a little lamb and she loved it so
    }
    
    function stringTrim(){
        $text = "\t\tThese are a few words :)...";
        $binary = "\x09Example string\x0A";
        $hello = "Hello World";
        var_dump($text, $binary, $hello);
        
        print "\n";
        
        $trimmed = trim($text);
        var_dump($trimmed);
        
        $trimmed = trim($text, "\t.");
        var_dump($trimmed);
        
        $trimmed = trim($hello, "Hdle");
        var_dump($trimmed);
        
        $clean = trim($binary, "\x00..\x1F");
        var_dump($clean);
        
    }
    function addSlashesEx(){
        $str = "Is your name O'Reilly?";

        // Outputs: Is your name O\'Reilly?
        echo addslashes($str);
    }

    function chrEx(){
        $str = "The string ends in escape: ";
        $str .= chr(27); /* add an escape character at the end of $str */

        /* Often this is more useful */

        $str = sprintf("The string ends in escape: %c", 27);
        echo $str;
    }
    function echoEx(){
        $foo = "foobar";
        $bar = "barbaz";

        echo "foo is $foo";//foo is foobar
    }
    function htmlSpecCharsDecode(){
        $str = "<p>this -&gt; &quot;</p>\n";

        echo htmlspecialchars_decode($str);

        // note that here the quotes aren't converted
        echo htmlspecialchars_decode($str, ENT_NOQUOTES);
    }
    function stripTags(){
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        echo strip_tags($text);
        echo "\n";

        // Allow <p> and <a>
        echo strip_tags($text, '<p><a>');
    }
    function strPosEx(){
        $mystring = 'abc';
        $findme   = 'a';
        $pos = strpos($mystring, $findme);

        // Note our use of ===.  Simply == would not work as expected
        // because the position of 'a' was the 0th (first) character.
        if ($pos === false) {
            echo "The string '$findme' was not found in the string '$mystring'";
        } else {
            echo "The string '$findme' was found in the string '$mystring'";
            echo " and exists at position $pos";
        }
    }
    function strLenEx(){
        $str = 'abcdef';
        echo strlen($str); // 6

        $str = ' ab cd ';
        echo strlen($str); // 7
    }
echo 'this is addslashes<br>';
echo addSlashesEx();
echo '<br><br>';

echo 'this is chr<br>';
echo chrEx();
echo '<br><br>';
        
echo 'this is chunk split<br>';
echo chunkSplit();
echo '<br><br>';
        
echo 'this is count_cars<br>';
echo countChars();
echo '<br><br>';

echo 'this is echo<br>';
echo echoEx();
echo '<br><br>';

echo 'this is explode<br>';
echo stringExplode();
echo '<br><br>';

echo 'this is htmlentities<br>';
echo stringHTMLEntities();
echo '<br><br>';

echo 'this is htmlspeciachars_decode<br>';
echo htmlSpecCharsDecode();
echo '<br><br>';

echo 'this is implode<br>';
echo stringImplode();
echo '<br><br>';

echo 'this is md5<br>';
echo stringMD5();
echo '<br><br>';

echo 'this is rtrim<br>';
echo stringRTrim();
echo '<br><br>';

echo 'this is str_getcsv<br>';
echo 'there was no example for str_getcsv on php manual';
echo '<br><br>';

echo 'this is strip_tags<br>';
echo stripTags();
echo '<br><br>';

echo 'this is strpos<br>';
echo strPosEx();
echo '<br><br>';

echo 'this is strlen<br>';
echo strLenEx();




  
        
?>
