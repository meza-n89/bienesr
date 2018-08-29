<?php
/**
 * 
 */

class Login extends CI_controller
{


	public function login_view(){
		//if(isset($this->session->set_userdata('id')))
		$this->load->helper('url');
		$this->load->library('session');
		if($this->session->userdata('id')!=NULL)
		{
			redirect('Welcome');
		}
		$this->load->helper('url');
		$this->load->view('login');
	}
	public function validate_login(){
		$this->load->library('session');
		$this->load->helper('url');
		if($this->session->userdata('id')!=NULL)
		{
			redirect('Welcome/index');
		}
		
		
		$this->load->model('Login_model','md',true);
		$username=htmlspecialchars($_POST['username']);
		$password=htmlspecialchars($_POST['password']); 
		$queve=$this->md->Verify_users($username,$password);
		if(!$queve==0){
			$this->session->set_userdata('id',$username);
			foreach ($queve as $value) {
				if($value['rol']=='admin')
				{
					echo 1;
				}
				else{
					echo 2;
				}
			}
			//$this->load->view('gallery');
			//echo base_url().'dashboard/';
			//echo 1;
			
		} else{
			echo 0;
		}

	}
public function logout(){
	$this->load->library('session');
	$this->load->helper('url');
	$this->session->sess_destroy();
	header($this->load->view('index'));
}
}



?>