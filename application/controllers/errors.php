<?php
class Errors extends CI_Controller
{
	private $data = array();
 
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text');
		
		$this->load->library('cart');
		$this->load->library('javascript');
		
		$this->load->model('familia_model');
		$this->load->model('categoria_model');
		$this->load->model('subcategoria_model');
		$this->load->model('articulo_model');
		$this->load->model('index_model');
	
	}
 
	function error_404()
	{	$data['familia_id'] = "contacto";
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
			
		$this->load->view('web/header', $data);
		$this->load->view('web/error');
		$this->load->view('web/footer', $data);
	}
}
?>