<?php 
	/**
	* 
	*/
	class mLogin extends CI_Model
	{
		public function ingresar($usu,$pass){


			$query=$this->db->query("SELECT r.id_rol,r.cargo,u.id_usuario,u.usuario,u.clave,u.foto,u.telefono,p.nombre_completo,p.numero_documento,pm.registrar,pm.leer,pm.actualizar,pm.eliminar
				FROM administracion.usuarios as u 
				INNER JOIN administracion.personas as p on u.id_persona=p.id_persona 
				INNER JOIN administracion.roles as r ON u.id_rol=r.id_rol
				INNER JOIN administracion.permisos as pm ON u.id_usuario=pm.id_usuario 
				WHERE u.usuario=upper('$usu') AND u.clave=upper('$pass')");

			
			if($query->num_rows()==1){
				$r=$query->row();

				$s_usuario=array(
						's_idUsuario'=>$r->id_usuario,
						's_nombre'=>$r->nombre_completo,
						's_user'=>$r->usuario,
						's_foto'=>$r->foto,
						's_cargo'=>$r->cargo,
						's_idCargo'=>$r->id_rol,
						's_registrar'=>$r->registrar,
						's_leer'=>$r->leer,
						's_actualizar'=>$r->actualizar,
						's_eliminar'=>$r->eliminar,
						's_dni'=>$r->numero_documento,
						's_telefono'=>$r->telefono,
					);
				$this->session->set_userdata($s_usuario);
				return 1;
			}else{
				return 0;
			}
			
		}
		public function listarHabitaciones(){
			// $this->db->select('id_habit,numero_habit,tipo_habit,precio_habit,estado_habit');
			// $this->db->from('administracion.habitaciones');
			// $this->db->where('id_habit',$ide);
			
			$query=$this->db->query("SELECT * FROM administracion.habitaciones ORDER BY numero");
			
			return $query->result();
		}
	}
 ?>