<?php
/**
 * 
 */
class Clogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('vlogin',$data);
	}

	public function ingresar(){
		$usu = $this->input->post('txtUsuario');
		$pass = $this->input->post('txtClave');

		$res = $this->mlogin->ingresar($usu,$pass);

		if($res == 1){
			$this->load->view('persona/vupdpersona');
		}else{
			$data['mensaje']="Usuario o contraseña incorrectos";
			$this->load->view('vlogin',$data);
		}
	}
}