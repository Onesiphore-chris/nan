<?php

// session_start();

// include_once '../config.php';

// $sql = "SELECT image FROM user WHERE id=?";
//         $select = $dbb->prepare($sql);
//         $select->execute();





?>
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
								<a href="https://drive.google.com/file/d/1rxaLf3scSj3hBcRqAOdyOSzTeTFbhwvc/view?usp=drivesdk" >Application Mobile</a>
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
			<h3>Dashboard</h3>
		
			<div class="row">

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-inbox icon-home bg-primary text-light"></i>
								</div>
								<div class="col-8">
									<p>plus d'Info</p>
									<h5>Consultations</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-clipboard-list icon-home bg-success text-light"></i>
								</div>
								<div class="col-8">
									<p>3000</p>
									<h5>communauter</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-chart-bar  icon-home bg-info text-light"></i>
								</div>
								<div class="col-8">
									<p>5</p>
									<h5>Hopital de garde</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-4 d-flex align-items-center">
									<i class="las la-id-card  icon-home bg-warning text-light"></i>
								</div>
								<div class="col-8">
									<p>voir plus</p>
									<h5><a href="../pharmacie.php" style="text-decoration:none">Pharmacie En ligne</a></h5>
								</div>
							</div>
						</div>
					</div>

				</div>
		
				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Statistique</h5>
						<div class="card-body">
							<div class="row mb-1">
								<div class="col-6 mt-4">
									Server Migration
								</div>
								<div class="col-6 mt-4 text-right">
									20%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
								
								</div>
								<div class="col-6 text-right">
								
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									
								</div>
								<div class="col-6 text-right">
									
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
									
								</div>
								<div class="col-6 text-right">
								
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row mt-4 mb-1">
								<div class="col-6">
								
								</div>
								<div class="col-6 text-right">
								
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
									aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
		
					<div class="row">
						<div class="col-6">
							
						</div>
						
						<div class="col-6">
							<div class="card bg-secondary">
								
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header">Instructions</h5>
						<div class="card-body">
							<img src="assets/images/undraw_responsive_6c8s.svg" class="img-fluid p-5">
							<p class="mb-4">Add some quality, svg illustrations to your project courtesy of <a
									href="https://undraw.co" target="_blank">unDraw</a>, a constantly updated collection of beautiful
								svg images that you can use completely free and without attribution!</p>
		
							<a href="" target="_blank">Browse Illustrations on LOChospital→</a>
						</div>
					</div>
		
					<div class="card">
						<h5 class="card-header">
							Development Approach
						</h5>
						<div class="card-body">
							<p class="mb-3 mt-4">DWAdmin makes extensive use of Bootstrap 4 utility classes in order to reduce CSS
								bloat and poor page performance. Custom CSS classes are used to create custom components and custom
								utility classes.</p>
							<p>Before working with this theme, you should become familiar with the Bootstrap framework, especially
								the utility classes.</p>
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
			&copy; 2022 All Right Reserved by <a href="#" target="_blank">Chris le conquerant</a>
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























