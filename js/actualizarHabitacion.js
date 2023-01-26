$(document).on('blur','#numHabitacion',function(){
	var idHabit=$(this).data('id_habitacion');
	var numHabit=$(this).text();

	actualizarHabitacion(idHabit,numHabit,"numero");
})
$(document).on('blur','#tipoHabitacion',function(){
	var idHabit=$(this).data('id_habitacion');
	var tipoHabit=$(this).text();

	actualizarHabitacion(idHabit,tipoHabit,"tipo");
})
$(document).on('blur','#precioHabitacion',function(){
	var idHabit=$(this).data('id_habitacion');
	var precioHabit=$(this).text();
	console.log(idHabit+' '+precioHabit)
	actualizarHabitacion(idHabit,precioHabit,"precio");
})
$(document).on('blur','#detalleHabitacion',function(){
	var idHabit=$(this).data('id_habitacion');
	var detalleHabit=$(this).text();

	actualizarHabitacion(idHabit,detalleHabit,"descripcion");
})
$(document).on('blur','#pisoHabitacion',function(){
	var idHabit=$(this).data('id_habitacion');
	var pisoHabit=$(this).text();

	actualizarHabitacion(idHabit,pisoHabit,"piso");
})
$(document).on('blur','#estadoHabitacion',function(){
	var idHabit=$(this).data('id_habitacion');
	var estadoHabit=$(this).text();

	actualizarHabitacion(idHabit,estadoHabit,"estado");
})
function actualizarHabitacion(id,texto,columna){
		var url = baseurl+("cHabitaciones/actualizarHabitacion");
	$.ajax({
		type:'POST',
		url:url,
		data:'id='+id+'&texto='+texto+'&columna='+columna,
		// data:(id:id,habitacion:habitacion,columna:columna),
		success: function(data){
			$('#mensajeActHabit').html(data).show(300).delay(4000).hide(300);
		}
	});

}