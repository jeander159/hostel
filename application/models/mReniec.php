<?php 
	/**
	* 
	*/
	class mReniec extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function guardarDni($dni,$nombres,$apellidoPat,$apellidoMat){
			$query=$this->db->query("INSERT INTO reniec.reniec (dni,nombres,apellido_paterno,apellido_materno) VALUES('$dni','$nombres','$apellidoPat','$apellidoMat') ");
			return $this->db->insert_id();
		}
		public function consultarDni($dni){
			$query=$this->db->query("SELECT dni,nombres,apellido_paterno,apellido_materno FROM reniec.reniec WHERE dni='$dni'");
			return $query->result();
		}
		public function consultarDniId($id){
			$query=$this->db->query("SELECT dni,nombres,apellido_paterno,apellido_materno FROM reniec.reniec WHERE id='$id'");	
			return $query->result();
		}
		public function guardarDniPersona($dni,$nombres,$apellidoPat,$apellidoMat){
			$query=$this->db->query("INSERT INTO reniec.reniec (dni,nombres,apellido_paterno,apellido_materno) VALUES('$dni','$nombres','$apellidoPat','$apellidoMat') ");
		}
		public function consultarDniPersona($dni){
			$query=$this->db->query("SELECT dni,nombres,apellido_paterno,apellido_materno FROM reniec.reniec WHERE dni='$dni'");
			return $query->result();
		}
	}
 ?>