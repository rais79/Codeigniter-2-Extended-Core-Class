<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MExample extends My_Db_Model {

	function __construct()
	{
		parent::__construct();
		$this->_table = 'test';
	}
	
}
	