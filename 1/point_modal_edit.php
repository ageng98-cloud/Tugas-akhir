<?php
session_start();
include "../koneksi.php";

$Id_pelanggaran_siswa	= $_GET["id"];

$querypelanggaran = mysqli_query($konek, "SELECT * FROM pelanggaran_siswa WHERE Id_pelanggaran_siswa='$Id_pelanggaran_siswa'");
if($querypelanggaran == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($pelanggaran = mysqli_fetch_array($querypelanggaran)){

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


	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_pelanggaran_siswa1').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
	
		 <script>
            $(document).ready(function() {
                $("#siswa1").chained("#NIS_siswa1");
                
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
				  <li><a><i class="fa fa-windows"></i> Kelas <span class="fa fa-chevron-down"></span></a>
                    <ul class="submenu">
                      <li><a href="kelas.php">Data Kelas</a></li>
                      <li><a href="kelas_input.php">Input Data Kelas</a></li>
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
            Edit Pelanggaran Siswa
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
						<form action="point_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<div class="input-group">
										<input name="Id_pelanggaran_siswa" type="hidden" class="form-control" value="<?php echo $pelanggaran["Id_pelanggaran_siswa"]; ?>" readonly />
									</div>
							</div>
								<div class="form-group">
								<label>NIS siswa</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="NIS_siswa" name="NIS_siswa" type="text" class="form-control" value="<?php echo $pelanggaran["NIS_siswa"]; ?>" readonly>
									</div>
							</div>
							<div class="form-group">
									<div class="input-group date">
										<input class="form-control" id="siswa1" type="hidden" name="siswa" autocomplete="off" />
									</div>
									
									<script type="text/javascript">    
									<?php echo $jsArray; ?>  
									function changeValue(Nama_siswa){  
									document.getElementById('siswa').value = Pnt[Nama_siswa].nama;    
									};  
									 </script> 
								
									
							</div>
							<div class="form-group">
								<label>Tanggal</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_pelanggaran_siswa1" name="Tanggal_pelanggaran_siswa" type="text" class="form-control" value="<?php echo $pelanggaran["Tanggal_pelanggaran_siswa"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Pelanggaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_pelanggaran" id="Kode_pelanggaran" onchange="changeValue(this.value)" class="form-control">
											<?php
												
												$querypelanggaran = mysqli_query($konek, "SELECT * FROM pelanggaran");
												$jsArray = "var Pnt = new Array();\n"; 
												if($querypelanggaran == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($pelanggaran = mysqli_fetch_array($querypelanggaran)){
													echo "
														<option value='$pelanggaran[Kode_pelanggaran]'>$pelanggaran[Nama_pelanggaran]</option>";
											$jsArray .= "Pnt['" . $pelanggaran['Kode_pelanggaran'] . "'] = {nama:'" . addslashes($pelanggaran['Point']) ."'};\n"; 
												}
												
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>POINT</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input class="form-control" id="point" name="point" autocomplete="off" readonly/>
									</div>
									
									<script type="text/javascript">    
									<?php echo $jsArray; ?>  
									function changeValue(Kode_pelanggaran){  
									document.getElementById('point').value = Pnt[Kode_pelanggaran].nama;    
									};  
									 </script> 
									
									
							</div>
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input name="Keterangan" id="Keterangan" type="text" autocomplete="off" class="form-control" value="<?php echo $pelanggaran["Keterangan"]; ?>"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<a href="point.php"><button class="btn btn-success" type="submit" name="submit" >
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