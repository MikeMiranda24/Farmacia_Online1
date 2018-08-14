<?php


class Inicio extends CI_Controller {

	public function index() // este en la pagina principal por defaul que se carga , y manda a llamar a la vista que es la pagina principal de nuestra aplicacion
	{
		$this->load->view('Pagina_Principal'); // aqui mandamos a llamar a la vista que nos muesta la pagina principal
		$this->load->helper('url');
	}

	public function Registrarse(){
		$this->load->view('Crear_Usuario');
		$this->load->helper();
	}

	public function Crear_Usuario()// estamos creando la funcion que llenara los datos del cliente para registrarse
	{
		$this->load->helper('url');
		$this->load->model('Crear_Model','CM',true);
		if($this->CM->Nuevo_User())//aqui dentro pondremos los datos que reciba el controlador de la vista 
		{
			$this->load->view("Login");
		}else{
			$this->Registrarse();
		}
	}
}
