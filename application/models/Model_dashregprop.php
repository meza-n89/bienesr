<?php 
class Model_dashregprop extends CI_model
{
	function __construct(){
		$this->load->database();
	}
public function insert_propiedad($data)
{
$this->db->insert('propiedades',$data);

	return $this->db->insert('propiedades',$data);
}
public function delete_propiedad($id)
{
	$this->db->where('id_propiedad',$id);
	$delete=$this->db->delete('propiedades');
	return $delete;
}
public function update_prop($id)
}


?>