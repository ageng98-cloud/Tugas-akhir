<?php 

session_start();
error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit'])) {
  $_SESSION['submit']='';
}

if(isset($_POST['change']))
{
 $NIP=$_POST['NIP'];
 $Password   = md5 ($_POST['Password']);
 $baru=$_POST['baru'];
 $ulang=$_POST['ulang'];
 
 $query=mysqli_query($konek,"SELECT * FROM guru_bk WHERE NIP='$NIP' and Password='$Password'");
 $num=mysqli_num_rows($query);
 if($num==1){
	 if($baru==$ulang){
	$b = md5($baru);
  mysqli_query($konek,"update guru_bk set Password='$b' WHERE 	NIP='$NIP'");
  echo"<script>alert('Password berhasil diubah')</script>";
  echo"<meta http-equiv='refresh' content='1 url=ganti.php'>";
}else{
	echo"<script>alert('Password tidak sama,coba lagi')</script>";
  echo"<meta http-equiv='refresh' content='1 url=ganti.php'>";
}
}
else
{
  echo"<script>alert('Password gagal dirubah, silahkan coba lagi')</script>";
  echo"<meta http-equiv='refresh' content='1 url=ganti.php'>";
}
}
?>
