$('#txtRuc').on('keyup',function(){
	var url=baseurl+('cSunat/consultarRuc');
	var ruc = $('#txtRuc').val();
	$.ajax({
		type:'POST',
		url:url,
		data:'ruc='+ruc,
		
		success:function(respuesta){
			var registro= JSON.parse(respuesta);
			html='<ul style="padding:0;position:absolute;z-index:100">';	
			for(var c of registro){
				html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarRuc(\''+c.ruc+'\',\''+c.razon_social+'\',\''+c.direccion+'\');">'+c.ruc+' '+c.razon_social+'</li>';
			}
			html+='</ul>';
			$('#registroRuc').html(html).show();
			$(window).on('click',function(){
				$('#registroRuc').hide();
			})	
			
		}
	});
	
});

$('#btnConsultarRuc').on('click',function(){

	var url=baseurl+('cSunat/consultarSunat');
	var ruc = $('#txtRuc').val();
	console.log(ruc)
	if(ruc==""){
		$('#registroRuc').html('DIGITE UN NUMERO DE RUC').show(300).delay(4000).hide(300);
	}else{
		$.ajax({
		type:'POST',
		url:url,
		data:'ruc='+ruc,
		success:function(respuesta){
			var registro= JSON.parse(respuesta);
			html='<ul style="padding:0;position:absolute;z-index:100">';	
			for(var c of registro){
				html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarRuc(\''+c.ruc+'\',\''+c.razon_social+'\',\''+c.direccion+'\');">'+c.ruc+' '+c.razon_social+'</li>';
			}
			html+='</ul>';
			$('#registroRuc').html(html).show();
			$(window).on('click',function(){
				$('#registroRuc').hide();
			})	
		}
	})
	}
	
})
function seleccionarRuc(ruc,razonSocial,direccion){

	$('#txtRuc').val(ruc);
	$('#txtRazonSocial').val(razonSocial);
	$('#txtDireccionPersona').val(direccion);
	$('#registroRuc').html(html).hide(500);
	
}