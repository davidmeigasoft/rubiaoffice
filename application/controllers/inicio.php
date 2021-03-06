<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function Inicio()
	    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('text');
		
		$this->load->library('cart');
		$this->load->library('form_validation');
		$this->load->library('javascript');
		$this->load->library('email');
		
		$this->load->model('familia_model');
		$this->load->model('categoria_model');
		$this->load->model('subcategoria_model');
		$this->load->model('articulo_model');
		$this->load->model('index_model');
		$this->load->model('thumb_model');
		
		$this->load->library('session');
	    } 
	 
	public function index(){
		$data['categoria'] = $this->categoria_model->categoria();
		$data['elemento'] = $this->index_model->index();
		
		$this->load->view('web/index', $data);
		}//End Index
		
	public function home(){
		$data['familia_id'] = "home";
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/home', $data);
		$this->load->view('web/footer', $data);
		}//End home
		


public function familia($familia_id, $nombre){
		//consulta a la base de datos que te devuleva la categoria a la que pertenece el $subcategoria_id
		//$data['categoria_id'] = $this->categoria_model->obtiene_categoria($categoria_id);
		$data['familia_id'] = $this->familia_model->obtiene_familia($familia_id);
		
		$data['menu_familia_cat'] = $this->familia_model->categorias_familia($familia_id);
		$data['menu_familia_sub'] = $this->familia_model->subcategorias_familia($familia_id);
		
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['listado_articulos_familia'] = $this->articulo_model->articulos_familia($familia_id);
		$data['datos_familia'] = $this->familia_model->datos_familia($familia_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/familia',$data);
		$this->load->view('web/footer', $data);
			
		}//End categoría
	

	public function categoria($categoria_id, $nombre){
		//consulta a la base de datos que te devuleva la categoria a la que pertenece el $subcategoria_id
		//$data['categoria_id'] = $this->categoria_model->obtiene_categoria($categoria_id);
		$data['familia_id'] = $this->familia_model->obtiene_familia_categoria($categoria_id);
		
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['menu'] = $this->categoria_model->categoria_por_id($categoria_id);
		$data['listado_articulos_categoria'] = $this->articulo_model->articulos_categoria($categoria_id);
		$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/categoria',$data);
		$this->load->view('web/footer', $data);
			
		}//End categoría
	
	
	
	public function ordena_categoria($categoria_id, $nombre, $ordenacion) //muestra articulos ordenados en categoría
		{
		$data['familia_id'] = $this->familia_model->obtiene_familia_categoria($categoria_id);
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['menu'] = $this->categoria_model->categoria_por_id($categoria_id);
		$data['listado_articulos_categoria'] = $this->articulo_model->articulos_categoria_orden($categoria_id, $ordenacion);
		$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/categoria',$data);
		$this->load->view('web/footer', $data);
		}
	
	
	public function subcategoria($subcategoria_id, $nombre_subcategoria){
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['familia_id'] = $this->familia_model->obtiene_familia_subcategoria($subcategoria_id);
		$data['menu'] = $this->subcategoria_model->obtiene_subcategorias_categoria($subcategoria_id);
		$data['datos_subcategoria'] = $this->subcategoria_model->datos_categoria_subcategoria($subcategoria_id);
		$data['listado_articulos'] = $this->articulo_model->lista_articulos_sub($subcategoria_id);
		
		$data['ultimos_articulos_sub'] = $this->articulo_model->lista_ultimos_articulos_sub($subcategoria_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/subcategoria',$data);
		$this->load->view('web/footer', $data);
		}//End subcategoría

		
	public function articulo($articulo_id, $nombre_articulo){
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['familia_id'] = $this->familia_model->obtiene_familia_articulo($articulo_id);
		
		$data['articulo_imagen'] = $this->thumb_model->obtener_imagenes($articulo_id);
		$data['numero_imagenes'] = $this->articulo_model->obtener_numero_imagenes($articulo_id);
		$data['datos_articulo'] = $this->articulo_model->datos_articulo($articulo_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
	
		$this->load->view('web/header', $data);
		$this->load->view('web/articulo', $data);
		$this->load->view('web/footer', $data);
		}//End articulo
		
	public function contacto(){
		$data['familia_id'] = "contacto";
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/contacto');
		$this->load->view('web/footer', $data);
		}//End contacto
		
		
	public function validar_formulario(){
	
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();	
		$data['categoria_id'] = "contacto";
	
		$this->form_validation->set_rules('name', 'Nombre', 'required'); //forma directa de crear reglas
		$this->form_validation->set_rules('email', 'Correo electrónico', 'required'); //forma directa de crear reglas
		$this->form_validation->set_rules('message', 'Consulta', 'required'); //forma directa de crear reglas
		
		if ($this->form_validation->run() == FALSE):// hay algun error en la validacion
			
				$this->load->view('web/header', $data);
				$this->load->view('web/contacto', $data);
				$this->load->view('web/footer');
		else:
			
			$this->load->library('email');
	
			$this->email->from('david@meigasoft.es', 'desarrollo');
			$this->email->to('david@meigasoft.es'); 
			$this->email->cc(''); 
			$this->email->bcc(''); 
			
			$this->email->subject('Correo de Prueba');
			
			$correo = "<html><head></head><body>Se ha realizado una consulta en la página web.\n";
			$correo .= "Nombre: ".$this->input->post('name')."\nEmail de contacto: ".$this->input->post('email')."\nWeb: ".$this->input->post('website')."\nConsulta:\n".$this->input->post('message');
			$correo .= "</body></html>";
			
			$this->email->message($correo);	
			
			if($this->email->send()):
				$data['msg'] = "Consulta enviada.";
				$this->load->view('web/header', $data);
				$this->load->view('web/contacto',$data);
				$this->load->view('web/footer');
			else:
				$data['msg'] = "Se ha producido un error al enviar la consulta.";
				$this->load->view('web/header', $data);
				$this->load->view('web/contacto', $data);
				$this->load->view('web/footer', $data);
			endif;
		
		//echo $this->email->print_debugger();	
		endif;

	}//End validar

	
	public function validar_formulario_articulo($articulo_id, $nombre_articulo){
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['familia_id'] = $this->familia_model->obtiene_familia_articulo($articulo_id);
		
		$data['articulo_imagen'] = $this->thumb_model->obtener_imagenes($articulo_id);
		$data['numero_imagenes'] = $this->articulo_model->obtener_numero_imagenes($articulo_id);
		$data['datos_articulo'] = $this->articulo_model->datos_articulo($articulo_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		//$data['articulo'] = $this->articulo_model->articulo();
	
		$this->form_validation->set_rules('name', 'Nombre', 'required'); //forma directa de crear reglas
		$this->form_validation->set_rules('email', 'Correo electrónico', 'required'); //forma directa de crear reglas
		$this->form_validation->set_rules('message', 'Consulta', 'required'); //forma directa de crear reglas
		
		
		if ($this->form_validation->run() == FALSE):// hay algun error en la validacion
			
				$this->load->view('web/header', $data);
				$this->load->view('web/articulo', $data);
				$this->load->view('web/footer', $data);
		else:
			
			$this->load->library('email');
	
			$this->email->from('david@meigasoft.es', 'desarrollo');
			$this->email->to('david@meigasoft.es'); 
			$this->email->cc(''); 
			$this->email->bcc(''); 
			
			$this->email->subject('Correo de Prueba');
			
			$correo = "Un cliente desea obtener información sobre ".$this->input->post('articulo_nombre').'(ID: '.$this->input->post('articulo_id').')';
			$correo .= "\n\nNombre: ".$this->input->post('name')."\nEmail de contacto: ".$this->input->post('email')."\n\nConsulta:\n".$this->input->post('message');
			
			$this->email->message($correo);	
			
			if($this->email->send()):
				$data['msg'] = "Consulta enviada.";
				$this->load->view('web/header', $data);
				$this->load->view('web/articulo', $data);
				$this->load->view('web/footer', $data);
			else:
				echo $this->email->print_debugger();
				exit;
			
				$data['msg'] = "Se ha producido un error al enviar la consulta.";
				$this->load->view('web/header', $data);
				$this->load->view('web/articulo', $data);
				$this->load->view('web/footer', $data);
			endif;
			
			//echo $this->email->print_debugger();	
			
		endif;
	
	
		}//End validar


	public function ordenar_articulos_familia($familia_id)
		{
		$data['familia_id'] = $this->familia_model->obtiene_familia($familia_id);
		$data['menu_familia_cat'] = $this->familia_model->categorias_familia($familia_id);
		$data['menu_familia_sub'] = $this->familia_model->subcategorias_familia($familia_id);
		
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['listado_articulos_familia'] = $this->articulo_model->articulos_familia($familia_id);
		$data['datos_familia'] = $this->familia_model->datos_familia($familia_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();	
		
		$ordenacion = $this->input->post('ordenar');
		$data['listado_articulos_familia'] = $this->articulo_model->articulos_familia_orden($familia_id, $ordenacion);
	
		
		$this->load->view('web/header', $data);
		$this->load->view('web/familia',$data);
		$this->load->view('web/footer', $data);
		}

	
	public function ordenar_articulos_categoria($categoria_id)
		{
		$data['familia'] = $this->familia_model->familia();
		$data['familia_id'] = $this->familia_model->obtiene_familia_categoria($categoria_id);
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['menu'] = $this->categoria_model->categoria_por_id($categoria_id);
		$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();	
		
		$ordenacion = $this->input->post('ordenar');
		$data['listado_articulos_categoria'] = $this->articulo_model->articulos_categoria_orden($categoria_id, $ordenacion);
		
		$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
		$this->load->view('web/header', $data);
		$this->load->view('web/categoria',$data);
		$this->load->view('web/footer', $data);
		}
	
	public function ordenar_articulos_subcategoria($categoria_id, $subcategoria_id, $nombre_subcategoria)
		{
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['categoria_id'] = $this->categoria_model->obtiene_categoria_subcategoria($subcategoria_id);
		$data['menu'] = $this->subcategoria_model->obtiene_subcategorias_categoria($subcategoria_id);
		$data['datos_subcategoria'] = $this->subcategoria_model->datos_categoria_subcategoria($subcategoria_id);
		
		$ordenacion = $this->input->post('ordenar');
		$data['listado_articulos'] = $this->articulo_model->articulos_subcategoria_orden($subcategoria_id, $ordenacion);
		
		$data['ultimos_articulos_sub'] = $this->articulo_model->lista_ultimos_articulos_sub($subcategoria_id);
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
	
	
		$this->load->view('web/header', $data);
		$this->load->view('web/subcategoria',$data);
		$this->load->view('web/footer', $data);
		}
		
		
	public function buscador_articulos()
		{
		$data['familia'] = $this->familia_model->familia();
		$data['categoria'] = $this->categoria_model->categoria();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['familia_id'] = "buscador";
		$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();

		$data['cadena_buscada'] =  $this->input->post('buscador');
		$data['resultados_busqueda'] = $this->articulo_model->buscador($this->input->post('buscador'));
		$data['numero_resultados'] = $this->articulo_model->contador_resultados($this->input->post('buscador'));
		
		$this->load->view('web/header', $data);
		$this->load->view('web/resultados_busqueda', $data);
		$this->load->view('web/footer', $data);
		}
		
	
}//Inicio

/* End of file incio.php */
/* Location: ./application/controllers/inicio.php */