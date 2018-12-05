<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayuda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login'))
		{
			echo '<script type="text/javascript">
				alert("Debes iniciar sesion !!!");
				self.location ="'.base_url().'"
				</script>';
		}
	}
	public function index()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('Ayuda/Ayuda');
		$this->load->view('administrador/base/footer');

	}
}