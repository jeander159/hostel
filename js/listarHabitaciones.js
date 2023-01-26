$(document).on('ready',listarHabitaciones());
function listarHabitaciones(){
		var url = baseurl+("cHabitaciones/listarHabitaciones");
		$.ajax({
			type:'POST',
			url:url,
			success: function(respuesta){
				html="<tbody>";
				var registro= JSON.parse(respuesta);
				if(actualizar==1){
					for(var value of registro){
						html+="<tr><td>"+value.id_habitacion+"</td><td id='numHabitacion' data-id_habitacion='"+value.id_habitacion+"' contenteditable>"+value.numero+"</td><td id='tipoHabitacion' data-id_habitacion='"+value.id_habitacion+"' contenteditable>"+value.tipo+"</td><td id='precioHabitacion' data-id_habitacion='"+value.id_habitacion+"' contenteditable>"+value.precio+"</td><td id='detalleHabitacion' data-id_habitacion='"+value.id_habitacion+"' contenteditable>"+value.descripcion+"</td><td id='pisoHabitacion' data-id_habitacion='"+value.id_habitacion+"' contenteditable>"+value.piso+"</td><td id='estadoHabitacion' data-id_habitacion='"+value.id_habitacion+"' contenteditable>"+value.estado+"</td></tr>";
					}
				}else{
					for(var value of registro){
						html+="<tr><td>"+value.id_habitacion+"</td><td>"+value.numero+"</td><td>"+value.tipo+"</td><td>"+value.precio+"</td><td>"+value.descripcion+"</td><td>"+value.piso+"</td><td>"+value.estado+"</td></tr>";
					}
				}
				html+="</tbody>";
				$('#tblReporteHabitaciones').append(html).show();
				$('#tblReporteHabitaciones').DataTable({
		          
		            "scrollCollapse": true,
		            "paging": true,
		            "filter":true,
		            "info":true,

		            dom: 'Bfrtip',
		            buttons: [
		                'copy', 'csv', 'excel', 'pdf', 'print'
		            ]
		        });
			}
		});
}
