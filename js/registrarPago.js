$('#txtDescuento,#txtMonto').on('keyup',function(){
	var descuento=$('#txtDescuento').val();
	var monto=$('#txtMonto').val();

	var total=monto-descuento;
	$('#txtMontoTotal').val(total);
})