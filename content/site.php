<html>
<head>
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css">
<link rel="stylesheet" type="text/css" href="/style/current_user/style.css">
<link rel="stylesheet" type="text/css" href="/style/main.css">

<style>
.btn_style_url{
  background: rgba(0,0,0,0.27);
  padding: 6px;
  color: white;
  border: solid 0.5px white;
  width: 25%;
  height: 35px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);
}
#btn_style_url2{
  background: rgba(0,0,0,0.27);
  padding: 6px;
  color: white;
  border: solid 2.5px white;
  width: 25%;
  height: 35px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);
  background-color: #aaaa;
}
</style>

<script src="https://embed.twitch.tv/embed/v1.js"></script>
</head>  <?php
  include('tools/fwtohome.php');
include('includes/nav_bar/pub.php');
include('dbcon.php');
   ?>
<body>

   <h1>ANVILCRAFT</h1>
<div class="about-container">
   <h2 id="About">Über Anvilcraft</h2>
</div>
<div class="team-container">
<h2 id="Team">Das Team</h2>



<?php
$sqlteam = "SELECT * FROM team";
$db_ergteam = mysqli_query( $con, $sqlteam );
if ( ! $db_ergteam )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
echo'<div class="team-wrapper">';
while ($zeileteam = mysqli_fetch_array( $db_ergteam, MYSQLI_ASSOC))
{
  $ranks = "";
  if($zeileteam['TILERA']==1){
    $ranks .=' TILERA, ';
  } if($zeileteam['SERVER-Administration']==1){
    $ranks .=' Server-Administrator, ';
  }if($zeileteam['Anvilcraft-Team']==1){
    $ranks .=' Anvilcraft Team ';
  }if($zeileteam['Moderator']==1){
    $ranks .=' Moderator ';
  }
echo '
<div class="team-box">
  <h4 class="teammember-name">'.$zeileteam['name'].'</h4>
  <img src="'.$zeileteam[imgsrc].'" class="team-img">
  <b>RANK:</b>'.$ranks.'
</div>';

}
echo '</div>';
mysqli_free_result( $db_ergteam );
?>


</div>
<br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="str-container">
   <h2 id="streamer">Streamer</h2>
    <?php
    $sql = "SELECT * FROM streamer";
    $db_erg = mysqli_query( $con, $sql );
    if ( ! $db_erg )
    {
      die('Ungültige Abfrage: ' . mysqli_error());
    }
    echo'<div class="str-wrapper">';
    while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
    {
    echo '
    <div class="str-box">
      <h4 class="str-title">'.$zeile['name'].'</h4>
    <iframe class="ifr-str" src="https://player.twitch.tv/?channel='.$zeile[twitchname].'&muted=true&parent=www.anvilcraft.net" frameborder="0" allowfullscreen="true" scrolling="no" height="200" width="300"></iframe>
    </div>';

    }
    echo '</div>';
    mysqli_free_result( $db_erg );
    ?>
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

   <h2 id="YouTuber">YouTuber</h2>
   <?php
   $sqlyt = "SELECT * FROM yter";
   $db_ergyt = mysqli_query( $con, $sqlyt);
   if ( ! $db_ergyt )
   {
     die('Ungültige Abfrage: ' . mysqli_error());
   }
   echo'<div class="str-wrapper">';
   while ($zeileyt = mysqli_fetch_array( $db_ergyt, MYSQLI_ASSOC))
   {
   echo '
   <div class="yt-box">
     <h4 class="str-title">'.$zeileyt['name'].'</h4>
   <iframe class="ifr-str" src="'.$zeileyt['ytlink'].'" frameborder="0" allowfullscreen="true" scrolling="no" height="200" width="300"></iframe>
   </div>';

   }
   echo '</div>';
   mysqli_free_result( $db_erg );
   ?>

</body>
</html>
