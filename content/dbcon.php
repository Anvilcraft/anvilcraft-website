<?php
$con = mysqli_connect("db.a-hoefler.eu","root","PASSWORT","anvilcraft_www");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
