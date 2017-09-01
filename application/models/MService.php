<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MService extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_book()
	{
		return $this->db->get('book');
	}

}

/* End of file Api_Model.php */
/* Location: ./application/models/Api_Model.php */