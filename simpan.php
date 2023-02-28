<?php
include "koneksi.php";

$npm			= $_POST['npm'];
$nama 			= $_POST['nama'];
$tempatlahir	= $_POST['tempatlahir'];
$tanggallahir	= $_POST['tanggallahir'];
$jeniskelamin	= $_POST['jeniskelamin'];
$alamatemail	= $_POST['alamatemail'];
$telpon			= $_POST['telpon'];
$agama			= $_POST['agama'];
$goldarah		= $_POST['goldarah'];
$prodi			= $_POST['prodi'];
$fakultas		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];

$sql 			="UPDATE biodata SET
npm 			='$npm',
nama 			='$nama',
tempatlahir 	='$tempatlahir',
tanggallahir 	='$tanggallahir',
jeniskelamin 	='$jeniskelamin',
alamatemail 	='$alamatemail',
telpon 			='$telpon',
agama 			='$agama',
goldarah 		='$goldarah',
prodi 			='$prodi',
fakultas 		='$fakultas',
alamat 			='$alamat'";

$hasil=mysqli_query($koneksi,$sql);

if ($hasil) {
	header("location:mahasiswa.php");
	exit;
  }
else {
	header("location:mahasiswa.php");
	exit;
}
?>