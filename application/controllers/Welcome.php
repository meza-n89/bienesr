<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcomead
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('index');
	}

	public function getCitas()
	{
		$this->load->model('Model_registro','md',true);
		$result=$this->md->get_cita();
		echo json_encode($result);
	}
	public function add_cita(){
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Model_registro','md',true);

		$x=$this->md->insert_cita(
			$this->input->post('nombre'),
			$this->input->post('apellido'),
			$this->input->post('email'),
			$this->input->post('telefono'),
			$this->input->post('fecha_ini'),
			$this->input->post('fecha_fin')
		);
		if($x==true)
		{
           $mensaje = array(
			0 => 'Su mensaje fue enviado con exito',
           	1 =>true
          );
        /*$this->load->library('email');       
        $config['protocol'] = 'smtp';
        $config["smtp_host"] = 'smtp.google.com';
        $config["smtp_user"] = 'skynet.prueba89@gmail.com';
        $config["smtp_pass"] = 'Combo_89';
        $config["smtp_port"] = '25';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['validate'] = TRUE;
        $this->email->initialize($config);
        $this->email->from('skynet.prueba89@gmail.com', 'Gustavo meza');
        $this->email->to('gustavomeza.n89@gmail.com', 'GM');
        $this->email->subject('notificacion de captura');
        $this->email->message(
        $this->input->post('nombre'),
		$this->input->post('apellido'),
		$this->input->post('email'),
		$this->input->post('telefono'),
		$this->input->post('horario')
         );*/
         //$this->email->send();
         //echo var_dump($this->email);
   
         return $this->load->view('index' , compact('mensaje'));
    

        }
	    else
	    {
	    	 $mensaje = array(
			0 => 'Su mensaje fue enviado con exito',
           	1 =>true

           );

       return $this->load->view('index' , compact('mensaje'));
	    }
}

		
	
	
}
