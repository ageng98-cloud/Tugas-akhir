<?php
include "../koneksi.php";

$NIP 			  		 = $_POST ["NIP"];
$id_usergroup    		 = $_POST["id_usergroup"];
$Nama_guru 	  	  		 = $_POST["Nama_guru"];
$Password 		  		 = md5 ($_POST['Password']);
$Pendidikan_terakhir     = $_POST["Pendidikan_terakhir"];
$Alamat		    	  	 = $_POST["Alamat"];
$Nomor_hp 			     = $_POST ["Nomor_hp"];

if ($edit = mysqli_query($konek, "UPDATE guru_bk SET NIP='$NIP',id_usergroup='$id_usergroup',Nama_guru='$Nama_guru',Password='$Password',Pendidikan_terakhir='$Pendidikan_terakhir',Alamat='$Alamat',Nomor_hp='$Nomor_hp'  WHERE NIP='$NIP'")){
		header("Location: tambah_edit.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
?>