<?php 

class Proveedor_Model extends CI_Model
{
	
	public function Datos_Proveedor($name,$phone)
	{
		$this->load->database();
		$detail='INSERT INTO tab_proveedor(nombre_proveedor,telefono_proveedor) VALUES("'.$name.'","'.$phone.'")';
		return $this->db->query($detail);
	}

}

 ?>