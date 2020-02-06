<?php
include "../koneksi.php";

$NIS_siswa 	      = $_POST["NIS_siswa"];
$NIP			  = $_POST["NIP"];
$Nama_siswa 	  = $_POST["Nama_siswa"];
$Semester	      = $_POST["Semester"];
$Tahun_ajaran	  = $_POST["Tahun_ajaran"];
$Kode_jurusan     = $_POST ["jurusan1"];
$Kode_kelas       = $_POST ["kelas1"];
$Alamat_siswa 	  = $_POST["Alamat_siswa"];
$No_hp_siswa 	  = $_POST["No_hp_siswa"];
$Nama_wali_siswa  = $_POST["Nama_wali_siswa"];
$No_hp_wali_siswa = $_POST["No_hp_wali_siswa"];
$photo 			  = $_POST["photo"];

		
if ($edit = mysqli_query($konek, "UPDATE siswa SET NIS_siswa='$NIS_siswa',NIP='$NIP', Nama_siswa='$Nama_siswa',Semester='$Semester',Tahun_ajaran='$Tahun_ajaran',Kode_jurusan='$Kode_jurusan',Kode_kelas='$Kode_kelas', Alamat_siswa='$Alamat_siswa', 
	No_hp_siswa='$No_hp_siswa', Nama_wali_siswa='$Nama_wali_siswa', No_hp_wali_siswa='$No_hp_wali_siswa',photo='$photo' WHERE NIS_siswa='$NIS_siswa'")){
		
		echo "<script>window.alert('Data tersimpan')
    window.location='siswa.php'</script>";
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>