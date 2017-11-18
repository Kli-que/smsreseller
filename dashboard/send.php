<?php
require_once '../accessories/accessories.php';

$loggedin = "";

if ($_SESSION['loggedin'] == false) {
	header('Location:index');
}

$loggedin = $_SESSION['loggedin'];

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Send BulkSMS Dashboard</title>
	<meta name="description" content="Responsive, Bootstrap, BS4">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" href="../images/logo.png">
	<meta name="apple-mobile-web-app-title" content="Flatkit">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="images/logo.png">
	<link rel="stylesheet" href="../css/animate.css/animate.min.css" type="text/css">
	<link rel="stylesheet" href="../css/glyphicons/glyphicons.css" type="text/css">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="../css/material-design-icons/material-design-icons.css" type="text/css">
	<link rel="stylesheet" href="../css/ionicons/css/ionicons.min.css" type="text/css">
	<link rel="stylesheet" href="../css/simple-line-icons/css/simple-line-icons.css" type="text/css">
	<link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="../css/styles/app.min.css">
	<link rel="stylesheet" href="../css/styles/font.css" type="text/css">
	<link rel="stylesheet" href="../css/styles/custom.css" type="text/css">
</head>
<body style="background-color: aliceblue">

<div class="pace  pace-inactive">
	<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
	  <div class="pace-progress-inner"></div>
	</div>
	<div class="pace-activity"></div>
</div>

<div class="app" id="app">

<div class="white bg b-b">
	<div class="navbar no-radius box-shadow-z1">

		<ul  class="nav navbar-nav">

		<li class="nav-item"><span class="navbar-item text-md">Send Message Dashboard</span></li>
		
			<!-- Send Message button -->

			<li class="nav-item nav-link" style="margin-left: 50px;padding-top: 10px;" id="backtohome">
				<div>
					<button class="btn white" style="border-color: #4BC0C0"><span class="fa fa-home"></span> Back to Home</button>
				</div>
			</li>
		</ul>	

		<ul class="nav navbar-nav pull-right">
			

			<!-- Settings button -->
			<li class="nav-item dropdown" style="padding-top: 10px;">
				<a class="nav-link clear" data-toggle="dropdown" aria-expanded="false">
				<span class="avatar w-32">
				<img src="../images/a3.jpg" class="w-full rounded" alt="...">
				</span>
				</a>
			<div class="dropdown-menu w dropdown-menu-scale pull-right">					
				<a class="dropdown-item" href="settings"><span class="fa fa-cogs"></span> Settings</a> 
				<a class="dropdown-item" href="../resources/logout"><span class="fa fa-power-off"></span> Sign Out (<?php echo $_SESSION['loggedin']; ?>)</a>
			</div>
			</li>

		</ul>

	</div>
</div>

<div class="col-sm-3"></div>

<div class="col-sm-6"><br><br><br><br><br>

<div class="box-body">

	<div id="errors" class="text-center errors"> </div><br>
	
	<form>
		<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 form-control-label">Selected Contacts</label>
			<div class="col-sm-10">
				<input id="specificcontacts" type="text" class="form-control" name="phonenumbers">
			</div>
		</div><br><br>

		<div class="form-group row">
		<label for="inputPassword3" class="col-sm-2 form-control-label">Enter your Message</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="7" id="messagearea"></textarea>
			</div>
		</div><br>


		<button style="background-color: #4BC0C0!important;margin-left: 250px;" type="submit" class="btn btn-lg black p-x-lg" id="sendbulksms">Send Message</button>
	</form>

</div>

</div>

<div class="col-sm-3"></div>

</div>

<script src="../scripts/app.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-3.2.1.js" ></script>
<script type="text/javascript" src="../scripts/custom.min.js" ></script>
</body>
</html>