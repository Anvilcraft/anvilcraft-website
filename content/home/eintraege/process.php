<?php

include ('../../includes/nav_bar/nav.php');
  include('../../dbcon.php');
    if(isset($_POST['btn-save-str'])){

      $name = $_POST['name-str'];
      $twitchname = $_POST['str-lnk-str'];

      $sql = "INSERT INTO `streamer` (`name`,`twitchname`)
      VALUES ('$name', '$twitchname')";
      $result = mysqli_query($con,$sql);
      if($result){
          echo 'Added Streamer.';
      } else{
        echo 'Please Check your Infos.';
      }
    }
    if(isset($_POST['btn-save-yt'])){

      $nameyt = $_POST['name-yt'];
      $linkyt = $_POST['channel-lnk-yt'];

      $sqlyt = "INSERT INTO `yter` (`name`, `link`, `img`, `summary`)
      VALUES ('$nameyt', '$linkyt', '$picyt', '$commyt')";
      $resultyt = mysqli_query($con,$sqlyt);
      if($resultyt){
          echo 'Added YTer.';

      } else{
        echo 'Please Check your Infos.';
      }
    }
    if(isset($_POST['btn-save-team'])){

      $name = $_POST['name-team'];
      $imglink = $_POST['team-img'];
      $teamcomment = $_POST['team-comment'];

      $sqlteam = "INSERT INTO `team` (`name`, `Imgsrc`, `functions`)
      VALUES ('$name', '$imglink', '$teamcomment')";
      $resultteam = mysqli_query($con,$sqlteam);
      if($resultteam){
          echo 'Added Team Member '.$name;

      } else{
        echo 'Please Check your Infos.';
      }
    }
  ?>
