<?php
  include('../../dbcon.php');
  include('../../session.php');
  include ('../../includes/nav_bar/nav.php');
  $result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
  $row=mysqli_fetch_array($result);

 ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style/login/style.css">
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
<link rel="stylesheet" type="text/css" href="/style/current_user/style.css">
<link rel="stylesheet" type="text/css" href="/style/main.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Account</h1><br>
  <table>
    <tr>
      <td>&nbsp;Username&nbsp;</td>
      <td>&nbsp;<?php echo $row['username'];?>&nbsp;</td>

    </tr>
    <tr>
      <td>&nbsp;Anzeigename&nbsp;</td>
      <td>&nbsp;<?php echo $row['name'];?>&nbsp; <a href="change"><img src="/img/login/change.png" id="changeinf"></a></td>
    </tr>
    <tr>
      <td>&nbsp;Passwort&nbsp;</td>
      <td>&nbsp;******&nbsp; <a href="change"><img src="/img/login/change.png" id="changeinf"></a></td>
    </tr>
</table>
</body>
</html>
