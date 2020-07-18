
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style/login/style.css">
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
<link rel="stylesheet" type="text/css" href="/style/current_user/style.css">
<link rel="stylesheet" type="text/css" href="/style/main.css">

  <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
  <?php
    include('../dbcon.php');
    include('../session.php');;
    include ('../includes/nav_bar/nav.php');
    $result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
    $row=mysqli_fetch_array($result);

   ?>
  <h2>Hallo, <?php
    echo $row['name'];
  ?></h2>
  <b>&nbsp;&nbsp;&nbsp;&nbsp;Aufrufe: </b> <?php
  $resultAufr=mysqli_query($con, "select * from utils WHERE title='visitors'")or die('Error In Session');
  $rowAufr=mysqli_fetch_array($resultAufr);
  echo $rowAufr['value'];
   ?>

</body>
</html>
