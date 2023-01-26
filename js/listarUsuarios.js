$(document).on('ready',listarUsuarios());
function listarUsuarios(){
		var url = baseurl+("cUsuario/listarUsuarios");
		$.ajax({
			type:'POST',
			url:url,
			success: function(respuesta){
				
		        html="<tbody>";
				var registro= JSON.parse(respuesta);
				if(actualizar==1){
					for(var value of registro){
						html+="<tr><td>"+value.id_usuario+"</td><td>"+value.cargo+"</td><td>"+value.nombres+"</td><td>"+value.apellido_paterno+"</td><td>"+value.apellido_materno+"</td><td >"+value.usuario+"</td><td>"+value.numero_documento+"</td><td>"+value.telefono+"</td></tr>";
					}
				}else{
					for(var value of registro){
						html+="<tr><td>"+value.id_habitacion+"</td><td>"+value.numero+"</td><td>"+value.tipo+"</td><td>"+value.precio+"</td><td>"+value.descripcion+"</td><td>"+value.piso+"</td><td>"+value.estado+"</td></tr>";
					}
				}
				html+="</tbody>";
				$('#tblReporteUsuarios').append(html).show();
				$('#tblReporteUsuarios').DataTable({
		          
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
