-----------------------/*DATABASE UTAMA*/-------------------------

/*Database Member*/
CREATE TABLE member (
    id_member INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(15) NOT NULL,
    nama VARCHAR(50),
    alamat VARCHAR(50),
    email VARCHAR(30),
    jenis_kel VARCHAR(15),
    tgl_lhr INT(2),
    bln_lhr VARCHAR(10),
    thn_lhr INT(4),
    jenis_usaha VARCHAR(30)
) 

CREATE TABLE `images` (
  `id` int(11) NOT NULL auto_increment,
  'judul_artikel' varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` longblob NOT NULL,
  'isi_artikel' varchar(15000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE admin (
    id_admin INT(5) AUTO_INCREMENT PRIMARY KEY,
    admin VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    )

/*Database Admin ----> Bagian Upload Informasi dan Berita*/
CREATE TABLE k_admin(
    kd_upload INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tanggal_up VARCHAR(30) NOT NULL,
    judul VARCHAR(500) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    image LONGBLOB NOT NULL,
    dokumen TEXT (150000) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Database Admin ----> Bagian Tambah dan hapus kategori usaha*/
CREATE TABLE k_admin_ku(
    kd_kat_usaha INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    jenis_usaha VARCHAR(100) NOT NULL,
    isi TEXT (150000) NOT NULL
    )

-----------------------/*//DATABASE UTAMA*/-------------------------
