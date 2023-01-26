$(document).on('ready',listarPermisos());
function listarPermisos(){
		var url = baseurl+("cUsuario/listarPermisos");

		$.ajax({
			type:'POST',
			url:url,
			success: function(respuesta){
				var registro=eval(respuesta);
			
				html="<tbody>";
				for (var i = 0; i<registro.length; i++) {
					html+="<tr><td>"+registro[i]["cargo"]+"</td><td>"+registro[i]["nombre_completo"]+"</td>";
					
					if(registro[i]["registrar"]==1){
						html+="<td><input id='idReg' data-id_registrar='"+registro[i]["id_permiso"]+"' type='checkbox' checked value="+registro[i]["registrar"]+"></td>";

					}if(registro[i]["registrar"]==0){
						html+="<td><input id='idReg' data-id_registrar='"+registro[i]["id_permiso"]+"' type='checkbox' value="+registro[i]["registrar"]+"></td>";

					}
					if(registro[i]["leer"]==1){
						html+="<td><input id='idLeer' data-id_leer='"+registro[i]["id_permiso"]+"' checked type='checkbox' value="+registro[i]["leer"]+"></td>";
					}
					if(registro[i]["leer"]==0){
						html+="<td><input id='idLeer'  data-id_leer='"+registro[i]["id_permiso"]+"' type='checkbox' value="+registro[i]["leer"]+"></td>";
					}
					if(registro[i]["actualizar"]==1){
						html+="<td><input id='idAct' data-id_actualizar='"+registro[i]["id_permiso"]+"' type='checkbox' checked value="+registro[i]["actualizar"]+"></td>";
					}
					if(registro[i]["actualizar"]==0){
						html+="<td><input id='idAct' data-id_actualizar='"+registro[i]["id_permiso"]+"' type='checkbox' value="+registro[i]["actualizar"]+"></td>";
					}
					if(registro[i]["eliminar"]==1){
						html+="<td><input id='idElm' data-id_eliminar='"+registro[i]["id_permiso"]+"' type='checkbox' checked value="+registro[i]["eliminar"]+"></td>";
					}
					if(registro[i]["eliminar"]==0){
						html+="<td><input id='idElm' data-id_eliminar='"+registro[i]["id_permiso"]+"' type='checkbox' value="+registro[i]["eliminar"]+"></td>";
					}	
					html+="</tr>";
				};
				html+="</tbody>";
				$('#tblPermisosUsuarios').append(html).show();
				$('#tblPermisosUsuarios').DataTable({
		          
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
