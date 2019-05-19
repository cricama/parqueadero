$(document).ready(function(){

	$('#opcion input').on('click', function(){
		var opcion = $(this).val();
		if(opcion == "inicio")
		{
			$('#formulario-registro').css('display', 'none');
			$('#formulario-inicio').css('display', 'inline');
		}
		else
		{
			$('#formulario-inicio').css('display', 'none');
			$('#formulario-registro').css('display', 'inline');
		}
	});

});



	