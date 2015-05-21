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
		$data['conteudo'] = $this->load->view('__system/pagina/novo', NULL, TRUE);
		loadTema(TRUE, $data);
	}

	public function criar()
	{
		require_once APPPATH . 'ar_model/ar_pagina.php';
		require_once APPPATH . 'ar_model/ar_pagina_idioma.php';
		require_once APPPATH . 'ar_model/ar_dados_seo.php';

		if ($this->input->post('pai') > 0)
			$atributos['pagina']['pagina_id'] = $this->input->post('pai');
		$atributos['pagina']['nome'] = $this->input->post('nome');
		$atributos['pagina']['bloqueado'] = $this->input->post('bloqueado');
		$atributos['pagina']['ordem'] = $this->input->post('ordem');
		$pagina = new AR_Pagina($atributos['pagina']);
		$pagina->save();
		
		$atributos['dadosSEO']['title'] = $this->input->post('titulo');
		$atributos['dadosSEO']['description'] = $this->input->post('description');
		$atributos['dadosSEO']['robots'] = $this->input->post('robots');
		$atributos['dadosSEO']['slug'] = $this->input->post('slug');
		$dados_seo = new AR_Dados_seo($atributos['dadosSEO']);
		$dados_seo->save();
		
		$atributos['pagina_idioma']['pagina_id'] = $pagina->id;
		$atributos['pagina_idioma']['idioma_id'] = $this->input->post('idioma');
		$atributos['pagina_idioma']['dadosSEO_id'] = $dados_seo->id;
		$atributos['pagina_idioma']['nome'] = $this->input->post('nome');
		$atributos['pagina_idioma']['titulo'] = $this->input->post('titulo');
		$atributos['pagina_idioma']['conteudo'] = $this->input->post('conteudo');
		$atributos['pagina_idioma']['bloqueado'] = $this->input->post('bloqueado');
		$pagina_idioma = new AR_Pagina_idioma($atributos['pagina_idioma']);
		$pagina_idioma->save();

		echo <<<RESULT
			Validar os Campos <br>
			<h1>Página ID: {$pagina->id}</h1>
			<h1>Dados SEO ID: {$dados_seo->id}</h1>
			<h1>Página Idioma ID: {$pagina_idioma->id}</h1>
RESULT;
	}
}

/* End of file pagina.php */
/* Location: ./application/controllers/__system/pagina.php */