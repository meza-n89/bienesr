<?PHP 
class Model_registro extends CI_Model{
	 function __construct(){
	$this->load->database();
 }
public function insert_cita($nombre,$apellido,$email,$telefono,$fecha_ini,$fecha_fin){

	$data= array(
	'nombre'=>$nombre,
	'apellido' =>$apellido,
	'email'=>$email,
	'telefono'=>$telefono,
	'fecha_ini'=>$fecha_ini,
	'fecha_fin'=>$fecha_fin
	);
	return $this->db->insert('cita',$data);



}
public function get_cita(){


	$var= $this->db->query("SELECT 'cita' as title, '2018-09-18' as start, '2018-09-18' as end FROM cita");
	return $var->result_array();



}






}







?>