<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_familia extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('familia_model');

	} 
	
    public function index()
    {
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_familia');
		$this->load->view('admin/footer');
    }

	public function alta_familia(){
		
	$this->form_validation->set_rules('nombre', 'Nombre familia', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_familia');
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->familia_model->alta_familia()== true){
			$data['error'] = "Ok, todo correcto";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_familia', $data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_familia', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End alta_cliente
	
	
	public function listar_familia()
	{
		$data['familia'] = $this->familia_model->familia();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_familia', $data);
		$this->load->view('admin/footer');
	}//Cliente
	
	
	
    public function actualiza_familia(){
	
	$this->form_validation->set_rules('nombre', 'Nombre familia', 'required'); //forma directa de crear reglas

	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['familia'] = $this->familia_mofel->familia_id($this->input->post('familia_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_familia',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->familia_model->actualiza_familia()== true){//Si la modificacion es ok
			
			$data['familia'] = $this->familia_model->familia();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_familia',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar actualizar";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_familia', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza cliente
	
    public function borra_familia($familia_id){
		
		if ($this->familia_model->borra_familia($familia_id)== true){
			$data['familia'] = $this->familia_model->familia();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_familia',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar borrar la familia";
			$data['familia'] = $this->familia_model->categoria_id($this->input->post('familia_id'));
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_familia', $data);
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
	
	public function familia_id($id)
	{	
		$data['familia'] = $this->familia_model->familia_id($id);
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_familia', $data);
		$this->load->view('admin/footer');

	}//Cliente


} 