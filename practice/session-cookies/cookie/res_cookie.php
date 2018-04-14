<?php
/*echo $_COOKIE['user'];
if(count($_COOKIE) > 0){
    echo "checked";
} else {
    echo "empty";
}
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
*/

/*$c_name = 'user';
$c_value = 'Jone Hold Death';
setcookie($c_name, $c_value, time() + 30);
setcookie('thanh','Admin', time() +30);*/
$na = 'thanh';
$us = '123';

if(isset($_POST['submit'])){
    if( $_POST['name'] == $na && $_POST['username'] == $us) {
        echo "oke";
    }
}