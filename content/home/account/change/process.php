<?php
include('../../../dbcon.php');
include('../../../session.php');
include('../../../includes/nav_bar/nav.php');
$row=mysqli_fetch_array($result);
$whattochange = $_POST['Auswahl'];
$neuerwert = md5($_POST['usereingabe']);
$user_id_from_sql = $row['user_id'];
$msg_fehlt = "Es wurde kein neuer Wert eingegeben. Änderungen wurden nicht gespeichert.";
$msg_conerror = "Keine Verbindung zur Benutzerdatenbank möglich.";
if(empty($neuerwert)){
  echo $msg_fehlt;
} elseif ($neuerwert == $whattochange) {
  echo $msg_fehlt;
}else{
  $sql = "UPDATE users SET $whattochange='$neuerwert' WHERE user_id=$session_id";
  if ($con->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $con->error;
  }
}
echo "<br><a href='/home/index.php'>Zurück zur Home-Page</a>";
 ?>
