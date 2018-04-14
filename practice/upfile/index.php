<?php
session_start();
$_SESSION = [
        'name' => "thanh",
        'id' =>'thanh123'
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to::UserID</title>
    <link rel="stylesheet" href="../../include/bootstrap.css">
    <link rel="stylesheet" href="../../include/font-logo/fontawesome.min.css">
    <link rel="shortcut icon" href="../../include/font-logo/logo/icon.png">
    <style>
        .wrapper{
            border-radius: 0 15px;
            /*background: 	#ddd;*/
            padding: 15px;
        }
    </style>
</head>
<body>

<section id="require-login">
    <div class="row">
        <div class="col-sm-4">
            <div class="container">
                <div class="wrapper bg-warning">
                    <h3 class="text-center text-primary">Who Are You?</h3>
                    <form action="manage_session.php" id="formUserId" method="post">
                        <div class="form-group">
                            <label for="name" class="font-weight-bold">FullName</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name...">
                        </div>
                        <div class="form-group">
                            <label for="userId" class="font-weight-bold">UserID</label>
                            <input class="form-control" type="password" name="userId" id="userId" placeholder="Your ID...">
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input name="checkMe" type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
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







<script src="../../include/jquery.js"></script>
<script src="../../include/bootstrap.js"></script>
<script src="../../include/handlebars.js"></script>
<script src="../../include/jquery.validate.min.js"></script>
<script src="../../include/additional-methods.min.js"></script>
<script src="main.js"></script>
</body>
</html>