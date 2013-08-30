<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_articulo extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('articulo_model');
		$this->load->model('categoria_model');
		$this->load->model('subcategoria_model');
	} 
    
    function categoria_select()
       {
        $categoria=$this->input->post('id');
        $this->db->where("subcategoria.categoria",$categoria);
        $data['subcategoria_dep']=$this->db->get('subcategoria');
        
        $this->load->view('admin/header');
        $this->load->view('admin_formulario_articulo');
        $this->load->view('admin/footer');   
           


       }
	
    public function index()
    {
		$data['articulo_imagen'] = $this->articulo_model->obtener_imagen();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
        $data['categoria'] = $this->categoria_model->categoria();
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_articulo', $data);
		$this->load->view('admin/footer');
    }

	public function alta_articulo(){
		
	$this->form_validation->set_rules('nombre', 'Nombre articulo', 'required'); //forma directa de crear reglas
	
	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_articulo', $data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->articulo_model->alta_articulo()== true){
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
			$data['error'] = "Ok, todo correcto";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_articulo', $data);
            $this->load->view('admin/footer');
			}
		else{
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
			$data['error'] = "Ha ocurrido algún error con la consulta";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_articulo', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End alta_articulo
	
	public function listar_articulo()
	{
		$data['articulo'] = $this->articulo_model->articulo();
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['categoria'] = $this->categoria_model->categoria();
		
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_articulo', $data);
		$this->load->view('admin/footer');
	}//Cliente
	
	
	
    public function actualiza_articulo(){
	
	$this->form_validation->set_rules('nombre', 'Nombre articulo', 'required'); //forma directa de crear reglas

	if ($this->form_validation->run() == FALSE)// hay algun error en la validacion
		{
			$data['articulo'] = $this->articulo_model->articulo_id($this->input->post('articulo_id'));
			$this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_articulo',$data);
            $this->load->view('admin/footer');
		}
	else
		{
		if ($this->articulo_model->actualiza_articulo()== true){//Si la modificacion es ok
			
			$data['articulo'] = $this->articulo_model->articulo();
			
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
			$data['error'] = "Actualización correcta";
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_articulo',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar actualizar";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_articulo', $data);
            $this->load->view('admin/footer');
		}//End if
	}//End form validation
		
		
	}//End actualiza cliente
	
    public function borra_articulo($articulo_id){
		
		if ($this->articulo_model->borra_articulo($articulo_id)== true){
			$data['articulo'] = $this->articulo_model->articulo();
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_articulo',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar borrar la categoría";
			$data['articulo'] = $this->articulo_model->articulo_id($this->input->post('articulo_id'));
			$data['subcategoria'] = $this->subcategoria_model->subcategoria();
			$data['categoria'] = $this->categoria_model->categoria();
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_articulo', $data);
            $this->load->view('admin/footer');
		}//End if
		
	}//End borra articulo

	public function articulo_id($id)
	{	
		$data['articulo'] = $this->articulo_model->articulo_id($id);
		$data['subcategoria'] = $this->subcategoria_model->subcategoria();
		$data['categoria'] = $this->categoria_model->categoria();
		
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_articulo', $data);
		$this->load->view('admin/footer');

	}//Cliente
	
	public function combo_subcategoria(){
		
		$val = $this->input->post('id');
		$data = $this->subcategoria_model->subcategoria_combo_id($val);

		foreach($data as $row):
			echo '<option value="'.$row->subcategoria_id.'" >'.ucfirst($row->nombre).'</option>';
		endforeach;
		
	}
	
} 