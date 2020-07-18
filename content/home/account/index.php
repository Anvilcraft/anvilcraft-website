<html>
 <head>
   <title>Accout bearbeiten | Anvilcraft</title>
   <link rel="icon" type="image/png" href="/favicon.png">
 </head>
 <body>
   <?php
     include('../../dbcon.php');
     include('../../session.php');
             $result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
             $row=mysqli_fetch_array($result);

     if(!empty($_COOKIE['user'])){     //1: Administrator ; 2: normal User; 0: unangemeldet
       include 'site.php';
     } else{
         include '../tools/fwtologin.php';
   }
    ?>
 </body>
 </html>
