<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/04/2018
 * Time: 18:36 CH
 */
session_start();
$_SESSION['fun_check'] = '<?php 
    function checkNumber($number) {
        return ($number % 2 == 0 )? "Even number": "Odd Number";
    } 
?>';
eval("?>" .$_SESSION['fun_check']);
echo checkNumber(2);

