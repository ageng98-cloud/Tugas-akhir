<?php
include "../koneksi.php";

$NIP		      = $_POST["NIP"];
$id_usergroup 	  = $_POST["id_usergroup"];
$Nama_guru	      = $_POST["Nama_guru"];
$Password         = md5 ($_POST['Password']);
$Pendidikan_terakhir     = $_POST ["Pendidikan_terakhir"];
$Alamat     = $_POST ["Alamat"];
$Nomor_hp 	  = $_POST["Nomor_hp"];

  $cek = mysqli_num_rows(mysqli_query($konek,"SELECT NIP from guru_bk WHERE NIP='$_POST[NIP]'"));
    if ($cek > 0){
    echo "<script>window.alert('NIP yang anda masukan sudah ada')
    window.location='tambah.php'</script>";
    }else {
    mysqli_query($konek, "INSERT INTO guru_bk (NIP,id_usergroup,Nama_guru,Password,Pendidikan_terakhir,Alamat,Nomor_hp) VALUES 
	('$NIP','$id_usergroup','$Nama_guru','$Password','$Pendidikan_terakhir','$Alamat', '$Nomor_hp')");
 
 echo "<script>window.alert('Data tersimpan')
    window.location='tambah.php'</script>";
   
    }
    
?>