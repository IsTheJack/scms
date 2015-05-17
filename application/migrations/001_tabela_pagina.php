<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Essa classe é responsável pela criação e rollback da primeira versão da tabela `pagina`
 * Esta classe não deve ser alterada sob hipótese alguma.
 * Qualquer alteração na tabela `página` deverá ser feita em outra migration
 */
class Migration_Tabela_pagina extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {

		$query = "	CREATE TABLE IF NOT EXISTS `pagina` (
					`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					`id_pai` INT UNSIGNED NOT NULL DEFAULT 0,
					`nome` VARCHAR(50) NOT NULL,
					`bloqueado` BIT NOT NULL DEFAULT 0,
					`ordem` INT UNSIGNED NOT NULL DEFAULT 0,
					PRIMARY KEY (`id`),
					UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
					ENGINE = InnoDB
					DEFAULT CHARACTER SET = utf8	";
		
		$this->db->query($query);
	}

	public function down() {
		$this->dbforge->drop_table('pagina');
	}

}

/* End of file 001_add_pagina.php */
/* Location: ./application/migrations/001_add_pagina.php */