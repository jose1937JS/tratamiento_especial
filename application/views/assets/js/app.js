$(function(){
	$('#pdf').click(function(){
		print();
	});
	

	var elem = $('.dropdown-trigger');
	M.Dropdown.init(elem, {
		coverTrigger: false
	});


	$('.modal').modal({
		opacity: 0.7,
		startingTop: '1%',
		endingTop : '5%',
		inDuration : 300,
		outDuration : 400
	});

	//$('.tooltiped').tooltip();
	var elem3 = $('.tooltiped');
	M.Tooltip.init(elem3);

	$('select').formSelect();

	$('.collapsible').collapsible();


	var count = 0;

	$('#extracredito').change(function()
	{
		if ($('#extracredito option:selected')['0'].value == 0 ) {
			count = count - 1;
			$('#ecmats').attr('disabled', true);
			$('#credcred').attr('disabled', true);
			$('#ecmats').formSelect()
		}
		else {
			count = count + 1;
			$('#ecmats').removeAttr('disabled');
			$('#ecmats').formSelect();
			$('#credcred').removeAttr('disabled');
		}
	});
	$('#ecmats').change(function()
	{
		if( $("#ecmats option:selected").length > 3 ){
			swal("Ups!", "Debes seleccionar un máximo de 3 materias", "error");
			$('#form').submit(function(e){
				if( $("#ecmats option:selected").length > 3 ){
					e.preventDefault();
					console.log('formulario detenido :)');
				}
			})
		}
	});

	$('#extraordinario').change(function()
	{
		if ($('#extraordinario option:selected')['0'].value == 0 ) {
			count = count - 1;
			$('#extmats').attr('disabled', true);
			$('#extmats').formSelect()
		}
		else {
			count = count + 1;
			$('#extmats').removeAttr('disabled');
			$('#extmats').formSelect();
		}
	});
	$('#extmats').change(function()
	{
		if( $("#extmats option:selected").length > 2 ){
			swal("Ups!", "Debes seleccionar un máximo de 2 materias", "error");
			$('#form').submit(function(e){
				if( $("#extmats option:selected").length > 2 ){
					e.preventDefault();
					console.log('formulario detenido :)');
				}
			})
		}
	});

	$('#paralelo').change(function()
	{
		if ($('#paralelo option:selected')['0'].value == 0 ) {
			count = count - 1;
			$('#parmats').attr('disabled', true);
			$('#parmats').formSelect()
		}
		else {
			count = count + 1;
			$('#parmats').removeAttr('disabled');
			$('#parmats').formSelect();
		}
	});
	$('#parmats').change(function()
	{
		if( $("#parmats option:selected").length > 2 ){
			swal("Ups!", "Debes seleccionar un máximo de 2 materias", "error");
			$('#form').submit(function(e){
				if( $("#parmats option:selected").length > 2 ){
					e.preventDefault();
					console.log('formulario detenido :)');
				}
			})
		}
	});

	$('#ultsemestre').change(function()
	{
		if ($('#ultsemestre option:selected')['0'].value == 0 ) {
			count = count - 1;
			$('#ultsemmats').attr('disabled', true);
			$('#ultsemcred').attr('disabled', true);
			$('#ultsemmats').formSelect()
		}
		else {
			count = count + 1;
			$('#ultsemmats').removeAttr('disabled');
			$('#ultsemmats').formSelect();
			$('#ultsemcred').removeAttr('disabled');
		}
	});
	$('#ultsemmats').change(function()
	{
		if( $("#ultsemmats option:selected").length > 3 ){
			swal("Ups!", "Debes seleccionar un máximo de 3 materias", "error");
			$('#form').submit(function(e){
				if( $("#ultsemmats option:selected").length > 3 ){
					e.preventDefault();
					console.log('formulario detenido :)');
				}
			});
		}
	});

	$('#grado1').change(function()
	{
		if ($('#grado1 option:selected')['0'].value == 0 ) {count = count - 1; }
		else { count = count + 1; }
	});

	$('#form').submit(function(){
		if (count > 3) {
			swal("Ups!", "Debes seleccionar un máximo de 3 Tratamientos Especiales", "error");
			e.preventDefault();
		}
	})

	$('#formu').submit(function(e){
		if ($('#filtro').val() == null) {
			e.preventDefault();
		}
	});


});