<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
		<a href="index.html"><img src="images2/iUsahaLogo.png" alt=""/></a>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images2/menu.png" alt=""/></span>
				<ul class="nav1">
					<li><a href="index.html">HOME</a></li>
					<li><a href="services.html">SERVICES</a></li>
					<li><a class="active" href="daftar-usaha.php">DAFTAR USAHA</a></li>
					<li><a href="about.html">BANTUAN</a></li>	
					<li><a href="contact.html">CONTACT</a></li>
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
<!-- main -->
<div class="main">
		<div class="main-info2">
			<h3>Register</h3>
			<div class="in-form">
			<div class="form-group">
				<form action="userlogin.php" method="post">

  <fieldset>
  <legend><strong>Nama</strong></legend>
  <label id="firstname-label" class="firstname">
  <strong>Nama depan</strong>
  <input n="1" value="" name="FirstName" id="FirstName" spellcheck="false" type="text">
  <span style="display: block;" class="placeholder-text" id="firstname-placeholder">Nama Depan</span>
  </label>
  <label id="lastname-label" class="lastname">
  <strong>Nama belakang</strong>
  <input n="2" value="" name="LastName" id="LastName" spellcheck="false" type="text">
  <span style="display: block;" class="placeholder-text" id="lastname-placeholder">Nama Belakang</span>
  </label>
  </fieldset>
  
  <span role="alert" class="errormsg" id="errormsg_0_FirstName">
  </span>
  <span role="alert" class="errormsg" id="errormsg_0_LastName">
  </span>
  
					<strong>Nama</strong>
					<input type="text" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap" name="nama" required=" ">
					<strong></strong>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" required=" ">
					<strong>Buat Sandi</strong>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required=" ">
					<strong>Konfirmasi Sandi Anda</strong>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required=" ">
					<strong>Tanggal Lahir</strong>
					<input type="text" class="form-control" id="exampleInputTempat1" placeholder="Tempat Lahir" name="tempat" required=" ">
					
  <fieldset>
  <legend><strong id="BirthdayLabel">Tanggal lahir</strong></legend>
  <label id="year-label" class="year">
  <strong>Tahun</strong>
  <input maxlength="4" value="" name="BirthYear" id="BirthYear" type="text">
  <span style="display: block;" class="placeholder-text" id="birthyear-placeholder">Tahun</span>
  </label>
  <label id="month-label" class="month">
  <span aria-invalid="true" class=" form-error" id="BirthMonth"><div aria-activedescendant=":0" title="Tanggal lahir" aria-haspopup="true" tabindex="0" aria-expanded="false" style="-moz-user-select: none;" role="listbox" class="goog-inline-block goog-flat-menu-button jfk-select"><div aria-posinset="0" aria-setsize="12" role="option" id=":0" class="goog-inline-block goog-flat-menu-button-caption">Bulan</div><div aria-hidden="true" class="goog-inline-block goog-flat-menu-button-dropdown">&nbsp;</div></div><div aria-haspopup="true" role="listbox" style="-moz-user-select: none; visibility: visible; left: 0px; top: -117.633px; display: none;" class="goog-menu goog-menu-vertical"><div id=":1" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Januari</div></div><div id=":2" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Februari</div></div><div id=":3" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Maret</div></div><div id=":4" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">April</div></div><div id=":5" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Mei</div></div><div id=":6" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Juni</div></div><div id=":7" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Juli</div></div><div id=":8" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Agustus</div></div><div id=":9" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">September</div></div><div id=":a" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Oktober</div></div><div id=":b" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">November</div></div><div id=":c" style="-moz-user-select: none;" role="option" class="goog-menuitem"><div class="goog-menuitem-content">Desember</div></div></div><input id="HiddenBirthMonth" name="BirthMonth" type="hidden"></span>
  </label>
  <label id="day-label" class="day">
  <strong>Tanggal</strong>
  <input maxlength="2" value="" name="BirthDay" id="BirthDay" type="text">
  <span style="display: block;" class="placeholder-text" id="birthday-placeholder">Tanggal</span>
  </label>
  </fieldset>
  <span role="alert" class="errormsg" id="errormsg_0_BirthMonth">Tidak boleh dibiarkan kosong.</span>
  <span role="alert" class="errormsg" id="errormsg_0_BirthDay">
  </span>
  <span role="alert" class="errormsg" id="errormsg_0_BirthYear">
  </span>
  
					<strong>Gender</strong>				
					<div id='cssmenu'>
					<ul>
					   <li class='has-sub '><a href='#'><span>Saya..</span></a>
					      <ul>
					         <li><a href='#'><span>Pria</span></a></li>
					         <li><a href='#'><span>Wanita</span></a></li>
					         <li><a href='#'><span>Lainnya</span></a></li>
					      </ul>
					   </li>
					</ul>
					</div>
					<strong>Alamat</strong>
					<input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Alamat" name="alamat" required=" ">
					<strong>Jenis Usaha</strong>
					<input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Alamat" name="alamat" required=" ">
					<div class="btn-group" role="group" aria-label="...">

					<div class="check-sub">
						<ul>
							<li>
								<input type="submit" name="submit" class="btn btn-default" value="Daftar">
							</li>
							<li>
								<input type="submit" name="submit" class="btn btn-default" value="Batal">
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
				<a href="index.html">iUsaha (instruksi Usaha)</a>
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
					<li><a href="contact.html">Contact Me</a></li>
				</ul> -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="copy-right">
			<p>Copyright &copy; 2015 Infusion. Template by <a href="#"> W3layouts</a></p>
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