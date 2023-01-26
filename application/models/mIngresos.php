<?php 
	/**
	* 
	*/
	class mIngresos extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($data){
			$query=$this->db->insert('tesoreria.ingresos',$data);
			if($query){
				echo 'Se registro correctamente la venta';
			}else{
				echo 'No se pudo registrar la venta';
			}
		}
		public function obtenerConceptos(){
			
			$query=$this->db->query("SELECT * FROM tesoreria.conceptos");
			return $query->result();
		}
		public function listarIngresos(){
			$query=$this->db->query("SELECT i.id_ingreso,c.descripcion as tipo,i.cantidad,i.descripcion,i.monto,i.fecha FROM tesoreria.ingresos  as i INNER JOIN tesoreria.conceptos as c ON i.concepto_id=c.id_concepto");
			return $query->result();
		}
		public function actualizarIngresos($id,$texto,$columna){
			$query=$this->db->query("UPDATE tesoreria.ingresos SET $columna='$texto' WHERE id_ingreso='$id'");
			if($query){
				echo "Se actualizo correctamente la Ingresos";
			}else{
				echo "No se pudo realizar la actualización";
			}
			
		}
	
	}
 ?>