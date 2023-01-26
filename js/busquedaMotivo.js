$('#txtConcepto').on('keyup',function(){
		var motivo = $(this).val();
		var url = baseurl+("cReserva/buscarMotivoViaje");
		$.ajax({
		type:'POST',
		url:url,
		data:'motivo='+motivo,
		cache:false,
		success: function(respuesta){
			var registro= JSON.parse(respuesta);
			html='<ul style="padding:0;position:relative;z-index:100">'
				for(var value of registro){
					html+='<li style="overflow:auto;" class="form-control btn-default" id="busqueda" onclick="seleccionarMotivo(\''+value.id_motivo+'\',\''+value.descripcion+'\');">'+value.id_motivo+' - '+value.descripcion+'</li>';
				}
			html+='</ul>';
			$('#registroMotivo').html(html).show();
			$(window).on('click',function(){
				$('#registroMotivo').hide();
			})	

		}
	});
});
function seleccionarMotivo(id,descripcion){

	$('#txtIdMotivo').val(id);
	$('#txtConcepto').val(descripcion);
	$('#registroMotivo').html(html).hide(500);	
}