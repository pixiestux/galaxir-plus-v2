<?php

class ordenes_entrada extends CI_Controller{


/* - - - - -
FUNCION PARA MOSTRAR FORMULARIO DE AGREGAR ORDEN A ALMANCEN
- - - - - - */
	function agregar_form(){ 
		if($this->session->userdata('logeado')){ //veo si tiene sesion iniciada

			// cargo las variables de sesion
			$data = array();
			$data['nombre']=$this->session->userdata('nombre');
			$data['email']=$this->session->userdata('email');
			$data['usuario']=$this->session->userdata('usuario');
			$data['perfil']=$this->session->userdata('perfil');
			
			// hago la consulta al modelo correspondiente
			$this->load->model('ordenes_model');
			$respuesta['clientes'] = $this->ordenes_model->trae_clientes();
			$respuesta['estilos'] = $this->ordenes_model->trae_estilos();

			// Cargo las vistas correspondientes
			$this->load->view("desarrollo/desarrollo_head", $data);
			$this->load->view("desarrollo/desarrollo_aside", $data);
			$this->load->view("desarrollo/desarrollo_orden_entrada_form", $respuesta);
			$this->load->view("desarrollo/desarrollo_foot", $data);
		}else{
			redirect(base_url(), 'refresh');
		}
	}



/* - - - - -
FUNCION PARA GUARDA ORDEN EN LA DB
- - - - - - */
	function guarda_orden(){
		$this->load->model('ordenes_model');

		$id_cliente = $this->input->post('cliente');
		$estilo = $this->input->post('estilo');
		$marca = $this->input->post('marca');
		$cantidad = $this->input->post('cantidad');
		$modelo = $this->input->post('modelo');
		$observaciones = $this->input->post('observaciones');
		date_default_timezone_set("America/Mexico_City");
		$fecha = date('Y-m-d H:i:s');
		$stamp = time();

		$guarda = $this->ordenes_model->guarda_orden(
			$fecha,
			$stamp,
			$id_cliente,
			$cantidad,
			$estilo,
			$marca,
			$modelo,
			$observaciones
			);

		// cargo las variables de sesion
			$data = array();
			$data['nombre']=$this->session->userdata('nombre');
			$data['email']=$this->session->userdata('email');
			$data['usuario']=$this->session->userdata('usuario');
			$data['perfil']=$this->session->userdata('perfil');

			$respuesta['mensaje'] = 'Orden guardada correctamente';

			$this->load->library('encrypt');
			$this->encrypt->set_cipher(MCRYPT_RIJNDAEL_128);

			// Primero convierto a encript la orden y despues la base64 para viajar por URL
			$respuesta['id_orden'] = base64_encode($this->encrypt->encode($guarda));


			// Cargo las vistas correspondientes
			$this->load->view("desarrollo/desarrollo_head", $data);
			$this->load->view("desarrollo/desarrollo_aside", $data);
			$this->load->view("desarrollo/orden_entrada_guardo", $respuesta);
			$this->load->view("desarrollo/desarrollo_foot", $data);

	}




/*- - - - - - - - - - 
PARA IMPRIMIR LA ORDEN DE ENTRADA
- - - - - - - - - - */
		function imprimir($id_orden){ 
		if($this->session->userdata('logeado')){

			// cargo lib de encriptacion y defino el cipher
			$this->load->library('encrypt');
			$this->encrypt->set_cipher(MCRYPT_RIJNDAEL_128);

			// Desencripto el numero de orden
			$id_orden = base64_decode($id_orden);
			$id_orden =  $this->encrypt->decode($id_orden);

			// Cargo em modelo correspondiente
			$this->load->model('ordenes_model');
			$resultado = $this->ordenes_model->trae_orden($id_orden);

			$data =  array();
			$data['orden'] = $resultado[0];

			$this->load->view('desarrollo/imprime_orden', $data);

			// echo "Enviaste la orden  ==> ".$id_orden;
		}else{
			redirect(base_url(), 'refresh');
		}
	}







}


?>