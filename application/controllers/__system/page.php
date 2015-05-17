<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('conn');
		$this->load->helper('template');
		$this->module_title = 'Página';
	}

	public function index()
	{
		require_once APPPATH . 'ar_model/ar_conteudo_site.php';
		$data['module_title'] = $this->module_title;
		$data['action_title'] = 'Tela geral de páginas.';
		$data['paginas'] = AR_Conteudo_site::find('all', array('select' => 'nome, ordem, slug', 'order' => 'ordem'));
		$data['content'] = $this->load->view('__system/pagina/index', $data, TRUE);
		load_themme(TRUE, $data);
	}

	public function show()
	{
		echo "Deu show!!!";
	}

	public function new_page()
	{
		$data['module_title'] = $this->module_title;
		$data['action_title'] = 'Nova Página';
		$data['content'] = $this->load->view('__system/pagina/new', NULL, TRUE);
		load_themme(TRUE, $data);
	}
}

/* End of file pagina.php */
/* Location: ./application/controllers/__system/pagina.php */