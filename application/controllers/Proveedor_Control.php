<?php 

class Proveedor_Control extends CI_Controller
{
	
	public function Proveedores()
	{
		$this->load->helper('url');
		$this->load->view('Nuevo_Proveedor');
	}

	public function Registro_Proveedor()
	{
		$this->load->helper('url');
		$name=$this->input->post('nombre');
		$phone=$this->input->post('telefono');

		$this->load->model('Proveedor_Model','PM',true);
		if($this->PM->Datos_Proveedor($name,$phone))
		{
			$this->load->view('Nuestro_Proveedores');
		}
		else
		{
			$this->Proveedores();
		}
	}
}



 ?>