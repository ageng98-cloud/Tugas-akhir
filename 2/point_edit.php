<?php
include "../koneksi.php";

$Id_pelanggaran_siswa      = $_POST ["Id_pelanggaran_siswa"];
$NIP				       = $_POST ["NIP"];
$NIS_siswa 	               = $_POST["NIS_siswa"];
$Tanggal_pelanggaran_siswa = $_POST["Tanggal_pelanggaran_siswa"];
$Kode_pelanggaran          = $_POST["Kode_pelanggaran"];
$Keterangan	               =$_POST ["Keterangan"];

if ($edit = mysqli_query($konek, "UPDATE pelanggaran_siswa SET Id_pelanggaran_siswa='$Id_pelanggaran_siswa',NIP='$NIP',NIS_siswa='$NIS_siswa',Tanggal_pelanggaran_siswa='$Tanggal_pelanggaran_siswa',Kode_pelanggaran='$Kode_pelanggaran',Keterangan='$Keterangan'  WHERE Id_pelanggaran_siswa='$Id_pelanggaran_siswa'")){
		header("Location: point.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>