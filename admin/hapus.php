<?php
/*$host = "localhost";
$user = "root";
$password = "";
$database_name = "iusaha";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
if (isset($_GET['kd_kat_usaha'])) {
    $pdo->exec("DELETE FROM k_admin_ku WHERE kd_kat_usaha = '$_GET[kd_kat_usaha]'");
    echo "Data Telah Dihapus";
}*/
include('koneksi_mysql.php');

$kd_kat_usaha = $_GET['kd_kat_usaha'];
 
$sql    = 'delete from k_admin_ku where kd_kat_usaha="'.$kd_kat_usaha.'"';
$query  = mysqli_query($sql);

header("location:kategori-usaha.php")
?>