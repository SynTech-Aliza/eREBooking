<?php 
// Database Connection
    include "../server/useraccountmanagement.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Univesity of Antique Tibiao Campus - eUAREBS</title>
	<link rel="icon" type="image/x-icon" href="../assets/images/icons/ua.png"> <!-- Page Logo -->
	<!-- Styles -->
    <link href="../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../assets/icons/fontawesome 6.3.0/css/all.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../assets/css/lib/menubar/newside.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/helper.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style type="text/css">
		/*Profile Header*/
		  .profile{
		    width: 30px; 
		    height: 30px;
		    border-radius: 100%;
		  }
    </style>
</head>
<body>
	<!-- Menu Start -->
	<?php include "menu.php" ?>
	<!-- Menu End -->

	<!-- Header Start -->
	<?php include "header.php" ?>
	<!-- Header End -->

	<!-- Content Start -->
	<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                    </div>
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add New User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="main-content">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <h4 class="text-dark"><i class="fa-solid fa-user"></i> ADD NEW USER</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card-body">
                                            <div class="col-lg-5">
                                                <div class="basic-form">
                                                    <!-- Form Start -->
                                                    <?php 
                                                        echo $message;
                                                    ?>
                                                    <form class="form-horizontal" method="post">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <label class="col-sm-4">Username</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="username" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">First Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="firstname" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Middle Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="middlename" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Last Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="lastname" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Email</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" name="email" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Password</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="password" value="<?php echo randomPassword()?>" id="password_generator" class="form-control input-sm">
                                                                    <button type="button" class="btn btn-warning btn-sm m-t-15" value ='generate' onclick='document.getElementById("password_generator").value = Password.generate(10)'>Generate Password</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">User Role <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <select name="userrole" style="font-size: 12px; height: 30px; line-height: 1.5;" class="form-control">
                                                                        <option disabled selected>Please Choose</option>
                                                                        <option value="1">Administrator</option>
                                                                        <option value="2">Sub Administrator</option>
                                                                        <option value="3">Client</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" name="adduser">Add New User</button>
                                                        <a href="users" class="btn btn-danger">Cancel</a>
                                                    </form>
                                                    <!-- Form End -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Footer Start -->
                    <?php include "footer.php" ?>
                    <!-- Footer End --> 
                </section>
            </div>
        </div>
    </div>
	<!-- Content End -->
	<!-- Scripts -->
    <script src="../assets/js/lib/passwordgenerator/password-generator.js"></script>
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>