<?php 
	/**
	* 
	*/
	class mPersonaNatural extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($data){
			
			$query=$this->db->insert('administracion.personas',$data);
			if(!$query){
				 $error=$this->db->error();
				 echo $error;
			}else{
				echo 'Persona registrada correctamente';
			}
		}
		public function guardarReniec($data){
			
			$query=$this->db->insert('reniec.reniec',$data);
			
		}

		public function listarPersonaNatural(){
				$query=$this->db->query("SELECT * FROM administracion.personas_naturales");
				return $query->result();

			}
		public function buscarNombrePersonaNatural($nombre){
			$query=$this->db->query("SELECT * FROM administracion.personas WHERE nombre_completo LIKE upper('%$nombre%')");
			return $query->result();
			// $query=$this->db->query('administracion.personas_naturales')
			// return $query->result();
		}
		public function listarPersonasNaturales(){
			$query=$this->db->query("SELECT p.id_persona,p.nombres,p.apellido_paterno,p.apellido_materno,p.razon_social,p.nombre_completo,p.numero_documento,t.abreviatura, e.descripcion FROM administracion.personas as p INNER JOIN administracion.tipo_documento as t ON p.id_documento=t.id_documento INNER JOIN administracion.estado_civil as e ON p.id_estado_civil=e.id_estado_civil ORDER BY p.nombre_completo ASC");
			return $query->result();
		}
		public function actualizarPersona($id,$texto,$columna){
			$query=$this->db->query("UPDATE administracion.personas SET $columna='$texto' WHERE id_persona='$id'");
			if($query){
				echo "Se actualizo correctamente la persona";
			}else{
				echo "No se pudo realizar la actualización";
			}
			
		}	
	}
 ?>