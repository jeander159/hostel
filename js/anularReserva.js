$('#btnAnularReserva').on('click',function(){
	
	
	// var bool=confirm("¡Esta seguro que anular la reserva!");

	// if(bool){
	// 	alert('se anulo la reserva')
	// 	// $.ajax({
	// 	// 	type:'POST',
	// 	// 	url:url,
	// 	// 	data:{idUsuario:idUsuario,claveAnterior:claveAnterior,claveNueva:claveNueva},
	// 	// 	success:function(registro){
				
	// 	// 		$('#mensajeActUsuarioClave').html(registro).show(300).delay(4000).hide(300);
				
	// 	// 		return false;
	// 	// 	}

	// 	// });
 // 	}else{
 //   		alert("En hora buena, podremos reservar el tour");
 // 	}
})

function anularReserva(idReserva,estado){
	var url=baseurl+"cReserva/anularReserva";
	var bool=confirm("¡Esta seguro que desea anular la reserva!");

	if(bool){
		alert('se anulo la reserva')
		$.ajax({
			type:'POST',
			url:url,
			data:{idReserva:idReserva,estado:estado},
			success:function(registro){
				
				$('#mensajeReporteReserva').html(registro).show(300).delay(4000).hide(300);
				
				return false;
			}

		});
 	}else{
   		alert("En hora buena, podremos reservar la habitación");
 	}
}