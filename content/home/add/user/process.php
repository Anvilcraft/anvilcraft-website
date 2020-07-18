<?php
  include('../../../dbcon.php');
    if(isset($_POST['btn-save'])){
      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
        $sql = "INSERT INTO `users` (`username`, `password`, `name`)
        VALUES ('$username', '$password', '$name')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo 'Benutzeraccount erfolgreich hinzugefügt.';
        } else{
          echo 'Please Check your Infos.';
          echo "<br>NAME: ".$name."<br>USERNAME: ".$username."<br>PASSWORD: ".$password;
        }

   }
  ?>
