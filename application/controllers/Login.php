<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('UsuariosModel','usuario');
	}
	public function index(){
		if($this->input->is_ajax_request()){
			if($usuario=$this->usuario->login($this->input->post('usuario'),sha1($this->input->post('contra')))){
				$session_data = array(
					'idusuario' => $usuario->id,
					'usuario'=>$usuario->usuario,
					'perfil'=>$usuario->perfil
				);
				$this->session->set_userdata($session_data);
				echo json_encode(TRUE);
			}
			else{
				echo json_encode(FALSE);
			}
		}
	}
}
