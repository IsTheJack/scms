<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_View_conteudo_site extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		
		$query = "	CREATE  OR REPLACE VIEW `conteudo_site` AS
					SELECT pg.id AS pagina_id, pg.ordem, pgi.idioma_id, pgi.bloqueado,
					pgi.nome, pgi.titulo, pgi.conteudo, seo.slug, seo.title, 
					seo.description, seo.keywords, seo.robots FROM pagina pg 
					INNER JOIN pagina_idioma pgi ON pg.id = pgi.pagina_id
					INNER JOIN dadosSEO seo ON pgi.dadosSEO_id = seo.id	";
		$this->db->query($query);
	}

	public function down() {
		$query = "	DROP VIEW `conteudo_site`	";
		$this->db->query($query);
	}

}

/* End of file 004_view_conteudo_site.php */
/* Location: ./application/migrations/004_view_conteudo_site.php */