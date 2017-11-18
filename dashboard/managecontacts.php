<?php
require_once '../accessories/accessories.php';

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
	<title>Manage Contacts Dashboard</title>
	<meta content="Responsive, Bootstrap, BS4" name="description">
	<meta content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black-translucent" name="apple-mobile-web-app-status-barstyle">
	<link href="../images/logo.png" rel="apple-touch-icon">
	<meta content="Flatkit" name="apple-mobile-web-app-title">
	<meta content="yes" name="mobile-web-app-capable">
	<link href="../images/logo.png" rel="shortcut icon" sizes="196x196">
	<link href="../css/animate.css/animate.min.css" rel="stylesheet" type="text/css">
	<link href="../css/glyphicons/glyphicons.css" rel="stylesheet" type="text/css">
	<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/material-design-icons/material-design-icons.css" rel="stylesheet" type="text/css">
	<link href="../css/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link href="../css/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/styles/app.min.css" rel="stylesheet">
	<link href="../css/styles/font.css" rel="stylesheet" type="text/css">
	<link href="../css/styles/custom.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="app" id="app">
		
		<div class="app-content box-shadow-z2 pjax-container" id="content" role="main">

			<div class="app-body">
				<div class="app-body-inner">
					<div class="row-col">

						<?php require_once 'contactnav.php'; ?>

						<div class="row-row">
							<div class="row-col">
								<div class="col-xs w modal fade aside aside-md b-r" id="subnav">
									<div class="row-col light bg">

										<div class="row-row">
											<div class="row-body scrollable hover">
												<div class="row-inner">
													<div class="navside m-t">
														<nav class="nav-border b-primary" data-ui-nav="">
															<ul class="nav">
																<li class="active">
																	<a id="displayallcontacts"><span class="nav-label"><b class="label warn rounded"><?php echo returnnumrows('allcontacts','user', $_SESSION['loggedin']) ?></b></span> <span class="nav-text">All</span></a>
																</li>

																<li>
																	<?php getAllGroups() ?>
																</li>
															</ul>
														</nav>
													</div>
												</div>
											</div>
										</div>

										<div class="p-a b-t">
						
											<span class="btn btn-xs rounded primary" data-target="#modal-newgroup" data-toggle="modal" title="New Group"><span class=""><i class="fa fa-fw fa-plus"></i> <span class="hidden-sm-down">New Group</span></span></span>

										</div>

									</div>
								</div>

								<div class="col-xs modal fade aside aside-sm b-r" id="list">
									<div class="row-col">
										<div class="row-row">
											<div class="row-col">

												<div class="col-xs w-40 white bg b-r">
													<div class="row-col">
														<div class="row-row">
															<div class="row-body scrollable hover">
																<div class="row-inner">
																	<div class="text-center text-sm p-y-sm">
																		<a class="block text-muted active text-primary _600" href="#">A</a> 
																		<a class="block text-muted active text-primary _600" href="#">B</a> 
																		<a class="block text-muted active text-primary _600" href="#">C</a> 
																		<a class="block text-muted active text-primary _600" href="#">D</a> 
																		<a class="block text-muted active text-primary _600" href="#">E</a> 
																		<a class="block text-muted active text-primary _600" href="#">F</a> 
																		<a class="block text-muted active text-primary _600" href="#">G</a> 
																		<a class="block text-muted active text-primary _600" href="#">H</a> 
																		<a class="block text-muted active text-primary _600" href="#">I</a> 
																		<a class="block text-muted active text-primary _600" href="#">J</a> 
																		<a class="block text-muted active text-primary _600" href="#">K</a> 
																		<a class="block text-muted active text-primary _600" href="#">L</a> 
																		<a class="block text-muted active text-primary _600" href="#">M</a> 
																		<a class="block text-muted active text-primary _600" href="#">N</a> 
																		<a class="block text-muted active text-primary _600" href="#">O</a> 
																		<a class="block text-muted active text-primary _600" href="#">P</a> 
																		<a class="block text-muted active text-primary _600" href="#">Q</a> 
																		<a class="block text-muted active text-primary _600" href="#">R</a> 
																		<a class="block text-muted active text-primary _600" href="#">S</a> 
																		<a class="block text-muted active text-primary _600" href="#">T</a> 
																		<a class="block text-muted active text-primary _600" href="#">U</a> 
																		<a class="block text-muted active text-primary _600" href="#">V</a> 
																		<a class="block text-muted active text-primary _600" href="#">W</a> 
																		<a class="block text-muted active text-primary _600" href="#">X</a> 
																		<a class="block text-muted active text-primary _600" href="#">Y</a> 
																		<a class="block text-muted active text-primary _600" href="#">Z</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-xs" id="contactscolumn">
													<div class="row-col white bg">
														<div class="row-row">
															<div class="row-body scrollable hover">
																<div class="row-inner">
																	<div class="list" data-ui-list="b-r b-3x b-primary" data-ui-list-target="#detail" data-ui-list-target-class="show">

																	<div id="selectcontacterrors">
													
																	</div>

																	<?php getAllContacts() ?>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="white bg p-a b-t clearfix">
											<div class="btn-group pull-right">
												<a class="btn btn-xs white circle" href="#"><i class="fa fa-fw fa-angle-left"></i></a> <a class="btn btn-xs white circle" href="#"><i class="fa fa-fw fa-angle-right"></i></a>
											</div>

											<span class="text-sm text-muted" id="allconts">Total: <strong><?php echo returnnumrows('allcontacts', 'user', $_SESSION['loggedin']); ?></strong></span>
										</div>

									</div>
								</div>

								

							</div>
						</div>
					</div>
				</div>


				<!-- Start of send a message to a single person -->

				<div class="modal fade" id="sendsinglemsg">
					<div class="modal-right col-xs-10 col-sm-9 col-md-8 col-lg-6 white dk b-l p-a-md">
					<form name="newMail" class="form-horizontal">
						<div class="form-group row">
							<label class="col-lg-2 form-control-label">To:</label>
							<div class="col-lg-8">
								<input id="sendto" type="text" disabled="" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-lg-2 form-control-label">Message:</label>
							<div class="col-lg-8">
								<textarea rows="8" class="form-control"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-lg-8 offset-lg-2">
								<button class="btn primary btn-sm p-x-md pull-right">Send</button>
							</div>
						</div>
					</form>
					</div>
				</div>

				<!-- End of send a message to a single person -->



				<!-- Modal to add a new contact -->


				<div class="modal fade" id="modal-new">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<div class="modal-header _600">
								<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> New Contact
							</div>

							<div class="modal-body">
								
									<div id="contacterrors" class="text-center" style="color: red;"></div><br>
									<form>
										<div class="form-group row">
											<label class="col-lg-2 form-control-label">Name:</label>
											<div class="col-lg-8">
												<input class="form-control" type="text" placeholder="Contact Name" id="contactname">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-2 form-control-label">Phone Number:</label>
											<div class="col-lg-8">
												<input class="form-control" type="text" placeholder="Phone Number" id="contactphone">
											</div>
										</div>
										
										<div class="form-group row">
											<div class="col-lg-8 offset-lg-2">
												<button class="btn primary btn-sm p-x-md pull-right" id="savenewcontact">Save</button>
											</div>
										</div>
									</form>
								
							</div>

						</div>
					</div>
				</div>


				<!-- End of add new contact modal -->




				<!-- This is the beginning of modal to edit a contact -->


				<div class="modal fade" id="modal-editcontact">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<div class="modal-header _600">
								<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> Edit Contact
							</div>

							<div class="modal-body">
								
									<div id="editerrors" class="text-center" style="color: red;"></div><br>

									<form>
										<div class="form-group row">
											<label class="col-lg-2 form-control-label">Name:</label>
											<div class="col-lg-8">
												<input class="form-control" type="text" id="editName">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-2 form-control-label">Phone Number:</label>
											<div class="col-lg-8">
												<input class="form-control" type="text" id="editPhone">
											</div>
										</div>
										
										<div class="form-group row">
											<div class="col-lg-8 offset-lg-2">
												<button type="submit" class="btn primary btn-sm p-x-md pull-right" id="editcontactbtn">Edit</button>
											</div>
										</div>
									</form>
								
							</div>

						</div>
					</div>
				</div>


				<!-- This is the end of the modal to edit a contact -->





				<!-- This is the form to add a group of contacts -->

				<div class="modal fade" id="modal-newgroup">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header _600">
								<button aria-label="Close" class="close" id="closegroupmodal" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> New Group
							</div>
							<div class="modal-body">

									<div id="grouperrors" class="text-center" style="color: red;"></div><br>
									<form>
										<div class="form-group row">
											<label class="col-lg-2 form-control-label">Group name:</label>
											<div class="col-lg-8">
												<input class="form-control" type="text" placeholder="Group Name" id="grpname">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-8 offset-lg-2">
												<button type="submit" class="btn primary btn-sm p-x-md pull-right" id="savegroup">Add Group</button>
											</div>
										</div>
									</form>
								
							</div>
						</div>
					</div>
				</div>


				<!-- End of add group form -->

				<!-- Are you sure -->

				<div id="delete" class="modal fade animate black-overlay" data-backdrop="false">
					<div class="row-col h-v">
						<div class="row-cell v-m">
							<div class="modal-dialog modal-sm">
								<div class="modal-content flip-y">
									<div class="modal-body text-center"><p class="p-y m-t"><i
										class="fa fa-remove text-warning fa-3x"></i></p>
										<p>Are you sure to delete the contacts?</p></div>
									<div class="modal-footer">
										<button type="button" id="notdeletecontacts" class="btn white p-x-md" data-dismiss="modal">No</button>
										<button type="button" id="yesdeletecontacts" class="btn btn-danger p-x-md" data-dismiss="modal">Yes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- End of are you sure -->

			</div>
		</div>
	</div>
	<script src="../scripts/app.min.js"></script>
	<script type="text/javascript" src="../scripts/jquery-3.2.1.js" ></script>
	<script type="text/javascript" src="../scripts/custom.min.js" ></script>
</body>
</html>