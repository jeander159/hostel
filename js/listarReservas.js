$(document).on('ready',listarReservas());
function listarReservas(){
	var url = baseurl+("cReserva/listarReservas");
	$.ajax({
		type:'POST',
		url:url,
		success: function(respuesta){
			
			var registro= JSON.parse(respuesta);

			html="<tbody style='font-size: .8em'>";
			for (var value of registro) {

				if(value.estado==1){
					html+="<tr><td>"+value.id_reserva+"</td><td>"+value.nombre_completo+"</td><td style='display:block;width:140px !important;overflow:hidden'>"+value.region+"</td><td>"+value.pais+"</td><td>"+value.tipo+"</td><td>"+value.numero+"</td><td>"+value.monto+"</td><td>"+value.fecha_ingreso+"</td><td>"+value.fecha_salida+"</td><td>"+value.usuario+"</td><td>"+value.hora+"</td><td style='color:blue'>EMITIDA <button onclick='anularReserva("+value.id_reserva+","+value.estado+")'>ANULAR</button></td></tr>";
				}else{
					html+="<tr><td id='"+value.id_reserva+"'>"+value.id_reserva+"</td><td>"+value.nombre_completo+"</td><td>"+value.region+"</td><td>"+value.pais+"</td><td>"+value.tipo+"</td><td>"+value.numero+"</td><td>"+value.monto+"</td><td>"+value.fecha_ingreso+"</td><td>"+value.fecha_salida+"</td><td>"+value.usuario+"</td><td>"+value.hora+"</td><td style='color:red'>ANULADA</td></tr>";
				}
			};
			html+="</tbody>";
			$('#tblReporteReservas').append(html).show();
			$('#tblReporteReservas').DataTable({
				
				"scrollCollapse": true,
				"paging":         true,
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
