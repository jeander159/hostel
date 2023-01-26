<?php 
	/**
	* 
	*/
	class cPersonaJuridica extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mPersonaJuridica');
			//	$this->load->library('encrypt');
		}
		public function index(){

			$data['contenido']="persona/vPersonaJuridica";
			$this->load->view("plantilla/plantilla",$data);

			
		}
		public function guardar(){
			$datos['razon_social']=$this->input->post('txtRazonSocial');						
			$datos['id_documento']=$this->input->post('txtRucPersona');
			$datos['numero_documento']=$this->input->post('txtRuc');	
			$datos['sexo']=$this->input->post('cmbSexoPersona');
			$datos['tipo']=$this->input->post('cmbTipoPersona');
			$datos['nombre_completo']=$this->input->post('txtRazonSocial');
			$datos['id_estado_civil']=$this->input->post('cmbEstadoCivil');
			
			$registro=$this->mPersonaJuridica->guardar($datos);
			echo $registro;
			
		}
		public function buscarNombrePersonaJuridica(){
				$nombre=$this->input->post('nombre');
				$nombres=$this->mPersonaJuridica->buscarNombrePersonaJuridica($nombre);
				echo json_encode($nombres);
				// $data['buscarNombreCliente']=$this->mUsuario->buscarNombreCliente($nombre);
				// echo json_encode($data);
			}
		public function listarPersonasJuridicas(){
			$datos=$this->mPersonaJuridica->listarPersonasJuridicas();
			echo json_encode($datos);
		}
	}
 ?>