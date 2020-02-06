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
    <title>Monitoring siswa</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/png" href="smkn4.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
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
            Dashboard
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<h1><center><b>Sistem Monitoring Siswa</b></center></h1>
					<center><img src="../aset/foto/smkn4.jpg" width="225" height="225" /></center>
					<center><h2><b>SMK Negeri 4 Bandar Lampung</b></h2></center>
					<center><h5>Jl. HOS. Cokroaminoto No. 102 Telp. (0721)261637 Fax. (0721)251202</h5></center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		//ini footer
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->

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
  </body>
</html>

<?php } ?>
