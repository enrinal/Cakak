
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Our Team</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/s.png'?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>

	</head>
	<body>

	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="<?php echo base_url().''?>">CAKAK<span>.</span></a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="<?php echo base_url().''?>">Home</a></li>
						<li ><a href="<?php echo base_url().'index.php/about'?>">About Cakak</a></li>
						<li class="active"><a href="<?php echo base_url().'index.php/ourteam'?>">Our Team</a></li>
						<li><a href="<?php echo base_url().'index.php/kontak'?>">Contact</a></li>
						<li class="cta"><a href="<?php echo base_url().'index.php/map'?>">Cari Rute</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/cakak5.png'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Our Awesome Team</h2>
		   					<p class="fh5co-lead"></a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>



	

	<?php $this->load->view('v_footer');?>
	</div>



	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
