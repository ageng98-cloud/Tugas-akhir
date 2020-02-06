<?php
session_start();
include "../koneksi.php";

$NIP	= $_GET["id"];

$querykelas = mysqli_query($konek, "SELECT * FROM guru_bk WHERE NIP='$NIP'");
if($querykelas == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kelas = mysqli_fetch_array($querykelas)){

?>		
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Monitoring Siswa</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="siswa.php"><i class="fa fa-group"></i><span>Data Siswa</span></a></li>
					<li><a href="kelas.php"><i class="fa fa-user"></i><span>Tambah data kelas</span></a></li>
					<li><a href="point.php"><i class="fa fa-columns"></i><span>Data Pelanggaran Siswa</span></a></li>
			        <li><a href="surat.php"><i class="fa fa-download"></i><span>Cetak Surat</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Edit Data User
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
				<div class="modal-body">
						<form action="user_edit2.php" name="modal_popup" enctype="multipart/form-data" method="post">
								<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="NIP" type="text" class="form-control" value="<?php echo $kelas["NIP"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Akses</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										 <select id="id_usergroup" class="form-control" name="id_usergroup" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                <option value=>Please Select</option>
                                                <?php
                                                    $query = mysqli_query($konek, "SELECT * FROM usergroup ORDER BY nama_usergroup");
                                                    while ($row = mysqli_fetch_array($query)) { ?>
													
                                                    <option value="<?php echo $row['id_usergroup']; ?>">
                                                        <?php echo $row['nama_usergroup']; ?> 
                                                    </option>

                                                <?php } ?>
                                            </select>
									</div>
							</div>
							<div class="form-group">
								<label>Nama guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Nama_guru" type="text" class="form-control" value="<?php echo $kelas["Nama_guru"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Password" type="password" class="form-control" Placeholder="Masukan password baru"/>
									</div>
							</div>
							<div class="form-group">
								<label>Pendidikan Terakhir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Pendidikan_terakhir" type="text" class="form-control" value="<?php echo $kelas["Pendidikan_terakhir"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $kelas["Alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nomor HP </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Nomor_hp" type="text" class="form-control" value="<?php echo $kelas["Nomor_hp"]; ?>"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<a href="kelas.php"><button class="btn btn-success" type="submit" name="submit" >
									Cancel
								</button></a>
							</div>
						</form>
				
			
			
<?php
			}

?>
				</div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		 </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>