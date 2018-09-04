<?php 
class Model_dashregprop extends CI_model
{
	function __construct(){
		$this->load->database();
	}
public function insert_propiedad($nombre,$tipo_prop,$area,$habitaciones,$direccion,$ubicacion,$img,$img2,$img3)
{
	$data= array(
'nombre_prop'=>$nombre,
'tipo_propiedad'=>$tipo_prop,
'area_terreno'=>$area,
'total_habitaciones'=>$habitaciones,
'direccion'=>$direccion,
'ubicacion'=>$ubicacion,
'img_galeria'=>$img,
'img_galeria2'=>$img,
'img_galeria3'=>$img
);
	return $this->db->insert('propiedades',$data);
}
}


?>