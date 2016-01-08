
<!DOCTYPE html>
<html>
<head>
	<title>SERVICES</title>
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
		<a href="index.html"><img src="images2/iUsahaLogo.png" alt=""/></a>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images2/menu.png" alt=""/></span>
				<ul class="nav1">
					<li><a href="index.php">HOME</a></li>
					<li><a href="profil_iu.php">PROFILE</a></li>
					<li><a href="services.php" class="active">BANTUAN</a></li>	
					<li><a href="register.php">REGISTER</a></li>
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
<!-- how we help -->
<div class="how-we-help">
	<div class="container">
		<div class="help-info">
			<h3>HOW WE HELP</h3>
		</div>
		<div class="about-grids">
			<div class="col-md-7 about-grid">
				<h3>MEMBERIKAN LAYANAN </h3>
				<p>Kami menyediakan layanan service untuk keluhan seluruh user </p>
				<p>Menampung seluruh masukkan </p>
				<a href="">READ MORE</a>
			</div>
			<div class="col-md-5 about-grid">
				<img class="img-responsive" src="images/pic2.jpg" alt=""/>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="help-grids">
	<div class="container">
			<div class="col-md-4 help-grid">
				<h3><span>1.</span> KELUHAN</h3>
				<p>Menerima laporan berupa keluhan dari Member, 
				</p>
			</div>
			<div class="col-md-4 help-grid">
				<h3><span>2.</span> ANALISIS</h3>
				<p>Meganalisa laporan keluhan dari Member, 
				</p>
			</div>
			<div class="col-md-4 help-grid">
				<h3><span>3.</span> SOLUSI</h3>
				<p>Memberikan solusi kepada Member, 
				</p>
			</div>
			<div class="clearfix"></div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-2 footer-grid logobtm">
				<a href="index.html">iUsaha</a>
			</div>
			<div class="col-md-5 footer-grid">
				<p>iUsaha Memberikan kemudahan bagi wirausahawan dan para pemilik modal yang ingin berwirausaha. 
				Dengan adanya iUsaha wirausahawan dapat bekerjasama membangun usaha sehingga peluang keberhasilan lebih meningkat.</p>
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
					<li><a href="contact.html">Contact Me</a></li>
				</ul> -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="copy-right">
			<p>Copyright &copy; 2015 <a href="">iUsaha</a></p>
		</div>
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