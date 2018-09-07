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
public funtion update_user()
{
	$data= array(
'nombre'=>$nombrex,
'apellido' =>$apellidox,
'correo'=>$emailx,
'telefono'=>$telefonox,
'username'=>$usernamex,
'password'=>$passwordx,
'rol'=>$rolx
);
$this->db->replace('usuario',$data);
}







}







?>