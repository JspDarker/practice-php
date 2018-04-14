<?php
    include_once "connection.php";// $mysqli
?>
    <a href="index.php">Sign Up Again</a><br>
<?php

if (isset($_POST['submit'])){
    $first = $_POST['f_name'];
    $last = $_POST['l_name'];
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql_insert = "INSERT INTO `users` (`first_name`, `last_name`, `user_ids`, `password_u`)
                   VALUES ('$first', '$last', '$username', '$pass')";
    checkQuery($sql_insert, $mysqli);// die if error
} else {
    header("location: index.php");
}








