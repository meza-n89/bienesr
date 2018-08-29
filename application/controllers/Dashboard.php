<?php 
/**
 * 
 */
class Dashboard extends CI_controller
{
	
	public function index(){
		$this->load->helper('url');
		$this->load->view('dashboard/index');
	}
}





?>