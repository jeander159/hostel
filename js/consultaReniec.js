$('#txtDniPersona').on('keyup',function(){
	var url=baseurl+('cReniec/consultarDni');
	var dni = $('#txtDniPersona').val();
	
	$.ajax({
		type:'POST',
		url:url,
		data:'dni='+dni,

		success:function(respuesta){
			var registro= JSON.parse(respuesta);
			html='<ul style="padding:0;position:absolute;z-index:100">';	
			for(var c of registro){
				html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarDniPersona(\''+c.dni+'\',\''+c.nombres+'\',\''+c.apellido_paterno+'\',\''+c.apellido_materno+'\');">'+c.nombres+' '+c.apellido_paterno+' '+c.apellido_materno+'</li>';
			}
			html+='</ul>';
			$('#registroDniPersona').html(html).show();
			$(window).on('click',function(){
				$('#registroDniPersona').hide();
			})
			
		}
	});
	
});
$('#btnConsultarDniPersona').on('click',function(){

	var url=baseurl+('consulta.php');
	var dni = $('#txtDniPersona').val();
	// console.log(dni)
	if(dni==""){
		$('#registroDniPersona').html('DIGITE UN NUMERO DE DNI').show(300).delay(4000).hide(300);
	}else{
		$.ajax({
			type:'POST',
			url:url,
			data:'dni='+dni,
			cache:false,
			beforeSend:function(){
				$('#registroDniPersona').append('<div>cargando...</div>').show();
			},
			success:function(respuesta){
				console.log(respuesta)
				if(respuesta==""){
					$('#registroDniPersona').html('no se encontro el dni').show();
					$(window).on('click',function(){
						$('#registroDniPersona').hide();
					})	
				}else{
					var registro= JSON.parse(respuesta);
					var resultado=registro['result']
					html='<ul style="padding:0;position:absolute;z-index:100">';	
					// console.log(resultado)
					
					if(resultado['apellidos']){
						var ape=resultado['apellidos'].split(' ');
						html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarDniPersona(\''+resultado['DNI']+'\',\''+resultado['Nombres']+'\',\''+ape[0]+'\',\''+ape[1]+'\');">'+resultado['Nombres']+' '+ape[0]+' '+ape[1]+'</li>';
					}else if(resultado['paterno']){
						html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarDniPersona(\''+resultado['DNI']+'\',\''+resultado['nombre']+'\',\''+resultado['paterno']+'\',\''+resultado['materno']+'\');">'+resultado['nombre']+' '+resultado['paterno']+' '+resultado['materno']+'</li>';
					}else{
						html+='<li style="" class="form-control btn-default" id="busqueda" onclick="seleccionarDniPersona(\''+resultado['DNI']+'\',\''+resultado['Nombres']+'\',\''+resultado['ApellidoPaterno']+'\',\''+resultado['ApellidoMaterno']+'\');">'+resultado['Nombres']+' '+resultado['ApellidoPaterno']+' '+resultado['ApellidoMaterno']+'</li>';
					}	

					html+='</ul>';
					$('#registroDniPersona').html(html).show();
					$(window).on('click',function(){
						$('#registroDniPersona').hide();
					})	
				}
			},
			error:function(){
				$('#registroDniPersona').html('no hay conexion a internet').show();
			}
		})
	}
	
})
function seleccionarDniPersona(dni,nombres,apellidoPat,apellidoMat){

	$('#txtDniPersona').val(dni);
	$('#txtNombresPersona').val(nombres);
	$('#txtApellidoPatPersona').val(apellidoPat);
	$('#txtApellidoMatPersona').val(apellidoMat);
	$('#registroDniPersona').html(html).hide(500);
	
}