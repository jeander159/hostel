$.post(baseurl+("cPersonaNatural/listarPersonaNatural"),
	function(data){
		var	cliente=JSON.parse(data);
		$.each(cliente,function(i,item){
			$('#cmbCliente').append('<option value="'+item.id_per_nat+'">'+item.nombre_completo+'</option>');
		});
		
	});
$('#cmbCliente').change(function(){
	$('#cmbCliente option:selected').each(function(){
		var id=$('#cmbCliente').val();
		alert(id);
	});
});