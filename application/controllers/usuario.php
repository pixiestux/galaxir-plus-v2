<?php

class Usuario extends CI_Controller{

/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
FUNCION QUE VALIDA EL INCIIO DE SESION
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
	function login(){

		$this->load->helper('form');

		//cargo la lib de validacion
		$this->load->library('form_validation');

		//--Defino los mensajes personalizados de validacion
		$this->form_validation->set_message('required', 'Campo obligatorio');
		$this->form_validation->set_message('min_length', 'La longitud minima debe ser 5');
		$this->form_validation->set_message('max_length', 'La longitud maxima debe ser 16');

		//--Defino las validaciones de los campos
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|min_length[3]|max_length[16]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[3]|max_length[16]');

		if($this->form_validation->run()==FALSE){ // -- Si la validacion es erronea
			$this->load->view('home_head');
			$this->load->view('home');
			$this->load->view('home_foot');
		}else{		// -- SI la validacion es correcta
			// -- CArgo el modelo correspondiente
			$this->load->model('usuarios_model');

			// -- Nombro mis Variables
			$usuario = $this->input->post('usuario');
			$password = $this->input->post('pass');

			// -- SI el modelo me regresa resultado...
			$respuesta = $this->usuarios_model->login($usuario, $password); 

			if($respuesta){
				$data_usuario = array(
					'nombre' => $respuesta->nombre,
					'email' => $respuesta->email,
					'usuario' => $respuesta->usuario,
					'perfil' => $respuesta->perfil,
					'logeado' => TRUE,
					 );

				// ---- INCIO LA SESION
				$this->session->set_userdata($data_usuario);
				redirect('usuario/logeado');
				
			// 	echo '<pre>';
			// 	print_r($resl);
			// 	echo '</pre>';
				// $this->load->view("desarrollo/inicio", $data_usuario);
			}else{
				$this->load->view("home_head");
				$this->load->view("home", array('error_pass' => 'Usuario o password incorrectos') );
				$this->load->view("home_foot");
			} 
		}

		
	}



	function logeado(){
		if($this->session->userdata('logeado')){
			$data = array();
			$data['nombre']=$this->session->userdata('nombre');
			$data['email']=$this->session->userdata('email');
			$data['usuario']=$this->session->userdata('usuario');
			$data['perfil']=$this->session->userdata('perfil');

			$this->load->view("desarrollo/desarrollo_head", $data);
			$this->load->view("desarrollo/desarrollo_aside", $data);
			$this->load->view("desarrollo/desarrollo", $data);
			$this->load->view("desarrollo/desarrollo_foot", $data);
		}else{
			redirect(base_url(), 'refresh');
		}
	}



	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}



}

?>