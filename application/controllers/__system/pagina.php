<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('conn');
		$this->load->helper('tema');
		$this->moduloTitulo = 'Página';
		$this->load->library('session');
		$this->load->library('form_validation');
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

	public function novo()
	{
		$content_data['formulario_pagina'] = $this->load->view('__system/pagina/_form', NULL, TRUE);
		$data['modulo_titulo'] = $this->moduloTitulo;
		$data['acao_titulo'] = 'Nova Página';
		$data['conteudo'] = $this->load->view('__system/pagina/novo', $content_data, TRUE);
		loadTema(TRUE, $data);
	}

	public function criar()
	{
		$this->setar_validacoes();

		if ($this->form_validation->run() !== FALSE)
		{
			// require_once APPPATH . 'ar_model/ar_pagina.php';
			// require_once APPPATH . 'ar_model/ar_pagina_idioma.php';
			// require_once APPPATH . 'ar_model/ar_dados_seo.php';

			// if ($this->input->post('pai') > 0)
			// 	$atributos['pagina']['pagina_id'] = $this->input->post('pai');
			// $atributos['pagina']['nome'] = $this->input->post('nome');
			// $atributos['pagina']['bloqueado'] = $this->input->post('bloqueado');
			// $atributos['pagina']['ordem'] = $this->input->post('ordem');
			// $pagina = new AR_Pagina($atributos['pagina']);
			// $pagina->save();
			
			// $atributos['dadosSEO']['title'] = $this->input->post('titulo');
			// $atributos['dadosSEO']['description'] = $this->input->post('description');
			// $atributos['dadosSEO']['robots'] = $this->input->post('robots');
			// $atributos['dadosSEO']['slug'] = $this->input->post('slug');
			// $dados_seo = new AR_Dados_seo($atributos['dadosSEO']);
			// $dados_seo->save();
			
			// $atributos['pagina_idioma']['pagina_id'] = $pagina->id;
			// $atributos['pagina_idioma']['idioma_id'] = $this->input->post('idioma');
			// $atributos['pagina_idioma']['dadosSEO_id'] = $dados_seo->id;
			// $atributos['pagina_idioma']['nome'] = $this->input->post('nome');
			// $atributos['pagina_idioma']['titulo'] = $this->input->post('titulo');
			// $atributos['pagina_idioma']['conteudo'] = $this->input->post('conteudo');
			// $atributos['pagina_idioma']['bloqueado'] = $this->input->post('bloqueado');
			// $pagina_idioma = new AR_Pagina_idioma($atributos['pagina_idioma']);
			// $pagina_idioma->save();

			$this->session->set_flashdata('sucesso', 'Página cadastrada com sucesso!');

			redirect('__system/pagina');
		}
		else
		{
			$erros = validation_errors();
			$content_data['html_msg'] = '<div class="alert alert-danger alert-dismissable">
                                    <i class="fa fa-ban"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <b>Atenção!</b> ' . $erros . '
                                </div>';
			$content_data['formulario_pagina'] = $this->load->view('__system/pagina/_form', NULL, TRUE);
			$data['modulo_titulo'] = $this->moduloTitulo;
			$data['acao_titulo'] = 'Nova Página';
			$data['conteudo'] = $this->load->view('__system/pagina/novo', $content_data, TRUE);
			loadTema(TRUE, $data);
		}
	}

	public function editar()
	{
		$content_data['formulario_pagina'] = $this->load->view('__system/pagina/_form', NULL, TRUE);
		$data['modulo_titulo'] = $this->moduloTitulo;
		$data['acao_titulo'] = 'Editar Página';
		$data['conteudo'] = $this->load->view('__system/pagina/editar', $content_data, TRUE);
		loadTema(TRUE, $data);
	}

	/**
	* MÉTODOS PRIVATOS
	*/

	private function setar_validacoes()
	{
		$this->form_validation->set_rules('nome', '"Nome" da Página', 'trim|required|max_length[255]|xss_clean');
		$this->form_validation->set_rules('titulo', '"Título da Página"', 'trim|required|max_length[255]|xss_clean');
		$this->form_validation->set_rules('pai', '"Pertence ao"', 'trim|required|integer|is_natural|xss_clean');
		$this->form_validation->set_rules('description', '"Descrição da Página"', 'trim|max_length[255]|xss_clean');
		$this->form_validation->set_rules('slug', '"Slug"', 'trim|required|max_length[255]|xss_clean');
		$this->form_validation->set_rules('idioma', '"Idioma"', 'trim|required|integer|is_natural_no_zero|xss_clean');
		$this->form_validation->set_rules('ordem', '"Ordem"', 'trim|required|integer|is_natural_no_zero|xss_clean');
		$this->form_validation->set_rules('robots', '"Robots"', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bloqueado', '"Deseja bloquear esta página?"', 'trim|is_natural|less_than[3]|xss_clean');
		$this->form_validation->set_rules('conteudo', '"Conteúdo da Página"', 'xss_clean');
	}
}

/* End of file pagina.php */
/* Location: ./application/controllers/__system/pagina.php */