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
	$this->url = $this->input->post('url');
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
			   'url' => $this->input->post('url'),
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

    //return $resultado->result();
	}

function count_articulos_subcategoria($id) // cuenta artículos para paginación
	{
		$this->db->select('*');
		$this->db->from('articulo');
		$this->db->where('subcategoria', $id);
		$query = $this->db->count_all_results();
		
		return $query;
	}
	
function count_articulos_categoria($id) // cuenta artículos para paginación
	{
		$this->db->select('*');
		$this->db->from('articulo');
		$this->db->join('subcategoria', 'subcategoria.subcategoria_id = articulo.subcategoria');
		$this->db->where('subcategoria.categoria', $id);
		$query = $this->db->count_all_results();

		return $query;
	}
	


function datos_articulo($articulo_id)
	{
	$this->db->select(
	'articulo.nombre as articulo_nombre, articulo_id, color,articulo.desc as articulo_desc, fecha_alta,marca,medidas, precio, stock, subcategoria_id, unidades, url, categoria_id, subcategoria.nombre as subcategoria_nombre, categoria.nombre as categoria_nombre');
	$this->db->from('articulo');
	$this->db->join('subcategoria', 'subcategoria.subcategoria_id = articulo.subcategoria');
	$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria');
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
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc, url');
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
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc, url');
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
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc, url');
		$this->db->from('articulo');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->group_by('articulo_id');
		$this->db->limit(20);
				
		$query = $this->db->get();
		return $query->result();
	}
	


function articulos_familia($familia_id)
	{
		$this->db->select('categoria_id, subcategoria_id, articulo_id, articulo.nombre as articulo_nombre, articulo.desc as articulo_desc, file_name, articulo.precio, url');
		$this->db->from('articulo');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->join('familia', 'familia.familia_id = categoria.familia', 'left');
		$this->db->group_by('articulo_id');
		$this->db->where('familia_id', $familia_id);
		$query = $this->db->get();
		
		return $query->result();
	}




function articulos_categoria($categoria_id)
	{
		$this->db->select('categoria_id, subcategoria_id, articulo_id, articulo.nombre as articulo_nombre, articulo.desc as articulo_desc, file_name, articulo.precio, url');
		$this->db->from('articulo');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->group_by('articulo_id');
		$this->db->where('categoria_id', $categoria_id);
		$query = $this->db->get();
		
		return $query->result();
	}
	


function articulos_familia_orden($familia_id, $orden)
	{
		$this->db->select('categoria_id, subcategoria_id, articulo_id, articulo.nombre as articulo_nombre, articulo.desc as articulo_desc, file_name, articulo.precio, fecha_alta, url');
		$this->db->from('familia');
		$this->db->join('categoria', 'categoria.familia = familia.familia_id', 'left');
		$this->db->join('subcategoria', 'subcategoria.categoria = categoria.categoria_id', 'left');
		$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->group_by('articulo_id');
		$this->db->where('familia_id', $familia_id);
		
		switch($orden){
			case "az":
				$this->db->order_by("articulo.nombre");
			break;
			
			case "za":
				$this->db->order_by("articulo.nombre", "desc");
			break;
			
			case "caros":
				$this->db->order_by("precio", "desc");
			break;
			
			case "baratos":
				$this->db->order_by("precio");
			break;
			
			case "recientes":
				$this->db->order_by("fecha_alta", "desc");
			break;
		}
		
		$query = $this->db->get();
		
		return $query->result();
	}


	
function articulos_categoria_orden($categoria_id, $orden)
	{
		$this->db->select('categoria_id, subcategoria_id, articulo_id, articulo.nombre as articulo_nombre, articulo.desc as articulo_desc, file_name, articulo.precio, fecha_alta, url');
		$this->db->from('categoria');
		$this->db->join('subcategoria', 'subcategoria.categoria = categoria.categoria_id', 'left');
		$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('imagen_articulo', 'articulo.articulo_id = imagen_articulo.articulo', 'left');
		$this->db->group_by('articulo_id');
		$this->db->where('categoria_id', $categoria_id);
		
		switch($orden){
			case "az":
				$this->db->order_by("articulo.nombre");
			break;
			
			case "za":
				$this->db->order_by("articulo.nombre", "desc");
			break;
			
			case "caros":
				$this->db->order_by("precio", "desc");
			break;
			
			case "baratos":
				$this->db->order_by("precio");
			break;
			
			case "recientes":
				$this->db->order_by("fecha_alta", "desc");
			break;
		}
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	
	function articulos_subcategoria_orden($subcategoria_id, $orden) 
	{
		$this->db->select('file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id, articulo.desc as articulo_desc, url');
		$this->db->from('subcategoria');
		$this->db->join('articulo', 'articulo.subcategoria = subcategoria.subcategoria_id', 'left');
		$this->db->join('imagen_articulo', 'imagen_articulo.articulo = articulo.articulo_id', 'left');
		$this->db->join('categoria', 'categoria.categoria_id = subcategoria.categoria', 'left');
		$this->db->where('articulo.subcategoria', $subcategoria_id);
		$this->db->group_by('articulo_id');

		switch($orden){
			case "az":
				$this->db->order_by("articulo.nombre");
			break;
			
			case "za":
				$this->db->order_by("articulo.nombre", "desc");
			break;
			
			case "caros":
				$this->db->order_by("precio", "desc");
			break;
			
			case "baratos":
				$this->db->order_by("precio");
			break;
			
			case "recientes":
				$this->db->order_by("fecha_alta", "desc");
			break;
		}
		
		$query = $this->db->get();
		return $query->result();
	}

	function buscador($buscado)
		{
		$this->db->select('articulo_id, articulo.nombre as articulo_nombre, articulo.desc as articulo_desc, file_name, articulo.precio, articulo.marca, url, subcategoria.nombre, subcategoria.desc, categoria.nombre, categoria.desc, familia.nombre, familia.desc');
		$this->db->from('articulo');
		$this->db->join('imagen_articulo', 'imagen_articulo.articulo = articulo.articulo_id');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id');
		$this->db->join('categoria', 'subcategoria.categoria = categoria.categoria_id');
		$this->db->join('familia', 'categoria.familia = familia.familia_id');		
		$this->db->like('articulo.nombre', $buscado);
		$this->db->or_like('articulo.desc', $buscado);
		$this->db->or_like('articulo.marca', $buscado);
		$this->db->or_like('subcategoria.nombre', $buscado);
		$this->db->or_like('subcategoria.desc', $buscado);
		$this->db->or_like('categoria.nombre', $buscado);
		$this->db->or_like('categoria.desc', $buscado);
		$this->db->or_like('familia.nombre', $buscado);
		$this->db->or_like('familia.desc', $buscado);

		$this->db->group_by('articulo_id');
		
		$query=$this->db->get();
		return $query->result();
		}
	
	function contador_resultados($buscado)
		{
		$this->db->select('articulo_id, articulo.nombre, articulo.desc, articulo.marca, subcategoria.nombre, subcategoria.desc, categoria.nombre, categoria.desc, familia.nombre, familia.desc');
		$this->db->from('articulo');
		$this->db->join('subcategoria', 'articulo.subcategoria = subcategoria.subcategoria_id');
		$this->db->join('categoria', 'subcategoria.categoria = categoria.categoria_id');
		$this->db->join('familia', 'categoria.familia = familia.familia_id');			
		$this->db->like('articulo.nombre', $buscado);
		$this->db->or_like('articulo.desc', $buscado);
		$this->db->or_like('articulo.marca', $buscado);
		$this->db->or_like('subcategoria.nombre', $buscado);
		$this->db->or_like('subcategoria.desc', $buscado);
		$this->db->or_like('categoria.nombre', $buscado);
		$this->db->or_like('categoria.desc', $buscado);
		$this->db->or_like('familia.nombre', $buscado);
		$this->db->or_like('familia.desc', $buscado);

		$query = $this->db->count_all_results();
		return $query;
		}
	
}//model

?>