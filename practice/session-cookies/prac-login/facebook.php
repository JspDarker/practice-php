<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
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
                    <?php

                    $user = [
                        ['thanh',111111],
                        ['vinh', 222222],
                        ['trinh',333333]
                    ];
                    function checkUsers($name, $pass, $array) {
                        foreach ($array as $value) {
                            if($value[0] == $name && $value[1] == $pass) {
                                return true;
                            }
                        }
                        return false;
                    }
                    if (isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $pass = $_POST['pass'];

                        if( checkUsers($name, $pass, $user) === false){
                            header('location: login.php');
                        } else {
                            session_start();
                            $_SESSION['checked'] = 'you was login';
                        }

                    }
                    ?>
                    <h3 class="text-center text-primary">You was Login success </h3>
                    <h3 class="text-center text-primary">Welcome to Home Fb </h3>
                    <form action="logout.php" id="formUserId" method="post">
                        <div class="form-group">
                            <button name="submit" id="checkUser" class="btn btn-primary form-control mb-2 font-weight-bold text-danger">Log Out</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>

</body>
</html>
