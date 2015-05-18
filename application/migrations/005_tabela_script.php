<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Tabela_script extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {

		$query = " 	CREATE TABLE IF NOT EXISTS `script` (
					  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					  `nome` VARCHAR(45) NOT NULL,
					  `codigo` TEXT NOT NULL,
					  `geral` TINYINT(1) NOT NULL COMMENT 'Se o script é para todas as páginas',
					  PRIMARY KEY (`id`),
					  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC))
					ENGINE = InnoDB; ";
		$this->db->query($query);

		$query = "	CREATE TABLE IF NOT EXISTS `dadosSEO_script` (
					  `script_id` INT UNSIGNED NOT NULL,
					  `dadosSEO_id` INT UNSIGNED NOT NULL,
					  PRIMARY KEY (`script_id`, `dadosSEO_id`),
					  INDEX `fk_script_has_dadosSEO_dadosSEO1_idx` (`dadosSEO_id` ASC),
					  INDEX `fk_script_has_dadosSEO_script1_idx` (`script_id` ASC),
					  CONSTRAINT `fk_script_has_dadosSEO_script1`
					    FOREIGN KEY (`script_id`)
					    REFERENCES `script` (`id`)
					    ON DELETE NO ACTION
					    ON UPDATE NO ACTION,
					  CONSTRAINT `fk_script_has_dadosSEO_dadosSEO1`
					    FOREIGN KEY (`dadosSEO_id`)
					    REFERENCES `dadosSEO` (`id`)
					    ON DELETE NO ACTION
					    ON UPDATE NO ACTION)
					ENGINE = InnoDB;	";
		$this->db->query($query);

	}

	public function down() {
		$this->dbforge->drop_table('dadosSEO_script');
		$this->dbforge->drop_table('script');
	}

}

/* End of file 005_tabela_script.php */
/* Location: ./application/migrations/005_tabela_script.php */