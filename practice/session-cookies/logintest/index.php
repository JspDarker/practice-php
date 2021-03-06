
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login connect to Database</title>
    <link rel="stylesheet" href="../../../include/bootstrap.css">
    <link rel="shortcut icon" href="../../../include/font-logo/logo/icon.png">



</head>
<body>
<section id="form-login">
    <div class="row">
        <div class="col-sm-4">
            <div class="container bg-light">
                <div class="wrapper ">
                    <h3 class="text-center text-primary">{LOGIN}</h3>
                    <form action="login.php" id="login_form" method="post">

                        <div class="form-group">
                            <label for="userName" class="font-weight-bold">Username</label>
                            <input class="form-control" type="text" name="username"  placeholder="Username...">
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input class="form-control" type="password" name="password"  placeholder="Password...">
                        </div>

                        <div class="form-group">
                            <button name="submit" class="btn btn-primary form-control mb-2 font-weight-bold text-danger">Log In</button>
                        </div>
                    </form>
                    <?php
                    session_start();
                    if( isset($_SESSION['id'])):
                    ?>
                    <div class="form-group">
                        <label for="password" class="font-weight-bold"><?=$_SESSION['id'] ;?></label>
                        <button class="btn form-control mb-2 font-weight-bold text-danger"><a href="log-out.php">Out_log_out</a></button>

                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="container bg-light">
                <div class="wrapper ">
                    <h3 class="text-center text-primary">SIGN UP</h3>
                    <form action="sign_up.php" id="formUserId" method="post">
                        <div class="form-group">
                            <label for="first_name" class="font-weight-bold">FirstName</label>
                            <input class="form-control" type="text" name="f_name" id="first_name" placeholder="Enter first...">
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="font-weight-bold">LastName</label>
                            <input class="form-control" type="text" name="l_name" id="last_name" placeholder="Enter last...">
                        </div>
                        <div class="form-group">
                            <label for="userName" class="font-weight-bold">Username</label>
                            <input class="form-control" type="text" name="username" id="userName" placeholder="Username...">
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password...">
                        </div>

                        <div class="form-group">
                            <button name="submit" id="checkUser" class="btn btn-primary form-control mb-2 font-weight-bold text-danger">Sign Up</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>





<script src="../../../include/jquery.js"></script>
<script src="../../../include/bootstrap.js"></script>
<script src="../../../include/handlebars.js"></script>
<script src="../../../include/jquery.validate.min.js"></script>
<script src="../../../include/additional-methods.min.js"></script>
<script src="script_login_video.js"></script>

</body>
</html>