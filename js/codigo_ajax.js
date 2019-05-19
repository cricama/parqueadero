$(document).ready(function(){
	$( "form" ).on( "submit", function( event ) {
	  event.preventDefault();
	  $.ajax({
			beforeSend: function(){
				$('#figura').html('<img src="img/cargando.gif">')
			},
			method: "GET",
			url: "js/test.js",
			dataType: "script",
			data: {nombre: '####'},
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});

	
	

	/*$('#usuario').blur(function(){
		var dato = $(this).val();
		$('#usuario').css('background', 'red');
		$('#contenedor').append('<label>error</label>');
	});*/
});