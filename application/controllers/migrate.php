<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

	public function index()
	{
		
		if(AMBIENTE_DEV == 'desenvolvimento' || AMBIENTE_DEV == 'teste')
		{
			$this->load->library('migration');
			if (!$this->migration->current())
				show_error($this->migration->error_string());
			else
				echo '<center><h1 style="color: green; margin-top: 200px;">Banco de Dados Migrado com Sucesso!</h1></center>';
		}
		else
			show_404();
	}

}

/* End of file migrate.php */
/* Location: ./application/controllers/migrate.php */