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
			$this->load->library('pagination');
			
			$this->load->model('cliente_model');
			$this->load->model('archivo_model');
			$this->load->model('galeria_model');
			$this->load->model('thumb_model');
			$this->load->model('blog_model');
			$this->load->model('categoria_model');
			$this->load->model('subcategoria_model');
			$this->load->model('articulo_model');
			
			$this->load->library('session');
	    } 
	 
	public function index(){
			$this->load->view('web/index');
		}//End Index
		
	public function home(){
			$data['categoria'] = $this->categoria_model->categoria();
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
			
			$this->load->view('web/header', $data);
			$this->load->view('web/home', $data);
			$this->load->view('web/footer', $data);
		}//End home
		
	public function categoria($categoria_id){
			//consulta a la base de datos que te devuleva la categoria a la que pertenece el $subcategoria_id
			
			$data['categoria'] = $this->categoria_model->categoria();
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();

			$data['menu'] = $this->categoria_model->categoria_por_id($categoria_id);
			$data['listado_articulos_categoria'] = $this->articulo_model->articulos_categoria($categoria_id);
			$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
			$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
			
			$this->load->view('web/header', $data);
			$this->load->view('web/categoria', $data);
			$this->load->view('web/footer', $data);
		}//End home
		
	public function listar_categoria($categoria_id, $subcategoria_id, $nombre_subcategoria){
			$data['categoria'] = $this->categoria_model->categoria();
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['menu'] = $this->categoria_model->categoria_por_id($categoria_id);
			$data['nombre_subcategoria'] = $nombre_subcategoria;
			$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
			//$data['imagen_mid'] = $this->thumb_model->obtener_imagen_articulo();
			$data['listado_articulos'] = $this->articulo_model->lista_articulos_sub($subcategoria_id);
			//print_r($data['imagen_mid']);
			//exit;
			$data['articulo'] = $this->articulo_model->articulo();
			$data['ultimos_articulos_sub'] = $this->articulo_model->lista_ultimos_articulos_sub($subcategoria_id);
			$data['numero_imagenes'] = $this->articulo_model->obtener_numero_imagenes_subcat($subcategoria_id);
			//$data['menu_categoria'] = $this->categoria_model->categoria_por_id($categoria_id);
			$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
			
			
			//paginación
			/*$cantidad = $this->articulo_model->count_articulos_subcategoria($subcategoria_id);
			$this->load->library('pagination');
			$desde = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
			$this->load->library('pagination');
			$config['base_url'] =base_url().'inicio/listar_categoria/'.$categoria_id.'/'.$subcategoria_id.'/'.$nombre_subcategoria;
			$config['total_rows'] = $cantidad;
			$config['per_page'] = '3';
			
			$config['full_tag_open'] = '<ul>';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = 'Primero';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Ultimo';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '&gt';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&lt';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			
			$data['listado_articulos'] = $this->articulo_model->lista_articulos_sub($subcategoria_id, $config['per_page'],$desde);
			
			$data['articulo_subcategoria'] = $this->subcategoria_model->articulos_subcategoria($subcategoria_id, $config['per_page'],$desde);

			$this->pagination->initialize($config);
			$data['pagination'] =  $this->pagination->create_links(); 
			*/
			$this->load->view('web/header', $data);
			$this->load->view('web/subcategoria',$data);
			$this->load->view('web/footer', $data);
		}

		
	public function articulo($categoria_id, $subcategoria_id, $nombre_articulo, $articulo_id){
			$data['categoria'] = $this->categoria_model->categoria();
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			
			$data['articulo_id'] = $articulo_id;
			$data['articulo'] = $this->articulo_model->articulo();
			$data['articulo_imagen'] = $this->thumb_model->obtener_imagenes($articulo_id);
			
			$data['numero_imagenes'] = $this->articulo_model->obtener_numero_imagenes($articulo_id);
			
			$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
			$data['datos_subcategoria'] = $this->subcategoria_model->datos_subcategoria($subcategoria_id);
			$data['datos_articulo'] = $this->articulo_model->datos_articulo($articulo_id);
			$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
		
			$this->load->view('web/header', $data);
			$this->load->view('web/articulo', $data);
			$this->load->view('web/footer', $data);
		}//End home
		
	public function contacto(){
			$data['categoria'] = $this->categoria_model->categoria();
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();
			
			$this->load->view('web/header', $data);
			$this->load->view('web/contacto');
			$this->load->view('web/footer', $data);
		}//End home
		
		
	public function validar_formulario(){
	
	$data['categoria'] = $this->categoria_model->categoria();
	$data['subcategoria'] = $this->subcategoria_model->subcategoria();
	$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();	

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
	
	
	
	
public function validar_formulario_articulo(){
	
	$data['categoria'] = $this->categoria_model->categoria();
	$data['subcategoria'] = $this->subcategoria_model->subcategoria();
	$data['ultimos_articulos'] = $this->articulo_model->ultimos_articulos();	
	
	
	$data['articulo_id'] = $articulo_id;
	$data['articulo'] = $this->articulo_model->articulo();
	$data['articulo_imagen'] = $this->thumb_model->obtener_imagenes($articulo_id);
	
	$data['numero_imagenes'] = $this->articulo_model->obtener_numero_imagenes($articulo_id);
	
	$data['datos_categoria'] = $this->categoria_model->datos_categoria($categoria_id);
	$data['datos_subcategoria'] = $this->subcategoria_model->datos_subcategoria($subcategoria_id);
	$data['datos_articulo'] = $this->articulo_model->datos_articulo($articulo_id);


	$this->form_validation->set_rules('name', 'Nombre', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('email', 'Correo electrónico', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('message', 'Consulta', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE):// hay algun error en la validacion
		
			$this->load->view('web/header', $data);
            $this->load->view('web/home');
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
       	 	$this->load->view('web/home');
        	$this->load->view('web/footer');
		else:
			$data['msg'] = "Se ha producido un error al enviar la consulta.";
			$this->load->view('web/header', $data);
       	 	$this->load->view('web/home');
        	$this->load->view('web/footer', $data);
		endif;
		
		//echo $this->email->print_debugger();	
		
	endif;


	}//End validar
	
	
	
	
	
	
	
		
}//Inicio

/* End of file incio.php */
/* Location: ./application/controllers/inicio.php */