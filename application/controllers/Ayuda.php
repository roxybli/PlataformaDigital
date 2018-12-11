<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayuda extends CI_Controller {


	public function index()
	{
			if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');	
			$this->load->view('Ayuda/Ayuda');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
			$this->load->view('Ayuda/Ayudavisitante');

		}
		$this->load->view('administrador/base/footer');
	}


}