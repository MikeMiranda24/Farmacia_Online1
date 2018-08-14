<?php 


class Login_Model extends CI_Model
{
	
	public function Login_Usuario(){// aqui dentro del parantecis deben ir las variables que traeran los datos de la base

		$this->load->database();
		$this->db->where();// dentro del parentecis deben ir los datos que estan en la base y queremos que se validen
		$datos=$this->db->get();// dentro del parentecis debe ir el nombre de la base de datos de donde queremos los datos 
		if($datos->result_array())
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}	
	
}



 ?>