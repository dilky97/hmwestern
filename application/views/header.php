<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <title>User Profile</title>
  
  <!-- FAVICON -->
  <link href="<?php echo base_url('images/favicon.ico');?>" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/jquery-ui/jquery-ui.min.css');?>" > -->
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/bootstrap/css/bootstrap-slider.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/font-awesome/css/font-awesome.min.css');?>">
  <!-- Owl Carousel -->
  <link href="<?php echo base_url('plugins/slick-carousel/slick/slick.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('plugins/slick-carousel/slick/slick-theme.css');?>" rel="stylesheet" type="text/css">
  <!-- Fancy Box -->
  <link href="<?php echo base_url('plugins/fancybox/jquery.fancybox.pack.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('plugins/jquery-nice-select/css/nice-select.css');?>" rel="stylesheet" type="text/css">
  <!-- CUSTOM CSS -->
  <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

  <!-- JAVASCRIPTS -->
<script src="<?php echo base_url('plugins/jQuery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('plugins/bootstrap/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap-slider.js');?>"></script>
  <!-- tether js -->
<script src="<?php echo base_url('plugins/tether/js/tether.min.js');?>"></script>
<script src="<?php echo base_url('plugins/raty/jquery.raty-fa.js');?>"></script>
<script src="<?php echo base_url('plugins/slick-carousel/slick/slick.min.js');?>"></script>
<script src="<?php echo base_url('plugins/jquery-nice-select/js/jquery.nice-select.min.js');?>"></script>
<script src="<?php echo base_url('plugins/fancybox/jquery.fancybox.pack.js');?>"></script>
<script src="<?php echo base_url('plugins/smoothscroll/SmoothScroll.min.js');?>"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="<?php echo base_url('plugins/google-map/gmap.js');?>"></script>
<script src="<?php echo base_url('js/script.js');?>"></script>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
  <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   -->

</head>

<body class="body-wrapper">


<section class="bg-5 overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.html">
						<img src="<?php echo base_url('images/logo.png');?>" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Dashboard<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="dashboard.html">My Profile</a>
									<a class="dropdown-item" href="dashboard-my-ads.html">Products</a>
									
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									About <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="about-us.html">About Us</a>
									<a class="dropdown-item" href="contact-us.html">News</a>
									<a class="dropdown-item" href="contact-us.html">Sustainability</a>

									
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="index.html">Contact us</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login.html">Login</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link text-white add-button" href="ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li> -->
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>