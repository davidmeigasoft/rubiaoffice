<?php 

class Elementos_index_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}

function elementos_index()
{
	$query = $this->db->get('elementos_index');
	return $query->result();
}
	
function alta_elemento()
{
	$this->nombre = $this->input->post('nombre');
	$this->titulo = $this->input->post('titulo');
	$this->subtitulo = $this->input->post('subtitulo');
	$this->desc_1 = $this->input->post('desc_1');
	$this->desc_2 = $this->input->post('desc_2');
	$this->url = $this->input->post('url');
	
	$this->db->insert('elementos_index', $this);
	return true;
}

function borra_elemento($index_id)
{
	$this->db->where('index_id', $index_id);
	$this->db->delete('elementos_index');
	return true;
}

function elemento_index_id($id)//devuelve todas las categorías
{
	$this->db->where('index_id', $id);
    $query = $this->db->get('elemento_index');
    return $query->result();
}

function actualiza_elemento()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'titulo' => $this->input->post('titulo'),
			   'subtitulo' => $this->input->post('subtitulo'),
               'desc_1' => $this->input->post('desc_1'),
			   'desc_2' => $this->input->post('desc_2'),
               'url' => $this->input->post('url'),
            );
	
	print_r($data);

	$this->db->where('index_id', $this->input->post('index_id'));
	$this->db->update('elementos_index', $data);
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
	
	$resultado = $query->row();
	return $resultado->categoria_id; 
	
	
	}

function obtiene_categoria_subcategoria($subcategoria_id) //devuelve ID de la categoria de una subcategoria
	{
	$this->db->select('categoria_id');
	$this->db->from('subcategoria');
	$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria');
	$this->db->where('subcategoria_id', $subcategoria_id);
	
	$query = $this->db->get();
	
	$resultado = $query->row();
	return $resultado->categoria_id; 
	}

function obtiene_categoria_articulo($articulo_id)  //devuelve ID de la categoria de un artículo
	{
	$this->db->select('categoria_id');
	$this->db->from('subcategoria');
	$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id');
	$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria');
	$this->db->where('articulo.articulo_id', $articulo_id);
	
	$query = $this->db->get();
	
	$resultado = $query->row();
	return $resultado->categoria_id; 
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