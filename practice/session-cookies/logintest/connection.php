<?php
$host = 'localhost';
$user = 'root';
$pass = 'zxcv';
$db_name = 'logintest';
$conn = new mysqli( $host, $user, $pass, $db_name);
if($conn === false){
    die( mysqli_connect_error());
}
function checkQuery($query,$connection) {
    $res = $connection->query($query);
    return ($res)? true:  die ("ERROR: ". "<br>" . $connection->error);
}