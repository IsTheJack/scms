<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {

	public function __construct()
	{
		$this->load->model('conn');
		require_once APPPATH . 'ar_model/ar_usuario.php';
	}

	public function salvar($campos)
	{
		$usuario = AR_Usuario::create($campos);
		return $usuario->id;
	}

	public function buscar($id)
	{
		return AR_Usuario::find($id);
	}

	public function alterar($id_usuario, $campos)
	{
		$usuario = $this->buscar($id_usuario);
		$usuario->update_attributes($campos);
	}

	public function excluir($id_usuario)
	{
		$usuario = $this->buscar($id_usuario);
		$usuario->delete();
	}
}

/* End of file usuario.php */
/* Location: ./application/models/usuario.php */