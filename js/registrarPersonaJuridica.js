$('#btnRegistrarPersonaJuridica').click(function(){
	var url=baseurl+"cPersonaJuridica/guardar";
		$.ajax({
		type:'POST',
		url:url,
		data:$('#formRegistrarPersona').serialize(),
		success:function(registro){
			console.log(registro)
			$('#mensajePersona').html(registro).show(300).delay(4000).hide(300);
			$('#formRegistrarPersona')[0].reset();
			return false;
		}
		});
		return false;
});