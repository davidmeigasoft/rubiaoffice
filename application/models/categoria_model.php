<?php 

class Categoria_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}

function categoria($ordenacion = 'nombre')//devuelve todas las categorías
{
	$this->db->order_by($ordenacion);
	$query = $this->db->get('categoria');
	return $query->result();
}

function categoria_id($id)//devuelve todas las categorías
{
	$this->db->where('categoria_id', $id);
    $query = $this->db->get('categoria');
    return $query->result();
}

function categoria_por_id($categoria_id){
	$this->db->select('*');
	$this->db->from('categoria');
	$this->db->join('subcategoria', 'subcategoria.categoria = categoria.categoria_id');
	$this->db->where('categoria.categoria_id', $categoria_id);
	$query = $this->db->get();
	return $query->result();
	}

function alta_categoria()
{
	$this->nombre = $this->input->post('nombre');
	$this->desc = $this->input->post('desc');
	$this->db->insert('categoria', $this);
	return true;
}

function borra_categoria($categoria_id)
{
	$this->db->where('categoria_id', $categoria_id);
	$this->db->delete('categoria');
	return true;
}

function actualiza_categoria()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'desc' => $this->input->post('desc'),
            );

	$this->db->where('categoria_id', $this->input->post('categoria_id'));
	$this->db->update('categoria', $data);
	return true;
}//end actualiza categoria


	//var_dump($this->db->last_query());
	//print_r($query);

function datos_categoria($id_categoria)
	{
	$this->db->select('*');
	$this->db->from('categoria');
	$this->db->where('categoria.categoria_id', $id_categoria);
	
	$query = $this->db->get();
	return $query->result();
	}

}//model


?>