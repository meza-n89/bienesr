<?php 
/**
 * 
 */
class Dashboard extends CI_controller
{
	
	public function index(){
		$this->load->library('session');
		$this->load->helper('url');
		if($this->session->userdata('id')==NULL)
		{
			redirect('');
		}
		$this->load->helper('url');
		$this->load->view('dashboard/index');
	}
	public function dashboard_view(){
		$this->load->helper('url');
		$this->load->view('dashboard/index');
	}
public function charts_view(){
	$this->load->helper('url');
	$this->load->view('dashboard/charts');
}
public function forms_view(){
		$this->load->helper('url');
	$this->load->view('dashboard/');
}
public function calendar_view(){
		$this->load->helper('url');
	$this->load->view('dashboard/calendar');
}
public function propiedades_view(){
	$this->load->helper('url');
	$this->load->view('dashboard/gallery');
}
public function catalogo_view(){
	$this->load->helper('url');
	$this->load->model('Model_show','md',true);
	//$query=
	$data['query']=$this->md->show_users();
	$this->load->view('dashboard/tables_usuarios',$data);
}
public function registroprop_view(){
	$this->load->helper('url');
	$this->load->model('Model_show','md',true);
	$data['query']=$this->md->show_prop();
	$this->load->view('dashboard/form-common',$data);
}

}



?>