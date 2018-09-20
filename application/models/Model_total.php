<?php 
class Model_total extends CI_model{
function __construct(){
	$this->load->helper('url');
	$this->load->database();
}
public function total_users()
{
	
	$totalu= $this->db->count_all_results('usuario');
	return $totalu;

/*	$r =  $this->db->get('usuario')->count();
	return $r;*/
}
public function total_citas()
{
	
	$totalu= $this->db->count_all_results('cita');
	return $totalu;

/*	$r =  $this->db->get('usuario')->count();
	return $r;*/
}
public function total_propiedades()
{
	
	$totalprop= $this->db->count_all_results('propiedades');
	return $totalprop;

/*	$r =  $this->db->get('usuario')->count();
	return $r;*/
}

}



?>