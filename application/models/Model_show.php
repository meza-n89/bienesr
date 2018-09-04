<?php 
/**
 * 
 */
class Model_show extends CI_model
{
	
	function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
	}
public function show_users()
{
	$query=$this->db->get('usuario');
	return $query->result_array();
}
}

?>