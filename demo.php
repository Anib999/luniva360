<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Lunivatech" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="images/luniva/luniva_edited.css" type="text/css" />
    <link rel="shortcut icon" href="images/luniva/favicon-50x50.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Request for Demo</title>
    <style>
        .container-fluid.py-5.mx-auto {
            padding: 0 !important;
        }
        .required {
            color: red;
        }
    </style>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div class="section p-0 m-0 h-100 position-absolute" style="background: url('images/luniva/lunivawider.jpg') center center no-repeat; background-size: cover;"></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0">
					<div class="vertical-middle">
						<div class="container-fluid py-5 mx-auto">
							<div class="center">
								<a href="index.php"><img src="images/luniva/lunivalogo.png" alt="Canvas Logo" style="width: 100px;"></a>
							</div>

							<div class="card mx-auto rounded-0 border-0" style="max-width: 600px; background-color: rgba(255,255,255,0.93);">
								<div class="card-body" style="padding: 40px;">
									<form id="demo-form" name="demo-form" class="mb-0" action="<?php echo 'common/sendEmail.php' ?>" method="post">
                                        <p style="margin-bottom: 0">Fill the form to</p>
										<h3>Book your free demo Today!</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="organization_name">Organization name <span class="required">*</span></label>
												<input type="text" id="organization_name" name="organization_name" value="" class="form-control not-dark" placeholder="Enter organization name" required />
											</div>

											<div class="col-md-6 col-sm-12 col-12 form-group">
												<label for="name">Full Name <span class="required">*</span></label>
												<input type="text" id="name" name="name" value="" class="form-control not-dark" placeholder="Enter your name" required />
											</div>

                                            <div class="col-md-6 col-sm-12 col-12 form-group">
												<label for="contact_no">Contact No <span class="required">*</span></label>
												<input type="number" id="contact_no" name="contact_no" value="" class="form-control not-dark" placeholder="Enter your contact no" required />
											</div>

                                            <div class="col-md-6 col-sm-12 col-12 form-group">
												<label for="email_address">Email Address <span class="required">*</span></label>
												<input type="email" id="email_address" name="email_address" value="" class="form-control not-dark" required placeholder="Enter your work email" />
											</div>

                                            <div class="col-md-6 col-sm-12 col-12 form-group">
												<label for="address">Address <span class="required">*</span></label>
												<input type="text" id="address" name="address" value="" class="form-control not-dark" placeholder="Enter your address" />
											</div>

                                            <div class="col-12 form-group">
												<label for="demo_for">Demo for <span class="required">*</span></label>
                                                <select name="demo_for" id="demo_for" class="form-control not-dark" required>
                                                    <option value="">Select</option>
                                                    <option value="hms">Luniva 360 HMS</option>
                                                    <option value="lab">Lab Management System</option>
                                                    <option value="clinic">Clinic Management System</option>
                                                    <option value="others">Others</option>
                                                </select>
											</div>

											<div class="col-12 form-group">
												<button class="button button-3d button-black m-0" id="demo-form-submit" name="demo-form-submit" value="login">Request for a demo</button>
											</div>
										</div>
									</form>


								</div>
							</div>

							<!-- <div class="text-center dark mt-3"><small>Copyrights &copy; All Rights Reserved by LunivaTech.</small></div> -->
						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>