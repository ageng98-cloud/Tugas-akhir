<?php
include "../koneksi.php";

$Kode_kelas 	  = $_POST ["Kode_kelas"];
$Kode_jurusan     = $_POST["Kode_jurusan"];
$Nama_kelas 	  = $_POST["Nama_kelas"];

$cek = mysqli_num_rows(mysqli_query($konek,"SELECT Kode_kelas from kelas WHERE Kode_kelas='$_POST[Kode_kelas]'"));
    if ($cek > 0){
    echo "<script>window.alert('Kode kelas yang anda masukan sudah ada')
    window.location='kelas.php'</script>";
    }else {
    mysqli_query($konek,"INSERT INTO kelas (Kode_kelas, Kode_jurusan,Nama_kelas) VALUES 
	('$Kode_kelas','$Kode_jurusan','$Nama_kelas')");
 
    echo "<script>window.alert('Data tersimpan')
    window.location='kelas.php'</script>";
    }
?>


