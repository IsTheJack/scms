<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AR_Pagina extends ActiveRecord\Model {

	static $table_name = 'pagina';
	static $has_many = array(
		array('pagina_idioma', 'class_name' = 'AR_Pagina_idioma'),
		array(array('idioma', 'class_name' = 'AR_Idioma'), 'through' => 'pagina_idioma')
	);

}

/* End of file ar_site.php */
/* Location: ./application/ar_model/ar_pagina.php */