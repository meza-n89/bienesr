<?php 
/**
 * 
 */
class Show extends CI_controller
{
	
	function __construct(argument)
	{
		# code...
	}
public function show_user()
{
	$this->load->model('Model_show','md',true);
	$query=$this->md->show_users();
	$data['query']=$query;
	$this->load->view('dashboard/tables_usuarios',$query);

}

}


?>