<?php
require_once 'dbconfig.php';

if(isset($_POST['submit']))
{
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$nama = trim($_POST['nama']);
	$alamat = trim($_POST['alamat']);
	$email = trim($_POST['email']);
	$jenis_kel = trim($_POST['jenis_kel']);
	$tgl_lhr = trim($_POST['tgl_lhr']);
	$bln_lhr = trim($_POST['bln_lhr']);
	$thn_lhr = trim($_POST['thn_lhr']);
	$jenis_usaha = trim($_POST['jenis_usaha']); 
 
   if($username=="") {
      $error[] = "provide username !"; 
   }
   else if($password=="") {
      $error[] = "provide password !";
   }
   else if(strlen($password) < 6){
      $error[] = "Password must be atleast 6 characters"; 
   }
   else
   {
      try
      {
         $stmt = $DB_con->prepare("SELECT username FROM member WHERE username=:username");
         $stmt->execute(array(':username'=>$username));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
         if($row['username']==$username) {
            $error[] = "sorry username already taken !";
         }
         else
         {
            if($user->register($username,$password,$nama,$alamat,$email,$jenis_kel,$tgl_lhr,$bln_lhr,$thn_lhr,$jenis_usaha)) 
            {
                $user->redirect('register.php?joined');
            }
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}

if(isset($_POST['reset']))
{
	header('location:index.php?joined');
}

$host = "localhost";
$user = "root";
$password = "";
$database_name = "iusaha";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));

$query =  $pdo->prepare("select * from k_admin_ku");
$query->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>iUsaha - Instruksi Usaha</title>
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
				<li><a href="register.php" >REGISTER</a></li>
				<li><a href="login-form.php">LOGIN</a></li>
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
		<h3>Register</h3>
		<div class="in-form">
			<div class="form-group">

				<form method="post">
			 		<legend><strong>ISI DATA DIRI</strong></legend>
			 		<!-- <span role="alert" class="errormsg" id="errormsg_0_FirstName">
			 		</span>
			  		<span role="alert" class="errormsg" id="errormsg_0_LastName">
			  		</span> -->
			  		 <?php
		            if(isset($error))
		            {
               			foreach($error as $error)
               			{
                  			?>
                  			<div class="alert alert-danger">
                      			<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  			</div>
                  			<?php
               			}
            		}
            		else if(isset($_GET['joined']))
            		{
                 		?>
                		<div class="alert alert-info">
                      		<i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='login-form.php'>login</a> here
                 		</div>
                 		<?php
            		}
            		?>
            		<strong>Kategori Usaha</strong>
					<div class=".col-xs-3" style="">
			            <select class="form-control" placeholder="Kategori Usaha" name="jenis_usaha">
			            	<option value="">Kategori Usaha</option>
			            <?php while($member = $query->fetch()){?>
							<option value="<?php echo $member['jenis_usaha']?>"><?php echo $member['jenis_usaha']?></option>
						<?php }?>
			            </select>
			       </div>
					<strong>Nama</strong>
					<input type="text" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap" name="nama" required=" ">
					<strong>Username</strong>
					<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="username" required=" ">
					<strong>Buat Password</strong>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required=" ">
					<strong>Email</strong>
					<input type="char" class="form-control" id="exampleInputemail" placeholder="Email" name="email" 
					pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Masukkan Email Yang Benar" required=" ">
					<label>Tanggal Lahir</label>
					<br>			
					<div class="form-group-tgl">
						<div class=".col-xs-3" style="padding: 12px">
				            <select class="form-control" name="tgl_lhr">
								<option value="">Tanggal</option> 
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option> 
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option> 
								<option value="08">08</option> 
								<option value="09">09</option> 
								<option value="10">10</option> 
								<option value="11">11</option> 
								<option value="12">12</option> 
								<option value="13">13</option> 
								<option value="14">14</option> 
								<option value="15">15</option> 
								<option value="16">16</option> 
								<option value="17">17</option> 
								<option value="18">18</option> 
								<option value="19">19</option> 
								<option value="20">20</option> 
								<option value="21">21</option> 
								<option value="22">22</option> 
								<option value="23">23</option> 
								<option value="24">24</option> 
								<option value="25">25</option> 
								<option value="26">26</option> 
								<option value="27">27</option> 
								<option value="28">28</option> 
								<option value="29">29</option> 
								<option value="30">30</option> 
								<option value="31">31</option> 
			                </select>	
						</div>
			           
					   	<div class=".col-xs-3" style="padding: 10px">
				            <select class="form-control" name="bln_lhr">
								<option value="">Bulan</option>
								<option value="Januari">Januari</option>
								<option value="Februari">Februari</option>
								<option value="Maret">Maret</option>
								<option value="April">April</option>
								<option value="Mei">Mei</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus</option>
								<option value="September">September</option>
								<option value="Oktober">Oktober</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>
				            </select>
			            </div>
			            <div class=".col-xs-3" style="padding: 12px">
			                <select class="form-control" name="thn_lhr">
								<option value="">Tahun</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
			                </select>
				        </div>
			        </div>    		
					
					<strong>Jenis Kelamin</strong>
					<br>
					<div class=".col-xs-3" style="padding: 12px">
						<select class="form-control" name="jenis_kel">
							<option value="">Jenis Kelamin</option>
							<option value="Laki - laki">Laki - laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<br>
					<strong>Alamat lengkap</strong>
					<input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Alamat Lengkap" name="alamat" required=" ">
					<div class="btn-group" role="group" aria-label="...">
						<div class="check-sub">
							<ul>
								<li>
									<input type="submit" name="submit" class="btn btn-default" value="Daftar">
								</li>
							</ul>
							<ul>
								<li>
									<input type="reset" name="reset" class="btn btn-default" value="Batal">
								</li>
							</ul>
						</div>
					</div>
				</form>
			</div>
		</div>
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
			<p>Copyright &copy; 2015  <a href="#">iUsaha</a></p>
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