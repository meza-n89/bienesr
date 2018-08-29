<?PHP 
class Model_registro extends CI_Model{
 function __construct(){
$this->load->database();
 }
public function insert_cita($nombre,$apellido,$email,$telefono,$horario){

$data= array(
'nombre'=>$nombre,
'apellido' =>$apellido,
'email'=>$email,
'telefono'=>$telefono,
'horario'=>$horario
);
return $this->db->insert('cita',$data);



}







}







?>