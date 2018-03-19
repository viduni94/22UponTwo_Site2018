<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<title>22UponTwo | Order</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/22UponTwo_favicon.png">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/timber.css">
	<link rel="stylesheet" href="css/core.min.css" />
	<link rel="stylesheet" href="css/skin.css" />

	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="home-page">

	<!-- Overlay Navigation Menu -->
	<div class="overlay-navigation-wrapper" data-no-scrollbar data-animation="scale-in">
		<div class="overlay-navigation-scroll-pane">
			<div class="overlay-navigation-inner">
				<div class="v-align-middle">
					<div class="overlay-navigation-header row collapse full-width">
						<div class="column width-12">
							<div class="navigation-hide overlay-nav-hide">
								<a href="#">
									<span class="icon-cancel"></span>
								</a>
							</div>
						</div>
					</div>
					<div class="row collapse full-width">
						<div class="column width-12">
							<nav class="overlay-navigation pull-left clear-float-on-mobile">
								<span class="menu-title">Pages</span>
								<ul>
									<li>
										<a href="index.html">Home</a>
									</li>
									<li>
										<a href="about.html">About</a>
									</li>
									<li>
										<a href="blog.html">Blog</a>
									</li>
									<li>
										<a href="portfolio.html">Client Portfolio</a>
									</li>
									<li>
										<a href="graphics-portfolio">Graphics Portfolio</a>
									</li>
									<li>
										<a href="packages.html">Packages and Pricing</a>
									<li>
									<li>
										<a href="contact.html">Contact</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="overlay-navigation-footer row full-width">
						<div class="column width-12 no-padding">
							<p class="copyright no-margin-bottom">&copy; 2018 22UponTwo. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Overlay Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
			<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
				<div class="header-inner">
					<div class="row collapse full-width nav-bar reveal-side-navigation">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.html"><img src="images/logos/22UponTwo_tiffanyBlueLogo1.png" style="height: 45px; width: 55px;" alt="22UponTwo Logo" /></a>
									<a href="index.html"><img src="images/logos/22UponTwo_whiteLogo.png" style="height: 70px; width: 95px;" alt="22UponTwo Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block secondary-navigation nav-right">
								<ul>
									<li class="aux-navigation hide">
										<!-- Aux Navigation -->
										<a href="#" class="navigation-show overlay-nav-show nav-icon">
											<span class="icon-menu"></span>
										</a>
									</li>
								</ul>
							</nav>
							<nav class="navigation nav-block primary-navigation nav-right">
								<ul>
									<li>
										<a href="index.html">Home</a>
									</li>
									<li>
										<a href="about.html">About</a>
									</li>
									<li>
										<a href="portfolio.html">Portfolio</a>
									</li>
									<li>
										<a href="portfolio.html">Portfolio</a>
										<ul class="sub-menu">
											<li>
												<a href="portfolio.html">Client Portfolio</a>
											</li>
											<li>
												<a href="graphics-portfolio">Graphics Portfolio</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="blog.html">Blog</a>
									</li>
									<li class="current">
										<a href="contact.html">Contact</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Header End -->

			<!-- Content -->
			<div class="content clearfix">

				<!-- Back Top -->
				<div class="scroll-to-top">
					<a href="#">Back Up Top</a>
				</div>
				<!-- Back Top End -->

				<!-- Intro Title Section 1 -->
				<div class="section-block intro-title-1 intro-title-2 bkg-pink color-white">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner center">
									<h1 class="title-large horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
										Place your order
									</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Intro Title Section 1 End -->

				<!--Contact Form -->
				<section class="section-block replicable-content contact-2 no-padding-top">
					<div class="row">
						<br>
						<div class="column width-8 offset-2 center">
							<div class="contact-form-container">
								<form class="contact-form" action="php/place-order.php" method="post" novalidate>
									<div class="row">
										<div class="column width-6" style="display: none;">
											<input type="text" name="date" class="form-fname form-element large no-padding" value="<?php echo date("Y/m/d"); ?>">
										</div>
										<div class="column width-6">
											<input type="text" name="fname" class="form-fname form-element large" style="margin-bottom: 10px;" placeholder="First Name*" tabindex="1" required>
										</div>
										<div class="column width-6">
											<input type="text" name="lname" class="form-lname form-element large" style="margin-bottom: 10px;" placeholder="Last Name*" tabindex="2" required>
										</div>
										<div class="column width-6">
											<input type="email" name="email" class="form-email form-element large" style="margin-bottom: 10px;" placeholder="Email address*" tabindex="3" required>
										</div>
										<div class="column width-6">
											<input type="text" name="mobile" class="form-website form-element large" style="margin-bottom: 10px;" placeholder="Mobile Number*" tabindex="4" required>
										</div>
										<div class="column width-6">
											<input type="text" id="service" name="service" class="form-website form-element large readonly" style="margin-bottom: 10px;" placeholder="Service*" tabindex="5" required disabled>
										</div>
										<div class="column width-3">
											<input type="text" id="package" name="package" class="form-website form-element large readonly" style="margin-bottom: 10px;" placeholder="Package*" tabindex="6" disabled required>
										</div>
										<div class="column width-3">
											<input type="text" id="price" name="price" class="form-website form-element large readonly" style="margin-bottom: 10px;" placeholder="Price*" tabindex="6" disabled required>
										</div>
										<div class="column width-6">
											<input type="text" name="honeypot" class="form-honeypot form-element large">
										</div>
										<!-- Validation message -->
										<div class="form-response center" style="color: red;"></div>
										<!-- End of validation message -->
									</div>
									<div class="row">
										<div class="column width-12 center">
											<textarea name="message" class="form-message form-element medium" style="margin-bottom: 10px;" placeholder="Message" tabindex="7"></textarea>
											<input type="submit" value="Place Order" class="form-submit button medium bkg-black bkg-hover-pink color-white color-hover-white">
										</div>
										<div class="column width-12 center" style="padding-top: 10px;">
											<a href="packages.html">Need to choose a different package? Click here</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!--Contact Form End -->

			</div>
			<!-- Content End -->

			<!-- Footer -->
			<footer class="footer">
				<div class="footer-top">
					<div class="row flex">
						<div class="column width-4">
							<div class="widget">
								<h4>We're Digital Creatives</h4>
								<p>We specialize in web development, content creation and social media marketing. We are here to help your brand make the most of what the digital landscape has to offer. </p>
								<p><b>Get in touch with us!</b><br>
									Mobile : +94 774704661 / +94 770547636<br>
									Email   : info@22upontwo.com<br>
									&copy; 22UponTwo.
								</p>
								<ul class="social-list list-horizontal pull-left clear-float-on-mobile left">
									<li><a href="https://www.facebook.com/22UponTwo/"><span class="icon-facebook small"></span></a></li>
									<li><a href="https://www.instagram.com/22upontwo/"><span class="icon-instagram small"></span></a></li>
									<li><a href="https://www.linkedin.com/company/22upontwo/"><span class="icon-linkedin small"></span></a></li>
								</ul>
							</div>
						</div>
						<div class="column width-4">
							<div class="widget">
								<h4>Quick Links</h4>
								<ul class="list-group large">
									<li>
										<!-- <span class="post-info"><span class="post-date">27 Jul 2014</span></span> -->
										<a href="portfolio.html">Client Portfolio</a>
									</li>
									<li>
										<!-- <span class="post-info"><span class="post-date">02 Jun 2014</span></span> -->
										<a href="graphics-portfolio">Graphic Design Portfolio</a>
									</li>
									<li>
										<!-- <span class="post-info"><span class="post-date">02 Jun 2014</span></span> -->
										<a href="packages.html">Packages and Pricing</a>
									</li>
									<li>
										<!-- <span class="post-info"><span class="post-date">15 May 2014</span></span> -->
										<a href="#">Read our Blog</a>
									</li>
									<li>
										<!-- <span class="post-info"><span class="post-date">15 May 2014</span></span> -->
										<a href="contact.html">Get in touch with us</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="column width-4">
							<div class="signup-form-container">
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F22UponTwo%2F&tabs=timeline&width=378px&height=259px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="378px" height="259px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- Footer End -->
		</div>
	</div>

	<!-- Js -->
	<script type="text/javascript">
		document.getElementById("service").value = localStorage.service;
		document.getElementById("package").value = localStorage.package;
		document.getElementById("price").value = localStorage.price;
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
	<script src="js/timber.master.min.js"></script>
</body>
</html>