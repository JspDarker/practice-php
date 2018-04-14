<?php
include_once "connection.php";// $conn
session_start();
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql= "SELECT * FROM users WHERE user_id ='$username' AND password_u = '$pass'";
    checkQuery($sql, $conn);// die if error
    $res = mysqli_query($conn, $sql);
    if ( !$row = mysqli_fetch_assoc($res)) {
        echo "your failed";
    } else {
//        echo "your WIN";

        $_SESSION['id'] = '{ '.$row['id'] .": ID} Hello COE {$row['first_name']} {$row['last_name']}";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

    }


//    header("location: index.php"); // checkQuery true;
}









