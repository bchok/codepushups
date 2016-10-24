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
?>