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
		$datos['mensaje']='Alta evento exitosa';
		$datos['ruta']="index.php/prueba/eventos";
		$this->load->view('mensaje',$datos);
		//$datos[]		
	}

	public function AltaPonentes()
	{
		$this->form_validation->set_message('required','El campo %s es requerido');
		$this->form_validation->set_rules('nom','Nombre','required');
		$this->form_validation->set_rules('correo','Correo','required|valid_email');
		


		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('ponentes');
		}
		else
		{	
			$datos['nombre']=$this->input->post('nom');
			$datos['correo'] =$this->input->post('correo');
			$datos['telefono'] =$this->input->post('tel');
			$datos['domicilio'] =$this->input->post('dom');

			$this->m_congreso->agregaPonente($datos);
			$datos['mensaje']='Alta de ponente exitosa';
			$datos['ruta']="index.php/prueba/ponentes";
			$this->load->view('mensaje',$datos);
		}

		//$datos[]		
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */