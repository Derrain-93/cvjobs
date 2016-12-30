<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CVJobs - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('Assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- OwlCarousel2 CSS -->
    <link href="<?php echo base_url('Assets/css/owl.carousel.css') ?>" rel="stylesheet">
    
    <!-- Checkbox CSS -->
    <link href="<?php echo base_url('Assets/css/checkbox.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('Assets/css/main.css') ?>" rel="stylesheet">
	


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">CVjobs.lk</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="<?php echo base_url('index.php/JobsController/loadHome') ?>">Jobs</a>
						</li>
						<li>
							<a href="#">CV/Career Advise</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/JobsController/loadContactUs') ?>">Contact Us</a>
						</li>
						<li>
							<a href="#">Recruiter Area</a>
						</li>
						<li>
							<a href="#"><button type="button" class="btn btn-default btn-sm btn-red">Find Course</button></a>
						</li>
						<li>
							<a href="#"><button type="button" class="btn btn-default btn-sm">All Foreign Jobs</button></a>
						</li>
						<li>
							<span>Job Seekers :</span>
						</li>
						<li>
							<a href="#">Saved Jobs</a>
						</li>
                        <li>
							<a href="<?php echo base_url('index.php/Login/checkIsLogged') ?>">Post a Job</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/Login/authenticate') ?>">Sign In</a>
						</li>
						<li>
							<a href="#">Register</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

