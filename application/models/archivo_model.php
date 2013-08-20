<?php 

class Archivo_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
function archivo()//devuelve todos los archivos
{
	$query = $this->db->get('archivo');
	return $query->result();
}

function archivo_id($id)//devuelve todos los archivos por id
{
	$this->db->where('archivo_id', $id);
    $query = $this->db->get('archivo');
    return $query->row();
    
}

function archivo_cliente($cliente_id)//devuelve todos los archivos por id de cliente
{
	$this->db->select('*');
	$this->db->from('archivo_cliente');
	$this->db->join('archivo', 'archivo.archivo_id = archivo_cliente.archivo_id');
	$this->db->where('archivo_cliente.cliente_id', $cliente_id); 
	$query = $this->db->get();
	return $query->result();
}


function alta_archivo($data)
{
	foreach($data as $row):
		$ruta = $row['full_path'];
		$tipo = $row['file_ext'];
		$nombre_archivo = $row['orig_name'];
	endforeach;
	
	$this->nombre = $this->input->post('nombre');
	$this->ruta = base_url().'uploads/archivo/'.$nombre_archivo;
	$this->tipo = $tipo;
	$this->archivo_nombre = $nombre_archivo;
	$this->db->insert('archivo', $this);
	return true;
}

function actualiza_archivo()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'mail' => $this->input->post('mail')
            );

	$this->db->where('archivo_id', $this->input->post('archivo_id'));
	$this->db->update('archivo', $data); 
	return true;
}//end actualiza

function borra_archivo($archivo_id)
{
	$this->db->where('archivo_id', $archivo_id);
	$this->db->delete('archivo'); 
	return true;
}

function asigna_archivo()
{
	foreach($this->input->post('archivo') as $row):
		//print_r($row);
		$this->db->select('archivo_id, cliente_id');//comprobar si esta asignado
		$this->db->from('archivo_cliente');
		$this->db->where('archivo_id', $row);
		$this->db->where('cliente_id', $this->input->post('cliente'));
		$db_results = $this->db->get();
		$num_rows = $db_results->num_rows();
		//print_r($num_rows);
		if($num_rows > 0){//ya esta asignado
			return false;
			}
		else{
		$this->archivo_id = $row;
		$this->cliente_id = $this->input->post('cliente');
		$this->db->insert('archivo_cliente', $this);
		}
	endforeach;
	
	return true;
	
}//End asigna archivo

function quitar_archivo($archivo_id,$cliente_id)
{
	$this->db->where('archivo_id', $archivo_id);
	$this->db->where('cliente_id', $cliente_id);
	$this->db->delete('archivo_cliente'); 
	return true;
}




}//model

?>