$(document).on('ready',listarPersonasJuridicas());
function listarPersonasJuridicas(){
		var url = baseurl+("cPersonaJuridica/listarPersonasJuridicas");
		$.ajax({
			type:'POST',
			url:url,
			success: function(respuesta){
				var registro=eval(respuesta);
				
				html="<tbody>";
				for (var i = 0; i<registro.length; i++) {
					html+="<tr><td>"+registro[i]["ruc_per_ju"]+"</td><td>"+registro[i]["rsocial_per_ju"]+"</td><td>"+registro[i]["direcion_per_ju"]+"</td><td>"+registro[i]["telefono_per_ju"]+"</td><td>"+registro[i]["correo_per_ju"]+"</td></td></tr>";
				};
				html+="</tbody>";
				$('#tblReportePersonasJuridicas').append(html).show();
				$('#tblReportePersonasJuridicas').DataTable({
		          
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
