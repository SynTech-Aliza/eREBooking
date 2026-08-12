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
        /* The switch - the box around the slider */
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
          margin-left: 30px;
        }

        /* Hide default HTML checkbox */
        .switch input {
          opacity: 0;
          width: 0;
          height: 0;
        }

        /* The slider */
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0px;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }

        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }

        input:checked + .slider {
          background-color: #212529;
        }

        input:focus + .slider {
          box-shadow: 0 0 1px #5873fe;
        }

        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }

        .slider.round:before {
          border-radius: 50%;
        }

        .form-group .input-text{
         padding: 10000px 0010px;
        }

        .required{
          color: #e7b63a;
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
                                    <li class="breadcrumb-item">Users</li>
                                    <li class="breadcrumb-item active">Edit User</li>
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
                                                <h4 class="text-dark"><i class="fa-solid fa-user"></i> EDIT USER</h4>
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
                                                                    <input type="text" name="username" value="<?php echo $username ?>" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">First Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="firstname" value="<?php echo $firstname ?>" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Middle Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="middlename" value="<?php echo $middlename ?>" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Last Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="lastname" value="<?php echo $lastname ?>" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Email</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" name="email" value="<?php echo $useremail ?>" class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Password</label>
                                                                <div class="col-sm-8">
                                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#password">Set New Password</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">User Role <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <select name="userrole" style="font-size: 12px; height: 30px; line-height: 1.5;" class="form-control">
                                                                        <option value="<?php echo $userrole ?>">
                                                                            <?php switch ($userrole) {
                                                                                case '1':
                                                                                    echo "Administrator";
                                                                                    break;
                                                                                
                                                                                default:
                                                                                    echo "Sub Administrator";
                                                                                    break;
                                                                                } ?>
                                                                        </option>
                                                                        <option value="1">Administrator</option>
                                                                        <option value="2">Sub Administrator</option>
                                                                        <option value="3">Client</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <label class="col-sm-4">Status</label>
                                                                <div class="col-sm-8">
                                                                    <label style="position: absolute;margin-top: 10px;">No</label>
                                                                    <label class="switch">
                                                                        <?php 
                                                                        if($userstatus == 1){
                                                                            echo "<input type='checkbox' class='form-control input-text' name='status' checked>";
                                                                        }else{
                                                                            echo "<input type='checkbox' class='form-control input-text' name='status'>";
                                                                        } ?>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                    <label style="position: absolute;margin-top: 10px; margin-left: 10px;">Yes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" name="updateuser">Update</button>
                                                        <a href="users" class="btn btn-danger">Cancel</a>
                                                    </form>
                                                    <!-- Form End -->
                                                    <!-- Form Password Start -->
                                                    <div class="modal fade none-border" id="password">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">
                                                                        <strong>Set New Password</strong>
                                                                    </h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <input type="text" name="password" class="form-control input-sm" value="<?php echo randomPassword()?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                             <button type="submit" name="updatepassword" class="btn btn-primary waves-effect waves-light save-category">Update</button>
                                                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Password End -->
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