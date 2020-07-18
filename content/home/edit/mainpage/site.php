
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scala=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="/style/home/add/user/style.css" />
    <link rel="stylesheet" type="text/css" href="/style/main.css">

    <title>Startseite bearbeiten | Anvilcraft</title>
</head>
<body>
  <?php include '../../../includes/nav_bar/nav.php';
  include('../../../dbcon.php');
  include('../../../session.php');
  $resultab=mysqli_query($con, "select * from general_txt where title='about'")or die('Error In Session');
  $rowab=mysqli_fetch_array($resultab);
  $resultstreamer=mysqli_query($con, "select * from general_txt where title='streamer'")or die('Error In Session');
  $rowstreamer=mysqli_fetch_array($resultstreamer);
  $resultyter=mysqli_query($con, "select * from general_txt where title='yter'")or die('Error In Session');
  $rowyter=mysqli_fetch_array($resultyter);
  ?>
<br><br>
<h1>Startseite bearbeiten</h1>
<form action="process.php" method="post">
  <h3>Über Anvilcraft</h3>
<textarea name="AboutTB" cols="100" rows="5" placeholder="<?php
echo $rowab['txt'];
; ?>
">
</textarea>
<h3>Vorwort Streamer</h3>
<textarea name="StreamerTB" cols="100" rows="5" placeholder="<?php
echo $rowstreamer['txt'];
; ?>
">
</textarea>
<h3>Vorwort YTer</h3>
<textarea name="YTerTB" cols="100" rows="5" placeholder="<?php
echo $rowyter['txt'];
; ?>
">
</textarea>
<br />
<input type="submit" name="btn-submit"/>
</form>


</body>
</html>
