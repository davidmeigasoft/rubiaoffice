<?php 

class Index_model extends CI_Model {
function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
function index()//devuelve todos los elementos
{
	$query = $this->db->get('elementos_index');
	return $query->result();
}
}
?>