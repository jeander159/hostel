
$(document).on('ready',function(){
	$('#contenedorRuc').hide();
	$('#contenedorPersonaJuridica').hide();
	$('#btnRegistrarPersonaJuridica').hide();
})
$('#cmbTipoPersona').on('change',function(){
	var tipoPersona=$(this).val();
	if(tipoPersona=="N"){
		$('#contenedorDni').show();
		$('#contenedorPersonaNatural').show();
		$('#btnRegistrarPersonaNatural').show();
		$('#contenedorRuc').hide();
		$('#contenedorPersonaJuridica').hide();
		$('#btnRegistrarPersonaJuridica').hide();
	}else if(tipoPersona=="J"){
		$('#contenedorDni').hide();
		$('#contenedorPersonaNatural').hide();
		$('#btnRegistrarPersonaNatural').hide();
		$('#contenedorRuc').show();
		$('#contenedorPersonaJuridica').show();
		$('#btnRegistrarPersonaJuridica').show();
	}
})