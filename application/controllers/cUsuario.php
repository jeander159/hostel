<?php 
	/**
	* 
	*/
	class cUsuario extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mUsuario');
			//	$this->load->library('encrypt');
		}
		public function index(){

			$data['contenido']="persona/vUsuario";
			$this->load->view("plantilla/plantilla",$data);
			
		}
		public function guardar(){
			
			$config=[
				"upload_path"=>"./upload",
				"allowed_types"=>"png|jpg"
			];
			$this->load->library('upload',$config);
			if($this->upload->do_upload('txtFoto')){
				$data=array("upload_data"=>$this->upload->data());

				$datos['id_rol']=$this->input->post('cmbCargo');
				$datos['usuario']=$this->input->post('txtUsuario');
				$datos['clave']=$this->input->post('txtClave1');
				// $datos['clave_encriptada']=$this->input->post('txtApellidoMat');
				$datos['estado']=1;
				$datos['telefono']=$this->input->post('txtTelefono');
				$datos['id_persona']=$this->input->post('txtIdPersona');
				$datos['foto']=$data['upload_data']['file_name'];
				
				$idUsuario=$this->mUsuario->guardar($datos);

				if(!empty($idUsuario)){

					$datosPermiso['id_usuario']=$idUsuario;

					switch ($datos['id_rol']) {
						case 1:
							
							$datosPermiso['registrar']=1;
							$datosPermiso['leer']=1;
							$datosPermiso['actualizar']=1;
							$datosPermiso['eliminar']=1;
							break;
						case 2:
							$datosPermiso['registrar']=1;
							$datosPermiso['leer']=1;
							$datosPermiso['actualizar']=1;
							$datosPermiso['eliminar']=0;
							break;
						case 3:
							$datosPermiso['registrar']=0;
							$datosPermiso['leer']=1;
							$datosPermiso['actualizar']=0;
							$datosPermiso['eliminar']=0;
							break;		
						
						default:
							$datosPermiso['registrar']=0;
							$datosPermiso['leer']=0;
							$datosPermiso['actualizar']=0;
							$datosPermiso['eliminar']=0;
							break;
					}
					
					
					$permisos=$this->mUsuario->guardarPermisos($datosPermiso);
					echo $permisos;
				}

			}else{
				echo $this->upload->display_errors();
			}

			
			
		}
		public function actualizarFoto(){
			$config=[
				"upload_path"=>"./upload",
				"allowed_types"=>"png|jpg"
			];
			$this->load->library('upload',$config);
			if($this->upload->do_upload('txtActFoto')){
				$data=array("upload_data"=>$this->upload->data());

				$idUsuario=$this->input->post('hdnIdUsuario');
				
				$foto=$data['upload_data']['file_name'];
				
				$registro=$this->mUsuario->actualizarFoto($foto,$idUsuario);
				echo $foto;

			}else{
				echo $this->upload->display_errors();
			}
		}
		public function actualizarTelefono(){
				$idUsuario=$this->input->post('idUsuario');
				$telefono=$this->input->post('telefono');
				$registro=$this->mUsuario->actualizarTelefono($telefono,$idUsuario);
				echo $registro;				
		}
		public function actualizarClave(){
				$idUsuario=$this->input->post('idUsuario');
				$claveAnterior=$this->input->post('claveAnterior');
				$claveNueva=$this->input->post('claveNueva');
				$registro=$this->mUsuario->actualizarClave($claveAnterior,$claveNueva,$idUsuario);
				echo $registro;				
		}
		public function eliminar(){
			//$idUsu=5;
			$idUsu=$this->input->post('txtIdUsuario');
			$this->mUsuario->eliminar($idUsu);
		}
		public function listarUsuarios(){
			$usuarios=$this->mUsuario->listarUsuarios();
			echo json_encode($usuarios);
		}
		public function obtenerRol(){
			$roles=$this->mUsuario->obtenerRol();
			echo json_encode($roles);
		}
		public function listarPermisos(){
			$permisos=$this->mUsuario->listarPermisos();
			echo json_encode($permisos);
		}
		public function actualizarPermisos(){
			$id=$this->input->post('id');
			$texto=$this->input->post('texto');
			$columna=$this->input->post('columna');
			$datos=$this->mUsuario->actualizarPermisos($id,$texto,$columna);
			echo $datos;
		}
		
	}
 ?>