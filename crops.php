<?php
include 'connect.php' ;
?>
<html >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="icon.png" />
  <title>Jai Kisan - Home</title>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript" src="jquery.js"></script><script type="text/javascript">
      			$(document).ready(district_selectbox_change);
      			function district_selectbox_change(){
      				$('#district').change(update_sub_list);
      			}
      			function update_sub_list(){
      				var district=$('#district').attr('value');
      				$.get('get_list.php?district='+district, show_sub);
      			}
      			function show_sub(sub){
      				$('#sub_list').html(sub);
      			}
      </script>


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
      <h1 class="text-center head red">Select your District here</h1>
      <!-- <form method='post' action ='<php $_PHP_SELF ?>'>
        <table align="center">
          <tr></tr>
          <tr>
            <th>Select your district : </th><td><input list="Districts" name="districtS">
              <datalist id="Districts">
                <php
                  include 'connect.php' ;
                    $sql_district="SELECT Distinct `district` FROM `major_crops`";
                    $result = $connect->query($sql_district);
                    while($row = $result->fetch_assoc()){
                    echo "<option value=".$row['district'].">";}
                    echo "</datalist>";
?>  </td>
              </tr>

              <tr><td colspan="2"><center><button class="navigation-login" type='Submit' name='district_submit' >Proceed to find sub District</button></center></td></tr>
            </table>
          </form>
          <form method='post' action ='<php $_PHP_SELF ?>'
                <tr><php
                include 'connect.php';

                if( $_POST["districtS"]){

                  $dist = $_POST["districtS"] ;
                  echo "<p>$dist</p>";
                  echo "<table><tr><th>Select your Sub District:</th><td><input list='subDistricts' name='subDistrict'>";
                  echo "<datalist id='subDistricts'>";
                  $sql_subDistrict="SELECT DISTINCT `sub_district` FROM `major_crops` WHERE `district` LIKE '$dist''";
                  $result = $connect->query($sql_subDistrict);
                  while($row = $result->fetch_assoc()){
                  echo "<option value=".$row['sub_district'].">";}
                  echo "</datalist></td></tr>";
                  echo "<tr><td colspan='2'><center><button class='navigation-login' type='Submit' name='subdistrict_submit' >Proceed to find crops</button></center></td></tr>";
                  echo "</table>";
                }
                ?>

    </form> -->
    <form>
    <table>
      <tr>
        <th>Select your district</th>
        <td>
    		<select name="district" id="district">
    		<option value=""> -- please choose -- </option>
    		<option value="THANE">THANE</option>
    		<option value="PUNE">PUNE</option>
    		</select>
      </td>
      </tr>
      </table>
        <br>
    		<div id="sub_list">
    		</div>

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
