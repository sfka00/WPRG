<?php

function is_Pangram($text){
    $text = strtolower($text);

    $temp = array();
    for($i=0;$i<strlen($text);$i++){
        $char = $text[$i];
        if($char > chr(96) && $char < chr(123)){
            $temp[$char] = $text[$i];
        }
    }
    $ile = count($temp);
    if($ile==26){
        echo "'$text' -  jest pangramem ";
    }
    else{
        echo "'$text' - nie jest pangramem ";
    }
}

is_Pangram("The quick brown fox jumps over the lazy dog. ");
is_Pangram("FHSDJKFSDHJKFSDDSFSDFDSFSDHGFHHFGHFGHFGGFADJKASHDJASKDASHJK");
?>