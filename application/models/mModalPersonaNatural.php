<?php 
	/**
	* 
	*/
	class mModalPersonaNatural extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($param){
			$campos= array(
				'dni_per'=>$param['dni_per'],
				'nombres_per'=>$param['nombres_per'],
				'apellido_pat_per'=>$param['apellido_pat_per'],
				'apellido_mat_per'=>$param['apellido_mat_per'],
				'nombre_completo'=>$param['nombres_per']." ".$param['apellido_pat_per']." ".$param['apellido_mat_per'],
				'direccion_per'=>$param['direccion_per'],
				'telefono_per'=>$param['telefono_per'],
				'fecha_nac_per'=>$param['fecha_nac_per'],
				'correo_per'=>$param['correo_per'],
			);
			$this->db->insert('administracion.personas_naturales',$campos);
		}
	}
 ?>