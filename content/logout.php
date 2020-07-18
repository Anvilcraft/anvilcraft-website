
<!DOCTYPE html>

<html lang="de-at" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Logout</title>
    <meta http-equiv="refresh" content="3; URL=/">
    <link rel="stylesheet" href="/style/login/style.css"/>
    <link rel="stylesheet" type="text/css" href="/style/main.css">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
  <?php
  session_start();
  setcookie("user", "", time() - (3600 * 720)); //1 Monat
  setcookie("password", "", time() - (3600 * 720)); //1 Monat
  session_destroy();
  ?>
    <div class="form-wrapper">
        <center><h3>Logout erfolgreich!</h3></center>
        <p>Sie werden in Kürze automatisch weiterleitet.</p>
    </div>

</body>
</html>
