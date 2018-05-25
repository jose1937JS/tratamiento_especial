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
			$('#ecmats').prop('disabled', true);
			$('#credcred').prop('disabled', true);
			alert('asd')
		}
		else {
			$('#ecmats').removeProp('disabled');
			$('#credcred').removeProp('disabled');
			console.log($('#extracredito option:selected')['0'].value)
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

	$('#extmats').change(function(){
		if( $("#extmats option:selected").length > 2 ){
			swal("Ups!", "Debes seleccionar un máximo de 2 materias", "error");
		}
	});

	$('#extmats').change(function(){
		if( $("#extmats option:selected").length > 2 ){
			swal("Ups!", "Debes seleccionar un máximo de 2 materias", "error");
		}
	});


});