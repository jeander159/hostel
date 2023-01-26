$(document).on('ready',listarIngresos());
function listarIngresos(){
		var url = baseurl+("cIngresos/listarIngresos");
		$.ajax({
			type:'POST',
			url:url,
			cache:false,
			success: function(respuesta){
				html="<tbody>";
				var registro= JSON.parse(respuesta);
				if(actualizar==1){
					for(var value of registro){
						html+="<tr><td>"+value.id_ingreso+"</td><td id='tipoIngreso' data-id_ingreso='"+value.id_ingreso+"' contenteditable>"+value.tipo+"</td><td id='cantidadIngreso' data-id_ingreso='"+value.id_ingreso+"' contenteditable>"+value.cantidad+"</td><td id='descripcionIngreso' data-id_ingreso='"+value.id_ingreso+"' contenteditable>"+value.descripcion+"</td><td id='montoIngreso' data-id_ingreso='"+value.id_ingreso+"' contenteditable>"+value.monto+"</td><td id='fechaIngreso' data-id_ingreso='"+value.id_ingreso+"' contenteditable>"+value.fecha+"</td></tr>";
					}
				}
				if(actualizar==0){
					for(var value of registro){
						html+="<tr><td>"+value.id_ingreso+"</td><td>"+value.tipo+"</td><td>"+value.cantidad+"</td><td>"+value.descripcion+"</td><td>"+value.monto+"</td><td>"+value.fecha+"</td></tr>";
					}
				}
				html+="</tbody>";
				$('#tblReporteIngresos').append(html).show();
				$('#tblReporteIngresos').DataTable({
		          
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
