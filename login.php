<?php 
    include "server/index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Univesity of Antique Tibiao Campus - eUAREBS</title>
    <link rel="icon" type="image/x-icon" href="assets/images/icons/ua.png"> <!-- Page Logo -->
    <!-- Styles -->
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .icon img {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }
        .f_arial{
            font-family: arial;
        }
    </style>
</head>
<body>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 m-t-40">
                            <div class="card">
                                <div class="icon text-center">
                                    <img src="assets/images/icons/ua.png">
                                    <h3 class="f_arial text-dark">eUAREBS Application</h3>
                                </div>
                                <div class="basic-form">
                                    <!-- Form Start -->
                                    <?php echo $message; ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control input-default" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control input-default" id="myInput" placeholder="Password">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onclick="myFunction()"> Show Password
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="login" class="btn btn-block btn-danger btn-flat">LOGIN</button>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-center"><a href="#" class="text-default">Forgot Password?</a></p>
                                        </div>
                                        <div class="border-top border-default text-center">
                                            <div class="form-group p-t-20">
                                                <p> Don't have an account? <a href="#" class="text-primary"><u>Create Here</u></a></p>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Form End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Start -->
                    <div class="row justify-content-center">
                        <div class="col-lg-7 border-top">
                            <div class="footer ">
                                <p class="text-center color-dark">Copyright © 2024 — Univesity of Antique Tibiao Campus. Room and Equipment Booking System.<br/>Develope by (Your Group Name)</p>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                </section>
            </div>
        </div>
    </div>
    <!-- Show Password -->
    <script src="assets/js/showpassword.js"></script>
</body>
</html>