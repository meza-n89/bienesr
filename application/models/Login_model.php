<?php 
class Login_model extends CI_model
{
function __construct(){
	$this->load->database();
}
public function Verify_users($username,$password){
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$query= $this->db->get('usuario');

	if($query->num_rows()==1){
		return $query->result_array();
	} else {
		return 0;
	}
}

public function Verify_user($username){
	$this->db->where('username',$username);
	//$this->db->where('password',$password);
	$query= $this->db->get('usuario');

	if($query->num_rows()>0){
		return 1;
	} else {
		return 0;
	}
}


}


?>