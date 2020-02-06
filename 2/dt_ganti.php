<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover">
    </div>
    
  </section>
  <section class="login-content">
    <div class="login-box">
     <p style="padding-left:20%; color:green">
      <form action="ganti_edit.php" method="post" >
          <div class="form-group">
            <input class="form-control" type="hidden" name="NIP" value="<?php echo $_SESSION['NIP']; ?>">
          </div>
		  <div class="form-group">
            <input class="form-control" type="password" placeholder="Password lama" id="Password" name="Password">
          </div>
		  <div class="form-group">
            <input class="form-control" type="password" placeholder="Password baru " id="baru" name="baru">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Ulangi Password" id="ulang" name="ulang">
          </div>
          <div class="form-group btn-container">
            <button type="submit" name="change" onclick="return valid();" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET PASSWORD</button>
          </div>
        </form>
      </div>
    </section>
  </body>
  </html>