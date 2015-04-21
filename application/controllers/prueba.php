<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('m_congreso'); //el modelo es el nombre del archivo phxp
		#carga de librerias
		#carga de helpers
	}

	public function index()
	{
		if (! $this->validaSesion())
		{
			$this->load->view('login');
		}
		$this->load->view('inicio');

	}

		public function eventos()
	{
		if (!$this->validaSesion())
		{
			redirect('prueba/login');
		}

		$this->load->view('eventos');

	}


		//$this->load->view("eventos");


	public function Ponentes()
	{
		$this->load->view("ponentes");
	}
	public function showPonentes()
	{
		$ponentes=$this->m_congreso->getPonentes();

		$this->load->view('tabla_ponentes',array("datos"=>$ponentes));
		//$info['datos']=$ponentes;
		//$this->load->view('tabla_ponentes',$info);

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
		$this->form_validation->set_message('valid_email','No es una dirección valia');
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
			$this->showPonentes();
		}



		//$datos[]
	}

	function borraPonente($id)
	{
		$this->m_congreso->borraPonente($id);
		$this->showPonentes();
	}

	function editaPonente($id)
	{
		$datos_ponente=$this->m_congreso->getPonente($id);
		$datos['ponente']=$datos_ponente[0];

		$this->load->view('editPonente',$datos);
	}

	function actualizaPonente()
	{
		$id=$this->input->post('id');

		$datos['nombre']=$this->input->post('nom');
		$datos['correo'] =$this->input->post('correo');
		$datos['telefono'] =$this->input->post('tel');
		$datos['domicilio'] =$this->input->post('dom');


		$this->m_congreso->actPonente($datos,$id);
		$this->showPonentes();

	}
	function getUEvento()
	{
		$this->db->order('idevento','desc');
		$this->db->limit(1);
		$query = $this->db->get('evento');

		return $query->result_array();
	}

	function agregaConferencia()
	{
		//obtener lista de ponentes
		//obtenet id del ultimo evento(avento actual)
		//pasar estos datos a la vista
		$ponentes=$this->m_congreso->getPonentes();
		$evento=$this->m_congreso->getUEvento();
		$datos['ponentes']=$ponentes;
		$datos['evento']=$evento[0];

		$this->load->view('conferencia',$datos);
	}

	function grabaConferencia()
	{
		$datos['nombre']=$this->input->post('nom');
		$datos['lugar']=$this->input->post('lugar');
		$datos['hora'] =$this->input->post('hora');
		$datos['fecha'] =$this->input->post('fecha');
		$datos['ponente_idponente'] =$this->input->post('ponente');
		$datos['evento_idevento'] =$this->input->post('idevento');

		$this->m_congreso->guardaConferencia($datos);
	}

	function editaConferencia()
	{

	}
	function showConferencia()
	{
		$conferencias=$this->m_congreso->getConferencia();
		foreach ($conferencias as $key => $value) {
			# code...
		}
		$this->load->view('tabla_conferencias',array("datos"=>$conferencias));
		//$info['datos']=$ponentes;
		//$this->load->view('tabla_ponentes',$info);
	}
	public function Talleres()
	{
		$this->load->view("talleres");
	}

	function login(){
		$cuenta=$this->input->post('cuenta');
		$clave=$this->input->post('clave');

		$res=$this->m_congreso->validarUsuario($cuenta,$clave);
		print_r($res);
		if (!empty($res))
		{
			$datos=array('cuenta'=>$res[0]['cuenta'],
										'nombre'=>$res[0]['nombre'],
										'categoria'=>$res[0]['categoria']);
			$this->session->set_userdata($datos);
			$this->load->view('inicio');
		}
		else{
			$this->load->view('login');
		}
	}
	function validaSesion()
	{
		if ($this->session->userdata('cuenta') != '') {
            return true;
        }
        else {
            return false;
        }
	}
}






/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
