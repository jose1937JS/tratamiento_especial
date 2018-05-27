$(function(){

	

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



	$('#extracredito').change(function(){
		if ($('#extracredito option:selected')['0'].value == 0 ) {
			$('#ecmats').attr('disabled', true);
			$('#credcred').attr('disabled', true);
			$('#ecmats').formSelect().destroy();
		}
		else {
			$('#ecmats').removeAttr('disabled');
			$('#ecmats').formSelect();
			$('#credcred').removeAttr('disabled');
		}
	});
	$('#ecmats').change(function(){
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

	$('#extraordinario').change(function(){
		if ($('#extraordinario option:selected')['0'].value == 0 ) {
			$('#extmats').attr('disabled', true);
			$('#extmats').formSelect().destroy();
		}
		else {
			$('#extmats').removeAttr('disabled');
			$('#extmats').formSelect();
		}
	});
	$('#extmats').change(function(){
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

	$('#paralelo').change(function(){
		if ($('#paralelo option:selected')['0'].value == 0 ) {
			$('#parmats').attr('disabled', true);
			$('#parmats').formSelect().destroy();
		}
		else {
			$('#parmats').removeAttr('disabled');
			$('#parmats').formSelect();
		}
	});
	$('#parmats').change(function(){
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

	$('#ultsemestre').change(function(){
		if ($('#ultsemestre option:selected')['0'].value == 0 ) {
			$('#ultsemmats').attr('disabled', true);
			$('#ultsemcred').attr('disabled', true);
			$('#ultsemmats').formSelect().destroy();
		}
		else {
			$('#ultsemmats').removeAttr('disabled');
			$('#ultsemmats').formSelect();
			$('#ultsemcred').removeAttr('disabled');
		}
	});
	$('#ultsemmats').change(function(){
		if( $("#ultsemmats option:selected").length > 3 ){
			swal("Ups!", "Debes seleccionar un máximo de 3 materias", "error");
			$('#form').submit(function(e){
				if( $("#ultsemmats option:selected").length > 3 ){
					e.preventDefault();
					console.log('formulario detenido :)');
				}
			})
		}
	});

});