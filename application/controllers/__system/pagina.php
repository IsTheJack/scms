<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('conn');
		$this->load->helper('tema');
		$this->moduloTitulo = 'Página';
	}

	public function index()
	{
		require_once APPPATH . 'ar_model/ar_conteudo_site.php';
		$data['modulo_titulo'] = $this->moduloTitulo;
		$data['acao_titulo'] = 'Tela geral de páginas.';
		$data['paginas'] = AR_Conteudo_site::find('all', array('select' => 'nome, ordem, slug', 'order' => 'ordem'));
		$data['conteudo'] = $this->load->view('__system/pagina/index', $data, TRUE);
		loadTema(TRUE, $data);
	}

	public function mostrar()
	{
		echo "Deu show!!!";
	}

	public function novo()
	{
		$data['modulo_titulo'] = $this->moduloTitulo;
		$data['acao_titulo'] = 'Nova Página';
		$data['conteudo'] = $this->load->view('__system/pagina/new', NULL, TRUE);
		loadTema(TRUE, $data);
	}
}

/* End of file pagina.php */
/* Location: ./application/controllers/__system/pagina.php */