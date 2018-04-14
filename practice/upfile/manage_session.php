<?php
session_start();
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $id = $_POST['userId'];
    $checked = $_POST['checkMe'];
    if($_SESSION['name'] === $name && $_SESSION['id'] === $id) {
        $res = "Welcome Admin $name , id of Admin as $id";
    } else {
        header("location: index.html");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>You can go Home</title>
</head>
<body>
    <h2><?=$res?></h2>
    <button><a href="index.php">Back Home</a></button>
</body>
</html>
