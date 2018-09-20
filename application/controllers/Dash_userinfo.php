<?php 
class Dash_userinfo extends CI_controller{
 public function update_userinfo(){
 	$this->load->helper('url');
 	$this->load->model('Model_regusuario','MrU',true);
 	$laca=$this->MrU->update_user(
 		$this->input->post("id"),
 		$this->input->post("nombre"),
 		$this->input->post("apellido"),
 		$this->input->post("email"),
 		$this->input->post("telefono")
 	);
 	echo $laca;

 }
 public function update_info(){
 	$id=$this->input->get("id");
 		$this->load->helper('url');
 	$this->load->model('Model_regusuario','MrU',true);
 	$data['cita']=$this->MrU->get_user($id);
 	//echo var_dump($data);
 	$this->load->view('dashboard/modal_form',$data);

 }
 public function delete_user()
 {
 	$id=$this->input->get('id');
 	$this->load->model('Model_regusuario','MrU',true);
 	echo $this->MrU->delete_user($id);

 }




}

?>
