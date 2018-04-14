<?php
/*** tao chuoi random length 30 character {number character $xx } */

$md_random = "1234567890#$%^&*asjqdeuykiwurn";
//echo strlen($md_random); // 30 characters
function subtext($str) {
    $res =[];// token is md_5
    for( $i = 0; $i < strlen($str); $i++) {
        $res[] = substr($str,$i,1);
    }
    return $res;
}
// sort random => return string new
function shuffleArray($array) {
    shuffle($array);
    return implode('',$array);
}

// create new string
function get_md_random($strings) {

    $array_md = subtext($strings);

    $newStrings = shuffleArray($array_md);

    echo $newStrings;
}
//get_md_random($md_random);

// do something;
/*  GET MESSAGE ERROR ===================================================
    function divs( $a, $b){
        if( $b == 0) throw new Exception('Can not execute');
        return $a/$b;
    }

    try{
        echo divs(3,0);
    }catch(Exception $e){
        $e->getMessage();
    }

GET MESSAGE ERROR ===================================================*/
































