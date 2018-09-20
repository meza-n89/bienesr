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
	$query=$this->db->get('cita');
	return $query->result_array();
}
public function show_prop()
{
	$query=$this->db->get('propiedades');
	return $query->result_array();
}
}

?>