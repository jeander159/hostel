<?php 
	/**
	* 
	*/
	class mModalPersonaJuridica extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($param){
			$campos= array(
				'ruc_per_ju'=>$param['ruc_per_ju'],
				'rsocial_per_ju'=>$param['rsocial_per_ju'],
				'direccion_per_ju'=>$param['direccion_per_ju'],
				'telefono_per_ju'=>$param['telefono_per_ju'],
				'correo_per_ju'=>$param['correo_per_ju'],
			);
			$this->db->insert('administracion.personas_juridicas',$campos);
		}
	}
 ?>