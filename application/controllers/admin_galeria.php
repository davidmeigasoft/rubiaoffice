<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_galeria extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeria_model');
		$this->load->model('thumb_model');
		$this->load->library('form_validation');
	} 
	
    public function index()
    {
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_galeria');
		$this->load->view('admin/footer');
    }
	
	public function listado_galerias()
	{
		$data['galeria'] = $this->galeria_model->galeria();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_galeria', $data);
		$this->load->view('admin/footer');
	}
	
	public function galeria_id($id)
	{	
		$data['galeria'] = $this->galeria_model->galeria_id($id);
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_galeria', $data);
		$this->load->view('admin/footer');
	}
	
	public function galeria_thumb($galeria_id)
	{
		$data['thumb'] = $this->thumb_model->thumb_galeria($galeria_id);
		$this->load->view('admin/header');
		$this->load->view('admin/galeria_thumb', $data);
		$this->load->view('admin/footer');
	}


	
	public function alta_galeria(){
		
	$this->form_validation->set_rules('nombre', 'Nombre archivo', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_galeria');
            $this->load->view('admin/footer');
		}
	else
		{
			if ($this->galeria_model->alta_galeria()== true){
				$data['error'] = "Ok, todo correcto";
				$this->load->view('admin/header');
				$this->load->view('admin/formulario_galeria', $data);
				$this->load->view('admin/footer');
			}
			else{
				$data['error'] = "Ha ocurrido algún error con la consulta";
				$this->load->view('admin/header');
				$this->load->view('admin/formulario_galeria', $data);
				$this->load->view('admin/footer');
			}//End if
	}//End form validation
		
		
	}//End alta_galeria
	
    public function actualiza_galeria(){
	
	$this->form_validation->set_rules('nombre', 'Nombre galeria', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['galeria'] = $this->galeria_model->galeria_id($this->input->post('galeria_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_galeria',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->galeria_model->actualiza_galeria()== true){//Si la modificacion es ok
			$data['galeria'] = $this->galeria_model->galeria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_galeria',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";//Error en modificacion
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_galeria', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza galeria
	
    public function borra_galeria($galeria_id){
		$thumbs = $this->thumb_model->thumb_galeria($galeria_id);
		if ($this->galeria_model->borra_galeria($galeria_id)== true){
			foreach($thumbs as $row):
				unlink('./uploads/thumb/'.$row->file_name);
			endforeach;
			
			$data['galeria'] = $this->galeria_model->galeria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_galeria',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error con la consulta";
			$data['galeria'] = $this->galeria_model->galeria_id($this->input->post('galeria_id'));
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_galeria', $data);
            $this->load->view('admin/footer');
		}//End if
		
	}//End borra galeria
	
	public function asigna_thumb(){
		
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