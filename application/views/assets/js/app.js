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

});