$('#btnRegistrarPersonaNatural').click(function(){
	var url=baseurl+"cPersonaNatural/guardar";
	var inputsPersona=[];
	$( "#formRegistrarPersona input:text" ).each(function( index ) {
		inputsPersona.push($(this).val());	 
	});	
	console.log(inputsPersona)
	if( inputsPersona[0]=='' || inputsPersona[2]=='' || inputsPersona[3]=='' || inputsPersona[4]==''){
		alert('complete todos los campos obligatorios')
	}else{
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
		
	}
	return false;
});