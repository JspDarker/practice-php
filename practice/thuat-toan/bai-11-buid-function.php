
<?php
/**
 * Input = intNumber -> res = soNT nho hon
 * 1. so nguyen to bat dau tu 2 | 1 k la so nguyen to
 * 1.1 xay dung ham test true false soNT
 * @param $number
 * @return bool
 */
function isNguyenTo($number) {
    $count = 0;
    for( $i = 1; $i <= $number; $i++){
        if( $number % $i == 0){
            $count++;
        }
    }
    return ($count == 2)? true : false;
}
/***
 *  nhap 3 -> 3 2
 *  nhap 4 -> 3 2
 *  nhap 5 -> 5 3 2
 *  nhap 8 -> 7 5 3 2
 *  nhap 11 -> 11 7 5 3 2
**/
function getsNT($n) {
    $res = '';
    for ($i = 2; $i <= $n; $i++) {
        if( isNguyenTo($i)){
            $res .= $i.' ';
        }
    }
    return $res;
}

/** ================================================================================ **/
/** nhap intStart = a && intEnd = b  tinh tong a->b, tich tu a->b, tong chan, tong le**/
/** $a $b => $a < $b */

/** 1 5 = 1 2 3 4 5 */
function inputInt( $a, $b) {
    if( !is_numeric($a) || !is_numeric($b)) {
        echo "input required numeric";
        return false;
    }

    $res = [];
    if( $a <= $b) {
        for( $i = $a; $i <= $b; $i++) {
            $res[] =$i;
        }
    } else {
        for( $i = $b; $i <= $a; $i++){
            $res[] =$i;
        }
    }
    return $res;
}
function phepNhan($array) {
    $res = 1;
    for( $i = 0; $i < count($array); $i++){
        $res *=$array[$i];
    }
    return $res;
}

/**
 * @param $a
 * @return mixed
 */
function calSum($a){
    $res = 0;
    return $res +=$a;
}


function addEven($array) {
    $res = 0;
    foreach ($array as $value){
        if( $value % 2 == 0){
            $res += calSum($value);
        }
    }
    return $res;
}

function addOdd( $array) {
    $res= 0;
    foreach ( $array as $value){
        if( $value % 2 != 0) {
            $res += calSum($value);
        }
    }
    return $res;
}


function getResult($numberA, $numberB){
    if(inputInt( $numberA, $numberB) === false){
        return;
    }

    $res = inputInt($numberA,$numberB);

    // get [value] from function $numberA -> $numberB
    $sumInt = array_sum($res);
    $add_even = addEven($res);
    $add_odd = addOdd($res);
    $phep_nhan = phepNhan($res);

    echo "<p>\$a = $numberA  && \$b = $numberB</p>";
    echo "<p>Tong cac so tu a - b: $sumInt</p>";
    echo "<p>Nhan cac so tu a - b: $phep_nhan</p>";
    echo "<p>Tong chan cac so tu a - b: $add_even</p>";
    echo "<p>Tong le so tu a - b: $add_odd</p>";
}
getResult(1,3);




