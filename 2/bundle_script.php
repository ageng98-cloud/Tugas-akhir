
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
	 <!-- Select2 -->
	<script src="../aset/plugins/select2/dist/js/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="../aset/bootstrap/js/jquery-chained.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../aset/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	<!-- page script -->
	<script src="../aset/plugins/chosen/chosen.jquery.js"></script>
	<script type="text/javascript" src="chosen.jquery.js"></script>
  <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_pelanggaran_siswa').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>
	
	
    <script>
        $('document').ready(function(){
            $("#NIS_siswa").chosen();
        })
    </script>

	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// siswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "siswa_modal_edit.php",
					type: "GET",
					data : {NIS_siswa: m,},
					success: function (ajaxData){
					$("#ModalEditSiswa").html(ajaxData);
					$("#ModalEditSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});
			$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "kelas_modal_edit.php",
					type: "GET",
					data : {Kode_kelas: m,},
					success: function (ajaxData){
					$("#ModalEditKelas").html(ajaxData);
					$("#ModalEditKelas").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		
		// Point
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "point_modal_edit.php",
					type: "GET",
					data : {Id_pelanggaran_siswa: m,},
					success: function (ajaxData){
					$("#ModalEditPoint").html(ajaxData);
					$("#ModalEditPoint").modal('show',{backdrop: 'true'});
					}
				});
			});
		});
		
	</script>
	
	 <script>
            $(document).ready(function() {
                $("#kelas").chained("#jurusan");
                
            });
        </script>
		
		<script>
            $(document).ready(function() {
                $("#siswa").chained("#NIS_siswa");
                
            });
        </script>
	

	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>