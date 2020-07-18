<?php
  include('../../../dbcon.php');
    if(isset($_POST['btn-submit'])){
      $TXT_about = $_POST['AboutTB'];
      $TXT_play = $_POST['MitspielenTB'];
      $TXT_streamer = $_POST['StreamerTB'];
      $TXT_yter = $_POST['YTerTB'];

     $sql1 = "UPDATE general_txt SET txt='$TXT_about' WHERE title='about'";
     $sql2 = "UPDATE general_txt SET txt='$TXT_play' WHERE title='play'";
     $sql3 = "UPDATE general_txt SET txt='$TXT_streamer' WHERE title='streamer'";
     $sql4 = "UPDATE general_txt SET txt='$TXT_yter' WHERE title='yter'";

     mysqli_query($con, $sql1);
     mysqli_query($con, $sql2);
     mysqli_query($con, $sql3);
     mysqli_query($con, $sql4);
     echo '<p style="color:green;"><b>UPDATED ALL SQL-VALUES SUCCESSFULL!</b></p>';
   }
  ?>
