<?php

session_start();
include "../koneksi.php";

if (empty($_SESSION['NIP']) AND empty($_SESSION['Password'])) {
    echo "<script>window.location=('../')</script>";
}else{

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
            Profil Siswa
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<table border="0">
						<?php
							include "dt_profil.php";
						?>
				</table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		
		<!-- Modal Popup Siswa Edit -->
		<div id="ModalEditSiswa" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Apakah kamu akan menghapusnya ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
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

<?php } ?>
