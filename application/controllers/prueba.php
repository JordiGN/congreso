<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_congreso'); //el modelo es el nombre del archivo phxp
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

	public function Ponentes()
	{
		$this->load->view("ponentes");
	}

		public function AltaEventos()//Aqui se recibe lo que se envio del formulairo
	{
		$datos['nombre']=$this->input->post('nom');
		$datos['fecha'] =$this->input->post('fecha');
		$datos['lugar'] =$this->input->post('lugar');
		$datos['hora'] =$this->input->post('hora');
		$datos['costo'] =$this->input->post('costo');

		$this->m_congreso->agregaCongreso($datos);
		//$datos[]		
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */