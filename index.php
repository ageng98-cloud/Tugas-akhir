<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Monitoring siswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<br/>
	<br/>
	<center><h2>SMKN 4 Bandar Lampung</h2></center>	
	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="NIP" id="NIP" required oninvalid="this.setCustomValidity('username tidak boleh kosong')" oninput="setCustomValidity('')" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="Password" id="Password" required oninvalid="this.setCustomValidity('password tidak boleh kosong')" oninput="setCustomValidity('')" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("NIP").value;
		var password = document.getElementById("Password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username atau Password salah !');
			return false;
		}
	}
 
</script>
</html>