<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Registro extends CI_Controller{
   // private $db;
   

    public function registro_view()
	{   $this->load->helper('url');
		$this->load->view('registro');
	}
      

       // 


        public function Registro_usuarios(){
            $this->load->database();
          $this->load->helper('url');
          $this->load->model('Model_regusuario','md',true);
          $X=$this->md->insert_user(
                $this->input->post("nombre"),
                $this->input->post("apellido"),
                $this->input->post("email"),
                $this->input->post("telefono"),
                $this->input->post("username"),
                $this->input->post("password"),
                $this->input->post("rol")
              );
        
      if($X==true){
          $this->load->helper('url');
            $this->load->view('login');
      }
        
    }

    public function regexito(){
        $this->load->helper('url');
            $this->load->view('registroex');
        }
        
}
?>
