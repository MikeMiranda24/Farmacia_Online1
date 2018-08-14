<?php 


class Crear_Model extends CI_Model
{
	
	public function Nuevo_User()// aqui deben ir los datos que recibira para llenar la base de datos 
	{
		$this->load->database();
		$datos='INSERT INTO tab_Cliente()VALUES()';
		return $this->db->query($datos);

	}
}



 ?>