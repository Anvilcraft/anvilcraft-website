<html>
<head>
<link rel="stylesheet" type="text/css" href="/style/login/style.css">
<link rel="stylesheet" type="text/css" href="/style/main.css">
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css">

<link rel="icon" type="image/png" href="/favicon.png">
<title>Anvilcraft - Login</title>
</head>
<body>
<div class="form-wrapper">
  <form action="#" method="post">
    <h3 id="hf-websrv">Anvilcraft-Login</h3>
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Benutzername" required></input>
    </div>

    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Passwort" required></input>
    </div>

    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
  </div>
  </form>
  <?php
  session_start();
  include('dbcon.php');

  if(!empty($_COOKIE['user'])){
    include('dbcon.php');
    $usercookie = $_COOKIE['user'];
    $pwcookie = $_COOKIE['password'];
    $resultuser=mysqli_query($con, "select * from users WHERE username='$usercookie'")or die('SQL_ERR - Reading Cookies');
    $rowusercookie=mysqli_fetch_array($resultuser);
    $getPWfromSQL = $rowusercookie['password'];
    if($getPWfromSQL==$pwcookie){

      $_SESSION['user_id']=$rowusercookie['user_id'];
      header('location:home');
      echo "Cookie detected! Forwoarding to Home.";
    }
  }

	if (isset($_POST['login']))
		{
			$username = $_POST['user'];
			$password = md5($_POST['pass']);

			$query 		= mysqli_query($con, "SELECT * FROM users WHERE password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);

			if ($num_row > 0)
				{
					$_SESSION['user_id']=$row['user_id'];
          setcookie("user", $username, time() + (3600 * 720)); //1 Monat
          setcookie("password", $password, time() + (3600 * 720)); //1 Monat
					header('location:home');
				}

			else
				{
					echo 'Ungültiges Login!';
				}
		}
  ?>
</div>

</body>
</html>
