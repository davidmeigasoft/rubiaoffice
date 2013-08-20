<?php 

class Subcategoria_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}


function subcategoria()//devuelve todas las categorías
{
	$query = $this->db->get('subcategoria');
	return $query->result();
}


function subcategoria_combo_id($id)//devuelve todas las categorías
{
	$this->db->where('categoria', $id);
	$this->db->order_by('nombre');
    $query = $this->db->get('subcategoria');
    return $query->result();
}


function subcategoria_id($id)//devuelve todas las categorías
{
	$this->db->where('subcategoria_id', $id);
    $query = $this->db->get('subcategoria');
    return $query->result();
}

function alta_subcategoria()
{
	$this->nombre = $this->input->post('nombre');
	$this->desc = $this->input->post('desc');
	$this->categoria = $this->input->post('categoria');
	$this->db->insert('subcategoria', $this);
	return true;
}

function borra_subcategoria($subcategoria_id)
{
	$this->db->where('subcategoria_id', $subcategoria_id);
	$this->db->delete('subcategoria'); 
	return true;
}

function actualiza_subcategoria()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'desc' => $this->input->post('desc'),
			   'categoria' => $this->input->post('categoria')
            );

	$this->db->where('subcategoria_id', $this->input->post('subcategoria_id'));
	$this->db->update('subcategoria', $data); 
	return true;
}//end actualiza categoria
	
	
	
function articulos_subcategoria($subcategoria_id, $limit, $start){
	
	$this->db->limit($limit,$start);
	$this->db->select('*');
	$this->db->from('subcategoria');
	$this->db->join('articulo', 'subcategoria.subcategoria_id = articulo.subcategoria');
	$this->db->where('articulo.subcategoria', $subcategoria_id);

	$query = $this->db->get();

	
	return $query->result();
	}	

function datos_subcategoria($id_subcategoria)
	{
	$this->db->select('*');
	$this->db->from('subcategoria');
	$this->db->where('subcategoria.subcategoria_id', $id_subcategoria);
	
	$query = $this->db->get();
	return $query->result();
	}

}//model

?>