<?php

include "../koneksi.php";

$Kode_kelas	= $_GET["Kode_kelas"];

if($delete = mysqli_query ($konek, "DELETE FROM kelas WHERE Kode_kelas='$Kode_kelas'")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));
?>