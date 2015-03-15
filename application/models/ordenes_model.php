<?php

class ordenes_model extends CI_Model{



	function trae_clientes(){

		$query = $this->db->select('id, nombre');
		$query = $this->db->get('clientes');
		$resultado = $query->result_array();
		return $resultado;
	}


	function trae_estilos(){
		
		$query = $this->db->select('nombre');
		$query = $this->db->get('estilos');
		$resultado = $query->result_array();
		return $resultado; 
	}


	function guarda_orden($fecha,$stamp,$id_cliente,$cantidad,$estilo,$marca,$modelo,$observaciones){
		$query = $this->db->select('nombre');
		$query = $this->db->get_where('clientes', array('id' => $id_cliente));
		$resultado = $query->result_array();
		
		$data = array(
			'fecha_ingreso' => $fecha,
			'stamp_ingreso' => $stamp,
			'id_cliente'	=> $id_cliente,
			'cliente' 		=> $resultado[0]['nombre'],
			'cantidad'		=> $cantidad,
			'descripcion'	=> $estilo,
			'marca'			=> $marca,
			'modelo'		=> $modelo,
			'observaciones' => $observaciones,
			'estatus'		=> '1'
			);
		$this->db->insert('ordenes',$data);
		return $this->db->insert_id();
	}



	function trae_orden($id_orden){
		$query = $this->db->where('id', $id_orden);
		$query = $this->db->get('ordenes');
		$resultado = $query->result_array();

		return $resultado;
	}




} 

?>