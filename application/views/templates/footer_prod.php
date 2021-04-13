<footer class="main-footer">
	<div class="container">
		<div class="pull-right hidden-xs">
			<b>Version</b> 1.0.0
		</div>
		<strong>Copyright &copy; 2019 Mr.Oyond </strong>
	</div>
	<!-- /.container -->
</footer>
</div>   

<!-- jQuery 3 -->
<script src="<?php echo base_url().'assets/bower_components/jquery/dist/jquery.min.js' ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/bower_components/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<!-- datatable -->
<script src="<?php echo base_url().'assets/datatable/datatables.min.js' ?>"></script>
<!-- swal -->
<script src="<?php echo base_url().'assets/swal/js/sweetalert2.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<!-- date picker -->
<script src="<?php echo base_url().'assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' ?>">
</script>
<!--  -->
<script src="<?php echo base_url().'assets/bower_components/select2/dist/js/select2.full.min.js' ?>"></script>
<!--  -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>">
</script>
<script src="<?php echo base_url().'assets/bower_components/fastclick/lib/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/adminlte.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js' ?>"></script>
<!-- custom js -->
<script src="<?php echo base_url().'assets/custom/custom.js' ?>"></script>

<script type="text/javascript">
	function isi_otomatis(){
		var nrp = $("#nrp").val();
		$.ajax({
			url: "<?php echo base_url();?>work_request/auto_fill_prod",
			data:"nrp="+nrp ,
		}).success(function (data) {
			var json = data,
			obj = JSON.parse(json);
			$('#nama_karyawan').val(obj.nama_karyawan);
		});
	}
</script>

</body>
</html>
