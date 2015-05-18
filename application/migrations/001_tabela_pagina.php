<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Tabela_pagina extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() {

		$query = "	CREATE TABLE IF NOT EXISTS `pagina` (
					  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
					  `pagina_id` INT UNSIGNED NULL,
					  `nome` VARCHAR(50) NOT NULL,
					  `bloqueado` BIT NOT NULL DEFAULT 0,
					  `ordem` INT UNSIGNED NOT NULL DEFAULT 0,
					  PRIMARY KEY (`id`),
					  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
					  INDEX `fk_pagina_pagina1_idx` (`pagina_id` ASC),
					  CONSTRAINT `fk_pagina_pagina1`
					    FOREIGN KEY (`pagina_id`)
					    REFERENCES `pagina` (`id`)
					    ON DELETE NO ACTION
					    ON UPDATE NO ACTION)
					ENGINE = InnoDB
					DEFAULT CHARACTER SET = utf8;	";
							
		$this->db->query($query);
	}

	public function down() {
		$this->dbforge->drop_table('pagina');
	}

}

/* End of file 001_add_pagina.php */
/* Location: ./application/migrations/001_add_pagina.php */