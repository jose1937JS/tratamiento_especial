	<script src="<?= base_url() ?>/application/views/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/materialize/js/materialize.min.js"></script>
<!-- 	<script src="<?= base_url() ?>/application/views/assets/js/axios.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/js/vue.js"></script> -->
	<script src="<?= base_url() ?>/application/views/assets/slick/slick.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/js/sweetalert.min.js"></script>
	<!-- <script src="<?= base_url() ?>/application/views/assets/datatables/pdfmake.min.js"></script> -->
<!-- 	<script src="<?= base_url() ?>/application/views/assets/datatables/vfs_fonts.js"></script> -->
	<script src="<?= base_url() ?>/application/views/assets/js/app.js"></script>
	<!-- <script src="<?= base_url() ?>/application/views/assets/js/main.js"></script> -->

	<script>
		// esto se debe de ejecutar una sola vex
		$(document).ready(function(){
			M.toast({ html: '<i class="material-icons ">mood</i>&nbsp;&nbsp; Bienvenido &nbsp;<b><?= $usuario ?></b>' }).timeRemaining = 1500;
		})
	</script>
</body>
</html>