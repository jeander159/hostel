$('#btnRegistrarHabitaciones').click(function(){
	var url=baseurl+"cHabitaciones/guardar";
	var inputsHabit=[];
	$( "#formRegistrarHabitaciones input" ).each(function( index ) {
		inputsHabit.push($(this).val());	 
	});	
	console.log(inputsHabit)
	if(inputsHabit[0] =='' || inputsHabit[1]=='' || inputsHabit[2]=='' || inputsHabit[3]=='' || inputsHabit[4]=='' || inputsHabit[5]=='' || inputsHabit[6]=='' || inputsHabit[7]==''){
		alert('complete todos los campos obligatorios')
	}else{
		$.ajax({
			type:'POST',
			url:url,
			data:$('#formRegistrarHabitaciones').serialize(),
			success:function(registro){
				$('#mensajeHabitacion').html(registro).show(300).delay(4000).hide(300);
				$('#formRegistrarHabitaciones')[0].reset();
				return false;
			}
		});
	}
	
	return false;
});