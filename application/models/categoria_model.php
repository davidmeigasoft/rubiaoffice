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


function obtiene_categoria($categoria_id) //devuelve ID de la categoria
	{
	$this->db->select('categoria_id');
	$this->db->from('categoria');
	$this->db->where('categoria_id', $categoria_id);
	
	$query = $this->db->get();
	return $query->row(); 
	}

function obtiene_categoria_subcategoria($subcategoria_id) //devuelve ID de la categoria de una subcategoria
	{
	$this->db->select('categoria_id');
	$this->db->from('subcategoria');
	$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria');
	$this->db->where('subcategoria_id', $subcategoria_id);
	
	$query = $this->db->get();
	return $query->row(); 
	}

function obtiene_categoria_articulo($articulo_id)  //devuelve ID de la categoria de un artículo
	{
	$this->db->select('categoria_id');
	$this->db->from('subcategoria');
	$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id');
	$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria');
	$this->db->where('articulo.articulo_id', $articulo_id);
	

	
	$query = $this->db->get();
	return $query->row(); 
	}


/*
function datos_categoria_subcategoria_articulo($articulo_id)
	{
	$this->db->select('categoria.nombre as nombre_cat, subcategoria.nombre as nombre_sub, articulo.nombre as nombre_art, categoria_id, subcategoria_id, articulo_id');
	$this->db->from('categoria');
	$this->db->join('subcategoria', 'subcategoria.categoria = categoria.categoria_id');
	$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id');
	$this->db->where('articulo.articulo_id', $articulo_id);
	
	$query = $this->db->get();
	
	print_r($query);
	
	return $query->result();
	}*/

}//model


?>