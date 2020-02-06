<?php
session_start();
include "../koneksi.php";

$NIS_siswa	= $_GET["id"];

$querysiswa = mysqli_query($konek, "SELECT * FROM siswa WHERE NIS_siswa='$NIS_siswa'");
if($querysiswa == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($siswa = mysqli_fetch_array($querysiswa)){

?>
   <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="../aset/bootstrap/js/jquery-chained.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../aset/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
		
		 <script>
            $(document).ready(function() {
                $("#kelas1").chained("#jurusan1");
                
            });
        </script>
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
          <ul class="mainmenu">
              <li class="header"><h4><center><p class="pertama">Menu Panel</p></center></h4></li>
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
					<li><a><i class="fa fa-group"></i> Siswa <span class="fa fa-chevron-down"></span></a>
                    <ul class="submenu">
                      <li><a href="siswa.php">Data Siswa</a></li>
                      <li><a href="siswa_input.php">Input Data Siswa</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-windows"></i> Pelanggaran <span class="fa fa-chevron-down"></span></a>
                    <ul class="submenu">
                      <li><a href="point.php">Data Pelanggaran</a></li>
                      <li><a href="point_input.php">Input Data Pelanggaran</a></li>
                    </ul>
                  </li>
			        <li><a href="surat.php"><i class="fa fa-download"></i><span>Cetak Surat Peringatan</span></a></li>
					<li><a href="laporan.php"><i class="fa fa-download"></i><span>Cetak laporan </span></a></li>
					
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Edit foto profil siswa
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
		
<!-- Modal Popup Siswa -->
					<div class="modal-body">
						<form action="foto_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
									<div class="input-group">
										<input name="NIS_siswa"  type="hidden"  class="form-control" value="<?php echo $siswa["NIS_siswa"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="NIP" type="hidden"  autocomplete="off" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo "".$_SESSION["NIP"]."" ?>" />
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Nama_siswa" autocomplete="off"  type="hidden"  class="form-control" value="<?php echo $siswa["Nama_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Semester"  type="hidden"   autocomplete="off" class="form-control" value="<?php echo $siswa["Semester"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Tahun_ajaran"  type="hidden"   autocomplete="off" class="form-control" value="<?php echo $siswa["Tahun_ajaran"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Kode_jurusan"  type="hidden"   autocomplete="off" class="form-control" value="<?php echo $siswa["Kode_jurusan"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Kode_kelas"  type="hidden"   autocomplete="off" class="form-control" value="<?php echo $siswa["Kode_kelas"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Alamat_siswa" autocomplete="off"  type="hidden"  class="form-control" value="<?php echo $siswa["Alamat_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="No_hp_siswa" autocomplete="off"   type="hidden" class="form-control" value="<?php echo $siswa["No_hp_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="Nama_wali_siswa" autocomplete="off"   type="hidden"  class="form-control" value="<?php echo $siswa["Nama_wali_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group">
										<input name="No_hp_wali_siswa" autocomplete="off"  type="hidden"  class="form-control" value="<?php echo $siswa["No_hp_wali_siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Foto</label>
									<div class="input-group">
									<input name="photo" type="file" autocomplete="off" class="form-control" />
									</div>
									<p>ukuran file maksimal 200KB *(format .jpg, jpeg) </p>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<a href="siswa.php"><button class="btn btn-success" type="submit" name="submit ">
									Cancel
								</button>
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