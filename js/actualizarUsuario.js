
$('#txtActFoto').on('change',function(){
	var url=baseurl+"cUsuario/actualizarFoto";
	var idUsuario=$('#hdnIdUsuario').val();
	var formData=new FormData($('#formActualizarFotoUsuarios')[0]);
	console.log(idUsuario)
	$.ajax({
		type:'POST',
		url:url,
		contentType:false,
		processData:false,
		cache:false,
		data:formData,
		success:function(registro){
			
			$('#mensajeActFotoUsuario').html('Se actualizo correctamente la foto '+registro).show(300).delay(4000).hide(300);
			$('#imgLivePreview').html('<img style="width:100%" src="'+baseurl+'upload/'+registro+'">');
			return false;
		}
	});
})

$('#txtActTelefonou').on('keyup',function(){
	var url=baseurl+"cUsuario/actualizarTelefono";
	var telefono=$(this).val();
	var idUsuario=$('#hdnIdUsuario').val();

	$.ajax({
			type:'POST',
			url:url,
			data:{idUsuario:idUsuario,telefono:telefono},
			success:function(registro){

				$('#mensajeActUsuario').html(registro).show(300).delay(4000).hide(300);
				
				return false;
			}
		});
	return false;
})

$('#btnCambiarClave').on('click',function(){
	var url=baseurl+"cUsuario/actualizarClave";
	var claveAnterior=$('#txtClaveAnterior').val();
	var claveNueva=$('#txtClaveNueva').val();
	var idUsuario=$('#hdnIdUsuario').val();
	$.ajax({
			type:'POST',
			url:url,
			data:{idUsuario:idUsuario,claveAnterior:claveAnterior,claveNueva:claveNueva},
			success:function(registro){
				
				$('#mensajeActUsuarioClave').html(registro).show(300).delay(4000).hide(300);
				
				return false;
			}

		});
	return false;
})