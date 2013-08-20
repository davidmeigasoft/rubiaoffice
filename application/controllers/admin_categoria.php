<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_categoria extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('categoria_model');

	} 
	
    public function index()
    {
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_categoria');
		$this->load->view('admin/footer');
    }

	public function alta_categoria(){
		
	$this->form_validation->set_rules('nombre', 'Nombre categoria', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_categoria');
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->categoria_model->alta_categoria()== true){
			$data['error'] = "Ok, todo correcto";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_categoria', $data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_categoria', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End alta_cliente
	
	
	public function listar_categoria()
	{
		$data['categoria'] = $this->categoria_model->categoria();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_categoria', $data);
		$this->load->view('admin/footer');
	}//Cliente
	
	
	
    public function actualiza_categoria(){
	
	$this->form_validation->set_rules('nombre', 'Nombre categoria', 'required'); //forma directa de crear reglas

	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['categoria'] = $this->categoria_model->categoria_id($this->input->post('categoria_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_categoria',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->categoria_model->actualiza_categoria()== true){//Si la modificacion es ok
			
			$data['categoria'] = $this->categoria_model->categoria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_categoria',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar actualizar";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_categoria', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza cliente
	
    public function borra_categoria($categoria_id){
		
		if ($this->categoria_model->borra_categoria($categoria_id)== true){
			$data['categoria'] = $this->categoria_model->categoria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_categoria',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar borrar la categoría";
			$data['categoria'] = $this->categoria_model->categoria_id($this->input->post('categoria_id'));
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_categoria', $data);
            $this->load->view('admin/footer');
		}//End if
		
	}//End borra cliente
	
	public function archivo_cliente($cliente_id){
			$data['cliente'] = $this->cliente_model->cliente_id($cliente_id);
			$data['archivo'] = $this->archivo_model->archivo_cliente($cliente_id);
			
			//print_r($data['cliente']);
			
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_cliente_archivo',$data);
            $this->load->view('admin/footer');
	}//End archivos por cliente
	
	
	public function quita_archivo($archivo_id,$cliente_id){
		if($this->archivo_model->quitar_archivo($archivo_id,$cliente_id)):
			$data['cliente'] = $this->cliente_model->cliente_id($cliente_id);
			$data['archivo'] = $this->archivo_model->archivo_cliente($cliente_id);
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_cliente_archivo',$data);
            $this->load->view('admin/footer');
		endif;
	}//End quirtar archivos de cliente
	
	public function categoria_id($id)
	{	
		$data['categoria'] = $this->categoria_model->categoria_id($id);
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_categoria', $data);
		$this->load->view('admin/footer');

	}//Cliente


} 