$('#txtNombres').on('keyup',function(){
	var url=baseurl+('cPersonaNatural/buscarNombrePersonaNatural');
	var nombre = $(this).val();
	console.log(nombre)		
	$.ajax({
		type:'POST',
		url:url,
		data:'nombre='+nombre,	
		success:function(respuesta){
			var registro= JSON.parse(respuesta);
			html='<ul style="padding:0;position:absolute;z-index:100">';	
			for(var c of registro){
				html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarDni(\''+c.id_persona+'\',\''+c.nombre_completo+'\',\''+c.numero_documento+'\',\''+c.apellido_paterno+'\');">'+c.numero_documento+' '+c.nombre_completo+'</li>';
			}
			html+='</ul>';
			$('#registroNombres').html(html).show();
			$(window).on('click',function(){
				$('#registroNombres').hide();
			})	
		}
	});	
});

function seleccionarDni(id,nombres,documento,apePat){
	$('#txtIdPersona').val(id);
	$('#txtDni').val(documento);
	$('#txtNombres').val(nombres);
	$('#registroDni').html(html).hide(500);
	//var extractApePat=apellidoPat.substring(0,5);
	var extractDni=documento.slice(-3);
	$('#txtUsuario').val(apePat+extractDni);
}