<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Tabela_idioma extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {

		$query = "	CREATE TABLE IF NOT EXISTS `idioma` (
					`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					`nome` VARCHAR(45) NOT NULL,
					`icone` VARCHAR(256) NULL,
					`principal` VARCHAR(45) NOT NULL DEFAULT 0,
					PRIMARY KEY (`id`),
					UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
					ENGINE = InnoDB
					DEFAULT CHARACTER SET = utf8	";
		$this->db->query($query);

		// Inserindo o idioma português como idioma principal
		$query = "	INSERT INTO `idioma`
					(`nome`, `principal`)
					VALUES
					('Português', 1);	";

		$this->db->query($query);

	}

	public function down() {
		$this->dbforge->drop_table('idioma');
	}

}

/* End of file 002_tabela_idioma.php */
/* Location: ./application/migrations/002_tabela_idioma.php */