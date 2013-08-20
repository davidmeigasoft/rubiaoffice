<?php 

class Cliente_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
function cliente()//devuelve todos los clientes
{
	$query = $this->db->get('cliente');
	return $query->result();
}

function cliente_id($id)//devuelve todos los clientes
{
	$this->db->where('cliente_id', $id);
    $query = $this->db->get('cliente');
    return $query->result();
}

function verificar_cliente($mail,$pass)//devuelve todos los clientes
{
	$this->db->where('mail', $mail);
	$this->db->where('pass', $pass);
    $query = $this->db->get('cliente');
    return $query->result();
}

function alta_cliente()
{
	$this->nombre = $this->input->post('nombre');
	$this->apellido = $this->input->post('apellido');
	$this->fecha_alta = $this->input->post('fecha_alta');
	$this->movil = $this->input->post('movil');
	$this->mail = $this->input->post('mail');
	$this->sexo = $this->input->post('sexo');
	$this->edad = $this->input->post('edad');
	$this->pass = $this->input->post('pass');
	$this->admin = $this->input->post('admin');
	$this->activo = $this->input->post('activo');
	$this->desc = $this->input->post('desc');
	$this->db->insert('cliente', $this);
	return true;
}

function actualiza_cliente()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'apellido' => $this->input->post('apellido'),
			   'fecha_alta' => $this->input->post('fecha_alta'),
			   'movil' => $this->input->post('movil'),
			   'sexo' => $this->input->post('sexo'),
			   'edad' => $this->input->post('edad'),
			   'pass' => $this->input->post('pass'),
			   'admin' => $this->input->post('admin'),
			   'activo' => $this->input->post('activo'),
			   'desc' => $this->input->post('desc'),
               'mail' => $this->input->post('mail')
            );

	$this->db->where('cliente_id', $this->input->post('cliente_id'));
	$this->db->update('cliente', $data); 
	return true;
}//end actualiza

function borra_cliente($cliente_id)
{
	$this->db->where('cliente_id', $cliente_id);
	$this->db->delete('cliente'); 
	return true;
}


}//model

?>