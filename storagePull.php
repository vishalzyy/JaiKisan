
<html>
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="icon.png" />
  <title>Jai Kisan-Storage Spaces Info.</title>
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
          <div id="google_translate_element" class="big hero" align='right'></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>
			</div>
		</section>
	</nav>
  <div class="site-inner">
    <section class="container-fluid">
  <div class="row mg">
    <!-- FIRST ROW -->
    <div class="container">
      <!-- <h1 class="text-center head red">Topic Header here</h1>
      <div class="row"> -->
<?php
  include 'connect.php' ;
  $district = $_POST['districtStore'];
  $sql_storageData="SELECT * FROM `storgae_space` WHERE `district` LIKE '$district'";
  echo "<h1 class='text-center head red'>Storage Spaces at ".$district."</h1><br>";
  echo "<div class='row'>";
  $result = $connect->query($sql_storageData);
  while($row = $result->fetch_assoc()){

    echo "<div class='col-md-4 col-sm-6 col-xs-12'> <div class='product-box'>";
    echo "<p><b>Address. :</b>".$row["address"]."</p>";
    echo "<p><b>Contact. :</b>".$row["Contact"]."</p>";
    echo "<p><b>Capacity. :</b>".$row["capacity"]." Metric Tons</p>";
    echo "<p><b>Sector. :</b>".$row["sector"]."</p>";
    echo "<p><b>Product Stored. :</b>".$row["product_stored"]."</p>";
    echo "<hr>";
    echo "</div></div>";
  }
  ?>
</div>
</div>
</div>
<br>
<p><b><center>For adding your storage space to the list you can mail us at subtestadd@gmail.com or call us at +91 86930 06986.</center></b></p>
<br>
<br>
<br>

<div class="footer">
  <footer class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3 class="h3">About us</h3>
          <ul class="footer-list">
            <li><a href="aboutUs.php">Our story</a></li>
            <!--<li><a href="#">Other</a></li>-->
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
          <!--<h3 class="h3">Socials</h3>
          <ul class="footer-list footer-list-inline">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
</section>
</div>
<!-- NAVIGATION -->
<div class="navigation">
  <div class="navigation-content">
    <h3>Menu</h3>
    <ul class="navigation-menu">
      <!-- //Topic title here -->
      <li>Your are at <a href="Storage.php" class="active">Storage Spaces </a>-> <?php echo $_POST['districtStore']; ?></li>
      <!-- // other Pages below -->
      <li><a href="index.php"><i class="orange fa fa-circle"></i>Home</a></li>
      <li><a href = "farmerrights.php"><i class="red fa fa-circle"></i>Farmer's Rights</a></li>
      <li><a href="crops.php"><i class="beige fa fa-circle"></i>Major Crops & Markets</a></li>
      <li><a href="newTech.php"><i class="blue fa fa-circle"></i>New Technology</a></li>
    </ul>
    <h3>More</h3>
    <ul class="navigation-menu">
      <li><a href="aboutUs.php">About Us</a></li>
      <!--li><a href="#">Contact</a></li>
      <li><a href="#">Info</a></li>
      <li><a href="#">Customer Service</a></li>-->
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


</body>
</html>
