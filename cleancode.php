<?php
session_start();
require_once '../accessories/functions.php';

$loggedin = "";

if ($_SESSION['loggedin'] == false) {
	header('Location:index');
}

$loggedin = $_SESSION['loggedin'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manage Contacts and Groups Dashboard</title>
	<meta content="Responsive, Bootstrap, BS4" name="description">
	<meta content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black-translucent" name="apple-mobile-web-app-status-barstyle">
	<link href="images/logo.png" rel="apple-touch-icon">
	<meta content="Flatkit" name="apple-mobile-web-app-title">
	<meta content="yes" name="mobile-web-app-capable">
	<link href="images/logo.png" rel="shortcut icon" sizes="196x196">
	<link href="css/animate.css/animate.min.css" rel="stylesheet" type="text/css">
	<link href="css/glyphicons/glyphicons.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/material-design-icons/material-design-icons.css" rel="stylesheet" type="text/css">
	<link href="css/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link href="css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/styles/app.min.css" rel="stylesheet">
	<link href="css/styles/font.css" rel="stylesheet" type="text/css">
	<link href="css/styles/custom.css" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="white bg b-b">
		<div class="navbar no-radius box-shadow-z1">

			<ul  class="nav navbar-nav">

			<li class="nav-item"><span class="navbar-item text-md">Send Message Dashboard</span></li>
			
				<!-- Send Message button -->

				<li class="nav-item nav-link" style="margin-left: 50px;" id="sendmsg">
					<div>
						<button class="btn white" style="border-color: #4BC0C0"><span class="fa fa-home"></span> Back to Home</button>
					</div>
				</li>
			</ul>	

			<ul class="nav navbar-nav pull-right">
				

				<!-- Settings button -->
				<li class="nav-item dropdown">
					<a class="nav-link clear" data-toggle="dropdown" aria-expanded="false">
					<span class="avatar w-32">
					<img src="images/a3.jpg" class="w-full rounded" alt="...">
					</span>
					</a>
				<div class="dropdown-menu w dropdown-menu-scale pull-right">					
					<a class="dropdown-item" href="settings"><span class="fa fa-cogs"></span> Settings</a> 
					<a class="dropdown-item" href="logout"><span class="fa fa-power-off"></span> Sign Out</a>
				</div>
				</li>

			</ul>

		</div>
	</div>
	<script src="scripts/app.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-3.2.1.js" ></script>
	<script type="text/javascript" src="scripts/custom.min.js" ></script>
</body>
</html>