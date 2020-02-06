<?php
include "../koneksi.php";

$Id_pelanggaran_siswa = $_POST ["Id_pelanggaran_siswa"];
$NIP			  = $_POST['NIP'];
$NIS_siswa 	      = $_POST["NIS_siswa"];
$Tanggal_pelanggaran_siswa = $_POST ["Tanggal_pelanggaran_siswa"];
$Kode_pelanggaran = $_POST["Kode_pelanggaran"];
$Keterangan       = $_POST ["Keterangan"];

$cek = mysqli_num_rows(mysqli_query($konek,"SELECT Id_pelanggaran_siswa from pelanggaran_siswa WHERE Id_pelanggaran_siswa='$_POST[Id_pelanggaran_siswa]'"));
    if ($cek > 0){
    echo "<script>window.alert('ID yang anda masukan sudah ada')
    window.location='point.php'</script>";
    }else {
    mysqli_query($konek,"INSERT INTO pelanggaran_siswa (Id_pelanggaran_siswa,NIP, NIS_siswa,Tanggal_pelanggaran_siswa,Kode_pelanggaran,Keterangan) VALUES 
	('$Id_pelanggaran_siswa','$NIP','$NIS_siswa','$Tanggal_pelanggaran_siswa','$Kode_pelanggaran','$Keterangan')");
 
    echo "<script>window.alert('Data tersimpan')
    window.location='point.php'</script>";
    }

?>


