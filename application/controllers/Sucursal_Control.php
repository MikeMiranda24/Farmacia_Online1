<?php 

class Sucursal_Control extends CI_Controller
{
	
	public function Sucursales()
	{
		$this->load->helper('url');
		$this->load->view('Nueva_Sucursales');
	}

	public function Registro_Sucursal()
	{
		$this->load->helper('url');
		$name=$this->input->post('nombre');
		$address=$this->input->post('direcc');
		$phone=$this->input->post('telefono');

		$this->load->model('Sucursal_Model','SM',true);
		if($this->SM->Datos_Sucursal($name,$address,$phone))
		{
			$this->load->view('Nuestras_Sucursales');
		}
		else
		{
			$this->Sucursales();
		}
	}
}





 ?>