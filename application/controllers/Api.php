<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Api_Model', 'api');
	}

	public function index()
	{
		$this->load->view('404');
	}

	public function get_book()
	{
		echo json_encode($this->api->get_book()->result_object());
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */