<?php 

class Galeria_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
function galeria()//devuelve todas las galerias
{
	//$query = $this->db->get('galeria');
	$query = $this->db->query("SELECT (SELECT COUNT(*) FROM thumb where thumb.galeria_id = galeria.galeria_id ) AS tb, nombre, galeria_id FROM galeria ");
	//print_r($query->result());
	return $query->result();
}

function galeria_id($id)//devuelve galeria por id
{
	$this->db->where('galeria_id', $id);
    $query = $this->db->get('galeria');
    return $query->result();
}

function thumbs_en_galeria($galeria_id)//devuelve galeria por id
{
	$this->db->select('*');
	$this->db->from('galeria');
	$this->db->join('thumb', 'thumb.galeria_id = galeria.galeria_id');
	$this->db->where('galeria.galeria_id',$galeria_id);
	
	$query = $this->db->get();
	return $query->result();
	
	print_r($query);
}

function alta_galeria()
{
	$this->nombre = $this->input->post('nombre');
	$this->db->insert('galeria', $this);
	return true;
}

function actualiza_galeria()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
            );

	$this->db->where('galeria_id', $this->input->post('galeria_id'));
	$this->db->update('galeria', $data); 
	return true;
}//end actualiza

function borra_galeria($galeria_id)
{
	$this->db->where('galeria_id', $galeria_id);
	$this->db->delete('galeria'); 
	return true;
}

function asigna_galeria()//posiblemente asignar a categotias
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



}//model

?>