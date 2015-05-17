<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Tabelas_SEO_e_pagina_idioma extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {
		
		$query = "	CREATE TABLE IF NOT EXISTS `dadosSEO` (
					`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					`title` VARCHAR(255) NOT NULL,
					`description` VARCHAR(800) NULL,
					`keywords` VARCHAR(800) NULL,
					`robots` VARCHAR(45) NULL,
					PRIMARY KEY (`id`))
					ENGINE = InnoDB
					DEFAULT CHARACTER SET = utf8	";
		$this->db->query($query);

		// Criando a tabela pagina_idioma com chaves estrangeiras setadas
		$query = "	CREATE TABLE IF NOT EXISTS `pagina_idioma` (
					`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					`pagina_id` INT UNSIGNED NOT NULL,
					`idioma_id` INT UNSIGNED NOT NULL,
					`dadosSEO_id` INT UNSIGNED NOT NULL,
					`nome` VARCHAR(45) NOT NULL,
					`titulo` VARCHAR(255) NULL,
					`slug` VARCHAR(255) NOT NULL,
					`conteudo` TEXT NULL,
					`bloqueado` BIT NOT NULL DEFAULT 0,
					INDEX `fk_pagina_has_idioma_idioma1_idx` (`idioma_id` ASC),
					INDEX `fk_pagina_has_idioma_pagina_idx` (`pagina_id` ASC),
					INDEX `fk_pagina_has_idioma_dadosSEO1_idx` (`dadosSEO_id` ASC),
					PRIMARY KEY (`id`),
					UNIQUE INDEX `slug_UNIQUE` (`slug` ASC),
					UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
					CONSTRAINT `fk_pagina_has_idioma_pagina`
					FOREIGN KEY (`pagina_id`)
					REFERENCES `pagina` (`id`)
					ON DELETE NO ACTION
					ON UPDATE NO ACTION,
					CONSTRAINT `fk_pagina_has_idioma_idioma1`
					FOREIGN KEY (`idioma_id`)
					REFERENCES `idioma` (`id`)
					ON DELETE NO ACTION
					ON UPDATE NO ACTION,
					CONSTRAINT `fk_pagina_has_idioma_dadosSEO1`
					FOREIGN KEY (`dadosSEO_id`)
					REFERENCES `dadosSEO` (`id`)
					ON DELETE NO ACTION
					ON UPDATE NO ACTION)
					ENGINE = InnoDB
					DEFAULT CHARACTER SET = utf8
					COMMENT = 'Tabela relacional das tabelas pagina e idioma'	";
		$this->db->query($query);

	}

	public function down() {
		$this->dbforge->drop_table('pagina_idioma');
		$this->dbforge->drop_table('dadosSEO');
	}

}

/* End of file 003_tabelas_SEO_e_pagina_idioma.php */
/* Location: ./application/migrations/003_tabelas_SEO_e_pagina_idioma.php */