
$(document).on('blur','#perDocumento',function(){

	var idPersona=$(this).data('id_persona');
	var perDocumento=$(this).text();
	
	actualizarPersona(idPersona,perDocumento,"numero_documento");
})
$(document).on('blur','#perNombres',function(){

	var idPersona=$(this).data('id_persona');
	var perNombres=$(this).text();
	
	actualizarPersona(idPersona,perNombres,"nombres");
})
$(document).on('blur','#perApePat',function(){

	var idPersona=$(this).data('id_persona');
	var perApePat=$(this).text();
	
	actualizarPersona(idPersona,perApePat,"apellido_paterno");
})
$(document).on('blur','#perApeMat',function(){

	var idPersona=$(this).data('id_persona');
	var perApeMat=$(this).text();
	
	actualizarPersona(idPersona,perApeMat,"apellido_materno");
})
$(document).on('blur','#perRazonSocial',function(){

	var idPersona=$(this).data('id_persona');
	var perRazonSocial=$(this).text();
	
	actualizarPersona(idPersona,perRazonSocial,"razon_social");
})

function actualizarPersona(id,texto,columna){
		var url = baseurl+("cPersonaNatural/actualizarPersona");
	$.ajax({
		type:'POST',
		url:url,
		data:'id='+id+'&texto='+texto+'&columna='+columna,
		// data:(id:id,habitacion:habitacion,columna:columna),
		success: function(data){
			$('#mensajeActPersona').html(data).show(300).delay(4000).hide(300);
		}
	});

}
