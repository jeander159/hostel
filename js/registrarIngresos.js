$('#btnRegistrarIngresos').click(function(){
	var url=baseurl+"cIngresos/guardar";
	var inputsIngresos=[];
	$( "#formRegistrarIngresos input" ).each(function( index ) {
		inputsIngresos.push($(this).val());	 
	});	
	console.log(inputsIngresos)
	if(inputsIngresos[0] =='' || inputsIngresos[1]=='' || inputsIngresos[2]=='' || inputsIngresos[3]==''){
		alert('complete todos los campos obligatorios')
	}else{
		$.ajax({
			type:'POST',
			url:url,
			data:$('#formRegistrarIngresos').serialize(),
			success:function(registro){
				
				$('#mensajeIngresos').html(registro).show(300).delay(4000).hide(300);
				$('#formRegistrarIngresos')[0].reset();
				return false;
			}
		});
	}
	
	return false;
});

$(document).on('ready',function(){
	var url=baseurl+'cIngresos/obtenerConceptos';
	$.ajax({
		type:'POST',
		url:url,
		cache:false,
		success:function(respuesta){
			var	registro=JSON.parse(respuesta);
			$.each(registro,function(i,item){
				$('#cmbTipoIngresos').append('<option value="'+item.id_concepto+'" >'+item.descripcion+'</option>');
				$('#cmbTipoIngresos2').append('<option value="'+item.id_concepto+'" >'+item.descripcion+'</option>');
			});

		}
	})
})