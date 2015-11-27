<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UsuariosModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function agregar($nombre_usuario,$contra){
		try {
			$usuario=R::dispense('usuarios');
			$usuario->usuario=$nombre_usuario;
			$usuario->password=sha1($contra);
			if($id=R::store($usuario)){
				return $id;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e) {
			return FALSE;
		}

	}

	public function editar($datos){
		try {
			if($usuario=R::load('usuarios',$datos->idusuario)) {
				$usuario->usaurio=$datos->usuario;
				$usuario->password=$datos->contra;
				R::store($usuario);
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e) {
			return FALSE;
		}
	}

	public function eliminar($idusuario){
		try {
			if($R::trash($idusuario)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e) {
			return FALSE;
		}
	}

	public function login($user,$pass){
		try {
			$idusuario = R::findOne('usuarios','usuario=:user and password=:pass',array(':user'=>$user,':pass'=>$pass));
			if($idusuario){
				return $idusuario;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e) {
			return FALSE;	
		}
	}
}

/* End of file UsuariosModel.php */
/* Location: ./application/models/UsuariosModel.php */