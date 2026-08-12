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
                                    <li class="breadcrumb-item active">Users</li>
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
                                                <h4 class="text-dark"><i class="fa-solid fa-table"></i> USERS</h4>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="addnewuser" class="btn btn-warning btn-sm">ADD NEW USER</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="bootstrap-data-table-export">
                                                <thead>
                                                    <tr>
                                                        <th>Profile</th>
                                                        <th>Username</th>
                                                        <th>First Name</th>
                                                        <th>Middle Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Registered</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(mysqli_num_rows($resultusers) <= 0){
                                                        echo "<td scope='row' colspan='9' class='text-center color-red'>No Records Found</td>";
                                                    }else{
                                                        while($row = mysqli_fetch_array($resultusers)){
                                                    ?>
                                                    <tr onclick="window.location.href='users?useraccount=<?php echo $row['user_ID']; ?>'">
                                                        <td><img src="../assets/images/profiles/<?php echo $row['user_Profile']; ?>" class="profile" alt="" /></td>
                                                        <td><?php echo $row['user_Username']; ?></td>
                                                        <td><?php echo $row['user_FirstName']; ?></td>
                                                        <td><?php echo $row['user_MiddleName']; ?></td>
                                                        <td><?php echo $row['user_LastName']; ?></td>
                                                        <td><?php echo $row['user_Email']; ?></td>
                                                        <td>
                                                            <?php
                                                            switch ($row['user_Role']) {
                                                                case '1':
                                                                    echo "<span class='text-success'>Administrator</span>";
                                                                    break;
                                                                
                                                                default:
                                                                    echo "<span class='text-danger'>Sub Administrator</span>";
                                                                    break;
                                                            }
                                                            ?>  
                                                        </td>
                                                        <td><?php echo date('F d, Y',strtotime($row['user_Registered'])); ?></td>
                                                        <td>
                                                            <?php 
                                                                switch ($row['user_Status']) {
                                                                    case 1:
                                                                        echo "<span class='badge badge-success'>Active</span>";
                                                                        break;
                                                                    
                                                                    default:
                                                                        echo "<span class='badge badge-danger'>Inactive</span>";
                                                                        break;
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><a href="edituser?edituser=<?php echo $row['user_ID'] ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a> <a href="#remove<?php echo $row['user_ID'] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a></td>
                                                    </tr>
                                                    <?php 
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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
    <script src="../assets/js/lib/data-table/datatables2.min.js"></script>
    <script src="../assets/js/lib/data-table/datatables-init.js"></script>
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>