<?php
include 'connect.php' ;
?>
<html >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="icon.png" />
  <title>Jai Kisan - Storage Spaces</title>
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
						<div class="big hero">Jai Kisan</div>
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
      <h1 class="text-center head red">Storage Spaces Information</h1>
      <br>
          <div>
            <form method='post' action ='storagePull.php'>
              <table align="center">
                <tr></tr>
                <tr>
                  <th>Select your district : </th><td><input list="Districts" name="districtStore">
                    <datalist id="Districts">
                      <?php
                        include 'connect.php' ;
                          $sql_location="SELECT Distinct `district` FROM `storgae_space`";
                          $result = $connect->query($sql_location);
                          while($row = $result->fetch_assoc()){
                          echo "<option value=".$row['district'].">";



  }
  echo "</datalist>"
    ?>
    </td>
                </tr>
                <tr>  <Td></td><td>   </td></tr>
                <tr><td colspan="2"><center><button class="navigation-login" type='Submit' name='district_submit' >Find</button></center></td></tr>
              </table>

            </form>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
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
            <li>+91 2453 352</li>
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
      <li>Your are at <a href="#" class="active">Storage Spaces</a></li>
      <li><a href="index.php"><i class="orange fa fa-circle"></i>Home</a></li>
      <li><a href="#"><i class="red fa fa-circle"></i>Farmer's Rights</a></li>
      <li><a href="#"><i class="beige fa fa-circle"></i>Major Crops & Markets</a></li>
      <li><a href="#"><i class="blue fa fa-circle"></i>New Technology</a></li>
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
