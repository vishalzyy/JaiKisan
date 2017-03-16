<?php
include 'connect.php' ;
$district = $_REQUEST['district'];
$sql_storageData="SELECT * FROM `major_crops` WHERE `district` LIKE '$district' ORDER BY sub_district";

  $result = $connect->query($sql_storageData);
  echo "<table><tr><th>Select the sub district</th>";
echo "<td><select name=sub id=sub>";
  while($row = $result->fetch_assoc()){
	  echo "<option value=".$row['sub_district'].">".$row['sub_district']."</option>";
  }
echo "</select></td></tr></tabe>";
