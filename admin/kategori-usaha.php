<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once 'dbconfig.php';

if(isset($_POST['tambah']))
{

  $jenis_usaha = trim($_POST['jenis_usaha']); 
 
   if($jenis_usaha=="") {
      $error[] = "Isi Kategori usaha !"; 
   }
   else
   {
      try
      {
         $stmt = $DB_con->prepare("SELECT jenis_usaha FROM k_admin_ku WHERE jenis_usaha=:jenis_usaha");
         $stmt->execute(array(':jenis_usaha'=>$jenis_usaha));
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
         if($row['jenis_usaha']==$jenis_usaha) {
            $error[] = "Kategori Usaha sudah ada !";
         }
         else
         {
            if($user->k_usaha($jenis_usaha)) 
            {
                $user->redirect('Kategori-usaha.php?joined');
            }
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
  } 
}

if(isset($_POST['tambah'])){
  
  $error[] = "Kategori Usaha sudah ada !";

  $kd_kat_usaha = trim($_GET['kd_kat_usaha']);

  $pdo->exec("DELETE FROM k_admin_ku WHERE kd_kat_usahah = 'kd_kat_usaha'");
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

<!DOCTYPE HTML>
<html>
<head>
<title>Kategori Usaha</title>
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
      <!-- /#page-wrapper -->
            <!-- </div> -->
            <!-- BAGIAN ISI -->

            <div id="page-wrapper">
                <div class="col-md-12 graphs">
                    <div class="xs">
                        <h3>Tabel Member</h3>
                            <h4>Tambah Kategori Usaha</h4>
                            <form method="post">
                                <input type="text" class="form-control-kt" id="exampleInputAlamat1" placeholder="Kategori Usaha" name="jenis_usaha" required=" ">
                                <div class="form-group-u">
                                    <button type="submit" class="btn btn-primary" name="tambah" onclick="alert('Kategori Usaha Telah Ditambahkan')">Tambah</button>
                                    <button type="reset" class="btn btn-default">Batal</button>
                                </div>
                            </form>
                            <div class="bs-example4" data-example-id="contextual-table">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Jenis Usaha</th>
                                      <th>Jumlah Member</th>
                                      <th>Keterangan</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php while($k_admin_ku = $query->fetch()){?>
                                    <tr class="active">
                                      <th scope="row"><?php echo $k_admin_ku['kd_kat_usaha']?></th>
                                      <td><?php echo $k_admin_ku['jenis_usaha']?></td>
                                      <td></td>
                                      <td></td>
                                      <td align="center">
                                      <!-- <form method="post">
                                          <button type="submit" class="btn btn-default" name="hapus">Hapus</button>
                                      </form> -->
                                      </td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
            <!-- //BAGIAN ISI -->
<!--         </div>/ -->
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
