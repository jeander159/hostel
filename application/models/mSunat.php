<?php 
	/**
	* 
	*/
	class mSunat extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function guardarRuc($ruc,$razonSocial,$direccion){
			$query=$this->db->query("INSERT INTO sunat.sunat (ruc,razon_social,direccion) VALUES('$ruc','$razonSocial','$direccion')");
			return $this->db->insert_id();
		}
		public function consultarRuc($ruc){
			$query=$this->db->query("SELECT ruc,razon_social,direccion FROM sunat.sunat WHERE ruc='$ruc'");
			return $query->result();
		}
		public function consultarRucId($id){
			$query=$this->db->query("SELECT ruc,razon_social,direccion FROM sunat.sunat WHERE id='$id'");	
			return $query->result();
		}
	}
 ?>