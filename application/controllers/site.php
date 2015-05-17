<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::__construct();
		$this->load->model('conn');

		$this->load->helper('tema');
	}

	public function getPagina($slug = 'home')
	{
		require_once APPPATH . 'ar_model/ar_conteudo_site.php';

		// Definindo os dados usados nas páginas
		$data['menus'] = $this->getMenus(1);
		$data['pagina'] = AR_Conteudo_site::find_by_slug($slug);

		// Definindo estrutura do tema
		$estrutura = getEstruturaTema(getTema());

		// Carregando views de acordo com a estrutura
		foreach ($estrutura as $parte)
		{
			$this->load->view($parte, $data);
		}
	}

	private function getMenus($idioma_id)
	{
		return  AR_Conteudo_site::find('all' , array('select' => 'nome, titulo, slug', 'readonly' => true));
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */