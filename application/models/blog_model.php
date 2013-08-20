<?php 

class Blog_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	$this->load->helper('date');
}

function blog_count()//devuelve todas los blogs e imagenes asociadas
{
	//$query = $this->db->get('galeria');
	$query = $this->db->query("SELECT (SELECT COUNT(*) FROM thumb where thumb.blog_id = blog.blog_id ) AS tb, nombre, blog_id, fecha_alta FROM blog ");
	//print_r($query->result());
	return $query->result();
}

function lista_blog()//devuelve todos los blogs
{
    $resultado = $this->db->get('blog');
    return $resultado->result();
}

function blog($limit,$start)//devuelve todos los blogs para paginacion
{
	$this->db->limit($limit,$start);
	$this->db->order_by("fecha_alta", "desc"); 
    $resultado = $this->db->get('blog');
    return $resultado->result();
}

function ultimas_tres_entradas()//devuelve todos los blogs para paginacion
{
	$this->db->limit(3);
	$this->db->order_by("fecha_alta", "desc"); 
    $resultado = $this->db->get('blog');
	
    return $resultado->result();
}

function blog_fecha($limit,$start,$fecha)//devuelve todos los blogs para paginacion por fecha
{
	
	$this->db->like('fecha_alta', $fecha);
	$this->db->limit($limit,$start);
	$this->db->order_by("fecha_alta", "desc"); 
    $resultado = $this->db->get('blog');
	
    return $resultado->result();
}

function blog_tag($limit,$start,$tag)//devuelve todos los blogs para paginacion por fecha
{
	$this->db->select('blog.blog_id,blog.desc,blog.fecha_alta,blog.nombre,blog.tag,tag.blog_id,tag.nombre as nm');
	$this->db->from('blog');
	$this->db->join('tag', 'tag.blog_id = blog.blog_id');
	$this->db->where('tag.nombre', $tag); 
	$this->db->limit($limit,$start);
	$this->db->order_by("fecha_alta", "desc");
	$query = $this->db->get();
	return $query->result();
}


function count_blog()//devuelve el total de filas
{	
	$query = $this->db->count_all('blog');
	return $query;
}

function count_blog_fecha($fecha)//devuelve el total de filas
{

	$this->db->like('fecha_alta', $fecha);
	$this->db->from('blog');
	$query = $this->db->count_all_results();
	return $query;
}

function count_blog_tag($tag)//devuelve el total de filas
{
	$this->db->select('*');
	$this->db->from('blog');
	$this->db->join('tag', 'tag.blog_id = blog.blog_id');
	$this->db->where('tag.nombre', $tag); 
	$query = $this->db->count_all_results();
	return $query;
}


function blog_id($id)//devuelve todos los blogs por id
{
	$this->db->where('blog_id', $id);
    $query = $this->db->get('blog');
    return $query->result();
}

function alta_blog()
{
	$this->nombre = $this->input->post('nombre');
	$this->tag = $this->input->post('tag');
	$this->galeria_id = $this->input->post('galeria_id');
	$this->desc = $this->input->post('desc');
	$this->fecha_alta = date("Y-m-d");
	$this->db->insert('blog', $this);
	$id_blog = $this->db->insert_id();//El número de ID de cuando se realizo una inserción a la base de datos.
	$this->crear_tag($id_blog);
	return true;
}

function crear_tag($blog_id)
{
	$consulta = $this->db->get_where('blog', array('blog_id' => $blog_id));//cogemos los tags del blog
	$tag = $consulta->row();
	$tag_array = explode(',', $tag->tag);
	foreach($tag_array as $row_tag)://recorrer arra e insertar en tabla tag
		$this->db->set('blog_id', $blog_id); 
		$this->db->set('nombre', $row_tag);
		$this->db->insert('tag'); 
		//print_r($row_tag);
	endforeach;
	
	//print_r($consulta);
	return $consulta->result();
}//End crea tag



function actualiza_blog()
{
	$data = array(
               'nombre' => $this->input->post('nombre'),
			   'desc' => $this->input->post('desc'),
			   'tag' => $this->input->post('tag'),
               'galeria_id' => $this->input->post('galeria_id')
            );

	$this->db->where('blog_id', $this->input->post('blog_id'));
	$this->db->update('blog', $data); 
	return true;
}//end actualiza

function borra_blog($blog_id)
{
	$this->db->where('blog_id', $blog_id);
	$this->db->delete('blog'); 
	return true;
}//end borra

function fecha_blog()//devuelve las fechas agrupadas para categorizar
{
	$query = $this->db->query("SELECT DISTINCT(DATE_FORMAT(blog.fecha_alta,'%Y-%m')) as 'fecha' FROM `blog` ");
	//print_r($query->result());
	return $query->result();	
}//End fecha

function tag()//devuelve los tags 
{
	$query = $this->db->query("SELECT DISTINCT(nombre) as 'nombre_tag' FROM `tag` ");
	return $query->result();	
}//End fecha



}//model

?>