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
          <ul class="sidebar-menu">
					<li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
					<li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="siswa.php"><i class="fa fa-user"></i><span>Data Siswa</span></a></li>
					<li><a href="kelas.php"><i class="fa fa-user"></i><span>Tambah data kelas</span></a></li>
					<li><a href="point.php"><i class="fa fa-columns"></i><span>Data Pelanggaran Siswa</span></a></li>
			        <li><a href="surat.php"><i class="fa fa-columns"></i><span>Cetak Surat</span></a></li>
					<li><a href="pesan.php"><i class="fa fa-columns"></i><span>Auto Reply</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i>Tambah</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_tambah.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Siswa -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User</h4>
					</div>
					<div class="modal-body">
						<form action="tambah_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP" type="text"  autocomplete="off" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $siswa["NIP"]; ?>" />
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
								<label>Nama Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_guru" type="text"  autocomplete="off"  class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $siswa["Nama_guru"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Password" type="text"  autocomplete="off" class="form-control" value="<?php echo $siswa["Password"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Pendidikan terakhir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Pendidikan_terakhir" type="text"  autocomplete="off" class="form-control"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $siswa["Pendidikan_terakhir"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text"  autocomplete="off" class="form-control"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $siswa["Alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>No HP </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="Nomor_hp" type="text"  autocomplete="off" class="form-control"  required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="<?php echo $siswa["Nomor_hp"]; ?>"/>
									</div>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
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

<?php  } ?>
