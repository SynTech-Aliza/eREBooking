<?php 
// Database Connection
    include "../server/dashboardmanagement.php";
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
									<li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Home</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<section id="main-content">
					<!-- Footer Start -->
					<?php include "footer.php" ?>
					<!-- Footer End -->	
				</section>
			</div>
		</div>
	</div>
	<!-- Content End -->
	<!-- Scripts -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>