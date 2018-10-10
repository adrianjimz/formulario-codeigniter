<?php

/**
 * 
 */
class Musuario extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarUsuario($param){
		$campos = array(
			'nombUsuario' => $param['nombUsuario'],
			'clave' => $param['clave'],
			'idPersona' => $param['idPersona']
		);

		$this->db->insert('usuario',$campos);
	}
}