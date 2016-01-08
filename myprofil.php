
<?php

$host = "localhost";
$user = "root";
$password = "";
$database_name = "iusaha";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));

/*$sql = "SELECT kd_member from member order by kd_member desc limit 1";
$results = $pdo->query($sql);
$data = $results->fetch(PDO::FETCH_OBJ);*/

?>
<!DOCTYPE HTML>
<html>
<head>
<title>MyProfil - iUsaha</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css-b/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css-b/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css-b/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><h1><img src="images2/iUsahalogo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Cari Partner...">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="header-top-right">
				<div class="file-m">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="90%">
		      				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
		    			  	<span class="badge"></span>
	    				</button>
						<ul class="dropdown-menu" left="10px" aria-labelledby="dropdownMenu2">
						     <li class="avatar">
						     	<a href="Konfirmasi.php">
									<img src="images-b/eg3.jpg" alt=""/>
									<div>New message</div>
									<small>1 minute ago</small>
								</a>
							</li>
	   					</ul>
	   				</div>
				</div>
				<a href="myprofil.php">
					<div class="file">
						<button type="button" class="btn btn-default btn-sm">
							<span class="" aria-hidden="true"><img src="images-b/s1.jpg" alt=""/></span>
							<span>..</span>
						</button>
					</div>
				</a>	
				<div class="logout">
					<div class="btn-group" role="group">
	    				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="90%">
		      				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		    			  	<span class="caret"></span>
	    				</button>
	    				<ul class="dropdown-menu" left="10px" aria-labelledby="dropdownMenu2">
						     <li><a href="#">Help</a></li>
						     <li><a href="logout.php">Logout</a></li>
	   					</ul>
  					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
	
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images-b/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<li><a href="home.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li class="active"><a href="myprofil.php" class="user-icon"><span class="glyphicon glyphicon-m glyphicon-user" aria-hidden="true"></span>MyProfil</a></li>
					<li><a href="cari-partner.php" class="sub-icon"><span class="glyphicon glyphicon-m glyphicon-search" aria-hidden="true"></span>Cari Partner</a></li>
					<li><a href="daftar-member.php" class="sub-icon"><span class="glyphicon glyphicon-m glyphicon-th-list" aria-hidden="true"></span>Daftar Partner</a></li>
				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				</div>
        </div>
        <form method="post" action="update.php">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>My Profil</h3>
					</div>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
							<?php
                 //koneksi ke database
			                mysql_connect("localhost", "root", "");
			                mysql_select_db("iusaha");

      
			                $query = "select image from member where id_member='20'";  
			                $result = mysql_query($query);  
			                /*$i=1;*/
			                $image= mysql_fetch_array($result);
			                /*$judul_artikel= mysql_fetch_array($result);*/
			     			echo '<img src="get.php?id_member='.$image['id_member'].'" />';
		                    /*echo '<table>';  */
		                    /*echo '<tr>';*/
		                                
		                    /*while($image= mysql_fetch_array($result)){ 

				            //using seperate file get.php to obtain image using the variable $lastid
				            echo '<img src="get.php?id_member='.$image['id_member'].'" />';
				            }   */  
				            ?>
							<div class="time">
								<a href="">Edit Foto Profil</a>
							</div>
						</div>
					</div>
					<?php 
					include('koneksi.php');

					$query =  $db->prepare("SELECT nama, alamat, jenis_usaha, email from member where id_member='20'");
					$query->execute();
					while($member = $query->fetch()){?>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-info recommended-grid-info">
							<ul>
								<li><h5>Nama</h5></li>
									<ul>
										<li><h3><a href="" class="title title-info"><?php echo $member['nama']?></a></h3></li>
										<!-- <li>
											<div class="signup">
												<a href="#small-dialog2" class="play-icon popup-with-zoom-anim" class="author"><p class="author author-info">Edit Nama</p></a>
												<div id="small-dialog2" class="mfp-hide">
													<h3>Edit Nama</h3>
													<div class="signup">
														<form>
															<input type="text" class="alamat" placeholder="Nama Baru" required="required"/>
															<input type="submit"  value="UBAH"/>
														</form>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
												<script>
														$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
															fixedContentPos: false,
															fixedBgPos: true,
															overflowY: 'auto',
															closeBtnInside: true,
															preloader: false,
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});
																														
														});
												</script>
										</li> -->
									</ul>
								<li><h5>Email</h5></li>
									<ul>
										<li><h3><a href="" class="title title-info"><?php echo $member['email']?></a></h3></li>
										<!-- <li> -->
											<!-- <div class="signin">
												<a href="#small-dialog2" class="play-icon popup-with-zoom-anim" class="author"><p class="author author-info">Edit email</p></a> -->
												<!-- pop-up-box -->
												<!-- <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
												<link href="css-b/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
												<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> -->
												<!--//pop-up-box -->
												<!-- <div id="small-dialog2" class="mfp-hide">
													<h3>Edit Email</h3> 
													<div class="signin">
														<form>
															<input type="text" class="email" placeholder="email" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
														</form>
														<div class="continue-button">
															<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">SELESAI</a>
															<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">BATAL</a>
														</div>
													</div>
													<div class="clearfix"> </div>
												</div>	 -->
												<script>
													$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
															fixedContentPos: false,
															fixedBgPos: true,
															overflowY: 'auto',
															closeBtnInside: true,
															preloader: false,
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});														
													});
												</script>	
											<!-- </div>
										</li> -->
									</ul>
								<li><h5>Jenis Usaha</h5></li>
									<ul>
										<li><h3><a href="" class="title title-info"><?php echo $member['jenis_usaha']?></a></h3></li>
										<!-- <li>
											<div class="signup">
												<a href="#small-dialog2" class="play-icon popup-with-zoom-anim" class="author"><p class="author author-info">Edit Nama</p></a>
												<div id="small-dialog2" class="mfp-hide">
													<div class="signup">
														<form>
															<input type="text" class="alamat" placeholder="Nama Baru" required="required"/>
															<input type="submit"  value="UBAH"/>
														</form>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
												<script>
														$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
															fixedContentPos: false,
															fixedBgPos: true,
															overflowY: 'auto',
															closeBtnInside: true,
															preloader: false,
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});
																														
														});
												</script>
										</li> -->
									</ul>
								<li><h5>Alamat</h5></li>
									<ul>
										<li><h3><a href="" class="title title-info"><?php echo $member['alamat']?></a></h3></li>
										<!-- <li> -->
											<!-- <div class="signin">
												<a href="#small-dialog2" class="play-icon popup-with-zoom-anim" class="author"><p class="author author-info">Edit Alamat</p></a>
												<div id="small-dialog2" class="mfp-hide">
													<h3>Edit Alamat</h3>
													<div class="signin">
														<form>
															<input type="text" class="alamat" placeholder="Alamat Baru" required="required"/>
															<input type="submit"  value="UBAH"/>
														</form>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div> -->
												<script>
														$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
															fixedContentPos: false,
															fixedBgPos: true,
															overflowY: 'auto',
															closeBtnInside: true,
															preloader: false,
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});
																														
														});
												</script>
										<!-- </li> -->
									</ul>
							</ul>
						</div>
					</div>
					<?php }?>
			<!-- //footer -->
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
		</form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images-b work. Don't actually copy the next line! -->
  </body>
</html>