<?php 
class Dash_regprop extends CI_controller
{
	public function Insert_prop()
{




	$this->load->helper('url');
	$this->load->model('Model_dashregprop','MoD',true);
	$config['upload_path'] = './docs/';
    $config['allowed_types'] ='jpg|png|gif';
	$this->load->library('upload',$config);
	$this->upload->do_upload('userfile');
	$datos1=$this->upload->data();
	 $this->upload->do_upload('userfile1');
	$datos2=$this->upload->data();
	 $this->upload->do_upload('userfile2');
	$datos3=$this->upload->data();
	
	$data= array(
	'nombre_prop'=>$this->input->post("nombre"),
	'tipo_propiedad'=>$this->input->post("tipo"),
	'area_terreno'=>$this->input->post("area"),
	'total_habitaciones'=>$this->input->post("habitaciones"),
	'direccion'=>$this->input->post("direccion"),
	'ubicacion'=>$this->input->post("ubicacion"),
	'img_galeria'=>"docs/".$datos1['file_name'],
	'img_galeria2'=>"docs/".$datos2['file_name'],
	'img_galeria3'=>"docs/".$datos3['file_name'],
	'id_usuario'=> NULL
	);
	$this->MoD->insert_propiedad($data);
}
public function delete_property()
{
	//$id=echo $value['id_propiedad'];
	$id=$this->input->get('id');
	$this->load->model('Model_dashregprop','MoD',true);
	$this->MoD->delete_propiedad($id);
}
public function update_propiedad()
{
	
}
}






?>