<?PHP 
class Model_regusuario extends CI_Model{
 function __construct(){
$this->load->database();
 }
public function insert_user($nombre,$apellido,$email,$telefono,$username,$password,$rol){

$data= array(
'nombre'=>$nombre,
'apellido' =>$apellido,
'correo'=>$email,
'telefono'=>$telefono,
'username'=>$username,
'password'=>$password,
'rol'=>$rol
);
return $this->db->insert('usuario',$data);



}







}







?>