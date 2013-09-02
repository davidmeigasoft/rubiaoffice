<?php 

class Familia_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}

function familia($ordenacion = 'nombre')//devuelve todas las categorías
{
	$this->db->order_by($ordenacion);
	$query = $this->db->get('familia');
	return $query->result();
}

function familia_id($id)//devuelve todas las categorías
{
	$this->db->where('familia_id', $id);
    $query = $this->db->get('familia');
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
	
function alta_familia()
{
	$this->nombre = $this->input->post('nombre');
	$this->desc = $this->input->post('desc');
	$this->db->insert('familia', $this);
	return true;
}

function borra_familia($familia_id)
{
	$this->db->where('familia_id', $familia_id);
	$this->db->delete('familia');
	return true;
}

function actualiza_familia()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'desc' => $this->input->post('desc'),
            );

	$this->db->where('familia_id', $this->input->post('familia_id'));
	$this->db->update('familia', $data);
	return true;
}//end actualiza categoria


	//var_dump($this->db->last_query());
	//print_r($query);

function datos_familia($id_familia)
	{
	$this->db->select('*');
	$this->db->from('familia');
	$this->db->where('familia.familia_id', $id_familia);
	
	$query = $this->db->get();
	return $query->result();
	}


function obtiene_familia($familia_id) //devuelve ID de la categoria
	{
	$this->db->select('familia_id');
	$this->db->from('familia');
	$this->db->where('familia_id', $familia_id);
	
	$query = $this->db->get();
	
	$resultado = $query->row();
	return $resultado->familia_id; 
	
	
	}

function obtiene_familia_categoria($categoria_id) //devuelve ID de la categoria de una subcategoria
	{
	$this->db->select('familia_id');
	$this->db->from('familia');
	$this->db->join('categoria', 'familia.familia_id = categoria.familia');
	$this->db->where('categoria_id', $categoria_id);
	
	$query = $this->db->get();
	
	$resultado = $query->row();
	return $resultado->familia_id; 
	}
	

function obtiene_familia_subcategoria($subcategoria_id) //devuelve ID de la categoria de una subcategoria
	{
	$this->db->select('familia_id');
	$this->db->from('familia');
	$this->db->join('categoria', 'familia.familia_id = categoria.familia');
	$this->db->join('subcategoria', 'subcategoria.categoria = categoria.categoria_id');
	$this->db->where('subcategoria_id', $subcategoria_id);
	
	$query = $this->db->get();
	
	$resultado = $query->row();
	return $resultado->familia_id; 
	}

function obtiene_familia_articulo($articulo_id)  //devuelve ID de la categoria de un artículo
	{
	$this->db->select('familia_id');
	$this->db->from('familia');
	$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id');
	$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria');
	$this->db->join('familia', 'familia.familia_id = categoria.familia');
	$this->db->where('articulo.articulo_id', $articulo_id);
	
	$query = $this->db->get();
	
	$resultado = $query->row();
	return $resultado->familia_id; 
	}

	
function categorias_familia($familia_id)
	{
	$this->db->select('categoria_id, categoria.nombre as cat_nombre');
	$this->db->from('familia');
	$this->db->join('categoria', 'categoria.familia = familia.familia_id');
	$this->db->where('familia_id', $familia_id);
	
	$query = $this->db->get();
	return $query->result();
	}
	
function subcategorias_familia($familia_id)
	{
	$this->db->select('categoria_id, subcategoria_id, subcategoria.nombre as sub_nombre');
	$this->db->from('familia');
	$this->db->join('categoria', 'categoria.familia = familia.familia_id');
	$this->db->join('subcategoria', 'subcategoria.categoria = categoria.categoria_id');
	$this->db->where('familia_id', $familia_id);
	
	$query = $this->db->get();
	return $query->result();
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