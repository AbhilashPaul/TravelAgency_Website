<!--
Program:	PROJ-216-A Software Project Concepts - Travel Experts Website
Author:		Robbie Nielsen
Date:     2019-06-06 [Start]
Abstract:	A simple website for a travel agency, demonstrating HTML/CSS/JavaScript/PHP concepts.
    			This is the contacts page.
-->
<!doctype html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Us</title>
		<!-- links to default stylesheet -->
		<link rel="stylesheet" type="text/css" href="../scripts/defaults.css">
    <!-- Latest compiled and minified CSS (w3schools) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library (w3schools) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Popper JS (w3schools) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript (w3schools) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- FontAwesome icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
			integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<!-- links to stylesheet -->
		<link rel="stylesheet" type="text/css" href="../shared/styles_contacts.css">
		<!-- Links to "style-card", created by Abhilash Paul -->
		<link rel = "stylesheet" type = "text/css" href = "../scripts/style-card.css"/>
	</head>
	<body>
		<div class="container-fluid">
    	<!-- Row 1, Navigation Bar; code by Abhilash Paul (slightly edited by Robbie) -->
    	<div class="row">
				<?php include("header.php"); // Header by Abhilash Paul
					require_once("../scripts/contactsFunctions.php");
				?>
        <nav id="navigation" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
            <a class="navbar-brand" href="">Travel Experts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menubar">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contacts.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="..\..\private\pages\login.php">Agent Portal</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
					<li><a href=<?php  session_start(); isset($_SESSION['userfirstname']) ? print("#") : print("..\..\private\pages\custregister.php");?>><i class="fas fa-user-plus"></i> Sign Up</a></li>
                    <li><a href=<?php isset($_SESSION['userfirstname']) ? print("#") : print("..\..\private\pages\custlogin.php");?>><i class="fas fa-sign-in-alt"></i> Login</a></li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--Display firstname of the user after logging in. Else, display Guest"-->
                            <strong>Hello <?php isset($_SESSION['userfirstname']) ? print($_SESSION['userfirstname']) : print("Guest");?>!</strong> 
                        </a>
                        <div class="dropdown-menu">
                            <!--Logout button -->
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav><!-- End Navigation Bar; code by Abhilash Paul -->
    	</div>
			<!-- Row 2, page header -->
    	<div class="row">
      	<div class="col">
        	<h2 class="text-light" style="padding:4px">Contact Us</h2>
      	</div>
    	</div>
			<!-- Row 3, accordion with agency info -->
    	<div class="row">
      	<div class="col">
					<!-- Start of Accordion -->
					<div id="accordion">
						<!-- Accordion Item 1 - Calgary Branch -->
						<div class="card">
							<!-- Header of Accordion Item 1 -->
							<div class="card-header bg-primary">
								<a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
									<button type="button" class="btn btn-outline-light">Calgary Branch</button>
								</a>
							</div>
							<!-- Content of Accordion Item 1 -->
							<div id="collapseOne" class="collapse show">
								<div class="card-body bg-light">
									<!-- Content of Accordion Item 1 - Row 1 -->
									<div class="row">
										<!-- Embedded Map - Calgary -->
										<div class="col-xs-12 col-lg-4">
											<iframe class="img-fluid"
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3847274439927!2d-114.09056018424701!3d51.045983579562105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fe76e972489%3A0x149461cedf5b7c5b!2s1155+8+Ave+SW%2C+Calgary%2C+AB!5e0!3m2!1sen!2sca!4v1559501106434!5m2!1sen!2sca"
												width="350" height="350" frameborder="0">
											</iframe>
										</div>
										<!-- Accordion Item 1 - Row 1 - Tables -->
										<div class="col-xs-12 col-lg-6">
											<!-- Accordion Item 1 Table Row -->
											<div class="row">
												<!-- Column 1 - Agency Contact Info Tables -->
												<div class="col">
													<!-- Calgary Agency Table -->
													<table class="table table-sm">
														<tbody>
															<tr>
																<td>
																	<p class="font-weight-bold">
																		Agency&nbsp;Address:
																	</p>
																	<?php echo contactTableAgency1Address(); ?>
																</td>
															</tr>
															<tr>
																<td>
																	<p class="font-weight-bold">
																		Agency&nbsp;Phone&nbsp;Number:
																	</p>
																	<?php echo contactTableAgency1Phone(); ?>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- End Column 1 - Agency Contact Info Tables -->
												<!-- Column 2 - Senior Agent Table -->
												<div class="col">
													<!-- Calgary Agency Senior Agent Contact Info Table -->
														<table class="table table-sm">
															<tbody>
																<tr>
																	<td>
																		<p class="font-weight-bold">
																			<?php echo contactTableAgency1Senior_name(); ?>&nbsp;- Senior&nbsp;Agent
																		</p>
																		<?php echo contactTableAgency1Senior_contact(); ?>
																	</td>
																</tr>
															</tbody>
														</table>
												</div><!-- End Column 2 - Senior Agent Table -->
											</div><!-- End Accordion Item 1 Table Row -->
										</div>
									</div><!-- End Content of Accordion Item 1 - Row 1 -->
									<!-- Collapse button for Accordion Item 1 Row 2 -->
									<a href="#calAgents" class="btn btn-outline-secondary btn-sm" data-toggle="collapse">View Agents</a>
									<!-- Content of Accordion Item 1 - row 2 -->
									<div id="calAgents" class="row collapse">
										<?php contactTableAgency1AgentsTable(); ?>
									</div><!-- End Content of Accordion Item 1 - row 2 -->
								</div><!-- End of Accordion Item 1 card-body div -->
							</div><!-- End of Accordion Item 1 Content -->
						</div><!-- End of Accordion Item 1 - Calgary Branch -->
						<!-- Accordion Item 2 - Okotoks Branch -->
						<div class="card">
							<!-- Header of Accordion Item 2 -->
							<div class="card-header bg-primary">
								<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
									<button type="button" class="btn btn-outline-light">Okotoks Branch</button>
								</a>
							</div>
							<!-- Content of Accordion Item 2 -->
							<div id="collapseTwo" class="collapse">
								<div class="card-body bg-light">
									<!-- Content of Accordion Item 2 - Row 1 -->
									<div class="row">
										<!-- Embedded Map - Okotoks -->
										<div class="col-xs-12 col-lg-4">
											<iframe class="img-fluid"
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.73653691242!2d-113.98168086222208!3d50.727375854361185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda90d09e3a1b893e!2sOkotoks+Professional+Building!5e0!3m2!1sen!2sca!4v1559502590843!5m2!1sen!2sca"
												width="350" height="350" frameborder="0">
											</iframe>
										</div>
										<!-- Accordion Item 2 - Row 1 - Tables -->
										<div class="col-xs-12 col-lg-6">
											<!-- Accordion Item 2 Table Row -->
											<div class="row">
												<!-- Column 1 - Agency Contact Info Tables -->
												<div class="col">
													<!-- Okotoks Agency Table -->
													<table class="table table-sm">
														<tbody>
															<tr>
																<td>
																	<p class="font-weight-bold">
																		Agency&nbsp;Address:
																	</p>
																	<?php echo contactTableAgency2Address(); ?>
																</td>
															</tr>
															<tr>
																<td>
																	<p class="font-weight-bold">
																		Agency&nbsp;Phone&nbsp;Number:
																	</p>
																	<?php echo contactTableAgency2Phone(); ?>
																</td>
															</tr>
														</tbody>
													</table>
												</div><!-- End Column 1 - Agency Contact Info Tables -->
												<!-- Column 2 - Senior Agent Table -->
												<div class="col">
													<!-- Okotoks Agency Senior Agent Contact Info Table -->
														<table class="table table-sm">
															<tbody>
																<tr>
																	<td>
																		<p class="font-weight-bold">
																			<?php echo contactTableAgency2Senior_name(); ?>&nbsp;Senior&nbsp;Agent
																		</p>
																		<?php echo contactTableAgency2Senior_contact(); ?>
																	</td>
																</tr>
															</tbody>
														</table>
												</div><!-- End Column 2 - Senior Agent Table -->
											</div><!-- End Accordion Item 2 Table Row -->
										</div>
									</div><!-- End Content of Accordion Item 2 - Row 1 -->
									<!-- Collapse button for Accordion Item 2 Row 2 -->
									<a href="#okAgents" class="btn btn-outline-secondary btn-sm" data-toggle="collapse">View Agents</a>
									<!-- Content of Accordion Item 2 - row 2 -->
									<div id="okAgents" class="row collapse">
										<?php contactTableAgency2AgentsTable(); ?>
									</div><!-- End Content of Accordion Item 2 - row 2 -->
								</div><!-- End of Accordion Item 2 card-body div -->
							</div><!-- End of Accordion Item 2 Content -->
						</div><!-- End of Accordion Item 2 - Okotoks Branch -->
					</div><!-- ###### End of Accordion ###### -->
				</div><!-- End row 3 column div -->
      </div><!-- End row 3 div -->
			<!-- Row 4, site footer -->
    	<div class="row">
      	<?php include("footer.php"); ?>
    	</div>
    </div><!-- End container div -->
	</body>
</html>
