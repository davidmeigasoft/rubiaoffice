<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	 

	public function __construct()
	    {
	        parent::__construct();
			$this->load->model('usuario_model');
	        $this->load->helper(array('form', 'url'));
	        $this->load->library('form_validation');
	    } 
		
		public function index($enl = '')
		{
			
			if($this->session->userdata('usuario') != ''):
			
			if ($enl == ''){
				$enlace = 'body';
			}
			else{
			$enlace = $enl;
			}
			$this->load->view('admin/header');
			$this->load->view('admin/'.$enlace);
			$this->load->view('admin/footer');
			else:
			$this->load->view('admin/login');
			endif;
		}
	
		public function loguear(){
				$mail = $this->input->post('mail');
				$pass = $this->input->post('pass');
				$usuario = $this->usuario_model->usuario();
				//print_r($cliente);
				
				foreach($usuario as $usuario_row){
						if($mail == $usuario_row->mail && $pass == $usuario_row->pass){
							$datasession = array(
							'usuario'  => $usuario_row->nombre,
							'login_ok' => TRUE
							);
							$this->session->set_userdata($datasession);
							redirect('admin/index/body');
						}
				}//end foreach
				$data['error'] = "Usuario incorrecto";
				$this->load->view('admin/login',$data);
			}//loguear
		
		public function cerrar(){
			$this->session->destroy();
			redirect('admin/index/login');
			}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */