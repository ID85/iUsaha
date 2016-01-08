<?php
include "koneksi_mysql.php";

$id    = $_GET['id'];

$query = mysql_query("delete from veri where id='$id'");
if ($query) {
  echo "<script>alert('data berhasil dihapus');
  document.location.href='Kategori-usaha.php'</script>\n";
} else {
  echo "<script>alert('data gagal dihapus');
  document.location.href='Kategori-usaha.php'</script>\n";
}
?>