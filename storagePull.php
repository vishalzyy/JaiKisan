<?php
include 'connect.php' ;
$district = $_POST['districtStore'];
$sql_storageData="SELECT * FROM `storgae_space` WHERE `district` LIKE '$district'";
$result = $connect->query($sql_storageData);
while($row = $result->fetch_assoc()){
  echo "<p>Address. :".$row["address"]."</p><br>";
  echo "<p>Capacity. :".$row["capacity"]." sector. : ".$row["sector"]." Product Stored. : ".$row["product_stored"]."</p><br>";

?>
<html>
</html>
