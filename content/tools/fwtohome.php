<?php
  include('../dbcon.php');
  include('../session.php');
$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
  if(!empty($row['user_id'])){
        header('location: ../home');
}
?>
