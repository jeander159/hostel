<?php 
	/**
	* 
	*/
	class mHabitaciones extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($data){
			$query=$this->db->insert('administracion.habitaciones',$data);
			if($query){
				echo 'Se registro correctamente la nueva habitacion';
			}else{
				echo 'No se pudo registrar la habitación';
			}
		}

		public function listarHabitaciones(){
			$query=$this->db->query("SELECT * FROM administracion.habitaciones ORDER BY numero");
			return $query->result();
		}
		public function actualizarEstadoHabitacion($id,$habitacion,$columna){
			$query=$this->db->query("UPDATE administracion.habitaciones SET $columna='$habitacion' WHERE id_habitacion='$id'");
			if($query){
				echo "Se actualizó correctamente ";
			}
			// $query=$this->db->query('administracion.personas_naturales')
			// return $query->result();
		}
		public function actualizarHabitacion($id,$texto,$columna){
			$query=$this->db->query("UPDATE administracion.habitaciones SET $columna='$texto' WHERE id_habitacion='$id'");
			if($query){
				echo "Se actualizo correctamente la habitacion";
			}else{
				echo "No se pudo realizar la actualización";
			}
			
		}
		
	}
 ?>