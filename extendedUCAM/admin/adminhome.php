<?php
// session_start();
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: ../loginform/index.html');
// 	exit;
// }
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="navbar.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	    <title>Admin</title>
	</head>
	<style type="text/css">
	    .nav-item {
	    font-weight: bold;
	}
	
	.nav-item > a:hover, .nav-item > a:active {
	    font-family: Georgia;
	}
	</style>
	<body class="overflow-hidden" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

	    <div class="row">

	        <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;">
	            <div class="container-fluid ">

	                <div>
	                    <a class="navbar-brand ms-2" href="https://ucam.uiu.ac.bd">
	                        <img src="../lib/images/UIU.png" alt="" width="50" height="30">
	                    </a>
	                    <a class="" href="https://ucam.uiu.ac.bd"
	                        style="text-decoration: none;color: black;font-weight: bolder;">Home</a>

	                </div>

	                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                    <ul class="navbar-nav  position-absolute bottom-0 end-0 mt-2 me-3 mb-3 ">
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Registration</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Make-up</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Counselling</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Co-ordinator</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="electiveadmin.php">Elective
	                                Course</a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>

	    </div>

	    <h1 class="shadow-lg p-3 mb-5 bg-body rounded text-center" style="margin: 220px;">Welcome to admin portal!</h1>

	<!--end of Navigation bar-->
	<a href="../Admin_login_registration/logout.php">logout</a>

	</body>
	</html>