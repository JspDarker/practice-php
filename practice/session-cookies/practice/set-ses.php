<?php
session_start();
$_SESSION =[
    'one'=> [
        'name'=> 'Admin',
        'phone' => '0192019201',
        'city' =>'HCM City'
    ]
];
echo "<pre>";
print_r($_SESSION['one']);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start session</title>
</head>
<body>
<button><a style="text-decoration: none" href="get-ses.php">Click me</a></button>
</body>
</html>