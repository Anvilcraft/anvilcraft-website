<?php include '../../../includes/nav_bar/nav.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scala=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="/style/home/add/user/style.css" />
    <link rel="stylesheet" type="text/css" href="/style/main.css">

    <title>Benutzer hinzufügen</title>
</head>
<body>
<br><br>
        <div class="form-wrapper">
            <h3 id="hf-websrv">Benutzer hinzufügen</h3>
            <form action="process.php" method="post">
            <div class="form-item">
                <input type="text" placeholder="Name" class="txt" name="name" required="required" required></input>
            </div>
            <div class="form-item">
                <input type="text" placeholder="Username" class="txt" name="username" required="required" required></input>
            </div>
            <div class="form-item">
                <input type="password" placeholder="Passwort" class="txt" name="password" required="required" required></input>
            </div>

            <div class="button-panel">
                <input type="submit" value="Add" class="button" name="btn-save" id="submit"/>
            </div>
            <center>
            </form>
        </div>
</body>
</html>
