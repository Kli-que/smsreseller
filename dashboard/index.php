<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BulkSMS Login Dashboard</title>
<meta name="description" content="Responsive, Bootstrap, BS4">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
<link rel="apple-touch-icon" href="images/logo.png">
<meta name="apple-mobile-web-app-title" content="Flatkit">
<meta name="mobile-web-app-capable" content="yes">
<link rel="shortcut icon" sizes="196x196" href="../images/logo.png">
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

<body style="background-color: aliceblue;">
<div class="app" id="app">
	
	<div class="b-t">
		<div class="center-block w-xxl w-auto-xs p-y-md text-center"><br><br><br>
			<div class="p-a-md">
			<div>

				 <a href="#" class="btn btn-block red text-white"><i class="fa fa-google-plus pull-left"></i> Sign in with Google+</a>

			</div><br>
			<div class="m-y text-sm">OR</div>

			<div id="errors" style="color: red;">
				
			</div><br>
			
				<form id="loginForm">
					<div class="form-group">
						<input type="text" id="username" class="form-control" placeholder="Username">
					</div>

					<div class="form-group">
						<input type="password" id="password" class="form-control" placeholder="Password">
					</div>

					<div class="m-b-md">
						<label class="md-check"><input type="checkbox"><i class="primary"></i> Keep me signed in</label>
					</div>

					<button style="background-color: #4BC0C0!important;" type="submit" class="btn btn-lg black p-x-lg" id="login">Sign in</button>
				</form>

			

			<div class="m-y">Forgot password?<a href="resetpass" class="text-primary _600"> Reset Password.</a></div>

			<div>Do not have an account? <a href="signup" class="text-primary _600">Sign up</a></div>
			</div>
		</div>
	</div>
</div>
<script src="../scripts/app.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-3.2.1.js" ></script>
<script type="text/javascript" src="../scripts/custom.min.js" ></script>
</body>
</html>