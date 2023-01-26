$('#firstDate').on('change',function(){
	var firstDate=$(this).val();
	var lastDate=$('#lastDate').val();
	var url=baseurl+'cReserva/estadisticasMes';
	if(lastDate==''){
		lastDate=firstDate;
	}
	$.ajax({
		type:'POST',
		url:url,
		data:{firstDate:firstDate,lastDate:lastDate},
		cache:false,
		success: function(respuesta){
			var registro= JSON.parse(respuesta);
			console.log(registro.habitSimplesSshh)
			console.log(registro.habitMatrimonialSshh)
			console.log(registro.totalHabitacionesSshh)
			console.log(registro.habitSimples)
			console.log(registro.habitMatrimonial)
			console.log(registro.totalHabitacionesSinSshh)
			console.log(registro.tarifaSimpleSshh)
			console.log(registro.tarifaMatrimonialSshh)
			console.log(registro.tarifaSimple)
			console.log(registro.tarifaMatrimonial)
			console.log(registro.arriboPersonasSimples)
			console.log(registro.arriboPersonasMatrimoniales)
			console.log(registro.totalArriboPersonas)
			console.log(registro.habitacionesOcupadasSimples)
			console.log(registro.habitacionesOcupadasMatrimoniales)
			console.log(registro.totalHabitacionesOcupadas)
			console.log('dias'+registro.arriboDia1[0].sum)
			// console.log(registro.sumaa)
			
			// console.log(respuesta.habitSimplesSshh)
		}
	})
	
})
$('#lastDate').on('change',function(){
	var lastDate=$(this).val();
	var firstDate=$('#firstDate').val();
	var url=baseurl+'cReserva/estadisticasMes';
	if(firstDate==''){
		firstDate=lastDate;
	}
	$.ajax({
		type:'POST',
		url:url,
		data:{firstDate:firstDate,lastDate:lastDate},
		cache:false,
		success: function(respuesta){
			console.log(respuesta)
		}
	})
	
})