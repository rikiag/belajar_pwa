<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['content'] = 'home/home';
		$this->load->view('base', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */