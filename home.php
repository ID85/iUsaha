<?php
include_once 'dbconfig.php';
if(!$user->is_loggedin())
{
 	$user->redirect('login-form.php');
}
$id_member = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM member WHERE id_member=:id_member");
$stmt->execute(array(":id_member"=>$id_member));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>welcome - <?php print($userRow['email']); ?>- iUsaha</title>
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

<!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.css" rel="stylesheet">
  <!-- Optional Bootstrap Theme -->
  <link href="data:text/css;charset=utf-8," data-href="../dist/css/bootstrap-theme.css" rel="stylesheet" id="bs-theme-stylesheet">
<!-- Documentation extras -->
<link href="../assets/css/src/pygments-manni.css" rel="stylesheet">
<link href="../assets/css/src/docs.css" rel="stylesheet">
<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="../assets/js/ie-emulation-modes-warning.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" href="/favicon.ico">
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
          <a class="navbar-brand" href="index.html"><h1><img src="images2/iUsahalogo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right" >
					<input type="text" class="form-control" placeholder="Cari Partner...">
					<input type="submit" value=" " name="submit">
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
					<li class="active"><a href="home.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li><a href="myprofil.php" class="user-icon"><span class="glyphicon glyphicon-m glyphicon-user" aria-hidden="true"></span>MyProfil</a></li>
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
					<div class="side-bottom">
						 <div class="copyright">
							<p>Copyright © 2015 <a href=""> iUsaha</a></p>
						</div>
					</div>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">


				<div class="content">
				welcome : <?php print($userRow['username']); ?>
				</div>
				<!-- <div class="top-grids">
					<div class="graphs"> -->
                <?php
                 //koneksi ke database
                mysql_connect("localhost", "root", "");
                mysql_select_db("iusaha");

      
                $query = "select  * from images";  
                $result = mysql_query($query);  
                $i=1;
                $image= mysql_fetch_array($result);
                $judul_artikel= mysql_fetch_array($result);
                ?>   
                
            <!-- </div>
				</div> -->
				<div class="top-grids">
					<?php
                    /*echo '<table>';  */
                    /*echo '<tr>';*/
                                
                    while($image= mysql_fetch_array($result)){ 

                        /*echo '<td><p>'.$judul_artikel.'</p></td>';*/
                        ?>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-info recommended-grid-info-2">
							<a href="#" class="title title-info">
								<?php 
									$judul_artikel = $_GET['judul_artikel'];
									echo '<h3>'.$judul_artikel['judul_artikel'].'</h3>';
								?>
							</a>
							<a href="#">
								<?php 
									echo '<img src="get.php?id='.$image['id'].'" width="300" height="170"/>';
								?>
							</a>
							<?php
								if($i % 4 == 0){  
	                                echo '';  
	                            } 
                             ?>
							<!-- <ul>
								<li><p class="author author-info"><a href="#" class="author"> Slamet N</a></p></li>
								<li class="right-list"><p class="views views-info"> 221 views</p></li>
							</ul> -->
						</div>
					</div>
					<?php
                        $i++;  
                    }
                    ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images-b work. Don't actually copy the next line! -->
  </body>
</html>