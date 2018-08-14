<?php 

class Login_Control extends CI_controller
{
	public function Pagina_Principal()
	{
		$this->load->helper('url');
		$this->load->view('Login');
	}
	
	public function Datos_Usuario(argument)
	{
		$this->load->helper('url');
		$nombre=$this->input->post('Usuario');
		$contra=$this->input->post('password');
		$this->load->model('Login_Model','LM',true);

		$result=$this->LM->Login_Usuario($nombre,$contra);

		if($result==1){
		$this->load->view();// dentro del parentecis debe ir el nombre de la vista donde accedera el cliente una vez alla ingresado
		}
		else
		{
			$this->Pagina_Principal();
		}
	}
}

?>