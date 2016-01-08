
<?php
$host = "localhost";
$user = "root";
$password = "";
$database_name = "iusaha";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
$query =  $pdo->prepare("select * from member");
$query->execute();
?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar Member</title>
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
                        <div class="bs-example4" data-example-id="contextual-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id_member</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Jenis_Kelamin</th>
                                        <th>kelahiran</th>
                                        <th>Jenis_Usaha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($member = $query->fetch()){?>
                                    <tr class="active">
                                        <th scope="row"><?php echo $member['id_member']?></th>
                                        <td><?php echo $member['username']?></td>
                                        <td><?php echo $member['password']?></td>
                                        <td><?php echo $member['nama']?></td>
                                        <td><?php echo $member['alamat']?></td>
                                        <td><?php echo $member['email']?></td>
                                        <td><?php echo $member['jenis_kel']?></td>
                                        <td><?php echo $member['tgl_lhr']?>-<?php echo $member['bln_lhr']?>-<?php echo $member['thn_lhr']?></td>
                                        <td><?php echo $member['jenis_usaha']?></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <ul class="pagination-u">
                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul> -->
                    </div>
                </div>
                <nav>
                    
                </nav>     
            </div>
    </div>
            <!-- //BAGIAN ISI -->
<!--         </div>/ -->
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
