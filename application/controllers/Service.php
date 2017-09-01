<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MService', 'service');
	}

	public function index()
	{
		$this->load->view('404');
	}

	public function get_book()
	{
		foreach ($this->service->get_book()->result_object() as $key) {
			$value = array(
				'id'          => (int)$key->id,
				'title'       => $key->title,
				'year'        => $key->year,
				'author'      => $key->author,
				'description' => $key->description,
				'image'       => $key->image,
				'publisher'   => $key->publisher
			);
			
			$book[] = array(
				'key'   => (int)$key->id,
				'value' => $value
			);
		}

		
		$data['book'] = $book;
		echo json_encode($data);
	}

	public function test()
	{
		echo file_get_contents('http://bstavroulakis.com/pluralsight/courses/progressive-web-apps/service/latest-deals.php');

	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */