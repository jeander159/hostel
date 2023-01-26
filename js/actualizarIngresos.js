$(document).on('blur','#tipoIngreso',function(){
	var idIngreso=$(this).data('id_ingreso');
	var tipoIngreso=$(this).text();

	actualizarHabitacion(idIngreso,tipoIngreso,"numero");
})
$(document).on('blur','#cantidadIngreso',function(){
	var idIngreso=$(this).data('id_ingreso');
	var cantidadIngreso=$(this).text();

	actualizarHabitacion(idIngreso,cantidadIngreso,"cantidad");
})
$(document).on('blur','#descripcionIngreso',function(){
	var idIngreso=$(this).data('id_ingreso');
	var descripcionIngreso=$(this).text();

	actualizarHabitacion(idIngreso,descripcionIngreso,"descripcion");
})
$(document).on('blur','#montoIngreso',function(){
	var idIngreso=$(this).data('id_ingreso');
	var montoIngreso=$(this).text();
	
	actualizarHabitacion(idIngreso,montoIngreso,"monto");
})
$(document).on('blur','#fechaIngreso',function(){
	var idIngreso=$(this).data('id_ingreso');
	var fechaIngreso=$(this).text();

	actualizarHabitacion(idIngreso,fechaIngreso,"fecha");
})

function actualizarHabitacion(id,texto,columna){
		var url = baseurl+("cIngresos/actualizarIngresos");
	$.ajax({
		type:'POST',
		url:url,
		cache:false,
		data:'id='+id+'&texto='+texto+'&columna='+columna,
		// data:(id:id,habitacion:habitacion,columna:columna),
		success: function(data){
			$('#mensajeActIngresos').html(data).show(300).delay(4000).hide(300);
		}
	});

}