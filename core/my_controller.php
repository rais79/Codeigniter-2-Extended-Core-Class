<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public $my_header = 'Extended Core Class xample';
	public $my_template;
	
}

class My_Public extends My_Controller {
		
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MExample');
		$this->my_template = 'example_template';
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
;	}
}


