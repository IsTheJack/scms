<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('conn');
		$this->load->helper('tema');
		$this->moduloTitulo = 'Educa Online';
	}

	public function index()
	{
		$data['modulo_titulo'] = $this->moduloTitulo;
		$data['acao_titulo'] = 'Tela principal.';
		$data['conteudo'] = 'Conteúdo do sistema';
		loadTema(TRUE, $data);
	}

}

/* End of file sistema.php */
/* Location: ./application/controllers/sistema.php */