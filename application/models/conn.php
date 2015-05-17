<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conn extends CI_Model {

	public function __construct() {
		ActiveRecord\Config::initialize(function($cfg) {
			$models = APPPATH . "/ar_models";
			$cfg->set_model_directory($models);
			$cfg->set_connections(array(
				'development' => 'mysql://dev@localhost/scms_dev?charset=utf8'
			));
		});
	}	

}

/* End of file conn.php */
/* Location: ./application/models/conn.php */