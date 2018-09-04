<?php 
class Dash_regprop extends CI_controller
{
	public function Insert_prop()
{
	$this->load->helper('url');
	$this->load->model('Model_dashregprop','MoD',true);
	$this->MoD->Insert_prop(
		$this->input->post("nombre"),
		$this->input->post("area"),
		$this->input->post("habitaciones"),
		$this->input->post("direccion"),
		$this->input->post("ubicacion"),
		$this->input->post("tipo"),
		$this->input->post("img"),
		$this->input->post("img2"),
		$this->input->post("img3"),
);

}
}






?>