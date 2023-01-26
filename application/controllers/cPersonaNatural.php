	<?php 
		/**
		* 
		*/
		class cPersonaNatural extends CI_Controller
		{
			
			function __construct()
			{
				parent::__construct();
				$this->load->model('mPersonaNatural');
				//	$this->load->library('encrypt');
			}
			public function index(){

				$data['contenido']="persona/vPersonaNatural";
				$this->load->view("plantilla/plantilla",$data);
				
			}
			public function guardar(){
				$datos['nombres']=strtoupper($this->input->post('txtNombres'));							
				$datos['apellido_paterno']=strtoupper($this->input->post('txtApellidoPat'));
				$datos['apellido_materno']=strtoupper($this->input->post('txtApellidoMat'));						
				$datos['id_documento']=$this->input->post('cmbTipoDocumento');
				$datos['numero_documento']=$this->input->post('txtDni');	
				$datos['sexo']=$this->input->post('cmbSexoPersona');
				$datos['tipo']=$this->input->post('cmbTipoPersona');
				$datos['nombre_completo']=$datos['nombres']." ".$datos['apellido_paterno']." ".$datos['apellido_materno'];
				$datos['id_estado_civil']=$this->input->post('cmbEstadoCivil');
				$registro=$this->mPersonaNatural->guardar($datos);

				if($datos['numero_documento']==1){
					$datosReniec['dni']=$this->input->post('txtDni');
					$datosReniec['nombres']=$this->input->post('txtNombres');							
					$datosReniec['apellido_paterno']=$this->input->post('txtApellidoPat');
					$datosReniec['apellido_materno']=$this->input->post('txtApellidoMat');

					$registroReniec=$this->mPersonaNatural->guardarReniec($datosReniec);
				}

				echo $registro;
				
			}
			public function listarPersonaNatural(){
				$resultado=$this->mPersonaNatural->listarPersonaNatural();
				echo json_encode($resultado);
			}
			public function buscarNombrePersonaNatural(){
				$nombre=$this->input->post('nombre');
				$nombres=$this->mPersonaNatural->buscarNombrePersonaNatural($nombre);
				echo json_encode($nombres);
				// $data['buscarNombreCliente']=$this->mUsuario->buscarNombreCliente($nombre);
				// echo json_encode($data);
			}
			public function listarPersonasNaturales(){
				$datos=$this->mPersonaNatural->listarPersonasNaturales();
				echo json_encode($datos);
			}
			public function actualizarPersona(){
				$id=$this->input->post('id');
				$texto=$this->input->post('texto');
				$columna=$this->input->post('columna');
				$datos=$this->mPersonaNatural->actualizarPersona($id,$texto,$columna);
				echo $datos;
			}
		}
	 ?>