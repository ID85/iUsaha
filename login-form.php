<?php
	session_start();
	include "koneksi_mysql.php";
	
	if(isset($_POST["login"])){
		$username = $_POST['username'];
		$new_password = $_POST['password'];
		
		$hasil = mysql_query("select username from member where username = '$username' and password = '$new_password'");
		$user_data = mysql_fetch_array($hasil);
		$data_ada = mysql_num_rows($hasil);
		if ($data_ada > 0){			
			$_SESSION['username'] = $user_data['username'];
			header("location: home.php");
		}
		else{
		?>
			<script language="javascript">
				alert("Username atau Password Anda salah!");
				document.location="login-form.php";
			</script>
	<?php  
		}
	}

/*require_once 'dbconfig.php';

if($user->is_loggedin()!="")
{
    $user->redirect('home.php');
}

if(isset($_POST['login']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
  
   if($user->loginn($username,$password))
   {
      $user->redirect('home.php');
   }
   else
   {
      $error = "Wrong Details !";
   } 
}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Sintony:700,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Infusion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->

</head>
<body>
<!-- header -->
<div class="header">
	<div class="header-left">
		<a href="index.php"><img src="images2/iUsahaLogo.png" alt=""/></a>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images2/menu.png" alt=""/></span>
			<ul class="nav1">
				<li><a href="index.php">HOME</a></li>
				<li><a href="profil_iu.php">PROFILE</a></li>
				<li><a href="services.php">BANTUAN</a></li>	
				<li><a href="register.php">REGISTER</a></li>
				<li><a href="login-form.php" class="active">LOGIN</a></li>
			</ul>
			<!-- script for menu -->
			<script> 
				$( "span.menu" ).click(function() {
				$( "ul.nav1" ).slideToggle( 300, function() {
				 // Animation complete.
				});
				});
			</script>
			<!-- //script for menu -->
	</div>
	<div class="clearfix"></div>
</div>

<!-- //header -->
<!-- main -->
	<div class="main">
		<div class="main-info2">
			<form method="post">
				<h3>Log in</h3>
				<div class="in-form">
					<?php
		            if(isset($error))
		            {
			            ?>
			            <div class="alert alert-danger">
			                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
			            </div>
			            <?php
			           	}
		            ?>
		            <div class="form-group">
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" required=" ">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required=" ">
					</div>
						<!-- <div class="ckeck-bg">
							<div class="checkbox-form">
								<div class="check">
									<label class="checkbox">
									<input type="checkbox" name="checkbox" value="1" checked=""><i> </i>Remember Me
									</label>
								</div>
							</div>
						</div> -->
					<div class="clearfix"></div><hr />
					<div class="form-group">
						<div class="check-sub">
							<input type="submit" name="login" class="btn btn-default" value="Login">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- //main -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-2 footer-grid logobtm">
				<a href="index.php">iUsaha (instruksi Usaha)</a>
			</div>
			<div class="col-md-5 footer-grid">
				<p>iUsaha Memberikan kemudahan bagi wirausahawan dan para pemilik modal yang ingin berwirausaha. Dengan adanya iUsaha wirausahawan dapat bekerjasama membangun usaha sehingga peluang keberhailan leebih meningkat.</p>
			</div>
			<div class="col-md-3 footer-grid">
				<p>iUsaha sebagai wadah bagi wirausahawan dan pemilik modal untuk melakukan kerjasama.</p>
			</div>
			<!-- <div class="col-md-2 footer-grid">
				<ul>
					<li><a href="#">List one</a></li>
					<li><a href="#">Page two</a></li>
					<li><a href="#">Design</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="contact.php">Contact Me</a></li>
				</ul> -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="copy-right">
			<p>Copyright &copy; 2015 <a href="#"> iUsaha</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>