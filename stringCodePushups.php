<?php

    function chunkSplit(){
        //format $data using RFC 2045 semantics
        $new_string = chunk_split(base64_encode($data));
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
    
    function htmlSpecialChars(){
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
        
?>