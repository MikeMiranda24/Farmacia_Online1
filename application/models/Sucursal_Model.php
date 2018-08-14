<?php 

class Sucursal_Model extends CI_model
{
	
	public function Datos_Sucursal($name,$address,$phone)
	{
		$this->load->database();
		$Datos='INSERT INTO tab_sucursales(nombre_sucursal,direccion,telefono) 
		VALUES("'.$name.'","'.$address.'","'.$phone.'")';
		return $this->db->query($Datos);

	}
}


 ?>