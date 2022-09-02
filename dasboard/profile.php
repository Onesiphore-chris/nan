<!doctype html>
<html lang="en">
  <head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6858343273703359"
     crossorigin="anonymous"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="assets/css/White.css">
	<!-- Style CSS (Dark)-->
	<link rel="stylesheet" href="assets/css/Dark.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">

</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="las la-bars"></i>
		</button>
	</div>
	<div class="menu">
	
		<ul>

			 <li>
				<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox"  title="Dark Or White"/>
							<div class="slider round"></div>
					  </label>
					</div>
				</li>

				<li>
					<a href="notifications.php" class="transition">
						<i class="las la-bell"></i>
						<span class="badge badge-danger notif">5</span>
					</a>
				</li>

			<li>
				<div class="dropdown">
					<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
						<img src="assets/images/avatar/avatar-2.png" alt="Profile">
					</div>
					<div class="dropdown-menu" aria-labelledby="dropdownProfile">
						
						<a class="dropdown-item" href="profile.php">
							<i class="las la-user mr-2"></i> My Profile
						</a>

						<a class="dropdown-item" href="activity-log.php">
							<i class="las la-list-alt mr-2"></i> Activity Log
						</a>
					 
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="signin.php">
							<i class="las la-sign-out-alt mr-2"></i> Sign Out
						</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars">
		<div class="logo">
			<h2 style="font-weight: 700;" class="mb-0">LOC<span style="font-weight: 500;">Hopital</span></h2>
		</div>

		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>

					<p class="menu">Apps</p>

					<li>
						<a href="admin.php" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashoard</span>
						</a>
					</li>

					
					<p class="menu">User Interface</p>

					<li id="headingOne">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseOne"
							aria-expanded="true" aria-controls="collapseOne">
							<i class="fas la-cog"></i>
							<span>Telechargement</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseOne" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>
							<li>
								<a href="components-card.php" >Application Mobile</a>
							</li>

					</div>

					<li id="headingTwo">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseTwo"
							aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas la-wrench"></i>
							<span>Enrollement</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseTwo" class="collapse submenu" aria-labelledby="headingTwo" data-parent="#sidebar-items">
					</div>
					
					<li id="headingThree">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseThree"
							aria-expanded="true" aria-controls="collapseThree">
							<i class="fas la-plug"></i>
							<span>Foire à Questions</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseThree" class="collapse submenu" aria-labelledby="headingThree"
						data-parent="#sidebar-items">
						<ul>
							<li>
								<a href="forms-Validation.php">Validation</a>
							</li>
						</ul>
					</div> 	
					<p class="menu">Pages</p>

					<li id="headingThree">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapsefour"
							aria-expanded="true" aria-controls="collapsefour">
							<i class="fas la-folder"></i>
							<span>Auth</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapsefour" class="collapse submenu" aria-labelledby="headingThree"
						data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="signin.php">Login</a>
							</li>

							<li>
								<a href="signup.php">Register</a>
							</li>

							<li>
								<a href="forgot.php">Forgot Password</a>
							</li>

						</ul>
					</div>

					<li id="headingThree">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#errros"
							aria-expanded="true" aria-controls="errros">
							<i class="las la-exclamation-circle"></i>
							<span>Pharmacie</span>
							<i class="fas la-angle-right"></i>
						<a href="Plugins.php" class="items">
							<i class="fas la-pencil-ruler"></i>
							<span>Consultations</span>
						</a>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>

	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content transition">
		<div class="container-fluid dashboard">
			<h3>Profile</h3>
			
				<div class="card overflow-hidden">
					<div class="row no-gutters row-bordered row-border-light">
					  <div class="col-md-3 pt-0">
						<div class="list-group list-group-flush account-settings-links">
						  <a class="list-group-item list-group-item-action active1" data-toggle="list" href="#account-general">General</a>
						  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
						</div>
					  </div>
					  <div class="col-md-9">
						<div class="tab-content">
						  <div class="tab-pane fade active show" id="account-general">
							<p class="mt-4 text-center">Information : </p>
							<form action="../traitement.php" method="POST" enctype="">
							<div class="card-body media align-items-center">
							  <img src="assets/images/avatar/avatar-1.png" alt="" class="d-block ui-w-80">
							  <div class="media-body ml-4">
								<label class="btn btn-outline-primary">
								  Upload new photo
								  <input type="file" name="image" class="account-settings-fileinput">
								</label> &nbsp;
							  </div>
							</div>
							<hr class="border-light m-0">
							<div class="card-body">
							  <div class="form-group">
								<label class="form-label">Username</label>
								<input type="text" name="username" class="form-control mb-1">
							  </div>
							  <div class="form-group">
								<label class="form-label">numero</label>
								<input type="text" name="numero" class="form-control">
							  </div>
							  <div class="form-group">
								<label class="form-label">E-mail</label>
								<input type="text" name="email" class="form-control mb-1">
							  </div>
							  <div class="form-group">
								<label class="form-label">Password</label>
								<input type="text" name="password" class="form-control mb-1">
							  </div>
							  <input type="submit" name="submit">
								</form>	
							</div>
						  </div>
				
						  <div class="tab-pane fade" id="account-change-password">
							<p class="mt-4 text-center">Change Password : </p>
	
							<div class="card-body pb-2">
			  
							  <div class="form-group">
								<label class="form-label">Current password</label>
								<input type="password" class="form-control">
							  </div>
			  
							  <div class="form-group">
								<label class="form-label">New password</label>
								<input type="password" class="form-control">
							  </div>
			  
							  <div class="form-group">
								<label class="form-label">Repeat new password</label>
								<input type="password" class="form-control">
							  </div>
							  
							  
							<div class="text-right mt-3">
								<button type="button" class="btn btn-primary">Save changes</button>&nbsp;
							</div>
			  
							</div>
						  </div>
	
			  
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			</div>

			
	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
			&copy; 2022 All Right Reserved by <a href="#" target="_blank">Chris Le Conquerant</a>
		</p>
	</div>

	<!-- Loader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<div class="loader-overlay"></div>

	<!-- Library Javascipt-->
	<script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
 </body>
</html>