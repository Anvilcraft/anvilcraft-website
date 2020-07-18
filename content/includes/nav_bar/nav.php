<?php
  include('../../dbcon.php');
  include('../../session.php');

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 ?>
<!DOCTYPE html>

<html lang="de-at" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="/style/nav/style.css" />
    <script type="text/javascript" src="/scripts/nav/nav_responsive.js"></script>
    <link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="/style/current_user/style.css">
    <link rel="stylesheet" type="text/css" href="/style/main.css">
    <!--Default Header-Nav-->
</head>
<body>
    <header>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="/home" class="active"><b>Home</b></a>
                <a href="/home/eintraege">Einträge verwalten</a>
                <a href="/home/add/user">Benutzer hinzufügen</a>
                <a href="/home/edit/mainpage">Startseit-Texte bearbeiten</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </nav>
          <div id="currentuser">
 <p><a href="/home/account">Settings</a> |<b> Angemeldet als:</b>
     <?php
       echo $row['name'];?><div id="logout"><a href="../../../logout.php">Log out</a></div>
     </p>
     </div>
    </header>
</body>
</html>
