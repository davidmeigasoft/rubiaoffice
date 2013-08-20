<?php 

class Articulo_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}

function devuelve_subcategoria($id_categoria) // PRUEBA
    {
    $this->db->select('*');
    $this->db->from('subcategoria');
    $this->db->where('subcategoria.categoria', $id_categoria);
    
    $query = $this->db->get('subcategoria');
    return $query->result();
    }


function articulo()//devuelve todas las categorías
{
	$query = $this->db->get('articulo');
	return $query->result();
}

function obtener_imagen()//devuelve todas las categorías
{
	$query = $this->db->get('imagen_articulo');
	return $query->result();
}

function articulo_id($id)//devuelve todas las articulo
{
	$this->db->where('articulo_id', $id);
    $query = $this->db->get('articulo');
    return $query->result();
}

function alta_articulo()
{
	$this->nombre = $this->input->post('nombre');
	$this->marca = $this->input->post('marca');
	$this->color = $this->input->post('color');
	$this->medidas = $this->input->post('medidas');
	$this->unidades = $this->input->post('unidades');
	$this->precio = $this->input->post('precio');
	$this->stock = $this->input->post('stock');
	$this->desc = $this->input->post('desc');
	$this->subcategoria = $this->input->post('subcategoria');
	$this->db->insert('articulo', $this);
	return true;
}

function borra_articulo($articulo_id)
{
	$this->db->where('articulo_id', $articulo_id);
	$this->db->delete('articulo'); 
	return true;
}

function actualiza_articulo()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
			   'marca' => $this->input->post('marca'),
			   'color' => $this->input->post('color'),
			   'medidas' => $this->input->post('medidas'),
			   'unidades' => $this->input->post('unidades'),
			   'precio' => $this->input->post('precio'),
			   'stock' => $this->input->post('stock'),
               'desc' => $this->input->post('desc'),
			   'subcategoria' => $this->input->post('subcategoria')
            );

	$this->db->where('articulo_id', $this->input->post('articulo_id'));
	$this->db->update('articulo', $data); 
	return true;
}//end actualiza articulo

function ultimos_articulos_subcategoria($subcategoria_id)
	{	
	$this->db->limit(5);
	$this->db->order_by("fecha_alta", "desc"); 
	$this->db->select('*');
	$this->db->from('articulo');
	$this->db->where('articulo.subcategoria', $subcategoria_id);
	$query = $this->db->get();
	
	return $query->result();

    return $resultado->result();
	}

function count_articulos_subcategoria($id)
	{
		$this->db->select('*');
		$this->db->from('articulo');
		$this->db->where('subcategoria', $id);
		$query = $this->db->count_all_results();

		return $query;
	}

function datos_articulo($articulo_id)
	{
	$this->db->select('*');
	$this->db->from('articulo');
	$this->db->where('articulo.articulo_id', $articulo_id);
	
	$query = $this->db->get();
	return $query->result();
	}

function obtener_numero_imagenes($articulo_id)
	{
		$this->db->select('*');
		$this->db->from('imagen_articulo');
		$this->db->where('articulo', $articulo_id);
		$query = $this->db->count_all_results();

		return $query;
	}

function obtener_numero_imagenes_subcat($subcategoria_id)
	{
		$this->db->select('*');
		$this->db->from('imagen_articulo');
		$this->db->join('articulo', 'articulo.articulo_id = imagen_articulo.articulo');
		$this->db->where('articulo.articulo_id', 'imagen_articulo.articulo');
		$query = $this->db->count_all_results();

		return $query;
	}

	
function lista_articulos_sub($subcategoria_id)
	{
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc');
		$this->db->from('subcategoria');
		$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('imagen_articulo', 'imagen_articulo.articulo = articulo.articulo_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->where('articulo.subcategoria', $subcategoria_id);
		$this->db->group_by('articulo_id');

		$query = $this->db->get();
		return $query->result();
	}

function lista_ultimos_articulos_sub($subcategoria_id)
	{
		$this->db->limit(5);
		$this->db->order_by("fecha_alta", "desc"); 
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc');
		$this->db->from('subcategoria');
		$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('imagen_articulo', 'imagen_articulo.articulo = articulo.articulo_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->where('articulo.subcategoria', $subcategoria_id);
		$this->db->group_by('articulo_id');
		

		$query = $this->db->get();
		return $query->result();
	}
	
function ultimos_articulos()
	{
		$this->db->order_by('fecha_alta', 'desc');
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc');
		$this->db->from('articulo');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->group_by('articulo_id');
		$this->db->limit(20);
				
		$query = $this->db->get();
		return $query->result();
	}
	
	
function articulos_categoria($categoria_id)
	{
		$this->db->select('categoria_id, subcategoria_id, articulo_id, articulo.nombre as articulo_nombre, articulo.desc as articulo_desc, file_name');
		$this->db->from('articulo');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->group_by('articulo_id');
		$this->db->where('categoria_id', $categoria_id);
		
		$query = $this->db->get();
		return $query->result();
	}
	
}//model

?>