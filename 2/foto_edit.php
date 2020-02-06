<?php
include "../koneksi.php";

$NIS_siswa 	      = $_POST["NIS_siswa"];
$NIP			  = $_POST["NIP"];
$Nama_siswa 	  = $_POST["Nama_siswa"];
$Semester	      = $_POST["Semester"];
$Tahun_ajaran	  = $_POST["Tahun_ajaran"];
$Kode_jurusan     = $_POST ["Kode_jurusan"];
$Kode_kelas       = $_POST ["Kode_kelas"];
$Alamat_siswa 	  = $_POST["Alamat_siswa"];
$No_hp_siswa 	  = $_POST["No_hp_siswa"];
$Nama_wali_siswa  = $_POST["Nama_wali_siswa"];
$No_hp_wali_siswa = $_POST["No_hp_wali_siswa"];
$ekstensi_diperbolehkan	= array('jpeg','jpg');
$nama = $_FILES['photo']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['photo']['size'];
$file_tmp = $_FILES['photo']['tmp_name'];





if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				move_uploaded_file($file_tmp, '../aset/akskdjadsfklasdf/'.$nama);		
				if($ukuran < 204800){			
if ($edit = mysqli_query($konek, "UPDATE siswa SET NIS_siswa='$NIS_siswa',NIP='$NIP', Nama_siswa='$Nama_siswa',Semester='$Semester',Tahun_ajaran='$Tahun_ajaran',Kode_jurusan='$Kode_jurusan',Kode_kelas='$Kode_kelas', Alamat_siswa='$Alamat_siswa', 
	No_hp_siswa='$No_hp_siswa', Nama_wali_siswa='$Nama_wali_siswa', No_hp_wali_siswa='$No_hp_wali_siswa',photo='$nama' WHERE NIS_siswa='$NIS_siswa'")){
		header("Location: siswa.php");
		exit();
		if($edit){
						echo "<script>window.alert('Data tersimpan')
						window.location='siswa.php'</script>";
					}
	}
	else{
						echo "<script>window.alert('Gagal mengupload foto')
						window.location='siswa.php'</script>";
					}
				}else{
					echo "<script>window.alert('Ukuran foto terlalu besar, maksimal 200Kb')
						window.location='siswa.php'</script>";
				}
			}else{
				echo "<script>window.alert('Ekstensi file tidak diperbolehkan')
						window.location='siswa.php'</script>";
			}

?>