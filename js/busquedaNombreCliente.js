$('#txtNombrePersona').on('keyup',function(){
		var nombreCliente = $(this).val();
		var url = baseurl+("cPersonaNatural/buscarNombrePersonaNatural");
		$.ajax({
		type:'POST',
		url:url,
		data:'nombre='+nombreCliente,
		cache:false,
		success: function(respuesta){
			var registro= JSON.parse(respuesta);
			html='<ul style="padding:0;position:absolute;z-index:100">'
				for(var value of registro){
					html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarPersonaNatural(\''+value.id_persona+'\',\''+value.nombre_completo+'\',\''+value.numero_documento+'\');">'+value.id_persona+' - '+value.numero_documento+' '+value.nombre_completo+'</li>';
				}
			html+='</ul>';
			$('#registrosPersona').html(html).show();
			$(window).on('click',function(){
				$('#registrosPersona').hide();
			})	

		}
	});
	return false;
});
function seleccionarPersonaNatural(idCliente,nombreCliente,docCliente){

	$('#txtIdPersonaNatural').val(idCliente);
	$('#txtNombrePersona').val(nombreCliente);
	$('#txtDocPersona').val(docCliente);
	$('#registrosPersona').html(html).hide(500);
	
}



$('#txtNombrePersonaJuridica').on('keyup',function(){
		var nombreCliente = $('#txtNombrePersonaJuridica').val();
		var url = baseurl+("cPersonaJuridica/buscarNombrePersonaJuridica");
		$.ajax({
		type:'POST',
		url:url,
		data:'nombre='+nombreCliente,
		cache:false,
		success: function(respuesta){
			var registro=eval(respuesta);
			
			// html="<table><thead>";
			// html+="<tr><th>Nombres</th><th>Apellido</th></tr>";
			// html+="</thead><tbody>";
			html='<ul style="padding:0;position:absolute;z-index:100">'
			for (var i = 0; i<registro.length; i++) {
				// html+="<tr><td>"+registro[i]["nombres_per"]+"</td><td>"+registro[i]["apellido_pat_per"]+"</td></tr>";
				
				html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarPersonaJuridica(\''+registro[i]["id_per_ju"]+'\',\''+registro[i]["rsocial_per_ju"]+'\',\''+registro[i]["ruc_per_ju"]+'\');">'+registro[i]["id_per_ju"]+' - '+registro[i]["ruc_per_ju"]+' '+registro[i]["rsocial_per_ju"]+'</li>';
			};
			// html+="</tbody></table>"
			html+='</ul>';
			$('#registrosPersonaJuridica').html(html).show();



		}
	});
	return false;
});
function seleccionarPersonaJuridica(idCliente,nombreCliente,docCliente){

	$('#txtIdPersonaJuridica').val(idCliente);
	$('#txtNombrePersonaJuridica').val(nombreCliente);
	$('#txtDocPersonaJuridica').val(docCliente);
	$('#registrosPersonaJuridica').html(html).hide(500);
	
}