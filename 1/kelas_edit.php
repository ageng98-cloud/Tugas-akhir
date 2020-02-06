<?php
include "../koneksi.php";

$Kode_kelas 	  = $_POST ["Kode_kelas"];
$Kode_jurusan     = $_POST["Kode_jurusan"];
$Nama_kelas 	  = $_POST["Nama_kelas"];

if ($edit = mysqli_query($konek, "UPDATE kelas SET Kode_kelas='$Kode_kelas',Kode_jurusan='$Kode_jurusan',Nama_kelas='$Nama_kelas'  WHERE Kode_kelas='$Kode_kelas'")){
		header("Location: kelas.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
?>