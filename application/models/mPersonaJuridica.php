<?php 
	/**
	* 
	*/
	class mPersonaJuridica extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($campos){	
			$query=$this->db->insert('administracion.personas',$campos);
			if($query){
				echo 'Persona registrada correctamente';
			}else{
				echo 'Error en el registro de la persona';
			}
		}
		public function buscarNombrePersonaJuridica($nombre){
			$query=$this->db->query("SELECT * FROM administracion.personas_juridicas WHERE rsocial_per_ju LIKE upper('%$nombre%')");
			return $query->result();
			// $query=$this->db->query('administracion.personas_naturales')
			// return $query->result();
		}
		public function listarPersonasJuridicas(){
			$query=$this->db->query("SELECT ruc_per_ju,rsocial_per_ju,direccion_per_ju,correo_per_ju,telefono_per_ju FROM administracion.personas_juridicas");
			return $query->result();
		}
	}
 ?>