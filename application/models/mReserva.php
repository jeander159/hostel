<?php 
	/**
	* 
	*/
	class mReserva extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardarHuesped($data){
			
			$this->db->insert('administracion.huespedes',$data);
			return $this->db->insert_id();
		}	
		public function guardarPago($data){
			
			$this->db->insert('tesoreria.pagos',$data);

			return $this->db->insert_id();
		}
		
		public function guardarReserva($data){
			
			$query=$this->db->insert('administracion.reservas',$data);
			if($query){
				echo "La reserva se realizo con éxito";
			}
			else{
				echo "Hubo un error en la reserva";
			}
		}
		public function listarReservas(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT r.id_reserva,r.cantidad_personas,pe.nombre_completo,u.usuario,pa.monto,ha.tipo,ha.numero,re.region,pai.pais,r.fecha_ingreso,r.fecha_salida,r.estado,r.hora
					FROM administracion.reservas as r 
						INNER JOIN (
							administracion.huespedes as hu 
							INNER JOIN administracion.personas as pe 
							ON hu.id_persona=pe.id_persona 
							INNER JOIN(
								ubigeo.regiones as re
								INNER JOIN ubigeo.paises as pai
								ON pai.id_pais=re.id_pais
							)
							ON re.id_region=hu.id_region
						) 
						ON r.id_huesped=hu.id_huesped
						INNER JOIN administracion.usuarios as u 
						ON u.id_usuario=r.id_usuario
						INNER JOIN tesoreria.pagos as pa 
						ON pa.id_pago=r.id_pago
						INNER JOIN administracion.habitaciones as ha 
						ON ha.id_habitacion=r.id_habitacion 
						WHERE r.mes='$mes' and r.anio='$anio'
						ORDER BY r.fecha_ingreso ASC");
			return $query->result();
		}
		//Obtener numero de habitaciones ofertadas con baño
		public function obtenerHabitSimpleOferSshh(){
			$query=$this->db->query("SELECT count(*) FROM administracion.habitaciones  WHERE tipo='SIMPLE' and estado<>'MANTENIMIENTO' and incluye like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerHabitMatrimonialOferSshh(){
			$query=$this->db->query("SELECT count(*) FROM administracion.habitaciones  WHERE tipo='MATRIMONIAL' and estado<>'MANTENIMIENTO' and incluye like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerTotalHabitacionesSshh(){
			$query=$this->db->query("SELECT count(*) FROM administracion.habitaciones  WHERE  estado<>'MANTENIMIENTO' and incluye like '%SS.HH.%'");
			return $query->result_array();
		}
		
		//Obtener numero de habitaciones ofertadas con baño
		public function obtenerHabitSimpleOfer(){
			$query=$this->db->query("SELECT count(*) FROM administracion.habitaciones  WHERE tipo='SIMPLE' and estado<>'MANTENIMIENTO' and incluye not like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerHabitMatrimonialOfer(){
			$query=$this->db->query("SELECT count(*) FROM administracion.habitaciones  WHERE tipo='MATRIMONIAL' and estado<>'MANTENIMIENTO' and incluye not like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerHabitacionesOfer(){
			$query=$this->db->query("SELECT count(*) FROM administracion.habitaciones  WHERE estado<>'MANTENIMIENTO' and incluye not like '%SS.HH.%'");
			return $query->result_array();
		}
		
		public function obtenerTarifaSimpleSshh(){
			$query=$this->db->query("SELECT Max(precio) FROM administracion.habitaciones WHERE tipo='SIMPLE' and incluye like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerTarifaMatrimonialSshh(){
			$query=$this->db->query("SELECT Max(precio) FROM administracion.habitaciones WHERE tipo='MATRIMONIAL' and incluye like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerTarifaSimple(){
			$query=$this->db->query("SELECT Max(precio) FROM administracion.habitaciones WHERE tipo='SIMPLE' and incluye NOT like '%SS.HH.%'");
			return $query->result_array();
		}
		public function obtenerTarifaMatrimonial(){
			$query=$this->db->query("SELECT Max(precio) FROM administracion.habitaciones WHERE tipo='MATRIMONIAL' and incluye NOT like '%SS.HH.%'");
			return $query->result();
		}

		//OBTENER EL ARRIBO DE PERSONAS DURANTE EL MES
		public function obtenerArriboPersonasSimples(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(cantidad_personas) as suma FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE tipo='SIMPLE' and mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		public function obtenerArriboPersonasMatrimoniales(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(cantidad_personas) as suma FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE tipo='MATRIMONIAL' and mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		public function obtenerTotalArriboPersonas(){

			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(cantidad_personas) as suma FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		//obtner numero de pernoctacion en habitaciones simples, matrimoniales y el total
		public function obtenerPernoctacionesSimples(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(fecha_salida-fecha_ingreso) as dia FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE tipo='SIMPLE' and mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		public function obtenerPernoctacionesMatrimoniales(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(fecha_salida-fecha_ingreso) as dia FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE tipo='MATRIMONIAL' and mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		public function obtenerTotalNumeroPernoctacionesSimples(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(fecha_salida-fecha_ingreso) as dia FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		//obtener habitacion noche ocuapdas
		public function obtenerHabitacionesOcupadasSimples(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT count(id_reserva) FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE h.tipo='SIMPLE' and mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		public function obtenerHabitacionesOcupadasMatrimoniales(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT count(id_reserva) FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE h.tipo='MATRIMONIAL' and mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		public function obtenerTotalHabitacionesOcupadas(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT count(id_reserva) FROM  administracion.reservas as r
				INNER JOIN administracion.habitaciones as h ON r.id_habitacion=h.id_habitacion WHERE mes='$mes' and anio='$anio' AND r.estado=1");
			return $query->result();
		}
		//obtener arribo de personas por dia
		public function obtenerArriboDia($dia){
			$mes=date('m');
			$anio=date('Y');
			
			$query=$this->db->query("SELECT sum(cantidad_personas) FROM administracion.reservas as r WHERE fecha_ingreso='$anio-$mes-$dia' AND mes='$mes' AND anio='$anio' AND r.estado=1");
			return $query->result();	
		}
		public function obtenerTotalArriboDia(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT sum(cantidad_personas) FROM administracion.reservas as r WHERE  mes='$mes' AND anio='$anio' AND r.estado=1");
			return $query->result();	
		}
		public function obtenerArriboPais(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT pa.pais,SUM(r.cantidad_personas),sum(fecha_salida-fecha_ingreso) as dia
									FROM administracion.reservas as r 
										INNER JOIN (
											administracion.huespedes as hu 
											INNER JOIN administracion.personas as pe 
											ON hu.id_persona=pe.id_persona 
											INNER JOIN (
												ubigeo.regiones as re
												INNER JOIN ubigeo.paises as pa
												ON pa.id_pais=re.id_pais
											) 
											ON re.id_region=hu.id_region
										) 
										ON r.id_huesped=hu.id_huesped
									WHERE pa.pais<>'PERU' AND r.mes='$mes' AND r.anio='$anio' AND r.estado=1
									GROUP BY pa.pais");
			return $query->result_array();
		}
		public function obtenerArriboRegion(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT pa.pais,re.region,SUM(r.cantidad_personas),sum(fecha_salida-fecha_ingreso) as dia
									FROM administracion.reservas as r 
										INNER JOIN (
											administracion.huespedes as hu 
											INNER JOIN administracion.personas as pe 
											ON hu.id_persona=pe.id_persona 
											INNER JOIN (
												ubigeo.regiones as re
												INNER JOIN ubigeo.paises as pa
												ON pa.id_pais=re.id_pais
											) 
											ON re.id_region=hu.id_region
										) 
										ON r.id_huesped=hu.id_huesped
									WHERE pa.pais='PERU' AND mes='$mes' AND anio='$anio' AND r.estado=1
									GROUP BY pa.pais,re.region
									ORDER BY re.region ASC");
			return $query->result_array();
		}

		//OBTENER TOTAL DE ARRIBO POR REGION Y POR MES DE ACUERDO A LA NACIONALIDAD
public function obtenerTotalArriboPais(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT SUM(r.cantidad_personas),sum(fecha_salida-fecha_ingreso) as dia
									FROM administracion.reservas as r 
										INNER JOIN (
											administracion.huespedes as hu 
											INNER JOIN administracion.personas as pe 
											ON hu.id_persona=pe.id_persona 
											INNER JOIN (
												ubigeo.regiones as re
												INNER JOIN ubigeo.paises as pa
												ON pa.id_pais=re.id_pais
											) 
											ON re.id_region=hu.id_region
										) 
										ON r.id_huesped=hu.id_huesped
									WHERE pa.pais<>'PERU' AND mes='$mes' AND anio='$anio' AND r.estado=1");
			return $query->result_array();
		}
		public function obtenerTotalArriboRegion(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT SUM(r.cantidad_personas),sum(fecha_salida-fecha_ingreso) as dia
									FROM administracion.reservas as r 
										INNER JOIN (
											administracion.huespedes as hu 
											INNER JOIN administracion.personas as pe 
											ON hu.id_persona=pe.id_persona 
											INNER JOIN (
												ubigeo.regiones as re
												INNER JOIN ubigeo.paises as pa
												ON pa.id_pais=re.id_pais
											) 
											ON re.id_region=hu.id_region
										) 
										ON r.id_huesped=hu.id_huesped
									WHERE pa.pais='PERU' AND mes='$mes' AND anio='$anio' AND r.estado=1");
			return $query->result_array();
		}
		public function buscarMotivoViaje($motivo){
			$query=$this->db->query("SELECT * FROM tesoreria.motivos WHERE descripcion LIKE upper('%$motivo%')");
			return $query->result();
			// $query=$this->db->query('administracion.personas_naturales')
			// return $query->result();
		}
		public function ObtenerMotivosViajesExtranjeros(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT mo.descripcion, SUM(r.cantidad_personas)
									FROM administracion.reservas as r 
										INNER JOIN (
											administracion.huespedes as hu 
											INNER JOIN administracion.personas as pe 
											ON hu.id_persona=pe.id_persona 
											INNER JOIN (
												ubigeo.regiones as re
												INNER JOIN ubigeo.paises as pa
												ON pa.id_pais=re.id_pais
												
											) 
											ON re.id_region=hu.id_region
										) 
										ON r.id_huesped=hu.id_huesped
										INNER JOIN(
											tesoreria.pagos as pago
											INNER JOIN tesoreria.motivos as mo
											ON mo.id_motivo=pago.id_motivo
										)
										ON pago.id_pago=r.id_pago
									WHERE pa.pais<>'PERU' AND mes='$mes' AND anio='$anio' AND r.estado=1
									GROUP BY mo.descripcion,mo.id_motivo
									ORDER BY mo.id_motivo");
			return $query->result_array();
			// $query=$this->db->query('administracion.personas_naturales')
			// return $query->result();
		}
		public function ObtenerMotivosViajesPeruanos(){
			$mes=date('m');
			$anio=date('Y');
			$query=$this->db->query("SELECT mo.descripcion, SUM(r.cantidad_personas)
									FROM administracion.reservas as r 
										INNER JOIN (
											administracion.huespedes as hu 
											INNER JOIN administracion.personas as pe 
											ON hu.id_persona=pe.id_persona 
											INNER JOIN (
												ubigeo.regiones as re
												INNER JOIN ubigeo.paises as pa
												ON pa.id_pais=re.id_pais
												
											) 
											ON re.id_region=hu.id_region
										) 
										ON r.id_huesped=hu.id_huesped
										INNER JOIN(
											tesoreria.pagos as pago
											INNER JOIN tesoreria.motivos as mo
											ON mo.id_motivo=pago.id_motivo
										)
										ON pago.id_pago=r.id_pago
									WHERE pa.pais='PERU' AND mes='$mes' AND anio='$anio' AND r.estado=1
									GROUP BY mo.descripcion,mo.id_motivo
									ORDER BY mo.id_motivo");
			return $query->result_array();
			// $query=$this->db->query('administracion.personas_naturales')
			// return $query->result();
		}
		public function obtenerNumReservas(){
			$query=$this->db->query("SELECT estado,count(estado) as sumas from administracion.habitaciones GROUP BY estado");
			return $query->result_array();
		}
		public function anularReserva($id,$estado){
			$query=$this->db->query("UPDATE administracion.reservas SET estado='$estado' WHERE id_reserva='$id'");
			if($query){
				echo "Se anulo correctamente la reserva";
			}else{
				echo "No se pudo anular la reserva";
			}
			
		}
		
		public function getFecha($tabla,$fdesde,$fhasta){
			// echo $id;
			// $query="UPDATE $tabla SET nombre_de_campo = valor_nuevo WHERE id_ingreso=$id";
			$query="SELECT r.id_reserva,r.cantidad_personas,pe.nombre_completo,u.usuario,pa.monto,ha.tipo,ha.numero,re.region,pai.pais,r.fecha_ingreso,r.fecha_salida,r.estado
					FROM administracion.reservas as r 
						INNER JOIN (
							administracion.huespedes as hu 
							INNER JOIN administracion.personas as pe 
							ON hu.id_persona=pe.id_persona 
							INNER JOIN(
								ubigeo.regiones as re
								INNER JOIN ubigeo.paises as pai
								ON pai.id_pais=re.id_pais
							)
							ON re.id_region=hu.id_region
						) 
						ON r.id_huesped=hu.id_huesped
						INNER JOIN administracion.usuarios as u 
						ON u.id_usuario=r.id_usuario
						INNER JOIN tesoreria.pagos as pa 
						ON pa.id_pago=r.id_pago
						INNER JOIN administracion.habitaciones as ha 
						ON ha.id_habitacion=r.id_habitacion  WHERE r.fecha_ingreso BETWEEN '$fdesde' AND '$fhasta' ORDER BY r.fecha_salida DESC ";
			$resultado=$this->db->query($query);
			if($resultado->result()>0){
				return $resultado->result();
			}else{
				return $this->db->error();	
			}
		}

	}
 ?>

