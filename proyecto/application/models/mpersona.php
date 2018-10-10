<?php 

/**
 * Tabla Persona en la Base de Datos
 */
class Mpersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'dni' => $param['dni'],
			'nombre' => $param['nombre'],
			'appaterno' => $param['appaterno'],
			'apmaterno' => $param['apmaterno'],
			'email' => $param['email'],
			'fecnac' => $param['fecnac']
		);

		$this->db->insert('persona',$campos); // Estamos guardando en la BD, a la tabla persona

		//Retornar el ID
		return $this->db->insert_id();
	}
}