<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_elementos_index extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('elementos_index_model');

	} 
	
    public function index()
    {
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_elementos_index');
		$this->load->view('admin/footer');
    }

	public function alta_elemento(){


		if($this->elementos_index_model->alta_elemento()== true)
		{
			$data['error'] = "Ok, todo correcto";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_elementos_index', $data);
            $this->load->view('admin/footer');
			}
		else
		{
			$data['error'] = "Ha ocurrido algún error con la consulta";
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_elementos_index', $data);
            $this->load->view('admin/footer');
		}//End if

	}//End alta_cliente
	
	
	public function listar_elementos_index()
	{
		$data['elemento_index'] = $this->elementos_index_model->elementos_index();
		$this->load->view('admin/header');
		$this->load->view('admin/tabla_elementos_index', $data);
		$this->load->view('admin/footer');
	}//Cliente
	
	
	
    public function actualiza_elemento(){

		if ($this->elementos_index_model->actualiza_elemento()== true)
		{
			$data['elemento_index'] = $this->elementos_index_model->elementos_index();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_elementos_index',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar actualizar";//Error en modificacion
			
            $this->load->view('admin/header');
            $this->load->view('admin/formulario_editar_elemento_index', $data);
            $this->load->view('admin/footer');
		}//End if

	}//End actualiza cliente
	
    public function borra_elemento_index($index_id){
		
		if ($this->elementos_index_model->borra_elemento($index_id)== true){
			$data['elemento_index'] = $this->elementos_index_model->elementos_index();
            $this->load->view('admin/header');
            $this->load->view('admin/tabla_elementos_index',$data);
            $this->load->view('admin/footer');
			}
		else{
			$data['error'] = "Ha ocurrido algún error al intentar borrar la categoría";
			
			$data['categoria'] = $this->elementos_index_model->elemento_index_id($this->input->post('categoria_id'));
            
			$data['elementos_index'] = $this->elementos_index_model->elementos_index();
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
	
	public function elemento_index_id($id)
	{	
		$data['elemento_index'] = $this->elementos_index_model->elementos_index($id);
		$this->load->view('admin/header');
		$this->load->view('admin/formulario_editar_elemento_index', $data);
		$this->load->view('admin/footer');

	}//Cliente


} 