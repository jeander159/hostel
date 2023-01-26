$('#btnRegistrarUsuarios').click(function(){
	var url=baseurl+"cUsuario/guardar";
	var ape_pat=$('#txtApellidoPat').val();
	var pass1=$('#txtPassword1').val();
	var pass2=$('#txtPassword2').val();
	var complet="";
	var inputsUser=[];
	var formData=new FormData($('#formRegistrarUsuarios')[0]);
	
	$( "#formRegistrarUsuarios input" ).each(function( index ) {
		inputsUser.push($(this).val());	 
	});	

		if(pass1!=pass2){
			alert("Las contraseñas no coinciden");
			return false;
		} 
		else{
			if(inputsUser[0]=='' || inputsUser[1]=='' || inputsUser[2]=='' ||  inputsUser[3]=='' ||inputsUser[4]==''|| inputsUser[5]==''|| inputsUser[6]==''|| inputsUser[7]==''){
				alert('complete todos los campos obligatorios')
				return false;
			}else{
				$.ajax({
					type:'POST',
					url:url,
					contentType:false,
					processData:false,
					cache:false,
					data:formData,
					success:function(registro){
						
						$('#mensajeUsuario').html(registro).show(300).delay(4000).hide(300);
						$('#formRegistrarUsuarios')[0].reset();
						return false;
					}
				});
				return false;
			}
		}
});