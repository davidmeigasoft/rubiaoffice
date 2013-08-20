<?php 

class Usuario_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
function usuario()//devuelve todos los usuarios
{
	$query = $this->db->get('usuario');
	return $query->result();
}

function usuario_id($id)//devuelve todos los usuarios
{
	$this->db->where('usuario_id', $id);
    $query = $this->db->get('usuario');
    return $query->result();
}

function verificar_usuario($mail,$pass)//Comprueba login
{
	$this->db->where('mail', $mail);
	$this->db->where('pass', $pass);
    $query = $this->db->get('usuario');
    return $query->result();
}


}//model

?>