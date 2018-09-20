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
public function update_user($id,$nombre,$apellido,$email,$telefono)
{
	/*$data= array(
'nombre'=> $nombre,
'apellido'=> $apellido,
'email'=> $email,
'telefono'=>$telefono,
'horario'=> NULL
);*/
	$this->db->set('nombre',$nombre);
	$this->db->set('apellido',$apellido);
	$this->db->set('email',$email);
	$this->db->set('telefono',$telefono);
	//$this->db->set('',$nombre);
	$this->db->where('id_cita',$id);
	$laca=$this->db->update('cita');
	if($laca)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}

public function get_user($id){
$this->db->where('id_cita',$id);
$result=$this->db->get('cita');
return $result->result_array();


}
public function delete_user($id)
{
	$this->db->where('id_propiedad',$id);
	$delete=$this->db->delete('usuario');
	return $delete;
}





}







?>