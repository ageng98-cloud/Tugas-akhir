<?php

include "../koneksi.php";

$NIP	= $_GET["NIP"];

if($delete = mysqli_query ($konek, "DELETE FROM guru_bk WHERE NIP='$NIP'")){
	header("Location: tambah.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>