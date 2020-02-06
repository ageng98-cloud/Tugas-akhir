<?php

include "../koneksi.php";

$NIS_siswa	= $_GET["NIS_siswa"];

if($delete = mysqli_query ($konek, "DELETE FROM siswa WHERE NIS_siswa='$NIS_siswa'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>