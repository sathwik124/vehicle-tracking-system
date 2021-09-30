<?php
// Create connection
$conn = mysqli_connect('sql112.epizy.com','epiz_28627986','applepro123');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,'epiz_28627986_Vehicle') or die('Cannot select DB');
$sql = "SELECT * FROM busone WHERE id='1'";
$result = mysqli_query($conn,$sql) or die('cannot select db');
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	echo "<h1><a href=\"https://www.google.com/maps/search/?api=1&query=".$row['lat'].",".$row['lon']."\">go to location</a></h1>";
}
mysqli_close($conn);
?>
