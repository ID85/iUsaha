<?php
  session_start();
  include "koneksi_mysql.php";
  
  if(isset($_POST["login"])){
    $admin = $_POST['admin'];
    $password = $_POST['password'];
    
    $hasil = mysql_query("select admin from admin where admin = '$admin' and password = '$password'");
    $user_data = mysql_fetch_array($hasil);
    $data_ada = mysql_num_rows($hasil);
    if ($data_ada > 0){     
      $_SESSION['admin'] = $user_data['admin'];
      header("location: index.php");
    }
    else{
    ?>
      <script language="javascript">
        alert("Admin atau Password Anda salah!");
        document.location="login.php";
      </script>
  <?php  
    }
  }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href=""><img src="images/iUsahalogo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post">
  		<input type="text" class="text" name="admin" placeholder="Admin iUsaha...">
  		<input type="password" name="password" placeholder="Passwords...">
  		<div class="submit"><input type="submit" value="Login" name="login"></div>
	</form>
  </div>
</body>
</html>
