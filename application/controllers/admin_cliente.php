<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_cliente extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cliente_model');
		$this->load->model('archivo_model');
		$this->load->library('form_validation');
	} 
	
    public function index()
    {
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_cliente');
		$this->load->view('admin/footer');
    }
	
	public function listado_clientes()
	{
		$data['cliente'] = $this->cliente_model->cliente();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_cliente', $data);
		$this->load->view('admin/footer');
	}//Cliente
	
	public function cliente_id($id)
	{	
		$data['cliente'] = $this->cliente_model->cliente_id($id);
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_cliente', $data);
		$this->load->view('admin/footer');

	}//Cliente

	
	public function alta_cliente(){
		
	$this->form_validation->set_rules('nombre', 'Nombre cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('apellido', 'Apellido cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('mail', 'Mail cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('movil', 'Movil cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('pass', 'Password cliente', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_cliente');
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->cliente_model->alta_cliente()== true){
			$data['error'] = "Ok, todo correcto";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_cliente', $data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_cliente', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End alta_cliente
	
    public function actualiza_cliente(){
	
	$this->form_validation->set_rules('nombre', 'Nombre cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('apellido', 'Apellido cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('mail', 'Mail cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('movil', 'Movil cliente', 'required'); //forma directa de crear reglas
	$this->form_validation->set_rules('pass', 'Password cliente', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['cliente'] = $this->cliente_model->cliente_id($this->input->post('cliente_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_cliente',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->cliente_model->actualiza_cliente()== true){//Si la modificacion es ok
			
			$data['cliente'] = $this->cliente_model->cliente();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_cliente',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_cliente', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza cliente
	
    public function borra_cliente($cliente_id){
		
		if ($this->cliente_model->borra_cliente($cliente_id)== true){
			$data['cliente'] = $this->cliente_model->cliente();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_cliente',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
			$data['cliente'] = $this->cliente_model->cliente_id($this->input->post('cliente_id'));
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_cliente', $data);
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

} 