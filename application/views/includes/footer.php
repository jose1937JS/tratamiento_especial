	<script src="<?= base_url() ?>/application/views/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/materialize/js/materialize.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/slick/slick.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/js/sweetalert.min.js"></script>
	<script src="<?= base_url() ?>/application/views/assets/js/app.js"></script>

	<script>
		// esto se debe de ejecutar una sola vex
		$(function(){
			var i;
			if (sessionStorage.getItem('contador')) {
				i = parseInt(sessionStorage.getItem('contador'));
				sessionStorage.setItem('contador', i + 1);
			}
			else {
				sessionStorage.setItem('contador', 1);
			}
			
			console.log(i)

			if (sessionStorage.getItem('contador') == 1 ) {
				M.toast({ html: '<i class="material-icons ">mood</i>&nbsp;&nbsp; Bienvenido &nbsp;<b><?= $usuario ?></b>' }).timeRemaining = 1500;
			}
		})
	</script>
</body>
</html>