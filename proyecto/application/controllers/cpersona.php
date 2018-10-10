<?php
/**
 * 
 */
class Cpersona extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona'); //Cargamos el Modelo << mpersona >>
		$this->load->model('musuario');
		$this->load->library('encryption');
	}

	public function index() {
		$this->load->view('persona/vpersona');
	}

	public function guardar(){
		//echo "Entro al metodo guardar";
		//$this->load->view('persona/vpersona');


		/* Vamos a recoger la información del formulario */

		$param['dni'] = $this->input->post('txtDNI');
		$param['nombre'] = $this->input->post('txtNombre');
		$param['appaterno'] = $this->input->post('txtApPaterno');
		$param['apmaterno'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');
		$param['fecnac'] = $this->input->post('datFecNac');

		/* Usuario */
		$paramUsu['nombUsuario'] = $this->input->post('txtUsuario');
		$paramUsu['clave'] = $this->input->post('txtClave');

		/* llamamos al modelo < mpersona > y el metodo Guardar ((Guardar esta esperando una variable param)) */
		
		$lastId = $this->mpersona->guardar($param); 

		if ($lastId > 0) {
			$paramUsu['idPersona'] = $lastId;
			$this->musuario->guardarUsuario($paramUsu);
		}
	}
}