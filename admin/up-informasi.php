
<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Upload Informasi</title>
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
                        
                            <div class="widget-body">
                             <h3>Publish Informasi KeBeranda Member</h3>
                                <div class="editor">
                                    <div class="upload-right">
                                        <?php
                                            date_default_timezone_set('Asia/Jakarta');
                                            $tanggal= mktime(date("m"),date("d"),date("Y"));
                                            $tglsekarang = date("Y-m-d", $tanggal);
                                            echo $tglsekarang;
                                        ?>

                                    </div>
                                </div>
                            </div>
                        
                            <div class="widget-body">
                                <div class="editor">
                                    <div class="upload-right">
                                        <!-- <h4>Publish Informasi</h4> -->

                                            <!-- <div class="form-group-u">
                                                <input type="text" class="form-control1 input-lg" name="judul_artikel" placeholder="Enter title ...">
                                            </div>
                                            <div class="editor-u" >
                                                <div class="editor-toolbar">
                                                    <div class="btn-group">
                                                        <button class="btn btn-link link1"><span class="fa fa-code"></span></button>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link link1"><span class="fa fa-font"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-paragraph"></span></button>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link link1"><span class="fa fa-bold"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-italic"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-underline"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-strikethrough"></span></button>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link link1 active"><span class="fa fa-align-left"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-align-center"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-align-right"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-align-justify"></span></button>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link link1"><span class="fa fa-list-ul"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-list-ol"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-outdent"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-indent"></span></button>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button class="btn btn-link link1"><span class="fa fa-table"></span></button>
                                                        <button class="btn btn-link link1"><span class="fa fa-th"></span></button>
                                                    </div>
                                                </div>
                                                <div class="editor-content ng-isolate-scope" mb-scrollbar="contentScrollbar">
                                                    <div class="editor-input ng-scope" contenteditable="true" >
                                                        <p name="isi_artikel">...</p>
                                                    </div>
                                                </div>
                                                <div class="form-group-u">
                                                    <button type="submit" name="submit" class="btn btn-primary">Publish</button>
                                                    <button type="reset" name="reset" class="btn btn-default">Reset</button>
                                                </div>
                                            </div> -->
                                            
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <h4>Upload Deskripsi dan Gambar atau Foto</h4>
                                            <input type="text" class="form-control1 input-lg" name="judul_artikel" placeholder="Tambahkan Keterangan">
                                            Pilih File : <input type="file" name="image"> 
                                            <input type="submit" value="Upload gambar">
                                        </form>

                                        <?php
                                            //koneksi ke database
                                            mysql_connect("localhost", "root", "");
                                            mysql_select_db("iusaha");


                                           /* $file = ;*/
                                            if(!isset($_FILES['image']['tmp_name'])){
                                                echo 'Pilih file gambar';
                                            }else{

                                                $judul_artikel = addslashes($_POST['judul_artikel']);
                                                $image      = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                                $image_name = addslashes($_FILES['image']['name']);
                                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                                if($image_size == false){
                                                    echo 'File yang anda pilih tidak gambar';
                                                }else{
                                                    if(!$insert = mysql_query("INSERT INTO images VALUES(NULL, '$image_name', '$image', '$judul_artikel', '')")){
                                                        echo 'Gagal upload gambar';
                                                    }else{
                                                        //ambil id terakhir insert
                                                        $lastid = mysql_insert_id();

                                                        echo '<p>Keterangan Gambar : "'.$judul_artikel.'"</p>';
                                                        echo 'Gambar berhasil di upload.<p>Gambar anda:</p><img src="get.php?id='.$lastid.'">';
                                                    }
                                                }
                                            }
                                                
                                        ?>

                                        
                                    </div>
                                </div>
                            </div>
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
