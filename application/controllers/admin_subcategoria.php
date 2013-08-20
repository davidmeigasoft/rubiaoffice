<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_subcategoria extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('subcategoria_model');
		$this->load->model('categoria_model');
	} 
	
    public function index()
    {
		$data['categoria'] = $this->categoria_model->categoria();
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_subcategoria', $data);
		$this->load->view('admin/footer');
    }

	public function alta_subcategoria(){
		
	$this->form_validation->set_rules('nombre', 'Nombre subcategoria', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_subcategoria');
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->subcategoria_model->alta_subcategoria()== true){
			$data['categoria'] = $this->categoria_model->categoria();
			$data['error'] = "Ok, todo correcto";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_subcategoria', $data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_subcategoria', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End alta_subcategoria
	
	public function listar_subcategoria()
	{
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['categoria'] = $this->categoria_model->categoria();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_subcategoria', $data);
		$this->load->view('admin/footer');
	}//Cliente
	
	
	
    public function actualiza_subcategoria(){
	
	$this->form_validation->set_rules('nombre', 'Nombre subcategoria', 'required'); //forma directa de crear reglas

	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['subcategoria'] = $this->subcategoria_model->subcategoria_id($this->input->post('subcategoria_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_subcategoria',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->subcategoria_model->actualiza_subcategoria()== true){//Si la modificacion es ok
			
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_subcategoria',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar actualizar";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_subcategoria', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza cliente
	
    public function borra_subcategoria($subcategoria_id){
		
		if ($this->subcategoria_model->borra_subcategoria($subcategoria_id)== true){
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_subcategoria',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar borrar la categoría";
			$data['subcategoria'] = $this->subcategoria_model->subcategoria_id($this->input->post('subcategoria_id'));
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_subcategoria', $data);
            $this->load->view('admin/footer');
		}//End if
		
	}//End borra subcategoria

	public function subcategoria_id($id)
	{	
		$data['subcategoria'] = $this->subcategoria_model->subcategoria_id($id);
		$data['categoria'] = $this->categoria_model->categoria();
		
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_subcategoria', $data);
		$this->load->view('admin/footer');

	}//Cliente


} 