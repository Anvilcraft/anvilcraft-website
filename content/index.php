<html>
<head>
  <title>Anvilcraft</title>
  <link rel="icon" type="image/png" href="/favicon.png">
</head>
<?php

 include('dbcon.php');
//Erhöhe Viewercount
$resultVis=mysqli_query($con, "select * from utils WHERE title='visitors'")or die('Error In Session');
$rowVis=mysqli_fetch_array($resultVis);
$viewersNow = $rowVis['value'];
$viewersNow++;
$sqlVis = "UPDATE utils SET value='$viewersNow' WHERE title='visitors'";
mysqli_query($con, $sqlVis);
echo "Aufrufe: ".$viewersNow;
include('site.php');
 ?>
</html>
