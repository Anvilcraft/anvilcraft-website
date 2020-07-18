<?php include('../../../dbcon.php');
      include('../../../session.php');
      include('../../../includes/nav_bar/nav.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style/accchange/style.css">
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
<link rel="stylesheet" type="text/css" href="./style_m.css">
<script src="/scripts/select/select.js"></script>

</head>
<body>
<div class="form-wrapper">
  <form action="process.php" method="post">
    <h3 id="hf-websrv">Daten ändern</h3>
    <div>
        <select name="Auswahl" class="select-css">
          <option value="name">Anzeigename</option>
          <option value="password">Passwort</option>
        </select>
    </div><br>
    <div class="form-item">
		    <input type="text" name="usereingabe" placeholder="Neuer Wert" id="accinput"></input>
    </div>
    <div class="button-panel">
		    <input type="submit" class="button" title="Änderungen speichern" name="login" value="Speichern"></input>
    </div>
  </form>
</div>

</body>
</html>
