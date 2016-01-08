<?php 
/*include "koneksi_mysql.php";
session_start();
if(session_is_registered('admin')){
   echo 'Selamat datang';
}else {
     header ('location:login.php');
}*/

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-1" href="index.php">
                    <img src="images/iUsahaLogo.png"/>
                </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/iUsaha-F.png"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<!-- <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form> -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Kelola Member<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="daftar-member.php">Daftar Member</a>
                                </li>
                                <li>
                                    <a href="kategori-usaha.php">Kategori Usaha</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Upload<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="up-berita.php">Berita</a>
                                </li>
                                <li>
                                    <a href="up-informasi.php">Informasi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    </div>
        <div id="page-wrapper">
            <div class="graphs">
                <?php
                 //koneksi ke database
                mysql_connect("localhost", "root", "");
                mysql_select_db("iusaha");

      
                $query = "select  * from images";  
                $result = mysql_query($query);  
                $i=1;  

                ?>   
                <div class="top-grids">
                    <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                        <div class="resent-grid-info recommended-grid-info">
                            <a href="#"> 
                              
                            </a>
                            <!-- <ul>
                                <li><p class="author author-info"><a href="#" class="author"> Slamet N</a></p></li>
                                <li class="right-list"><p class="views views-info"> 221 views</p></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="content_bottom">
                    <div class="col-md-8 span_3">
                    <?php
                    /*echo '<table>';  */
                    /*echo '<tr>';*/
                                
                    while($image= mysql_fetch_array($result)){ 

                        /*echo '<td><p>'.$judul_artikel.'</p></td>';*/
                        ?>
                        
                            <div class="bs-example1" data-example-id="contextual-table">

                                <?php 
                                $judul_artikel = $_GET['judul_artikel'];
                                echo '<h3>'.$judul_artikel['judul_artikel'].';</h3>';
                                echo '<img src="get.php?id='.$image['id'].'" width="300" height="170" />'; 
                                    if($i % 4 == 0){  
                                        echo '';  
                                    } 
                                /*echo '</tr>'; */ 
                                /*echo '</table>'; */
                                ?>
                            </div>
                        <br>
                    <?php
                        $i++;  
                    }
                    ?>
                    </div>
                    <div class="col-md-4 span_4">
                        <div class="col_2">
                            <?php 
                            $host = "localhost";
                            $user = "root";
                            $password = "";
                            $database_name = "iusaha";
                            $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                            ));
                            $query =  $pdo->prepare("select * from k_admin_ku ");
                            $query->execute();
                            while($k_admin_ku = $query->fetch()){
                            ?>
                                   <div class="col-md-6 col_1_of_2 span_1_of_2">
                                     <a class="tiles_info">
                                        <div class="tiles-head red1">
                                            <div class="text-center"><?php echo $k_admin_ku['jenis_usaha']?></div>
                                        </div>
                                        <div class="tiles-body red"></div>
                                     </a>
                                    </div>
                            <?php 
                            }
                         ?>
                        </div>
                        <div class="cloud">
                            
                            <p class="monday">
                            <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $tanggal= mktime(date("m"),date("d"),date("Y"));
                                $tglsekarang = date("Y-m-d", $tanggal);
                                echo $tglsekarang;
                            ?>
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>/
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
