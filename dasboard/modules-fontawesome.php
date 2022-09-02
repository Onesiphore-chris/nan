<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Font Awesome - DWAdmin</title>

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
			<h2 style="font-weight: 700;" class="mb-0">DW<span style="font-weight: 500;">Admin</span></h2>
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
							<span>Components</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseOne" class="collapse submenu" aria-labelledby="headingOne" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="components-alerts.php" >Alerts</a>
							</li>

							<li>
								<a href="components-badge.php" >Badge</a>
							</li>

							<li>
								<a href="components-breadcrumb.php" >Breadcrumb</a>
							</li>

							<li>
								<a href="components-buttons.php" >Buttons</a>
							</li>

							<li>
								<a href="components-card.php" >Card</a>
							</li>

							<li>
								<a href="components-copllapse.php" >Collapse</a>
							</li>

							<li>
								<a href="components-dropdown.php" >Dropdown</a>
							</li>
							
							<li>
								<a href="components-form.php" >Form</a>
							</li>

							<li>
								<a href="components-listgroup.php" >List Group</a>
							</li>

							<li>
								<a href="components-progress.php" >Progress</a>
							</li>

							<li>
								<a href="components-table.php" >Table</a>
							</li>
						
							<li>
								<a href="components-todolist.php" >Todo List</a>
							</li>

							<li>
								<a href="components-typography.php" >Typography</a>
							</li>

						 </ul>
					</div>

					<li>
						<a href="blank-page.php" class="items">
							<i class="lar la-meh-blank"></i>
							<span>Blank Page</span>
						</a>
					</li>

					<li id="headingTwo">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseTwo"
							aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas la-wrench"></i>
							<span>Utilities</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseTwo" class="collapse submenu" aria-labelledby="headingTwo" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="colors.php" >Colors</a>
							</li>
							 
						</ul>
					</div>
					
					<li id="headingThree">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseThree"
							aria-expanded="true" aria-controls="collapseThree">
							<i class="fas la-plug"></i>
							<span>Modules</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseThree" class="collapse submenu" aria-labelledby="headingThree"
						data-parent="#sidebar-items">
						<ul>

						    <li>
								<a href="modules-fontawesome.php">Font Awesome</a>
							</li>
		
							<li>
								<a href="modules-chartjs.php">Chart JS</a>
							</li>

						</ul>
					</div>

					<li id="headingThree">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="forms"
							aria-expanded="true" aria-controls="forms">
							<i class="fas la-file-alt"></i>
							<span>Forms</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="forms" class="collapse submenu" aria-labelledby="headingThree"
						data-parent="#sidebar-items">
						<ul>

						    <li>
								<a href="forms-editor.php">Editor</a>
							</li>
		
		
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
							<span>Errors</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="errros" class="collapse submenu" aria-labelledby="headingThree"
						data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="errors-405.php">405</a>
							</li>
					
							<li>
								<a href="errors-404.php">404</a>
							</li>

							<li>
								<a href="errors-403.php">403</a>
							</li>

						</ul>
					</div>

					<li>
						<a href="Plugins.php" class="items">
							<i class="fas la-pencil-ruler"></i>
							<span>Plugins</span>
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
			<h3>Font Awesome</h3>
            
        
			<div class="row">

			<!--Start FontAwesome-->
			  <div class="col-12 col-md-12">
				  <div class="card">
					  <div class="card-header  font-weight-bold mr-auto">
                        Oops, why?
					  </div>
					  <div class="card-body">
                        <div class="alert alert-primary alert-has-icon p-4">
                          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                          <div class="alert-body">
                            <div class="alert-title">Oh, no!</div>
                            <p>Font Awesome 5 has many icons and we can not load it on this page, but you can still go to the official page to see the available icons.</p>
                            <p>Font Awesome Free by @fontawesome</p>
                            <p class="mt-3">
                              <a href="https://fontawesome.com/icons" target="_blank" class="btn bg-white text-dark">Let's Go</a>
                            </p>
                          </div>
                        </div>
                      </div>
				  </div>
                </div>
            </div>
			<!--End Fontawesome-->

        </div>
    </div>
    
	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
			&copy; 2020 All Right Reserved by <a href="#" target="_blank">DWAdmin</a>
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