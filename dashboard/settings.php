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
	<title>Settings Dashboard</title>
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
	<link href="../css/styles/custom.css" rel="stylesheet" type="text/css">
</head>

<body class="  pace-done" ui-class="">

<div class="pace  pace-inactive">
	<div class="pace-progress" data-progress-text="100%" data-progress="99"
		 style="transform: translate3d(100%, 0px, 0px);">
		<div class="pace-progress-inner"></div>
	</div>
	<div class="pace-activity"></div>
</div>
<div class="app" id="app">

<div class="white bg b-b">
	<div class="navbar no-radius box-shadow-z1">

		<ul  class="nav navbar-nav">

		<li class="nav-item"><span class="navbar-item text-md">Settings</span></li>
		
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

	
</div>
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
	
	<div class="app-body">
		<div class="row-col">
			<div class="col-sm-3 col-lg-2 b-r">
				<div class="p-y">
					<div class="nav-active-border left b-primary">
						<ul class="nav nav-sm">
							<li class="nav-item"><a class="nav-link block active" href="#" data-toggle="tab"
													data-target="#tab-1">Security</a></li>

							<li class="nav-item"><a class="nav-link block" href="#" data-toggle="tab"
													data-target="#tab-2">Change Phone Number</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-9 col-lg-10 light bg">
				<div class="tab-content pos-rlt">
					<div class="tab-pane active" id="tab-1">
						<div class="p-a-md b-b _600">Change Password</div>
						<div class="p-a-md">
							<div class="clearfix m-b-lg">
								<form role="form" class="col-md-6 p-a-0">

									<div id="changepasserrors" style="color: red;"></div><br>

									<div class="form-group"><label>Old Password</label>
										<input type="password" id="oldpassword" class="form-control">
									</div>

									<div class="form-group"><label>New Password</label>
										<input type="password" id="newpassword" class="form-control">
									</div>

									<div class="form-group"><label>New Password Again</label>
										<input type="password" id="newpassconfirm" class="form-control">
									</div>

									<button type="submit" id="changepassword" class="btn btn-info m-t pull-right">Change Password</button>
								</form>
							</div>
							<p><strong>Delete account?</strong></p>
							<button type="submit" class="btn btn-danger m-t" data-toggle="modal" data-target="#modal">
								Delete Account
							</button>
						</div>
					</div>


					<div class="tab-pane" id="tab-2">
						<div class="p-a-md b-b _600">Change Phone Number</div>
						<div class="p-a-md">
							<div class="clearfix m-b-lg">
								<form role="form" class="col-md-6 p-a-0">

									<div class="form-group"><label>New Phone Number</label>
									<input type="password" class="form-control">
									</div>

									<div class="form-group"><label>Your Password</label>
									<input type="password" class="form-control">
									</div>
									<button type="submit" class="btn btn-info m-t">Change Number</button>

								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="modal" class="modal fade animate black-overlay" data-backdrop="false">
			<div class="row-col h-v">
				<div class="row-cell v-m">
					<div class="modal-dialog modal-sm">
						<div class="modal-content flip-y">
							<div class="modal-body text-center"><p class="p-y m-t"><i
								class="fa fa-remove text-warning fa-3x"></i></p>
								<p>Are you sure to delete your account?</p></div>
							<div class="modal-footer">
								<button type="button" class="btn white p-x-md" data-dismiss="modal">No</button>
								<button type="button" id="yesdeleteaccount" class="btn btn-danger p-x-md" data-dismiss="modal">Yes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="switcher"></div>
</div>
<script src="../scripts/app.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-3.2.1.js" ></script>
<script type="text/javascript" src="../scripts/custom.min.js" ></script>
</body>
</html>
