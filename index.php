<?php
include 'connect.php' ;
?>
<html >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="icon.png" />
  <title>JK - Home</title>
//Fork of an original work by Robin Savemark (http://codepen.io/robinsavemark/pen/qOJgPZ)
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="site-outer">
	<nav class="navbar navbar-fixed-top">
		<section class="container-fluid">
			<div class="row">
				<div class="container-menu">
					<nav class="menu" id="hb">
						<div></div>
						<div></div>
						<div></div>
					</nav>
					<div class="logotype">
						<div class="big hero"><a href="index.php">Jai Kisan</a></div>
					</div>
				</div>
			</div>
		</section>
	</nav>
	<div class="site-inner">
		<section class="container-fluid">
			<!-- ACCORDION ROW -->
			<div class="row">
					<ul class="accordion-group" id="accordion">
						<li style="background-image: url('farmer1.jpg');">
							<div class="accordion-overlay"></div>
							<h3><a href="farmerrights.php">Farmer's Rights</a></h3>
							<section class="hidden-xs">
								<article>
									<p><a href = "farmerrights.php">Don't know what your rights are ? Don't worry we have you covered.</a></p>
								</article>
							</section>
						</li>
						<li class="out" style="background-image: url('orig.jpg');">
							<div class="accordion-overlay"></div>
							<h3><a href="crops.php">Major Crops & Markets</a></h3>
							<section class="hidden-xs">
								<article>
									<p><a href="crops.php">Know the crops suitable for your land. Choosing the crops according to your region/land type and market will help you earn maximum profit.</a>
									</p>
								</article>
							</section>
						</li>
						<li style="background-image: url('storage.jpg');">
							<div class="accordion-overlay"></div>
							<h3><a href="Storage.php">Storage Spaces</a></h3>
							<section class="hidden-xs">
								<article>
									<p><a href="Storage.php">Have large stock of crops ?  dont have enough space to store ?.... no need to worry just click here and see the storage spaces available in your district</a></p>
								</article>
							</section>
						</li>
						<li style="background-image: url('dfsgs.jpg');">
							<div class="accordion-overlay"></div>

							<h3><a href="newTech.php">New Technolgy</h3>
							<section class="hidden-xs">
								<article>
									<p><a href="newTech.php">Find technology which help you increase productivity and minimize your effort.</a></p>

								</article>

							</section>
						</li>
					</ul>
			</div>
			<!-- BEGIN NEW ROW AFTER ACCORDION -->
			<div class="row mg">
				<!-- FIRST ROW -->
				<div class="container">
					<h1 class="text-center head red">Some Helpful Schemes For Farmers!</h1>
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="product-box">
								<h2 class="text-center"><i class="fa fa-gears"></i></h2>
								<h3 class="text-center"><a href="http://dahd.nic.in">Rashtriya Gokul Mission</a></h3>
								<p><br><b>Launched</b>: ‎16 December 2014<br>
<b>Main Objective</b>: To conserve and develop indigenous bovine breeds.<br>
Rashtriya Gokul Mission aims to conserve and develop indigenous breeds in a focused and scientific manner. It is a focussed project under National Programme for Bovine Breeding and Dairy Development, with an outlay of Rs 500 crore during the 12th Five Year Plan.
<br><b><a href="http://dahd.nic.in">Click here for more info</a></b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="product-box">
								<h2 class="text-center"><i class="fa fa-flask"></i></h2>
								<h3 class="text-center"><a href="http://www.soilhealth.dac.gov.in">Soil Health Card Scheme</a></h3>
								<p><br><b>Launched</b>: 17 February 2015<br>
<b>Main Objective</b>: To help farmers to improve productivity from their farms by letting them know about nutrient/fertilizer requirements for their farms.<br>
The soil health card studies and reviews the health of soil or rather we can say a complete evaluation of the quality of soil right from its functional characteristics, to water and nutrients content and other biological properties. It will also contain corrective measures that a farmer should adopt to obtain a better yield.
<br><b><a href="http://www.soilhealth.dac.gov.in">Click here for more info</a></b></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="product-box">
								<h2 class="text-center"><i class="fa fa-balance-scale"></i></h2>
								<h3 class="text-center"><a href="http://www.nsiindia.gov.in">Kisan Vikas Patra</a></h3>
								<p><br><b>Launched</b>: 3 March 2015 (Re-Launched)<br>
<b>Main Objective</b>: To provide safe and secure investment avenues to the small investors.<br>
Kisan Vikas Patra is an investment scheme wherein the invested money will get doubled in 8 years and 4 months. However, investors would not get any tax benefit for their investment in Kisan Vikas Patra unlike in PPF. The Kisan Vikas Patra certificates would be available in the denominations of Rs 1,000, 5,000, 10,000 and 50,000 and there is no upper limit on investment in KVPs.
<br><b><a href="http://www.nsiindia.gov.in">Click here for more info</a></b></p>
							</div>
						</div>
					</div>
				</div>
			</div>

	<div class="footer">
		<footer class="footer-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="h3">About us</h3>
						<ul class="footer-list">
							<li><a href="#">Our story</a></li>
							<li><a href="#">Other</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3 class="h3">Partners</h3>
						<ul class="footer-list">
							<li><a href="https://github.com/GK4444">Gaurav Kavhar</a></li>
							<li><a href="https://github.com/NiC24">Nihal Chirayath</a></li>
							<li><a href="https://github.com/vishalzyy">Vishal Prajapat</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3 class="h3">Customer support</h3>
						<ul class="footer-list">
							<li>Chat with us</li>
							<li>+91 86930 06986</li>
							<li>E-mail us</li>
              <li>subtestadd@gmail.com</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3 class="h3">Socials</h3>
						<ul class="footer-list footer-list-inline">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
	<!-- NAVIGATION -->
	<div class="navigation">
		<div class="navigation-content">
			<h3>Menu</h3>
      <ul class="navigation-menu">
				<li>Your are at <a href="#" class="active">Home</a></li>
				<li><a href = "farmerrights.php"><i class="red fa fa-circle"></i>Farmer's Rights</a></li>
				<li><a href="crops.php"><i class="beige fa fa-circle"></i>Major Crops & Markets</a></li>
				<li><a href="Storage.php"><i class="orange fa fa-circle"></i>Storage Spaces</a></li>
				<li><a href="newTech.php"><i class="blue fa fa-circle"></i>New Technology</a></li>
			</ul>
			<h3>More</h3>
			<ul class="navigation-menu">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Info</a></li>
				<li><a href="#">Customer Service</a></li>
			</ul>
		</div>
	</div>
	</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
