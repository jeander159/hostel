$('#btnRegistrarReserva').click(function(){
	var url=baseurl+"cReserva/guardarReserva";
	var nombrePersona=$('#txtNombrePersona').val();
	var idHabit=$('#txtIdHabit').val();


	var inputsReserva=[];
	$( "#formRegistrarReserva input" ).each(function( index ) {
		inputsReserva.push($(this).val());	 
	});	
	// console.log(inputsReserva)

	if(inputsReserva[0] =='' || inputsReserva[1] =='' || inputsReserva[2] =='' || inputsReserva[3] =='' || inputsReserva[4] =='' || inputsReserva[5] =='' || inputsReserva[6] =='' || inputsReserva[7] =='' || inputsReserva[8] =='' || inputsReserva[9] =='' || inputsReserva[10] =='' || inputsReserva[11] =='' || inputsReserva[12] =='' || inputsReserva[14] =='' || inputsReserva[15] =='' || inputsReserva[16] =='' || inputsReserva[17] =='' || inputsReserva[18] =='' || inputsReserva[19] ==''){
		alert('Falta completar informacion');
	}else{
		$.ajax({
			type:'POST',
			url:url,
			data:$('#formRegistrarReserva').serialize(),
			success:function(registro){
				
				$('#mensajeReserva').html(registro).show(300).delay(4000).hide(300);
				$('#formRegistrarReserva')[0].reset();
				localStorage.setItem('nombrePersona_'+idHabit,nombrePersona)
				// localStorage.setItem('idHabit'+idHabit,idHabit)
				return false;
			}
		});
	}

	return false;
});

// funcion para obtener el total d habitacion ocuapdas, disponibles,mantenimiento y pendiente
$(document).on('ready',function(){
	var url=baseurl+"cReserva/obtenerNumReservas";
	$.ajax({
		type:'POST',
		url:url,
		success:function(registro){
			var reg= JSON.parse(registro);
			html='<ul class="nav navbar-nav">';
			for(var i in reg){
				if(reg[i]['estado']=='DISPONIBLE'){
					var labelColor='label-success';
				}
				if(reg[i]['estado']=='OCUPADO'){
					var labelColor='label-danger';
				}
				if(reg[i]['estado']=='MANTENIMIENTO'){
					var labelColor='label-warning';
				}
				if(reg[i]['estado']=='PENDIENTE'){
					var labelColor='label-default';
				}
				html+='<li class="dropdown notifications-menu">';
		            html+='<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
		              html+='<i class="fa fa-bell-o"></i>'
		              html+='<span class="label '+labelColor+'" id="txtTotalOcupadas">'+reg[i]['sumas']+'</span>';
		            html+='</a>';
		            html+='<ul class="dropdown-menu" style="width: 150px;border:1px solid lightblue">';
		              html+='<li class="header" id="txtHabitOcupadas">'+reg[i]['estado']+'</li>';
		           html+= '</ul>';
		         html+='</li>';
			}
			html+='</ul>';

			$('#conteoHabit').prepend(html).show()
			
			// if(typeof reg[0]['estado']!='undefined'){
			// 	$('#txtHabitOcupadas').text(reg[0]['estado'])
			// }else{
			// 	$('#txtHabitOcupadas').text(0)
			// }
			// if(typeof reg[1]['estado']!='undefined'){
			// 	$('#txtHabitMantenimiento').text(reg[1]['estado'])
			// }else{
			// 	$('#txtHabitMantenimiento').text(0)
			// }
			// if(typeof reg[2]['estado']!='undefined'){
			// 	$('#txtHabitPendiente').text(reg[2]['estado'])
			// }else{
			// 	$('#txtHabitPendiente').text(0)
			// }
			
			
			
			// if(typeof reg[0]['sumas']!=''){
			// 	$('#txtTotalOcupadas').text(reg[0]['sumas'])
			// }else{
			// 	$('#txtTotalOcupadas').text(0)
			// }
			// if(typeof reg[1]['sumas']!=''){
			// 	$('#txtTotalMantenimiento').text(reg[1]['sumas'])
			// }else{
			// 	$('#txtTotalMantenimiento').text(0)
			// }
			// if(typeof reg[2]['sumas']!=''){
			// 	$('#txtTotalPendiente').text(reg[2]['sumas'])
			// }else{
			// 	$('#txtTotalPendiente').text(0)
			// }
			// if(typeof reg[3]['sumas']!=''){
			// 	$('#txtTotalDisponibles').text(reg[3]['sumas'])
			// }else{
			// 	$('#txtTotalDisponibles').text(0)
			// }
			

		}
	})
})
