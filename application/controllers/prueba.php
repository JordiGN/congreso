<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		#carga de librerias
		#carga de helpers
	}

	public function index()
	{
		$datos['nombre']="Juan Perez";

		$this->load->view('inicio',$datos);
	}

	public function opcion1()
	{
		
		$this->load->view("vista1");
	}

	public function opcion2()
	{
		
		$this->load->view('vista2');
	}

	public function opcion3()
	{
		
		$this->load->view("vista3");
	}

		public function eventos()
	{
		
		$this->load->view("eventos");
	}

		public function AltaEventos()
	{
		
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */