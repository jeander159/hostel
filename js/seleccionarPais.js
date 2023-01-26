$('#cmbPais').on('keyup',function(){
	var url=baseurl+'cUbigeo/listarPaises';
	var pais=$(this).val();

	$.ajax({
		type:'POST',
		url:url,
		data:'pais='+pais,
		cache:false,
		success:function(respuesta){
			var	registro=JSON.parse(respuesta);

			html='<ul style="padding:0;position:absolute;left:20px;z-index:100">';	
			for(var c of registro){
				html+='<li style="" class="form-control btn-default" id="busqueda" onclick="obtenerNacionalidad(\''+c.id_pais+'\',\''+c.nacionalidad+'\',\''+c.pais+'\');">'+c.pais+'</li>';
			}
			html+='</ul>';
			$('#registroPaises').html(html).show();
			$(window).on('click',function(){
				$('#registroPaises').hide();
			})
		}
	})
});
$('#cmbPais').on('keyup',function(){
	$('#cmbRegion').children().remove();
})
function obtenerNacionalidad(id,nacionalidad,pais){
	
	$('#txtNacionalidad').val(nacionalidad);
	$('#cmbPais').val(pais);
	$('#txtIdPais').val(id);
	var idPais=$('#txtIdPais').val();
	var url=baseurl+'cUbigeo/listarRegiones';

	$.ajax({
		type:'POST',
		url:url,
		data:'idPais='+idPais,
		cache:false,
		success:function(respuesta){
			var	registro=JSON.parse(respuesta);
			$.each(registro,function(i,item){
				$('#cmbRegion').append('<option value="'+item.id_region+'" onclick="obtenerRegion(\''+item.region+'\');">'+item.region+'</option>');
			});

		}
	})
}