<?php
class Model_dashboard extends CI_model
{
	fucntion __construct(){
		$this->load->database;
	}

	public function Total_users()
{
	$query= $this->db->count_all_results('usuario');
	return $query;
}
	public function total_citas()
{
$query= $this->db->count_all_results('cita');
return $query;
}
	

}


?>