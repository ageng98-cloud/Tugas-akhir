<?php
session_start();
include "../koneksi.php";

$NIS_siswa 	      = $_POST["NIS_siswa"];
$NIP			  = $_POST['NIP'];
$Nama_siswa 	  = $_POST["Nama_siswa"];
$Semester	      = $_POST["Semester"];
$Tahun_ajaran	  = $_POST["Tahun_ajaran"];
$Kode_jurusan     = $_POST ["jurusan"];
$Kode_kelas       = $_POST ["kelas"];
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

  $cek = mysqli_num_rows(mysqli_query($konek,"SELECT NIS_siswa from siswa WHERE NIS_siswa='$_POST[NIS_siswa]'"));
    if ($cek > 0){
    echo "<script>window.alert('NIS yang anda masukan sudah ada')
    window.location='siswa.php'</script>";
    }else {
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				move_uploaded_file($file_tmp, '../aset/akskdjadsfklasdf/'.$nama);		
				if($ukuran < 204800){			
					
    $query = mysqli_query($konek, "INSERT INTO siswa (NIS_siswa,NIP,Nama_siswa, Semester,Tahun_ajaran,Kode_jurusan,Kode_kelas,Alamat_siswa,No_hp_siswa, Nama_wali_siswa, No_hp_wali_siswa,photo) VALUES 
	('$NIS_siswa','$NIP','$Nama_siswa','$Semester','$Tahun_ajaran','$Kode_jurusan','$Kode_kelas', '$Alamat_siswa', '$No_hp_siswa', '$Nama_wali_siswa', '$No_hp_wali_siswa','$nama')");
				if($query){
						echo "<script>window.alert('Data tersimpan')
						window.location='siswa.php'</script>";
					}else{
						echo "<script>window.alert('Gagal mengupload foto')
						window.location='siswa.php'</script>";
					}
				}else{
					echo "<script>window.alert('Ukuran foto terlalu besar')
						window.location='siswa.php'</script>";
				}
			}else{
				echo "<script>window.alert('Ekstensi file tidak diperbolehkan')
						window.location='siswa.php'</script>";
			}  
    }
    
?>