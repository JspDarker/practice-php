<?php
session_start();
if(isset($_SESSION['checked'])){
    header('location: facebook.php');
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN Facebook</title>
    <link rel="stylesheet" href="../../../include/bootstrap.css">
    <link rel="stylesheet" href="../../../include/jquery.js">
    <link rel="stylesheet" href="../../../include/bootstrap.js">
    <style>
        .wrapper{
            border-radius: 0 15px;
            background: 	#ddd;
            padding: 15px;
        }
    </style>
</head>
<body>

<section id="require-login">
    <div class="row">
        <div class="col-sm-4">
            <div class="container">
                <div class="wrapper">
                    <h3 class="text-center text-primary">LogIn Facebook</h3>
                    <form action="facebook.php" id="formUserId" method="post">
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">FullName</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter name...">
                        </div>
                        <div class="form-group">
                            <label for="userId" class="font-weight-bold">Password</label>
                            <input class="form-control" type="password" name="pass" id="userId" placeholder="password...">
                        </div>
                        <div class="form-group">
                            <button name="submit" id="checkUser" class="btn btn-primary form-control mb-2 font-weight-bold text-danger">Check User</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>
</body>
</html>
