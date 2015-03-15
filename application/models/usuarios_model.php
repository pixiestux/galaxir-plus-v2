<?php

class usuarios_model extends CI_Model{



	function login($user, $pass){

		// $this -> db -> select('id','nombre','usuario', 'email', 'perfil', 'estatus');
		// $this -> db -> from('usuarios');
		// $this -> db -> where('usuario', $user);
		// $this -> db -> where('pass', MD5($pass));

		$query = $this -> db -> where('usuario', $user);
		$query = $this -> db -> where('pass', MD5($pass));
		$query = $this->db->get('usuarios');
		$resultado = $query->row();
		return $resultado;

		// if($query -> num_rows() == 1){
		// 	$resultado = $query->result_array(); // -- convierto el resultado de la consulta en array
		// 	return $resultado;
		// }else{
		// 	return false;
		// }
	}




} 

?>