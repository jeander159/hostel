document.addEventListener('DOMContentLoaded',function(){
	let fDesde = document.getElementById('fechaDesde');
	let fHasta = document.getElementById('fechaHasta');
	
	fDesde.addEventListener('change',function(){
		let fechaDesde=fDesde.value;
		fechaHasta=fHasta.value;
		if(fechaHasta==''){
			fechaHasta=fechaDesde;
			
		}
		let url=baseurl+'cReserva/getFecha';
		const request=new XMLHttpRequest();

		request.open('POST',url,true);
		request.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=UTF-8');
		request.send('fechaDesde='+fechaDesde+'&fechaHasta='+fechaHasta)
		request.onload=function(){
				if(request.status >= 200 && request.status < 400){
					let data=request.responseText;
					let registro=JSON.parse(data);
					
					html="<tbody>";
						for(let value of registro){
							if(value.estado==1){
								html+="<tr><td>"+value.id_reserva+"</td><td>"+value.nombre_completo+"</td><td style='display:block;width:140px !important;overflow:hidden'>"+value.region+"</td><td>"+value.pais+"</td><td>"+value.tipo+"</td><td>"+value.numero+"</td><td>"+value.monto+"</td><td>"+value.fecha_ingreso+"</td><td>"+value.fecha_salida+"</td><td>"+value.usuario+"</td><td style='color:blue'>EMITIDA</td></tr>";
							}else{
								html+="<tr><td>"+value.id_reserva+"</td><td>"+value.nombre_completo+"</td><td style='display:block;width:140px !important;overflow:hidden'>"+value.region+"</td><td>"+value.pais+"</td><td>"+value.tipo+"</td><td>"+value.numero+"</td><td>"+value.monto+"</td><td>"+value.fecha_ingreso+"</td><td>"+value.fecha_salida+"</td><td>"+value.usuario+"</td><td style='color:red'>ANULADA</td></tr>";
							}
							
						}
					html+="</tbody>";

					let tblReporteBusquedaReservas=document.getElementById('tblReporteBusquedaReservas');
					// tblReporteBusquedaReservas.appendChild(html);
					tblReporteBusquedaReservas.innerHTML=html;
					 // alertify.alert('Se eliminó correctamente el Ingreso');
					 console.log(data)
					  
				}else{
					let data=request.responseText;
					console.log(data);
					
				}
			}
			request.onerror=function(){
				console.log('no hay conexion con el servidor');
				alertify.error('no hay conexion con el servidor');
			}
	})
	fHasta.addEventListener('change',function(){
		let fechaDesde=fDesde.value;
		let fechaHasta=fHasta.value;
		if(fechaDesde==''){
			fechaDesde=fechaHasta;
		}
		let url=baseurl+'cReserva/getFecha';
		const request=new XMLHttpRequest();

		request.open('POST',url,true);
		request.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=UTF-8');
		request.send('fechaDesde='+fechaDesde+'&fechaHasta='+fechaHasta)
		request.onload=function(){
				if(request.status >= 200 && request.status < 400){
					let data=request.responseText;
					let registro=JSON.parse(data);
					
					html="<tbody>";
						for(let value of registro){
							if(value.estado==1){
								html+="<tr><td>"+value.id_reserva+"</td><td>"+value.nombre_completo+"</td><td style='display:block;width:140px !important;overflow:hidden'>"+value.region+"</td><td>"+value.pais+"</td><td>"+value.tipo+"</td><td>"+value.numero+"</td><td>"+value.monto+"</td><td>"+value.fecha_ingreso+"</td><td>"+value.fecha_salida+"</td><td>"+value.usuario+"</td><td style='color:blue'>EMITIDA</td></tr>";
							}else{
								html+="<tr><td>"+value.id_reserva+"</td><td>"+value.nombre_completo+"</td><td style='display:block;width:140px !important;overflow:hidden'>"+value.region+"</td><td>"+value.pais+"</td><td>"+value.tipo+"</td><td>"+value.numero+"</td><td>"+value.monto+"</td><td>"+value.fecha_ingreso+"</td><td>"+value.fecha_salida+"</td><td>"+value.usuario+"</td><td style='color:red'>ANULADA</td></tr>";
							}
						}
					html+="</tbody>";

					let tblReporteBusquedaReservas=document.getElementById('tblReporteBusquedaReservas');
					// tblReporteBusquedaReservas.appendChild(html);
					tblReporteBusquedaReservas.innerHTML=html;
					 // alertify.alert('Se eliminó correctamente el Ingreso');
					 console.log(data)
					   
				}else{
					let data=request.responseText;
					console.log(data);
					
				}
			}
			request.onerror=function(){
				console.log('no hay conexion con el servidor');
				
			}
	})

})