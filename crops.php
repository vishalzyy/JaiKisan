<?php
include 'connect.php' ;
?>
<html >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="icon.png" />
  <title>JK - Major Crops & Markets</title>
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
  <div class="row mg">
    <!-- FIRST ROW -->
    <div class="container">

<?php

if(!isset($_POST["districtS"])){
  echo "<h1 class='text-center head red'>Select your District here</h1>";
    echo "<form name='selection' method='post' action ='' >";
      echo  "<table align='center'>";
        echo "<tr></tr><tr>";
        echo    "<th>Select your district : </th><td><input list='Districts' name='districtS' required>";
          echo    "<datalist id='Districts'>";
                // <?php
                // if(!isset($_POST["districtS"])){
                  include 'connect.php' ;
                    $sql_district="SELECT Distinct `district` FROM `major_crops`";
                    $result = $connect->query($sql_district);
                    while($row = $result->fetch_assoc()){
                    echo "<option value=".$row['district'].">";}
                    echo "</datalist>";
echo "</td></tr>" ;

  echo "<tr><td colspan='2'><center><button class='navigation-login' type='Submit' name='district_submit' >Proceed to find sub District</button></center></td></tr>";
      echo  "</table>";
      echo   "</form> ";}?>
      <?php


                include 'connect.php';

                if(isset($_POST["districtS"])){
echo "<h1 class='text-center head red'>Select your Sub District here</h1>";
                  $dist = $_POST["districtS"] ;
                  echo "<form method='post' action ='cropsInfo.php'";
                      echo  "<tr>" ;
                  echo "<center><p>You have selected $dist District</p></center>";
                  echo "<table><tr><th>Select your Sub District:</th><td><input list='subDistricts' name='subDistrict' required>";
                  echo "<datalist id='subDistricts'>";
                  $sql_subDistrict="SELECT DISTINCT `sub_district` FROM `major_crops` WHERE `district` LIKE '$dist'";
                  $result = $connect->query($sql_subDistrict);
                  while($row = $result->fetch_assoc()){
                  echo "<option value=".$row['sub_district'].">";}
                  echo "</datalist></td></tr>";
                  echo "<tr><td colspan='2'><center><button class='navigation-login' type='Submit' name='subdistrict_submit' >Proceed to find crops</button></center></td></tr>";
                  echo "</table>";
				}
                ?>

    </form>
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
</section>
</div>
<!-- NAVIGATION -->
<div class="navigation">
  <div class="navigation-content">
    <h3>Menu</h3>
    <ul class="navigation-menu">
      <!-- //Topic title here -->
      <li>Your are at <a href="#" class="active">Major Crops & Markets</a></li>
      <!-- // other Pages below -->
      <li><a href="index.php"><i class="orange fa fa-circle"></i>Home</a></li>
      <li><a href = "farmerrights.php"><i class="red fa fa-circle"></i>Farmer's Rights</a></li>
      <li><a href="Storage.php"><i class="beige fa fa-circle"></i>Storage Spaces</a></li>
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
