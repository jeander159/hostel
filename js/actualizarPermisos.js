$(document).on('click','#idReg',function(){
	var idReg=$(this).data('id_registrar');
	var estadoRegistrar=$(this).val();
	if(estadoRegistrar==1){
		estadoRegistrar=0;
		$(this).val(estadoRegistrar)
		actualizarPermisos(idReg,estadoRegistrar,"registrar");
		
	}else{
		estadoRegistrar=1;
		$(this).val(estadoRegistrar)
		actualizarPermisos(idReg,estadoRegistrar,"registrar");
	}
	
	
})
$(document).on('click','#idLeer',function(){
	var idLeer=$(this).data('id_leer');
	var estadoLeer=$(this).val();
	if(estadoLeer==1){
		estadoLeer=0;
		$(this).val(estadoLeer)
		actualizarPermisos(idLeer,estadoLeer,"leer");
	}else{
		estadoLeer=1;
		$(this).val(estadoLeer)
		actualizarPermisos(idLeer,estadoLeer,"leer");
	}
	
})
$(document).on('click','#idAct',function(){
	var idAct=$(this).data('id_actualizar');
	var estadoActualizar=$(this).val();
	if(estadoActualizar==1){
		estadoActualizar=0;
		$(this).val(estadoActualizar)
		actualizarPermisos(idAct,estadoActualizar,"actualizar");
	}else{
		estadoActualizar=1;
		$(this).val(estadoActualizar)
		actualizarPermisos(idAct,estadoActualizar,"actualizar");
	}
	
})
$(document).on('click','#idElm',function(){
	var idElm=$(this).data('id_eliminar');
	var estadoEliminar=$(this).val();
	if(estadoEliminar==1){
		estadoEliminar=0;
		$(this).val(estadoEliminar)
		actualizarPermisos(idElm,estadoEliminar,"eliminar");
	}else{
		estadoEliminar=1;
		$(this).val(estadoEliminar)
		actualizarPermisos(idElm,estadoEliminar,"eliminar");
	}
	
})


function actualizarPermisos(id,texto,columna){
		var url = baseurl+("cUsuario/actualizarPermisos");
	$.ajax({
		type:'POST',
		url:url,
		data:'id='+id+'&texto='+texto+'&columna='+columna,
		// data:(id:id,habitacion:habitacion,columna:columna),
		success: function(data){
			$('#mensajeActPermisos').html(data).show(300).delay(4000).hide(300);
		}
	});

}