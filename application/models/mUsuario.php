<?php 
	/**
	* 
	*/
	class mUsuario extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardarPermisos($data){
			
			
			$query=$this->db->insert('administracion.permisos',$data);
			if($query){
				echo 'Se registró correctamente al usuario';

			}
			else{
				echo 'No se pudo registrar al usuario';
			}
		}
		public function guardar($data){
			$this->db->insert('administracion.usuarios',$data);
			return $this->db->insert_id();

		}
		public function actualizarFoto($foto,$id){

			$query=$this->db->query("UPDATE administracion.usuarios SET foto='$foto' WHERE id_usuario='$id'");
			

		}
		public function actualizarTelefono($telefono,$id){

			$query=$this->db->query("UPDATE administracion.usuarios SET telefono='$telefono' WHERE id_usuario='$id'");
			if($query){
				echo 'Se actualizó correctamente el telefono del usuario';

			}
			else{
				echo 'No se pudo actualizar al usuario';
			}

		}
		public function actualizarClave($claveAnterior,$claveNueva,$id){

			$query=$this->db->query("UPDATE administracion.usuarios SET clave='$claveNueva' WHERE id_usuario='$id' AND clave='$claveAnterior'");
			if($query){
				echo 'Se actualizó correctamente la contraseña';

			}
			else{
				echo 'Las contraseñas no coinciden';
			}

		}
		public function eliminar($idUsu){
			$campos= array(
					'id_user'=>$idUsu
			);
			$this->db->delete('administracion.usuarios',$campos);
			//$this->db->where('id_user',$idUsu);
			//$this->db->delete('administracion.usuarios');
		}
		public function listarUsuarios(){
			$query=$this->db->query("SELECT u.id_usuario,r.cargo,p.numero_documento,p.nombres,p.apellido_paterno,p.apellido_materno,u.telefono,u.usuario FROM administracion.usuarios as u INNER JOIN administracion.personas as p ON u.id_persona=p.id_persona INNER JOIN administracion.roles as r ON u.id_rol=r.id_rol");
			return $query->result();
		}
		public function obtenerRol(){
			
			$query=$this->db->query("SELECT * FROM administracion.roles");
			return $query->result();
		}
		public function listarPermisos(){
			$query=$this->db->query("SELECT pm.id_permiso,r.cargo,p.nombre_completo,u.usuario,r.id_rol,pm.registrar,pm.leer,pm.actualizar,pm.eliminar
				FROM administracion.usuarios as u
				INNER JOIN administracion.personas as p	
					ON u.id_persona=p.id_persona
				INNER JOIN administracion.roles as r
					ON u.id_rol=r.id_rol
				INNER JOIN administracion.permisos as pm
					ON u.id_usuario=pm.id_usuario");
			return $query->result();
		}
		public function actualizarPermisos($id,$texto,$columna){
			$query=$this->db->query("UPDATE administracion.permisos SET $columna='$texto' WHERE id_permiso='$id'");
			if($query){
				echo "Se cambio el permiso correctamente";
			}else{
				echo "No se pudo realizar la actualización";
			}
			
		}		
	}
 ?>