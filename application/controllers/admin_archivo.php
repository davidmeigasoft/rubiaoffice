<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_archivo extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('archivo_model');
		$this->load->model('cliente_model');
		$this->load->library('form_validation');
	} 
	
    public function index()
    {
		if($this->session->userdata('usuario') != ''):
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_archivo');
		$this->load->view('admin/footer');
		else:
		$this->load->view('admin/login');
		endif;
    }
	
	public function listado_archivos()
	{
		$data['archivo'] = $this->archivo_model->archivo();
		$data['cliente'] = $this->cliente_model->cliente();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_archivo', $data);
		$this->load->view('admin/footer');
	}
	
	public function archivo_id($id)
	{	
		$data['archivo'] = $this->archivo_model->archivo_id($id);
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_archivo', $data);
		$this->load->view('admin/footer');
	}

	
	public function alta_archivo(){
		
	$config['upload_path'] = './uploads/archivo/';
	$config['allowed_types'] = 'gif|jpg|png|pdf';
	$config['max_size'] = '10000';
	$config['max_width'] = '1024';
	$config['max_height'] = '768';
	$this->load->library('upload', $config);
		
	$this->form_validation->set_rules('nombre', 'Nombre archivo', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_archivo');
            $this->load->view('admin/footer');
		}
	else
		{
			if ( ! $this->upload->do_upload())//error en subida
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/header');
				$this->load->view('admin/formulario_archivo', $error);
				$this->load->view('admin/footer');
			}
			else//subida ok metemos los datos en la bd
			{
				$data = array('upload_data' => $this->upload->data());
				if ($this->archivo_model->alta_archivo($data)== true){
					$data['error'] = "Ok, todo correcto";
					$this->load->view('admin/header');
					$this->load->view('admin/formulario_archivo', $data);
					$this->load->view('admin/footer');
				}
				else{
					$data['error'] = "Ha ocurrido algún error con la consulta";
					$this->load->view('admin/header');
					$this->load->view('admin/formulario_archivo', $data);
					$this->load->view('admin/footer');
				}//End if	
			}	
		
	}//End form validation
		
		
	}//End alta_archivo
	
    public function actualiza_archivo(){
	
	$this->form_validation->set_rules('nombre', 'Nombre archivo', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['ar'] = $this->archivo_model->archivo_id($this->input->post('archivo_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_archivo',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->archivo_model->actualiza_archivo()== true){//Si la modificacion es ok
			
			$data['archivo'] = $this->archivo_model->cliente();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_archivo',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_archivo', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza archivo
	
    public function borra_archivo($archivo_id){
		$archivo_id = $archivo_id;
		$archivo_a_eliminar = $this->archivo_model->archivo_id($archivo_id);
		if ($this->archivo_model->borra_archivo($archivo_id)== true){
			if(unlink('./uploads/archivo/'.$archivo_a_eliminar->archivo_nombre)):
			endif;
			$data['archivo'] = $this->archivo_model->archivo();
			$data['cliente'] = $this->cliente_model->cliente();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_archivo',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
			$data['archivo'] = $this->archivo_model->archivo_id($this->input->post('archivo_id'));
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_archivo', $data);
            $this->load->view('admin/footer');
		}//End if
		
	}//End borra archivo
	
	 public function asigna_archivo(){
		
		if ($this->archivo_model->asigna_archivo()== true){
			$data['archivo'] = $this->archivo_model->archivo();
			$data['cliente'] = $this->cliente_model->cliente();
			$data['error'] = "Asignado correctamente";
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_archivo',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['archivo'] = $this->archivo_model->archivo();
			$data['cliente'] = $this->cliente_model->cliente();
			$data['error'] = "Ya existe asignación";
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_archivo', $data);
            $this->load->view('admin/footer');
		}//End if
		
	}//End asigna archivo
	


} 