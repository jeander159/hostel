<?php 
	/**
	* 
	*/
	class mUbigeo extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listarPaises($pais){
			$query=$this->db->query("SELECT id_pais,pais,nacionalidad FROM ubigeo.paises WHERE pais LIKE UPPER('%$pais%') ORDER BY pais ASC");
			return $query->result();
		}
		public function listarRegiones($idPais){
			$query=$this->db->query("SELECT p.id_pais,p.pais,p.nacionalidad,r.region,r.id_region FROM ubigeo.paises as p INNER JOIN ubigeo.regiones as r ON p.id_pais=r.id_pais WHERE p.id_pais='$idPais' ORDER BY r.region ASC");
			return $query->result();
		}		
	}
 ?>