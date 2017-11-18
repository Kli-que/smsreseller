<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Reset Password Dashboard</title>
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
<body class="pace-done" style="background-color: aliceblue">

<div class="pace  pace-inactive">
	<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
	  <div class="pace-progress-inner"></div>
	</div>
	<div class="pace-activity"></div>
</div>

<div class="app" id="app">

	<div class="b-t">
		<div class="center-block w-xxl w-auto-xs p-y-md text-center"><br><br><br><br>
			<div class="p-a-md">

			<div>
				<h4>Forgot your password?</h4>
				<p class="text-muted m-y">Please enter the confirmation<br>code sent to your phone number.</p>
			</div>

			<!--the section to display the errors-->
			<div id="errors" style="color: red;"></div><br>

			<form>
				<div class="form-group">
					<input type="number" id="confirmcode" placeholder="Confirmation Code" class="form-control">
				</div>

				<button type="submit" id="reset" style="background-color: #4BC0C0!important;" class="btn black btn-block p-x-md">Continue <span class="fa fa-arrow-right"></span></button>
			</form>
			
			<div class="p-y-lg">
				Return to <a href="index" class="text-primary _600">Sign in</a>
			</div>
			</div>
		</div>
	</div>
</div>

<script src="../scripts/app.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-3.2.1.js" ></script>
<script type="text/javascript" src="../scripts/custom.min.js" ></script>
</body>
</html>