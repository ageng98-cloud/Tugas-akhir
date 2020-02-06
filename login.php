<?php

session_start();
include "koneksi.php";
$NIP  	 	 = $_POST['NIP'];
$Password   = md5 ($_POST['Password']);
$cek         = mysqli_query($konek, "select * from guru_bk where NIP='$NIP' and Password='$Password'");
$result      = mysqli_num_rows($cek);
if($result>0){
    $user = mysqli_fetch_array($cek);
    session_start();
    $_SESSION['NIP'] = $user['NIP'];
	$_SESSION["Password"] 			= $user["Password"];
	$_SESSION["id_usergroup"] 	= $user["id_usergroup"];
	if ($_SESSION["id_usergroup"] == 1){
					header ("Location: 1/index.php");
					exit();
				}
				else if($_SESSION["id_usergroup"] == 2){
					header ("Location: 2/index.php");
					exit();
				}
				
				else{
					header("Location :pagenotfound.php");
					exit();
				}
			}
		
else{
  echo"<script>alert('username atau password salah')</script>";
  echo"<meta http-equiv='refresh' content='1 url=index.php'>";

	
}
?>