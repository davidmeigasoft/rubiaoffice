<?php 

class Thumb_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	
}
function thumb()//devuelve todas las imagenes
{
	$this->db->where('galeria_id !=',0);
	$query = $this->db->get('thumb');
	return $query->result();
}

function thumb_id($id)//devuelve todas las imagenes por id
{
	$this->db->where('thumb_id', $id);
    $query = $this->db->get('thumb');
    return $query->result();
    
}

function thumb_galeria($galeria_id)//devuelve thumbs en galeria
{
	$this->db->select('*');
	$this->db->from('imagen_articulo');
	$this->db->join('articulo', 'imagen_articulo.articulo = articulo.articulo_id');
	$this->db->where('imagen_articulo.articulo', $galeria_id); 

	$query = $this->db->get();
	return $query->result();
}

function thumb_blog($blog_id)//devuelve thumbs en galeria
{
	$this->db->select('*');
	$this->db->from('thumb');
	$this->db->join('blog', 'blog.blog_id = thumb.blog_id');
	$this->db->where('thumb.blog_id', $blog_id); 

	$query = $this->db->get();
	return $query->result();
}

function primer_thumb_galeria()//devuelve el primer thumb en galeria
{
	$this->db->select('*');
	$this->db->from('thumb');
	$this->db->join('galeria', 'galeria.galeria_id = thumb.galeria_id');
	//$this->db->where('thumb.galeria_id', $galeria_id);
	$this->db->limit(1); 

	$query = $this->db->get();
	return $query->result();
}

function primer_thumb_blog()//devuelve el primer thumb en galeria
{
	$this->db->select('*');
	$this->db->from('thumb');
	$this->db->join('blog', 'blog.blog_id = thumb.blog_id');
	//$this->db->where('thumb.galeria_id', $galeria_id);
	//$this->db->limit(1); 

	$query = $this->db->get();
	return $query->result();
}

function alta_thumb($data,$ruta)
{
	foreach($data as $row):
		//$ruta = $row['file_path'];
	$tipo = $row['file_ext'];
	$this->nombre = $this->input->post('nombre');
	$this->ruta = base_url().$ruta.$row['file_name'];
	$this->tipo = $tipo;
	$this->db->insert('thumb', $this);
	return true;
	endforeach;
}

function alta_thumb_galeria($data,$ruta,$galeria_id)
{
	
	foreach($data as $row):
	$tipo = $row['file_ext'];
	$this->nombre = $this->input->post('nombre');
	$this->ruta = base_url().$ruta.$row['file_name'];
	$this->tipo = $tipo;
	$this->file_name = $row['file_name'];
	$this->galeria_id = $galeria_id;
	$this->db->insert('thumb', $this);
	return true;
	endforeach;
}

function obtener_imagenes($id)
	{
		$this->db->select('*');
		$this->db->from('imagen_articulo');
		$this->db->where('articulo', $id);
		
		$query=$this->db->get();
		return $query->result();
	}

function obtener_imagen_articulo()
	{
		$this->db->select('*');
		$this->db->from('imagen_articulo');
		$this->db->group_by('articulo');
		//$this->db->order_by('file_name', 'desc');
		//$this->db->limit(1);
		
		$query=$this->db->get();
		return $query->result();
	}
	
	
/*function obtener_imagen_articulo_sub($subcategoria_id)
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
	}*/

/*
SELECT file_name, categoria_id, subcategoria_id, articulo.nombre as articulo_nombre, articulo_id,articulo.desc as articulo_desc 
FROM  `subcategoria` 
LEFT JOIN articulo ON articulo.subcategoria = subcategoria.subcategoria_id
LEFT JOIN imagen_articulo ON imagen_articulo.articulo = articulo.articulo_id
WHERE articulo.subcategoria =14
GROUP BY articulo_id


SELECT * 
FROM  `subcategoria` 
LEFT JOIN articulo ON articulo.subcategoria = subcategoria.subcategoria_id
LEFT JOIN imagen_articulo ON imagen_articulo.articulo = articulo.articulo_id
WHERE articulo.subcategoria =14
GROUP BY articulo_id
*/


function alta_thumb_articulo($data,$ruta,$articulo_id)
{
	
	foreach($data as $row):
	$tipo = $row['file_ext'];
	$this->nombre = $row['file_name']; //$this->input->post('nombre');
	$this->ruta = base_url().$ruta.$row['file_name'];
	$this->tipo = $tipo;
	$this->file_name = $row['file_name'];
	$this->articulo = $articulo_id;
	$this->db->insert('imagen_articulo', $this);
	return true;
	endforeach;
}


function alta_thumb_categoria($data, $categoria_id)	// actualiza la tabla categoria con el nombre de imagen
{
	
	foreach($data as $row):
	
	$this->img = $row['file_name'];
	$this->db->where('categoria_id', $categoria_id);
	$this->db->update('categoria', $this);
	return true;
	
	endforeach;
}


function alta_elemento_index($data, $index_id)	// actualiza la tabla categoria con el nombre de imagen
{
	
	foreach($data as $row):
	
	$this->img = $row['file_name'];
	$this->db->where('index_id', $index_id);
	$this->db->update('elementos_index', $this);
	return true;
	
	endforeach;
}











function actualiza_thumb()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
               'mail' => $this->input->post('mail')
            );

	$this->db->where('thumb_id', $this->input->post('thumb_id'));
	$this->db->update('thumb', $data); 
	return true;
}//end actualiza

function borra_thumb()
{
	$this->db->where('imagen_id', $this->input->post('imagen_id'));
	$this->db->delete('imagen_articulo'); 
	
	return true;
}

function asigna_thumb()//asignar imagen a galeria
{
	foreach($this->input->post('thumb') as $row):
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