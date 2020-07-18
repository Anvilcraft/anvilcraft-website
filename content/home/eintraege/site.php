

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scala=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="/style/home/add/user/style.css" />
    <link rel="stylesheet" type="text/css" href="/style/main.css">

    <title>Eintrag hinzufügen</title>
</head>
<body>
  <?php include '../../includes/nav_bar/nav.php';?>
<br><br>
    <form method="post" action="process.php">
      <h2>TeamMember hinzufügen</h2>
      <input type="txt" placeholder="Name" name="name-team"><br>
      <input type="txt" placeholder="Link zum Profilbild" name="team-img"><br>
      <input type="txt" placeholder="Kommentar" name="team-comment"><br>
      <input type="submit" name="btn-save-team" value="Save"><br>
    </form><br><br>
    <form method="post" action="process.php">
      <h2>Streamer hinzufügen</h2>
      <input type="txt" placeholder="Name" name="name-str"><br>
      <input type="txt" placeholder="Twitch-Name" name="str-lnk-str"><br>
      <input type="submit" name="btn-save-str" value="Save"><br>
    </form><br><br>
    <form method="post" action="process.php">
      <h2>YouTuber hinzufügen</h2>
      <input type="txt" placeholder="Name" name="name-yt"><br>
      <input type="txt" placeholder="Channel-Link" name="channel-lnk-yt"><br>
      <input type="submit" name="btn-save-yt" value="Save"><br>
    </form>
</body>
</html>
