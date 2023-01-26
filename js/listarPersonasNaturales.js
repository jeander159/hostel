$(document).on('ready',listarPersonasNaturales());
function listarPersonasNaturales(){
		var url = baseurl+("cPersonaNatural/listarPersonasNaturales");
		$.ajax({
			type:'POST',
			url:url,
			success: function(respuesta){
				var registro= JSON.parse(respuesta);
				html="<tbody>";

				for (var value of registro) {
					if(value.razon_social==null){
						html+="<tr><td>"+value.id_persona+"</td><td>"+value.abreviatura+"</td><td id='perDocumento' data-id_persona='"+value.id_persona+"' contenteditable>"+value.numero_documento+"</td><td id='perNombres' data-id_persona='"+value.id_persona+"' contenteditable>"+value.nombres+"</td><td id='perApePat' data-id_persona='"+value.id_persona+"' contenteditable>"+value.apellido_paterno+"</td><td id='perApeMat' data-id_persona='"+value.id_persona+"' contenteditable>"+value.apellido_materno+"</td><td>_____</td><td>"+value.descripcion+"</td></tr>";
					}else{
						if(value.nombres==null || value.apellido_paterno==null){
							html+="<tr><td>"+value.id_persona+"</td><td>"+value.abreviatura+"</td><td id='perDocumento' data-id_persona='"+value.id_persona+"' contenteditable>"+value.numero_documento+"</td><td>_____</td><td>_____</td><td>_____</td><td id='perRazonSocial' data-id_persona='"+value.id_persona+"' contenteditable>"+value.razon_social+"</td><td>"+value.descripcion+"</td></tr>";
						}else{
							html+="<tr><td>"+value.id_persona+"</td><td>"+value.abreviatura+"</td><td id='perDocumento' data-id_persona='"+value.id_persona+"' contenteditable>"+value.numero_documento+"</td><td id='perNombres' data-id_persona='"+value.id_persona+"' contenteditable>"+value.nombres+"</td><td id='perApePat' data-id_persona='"+value.id_persona+"' contenteditable>"+value.apellido_paterno+"</td><td id='perApeMat' data-id_persona='"+value.id_persona+"' contenteditable>"+value.apellido_materno+"</td><td>"+value.razon_social+"</td><td>"+value.descripcion+"</td></tr>";
						}
					}
					
				};
				html+="</tbody>";
				$('#tblReportePersonasNaturales').append(html).show();
				$('#tblReportePersonasNaturales').DataTable({
		          
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
