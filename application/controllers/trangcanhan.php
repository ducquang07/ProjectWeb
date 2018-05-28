<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trangcanhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('trangcanhan_view');
	}

}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */