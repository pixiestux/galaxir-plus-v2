<?php

class home extends CI_Controller{

	function index(){
		
		$this->load->helper('form');

		$this->load->view('home_head');
		$this->load->view('home');
		$this->load->view('home_foot');
	}
}

?>