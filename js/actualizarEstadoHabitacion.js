// $('#cmbEstadoHabit').on('change',function(){
// 	idHabit=$('#txtIdHabit').val();
// 	estadoHabit=$('#cmbEstadoHabit').val();
// 	var url = baseurl+("cHabitacion/actualizarHabitacion");

// 	$.ajax({
// 		type:'POST',
// 		url:url,
// 		data:'idHabit='+idHabit+'&estadoHabit='+estadoHabit,
// 		cache:false,
// 		success: function(respuesta){
			
// 		}
// 	});
// 	return false;
	
// })
function actualizarEstadoHabitacion(id,estadoHabit,columna){
		var url = baseurl+("cHabitaciones/actualizarEstadoHabitacion");
	$.ajax({
		type:'POST',
		url:url,
		data:'id='+id+'&estadoHabit='+estadoHabit+'&columna='+columna,
		// data:(id:id,habitacion:habitacion,columna:columna),
		success: function(data){
			alert(data+'a '+estadoHabit)
			var numHabit=$('#txtNumHabit').val();
				var backHabit='#numHabit';
				for(var i=0;i<50;i++){
					var cuadroHabit=$(backHabit+i).val();
					
					if(cuadroHabit==numHabit){
						if(estadoHabit=='OCUPADO'){
							$(backHabit+i).parent().parent().removeClass();
							$(backHabit+i).parent().parent().addClass('small-box bg-red')
							$(backHabit+i).parent().next().next().text('OCUPADO')
						}
						if(estadoHabit=='MANTENIMIENTO'){
							$(backHabit+i).parent().parent().removeClass();
							$(backHabit+i).parent().parent().addClass('small-box bg-yellow')
							$(backHabit+i).parent().next().next().text('MANTENIMIENTO')
						}
						if(estadoHabit=='PENDIENTE'){
							$(backHabit+i).parent().parent().removeClass();
							$(backHabit+i).parent().parent().addClass('small-box bg-aqua')
							$(backHabit+i).parent().next().next().text('PENDIENTE')
						}
						if(estadoHabit=='DISPONIBLE'){
							$(backHabit+i).parent().parent().removeClass();
							$(backHabit+i).parent().parent().addClass('small-box bg-green')
							$(backHabit+i).parent().next().next().text('DISPONIBLE')
						}
					}
				}
		}
	});

}
$(document).on('change','#cmbEstadoHabit',function(){
	var id=$('#txtIdHabit').val();
	var estadoHabit=$('#cmbEstadoHabit').val();
	if(estadoHabit=='DISPONIBLE'){
		$('#cmbEstadoHabit').css('background','#00A65A')
	}
	if(estadoHabit=='OCUPADO'){
		$('#cmbEstadoHabit').css('background','#DD4B39')
	}
	if(estadoHabit=='PENDIENTE'){
		$('#cmbEstadoHabit').css('background','#00C0EF')
	}
	if(estadoHabit=='MANTENIMIENTO'){
		$('#cmbEstadoHabit').css('background','#F39C12')
	}
	actualizarEstadoHabitacion(id,estadoHabit,'estado');
})
$(document).on('ready',function(){
	
	setInterval(function(){
		var estadoHabit=$('#cmbEstadoHabit').val();
		if(estadoHabit=='DISPONIBLE'){
			$('#cmbEstadoHabit').css('background','#00A65A')
		}
		if(estadoHabit=='OCUPADO'){
			$('#cmbEstadoHabit').css('background','#DD4B39')
		}
		if(estadoHabit=='PENDIENTE'){
			$('#cmbEstadoHabit').css('background','#00C0EF')
		}
		if(estadoHabit=='MANTENIMIENTO'){
			$('#cmbEstadoHabit').css('background','#F39C12')
		}
	},1000);
	
})