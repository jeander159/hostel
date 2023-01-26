$(document).on('ready',function(){
	var url=baseurl+'cUsuario/obtenerRol';
	$.ajax({
		type:'POST',
		url:url,
		cache:false,
		success:function(respuesta){
			var	registro=JSON.parse(respuesta);
			$.each(registro,function(i,item){
				$('#cmbCargo').append('<option value="'+item.id_rol+'" >'+item.cargo+'</option>');
			});

		}
	})
})