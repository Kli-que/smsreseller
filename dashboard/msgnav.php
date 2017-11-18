
					<div class="row-col">

						<div class="white bg b-b">
							<div class="navbar no-radius box-shadow-z1">
		
								<ul class="nav navbar-nav">
									<li class="nav-item"><span class="navbar-item text-md">Contacts</span></li>
									<li class="nav-item">
										<a class="nav-link text-muted" data-target="#modal-new" data-toggle="modal" title="Reply"><span class=""><i class="fa fa-fw fa-plus"></i> <span class="hidden-sm-down">New contact</span></span></a>
									</li>

									<li class="nav-item nav-link" style="margin-left: 50px;">
										<div class="btn-group dropdown">
										<button class="btn white dropdown-toggle btn btn-outline b-primary text-primary" data-toggle="dropdown" aria-expanded="false" style="border-color: #4BC0C0">Bulk Action</button>
										<div class="dropdown-menu dropdown-menu-scale pull-right" style="border-color: gray">
												<a class="dropdown-item" id="deletecontact">Delete Contacts</a> 
												<a class="dropdown-item" href="#">Send Message</a>

											<div class="dropdown-item dropdown-submenu">
												<a tabindex="-1" href="#">Add to Group</a>
											<div class="dropdown-menu" role="menu">
												<?php getAllGroupsDropDown() ?>
											</div>
											</div>
										</div>
										</div>
									</li>

									<li class="nav-item nav-link" style="margin-left: 50px;">
										<div class="form-file">
											<input type="file"> <button class="btn white" style="border-color: #4BC0C0"><span class="fa fa-upload"></span> Upload CVC</button>
										</div>
									</li>

									<!-- Send Message button -->

									<li class="nav-item nav-link" style="margin-left: 50px;" id="sendmsg">
										<div>
											<button class="btn white" style="border-color: #4BC0C0"><span class="fa fa-envelope"></span> Send Message</button>
										</div>
									</li>


									<!-- Display Balance -->

									<li class="nav-item nav-link" style="margin-left: 200px;">
										<div>
											<button class="btn btn-info " style="border-color: #4BC0C0"> Balance: KES 1975</button>
										</div>
									</li>

									<!-- Settings button -->
									<li class="nav-item dropdown" style="margin-left: 100px;">
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








					</div>