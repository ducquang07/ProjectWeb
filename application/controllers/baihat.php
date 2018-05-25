<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class baihat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('baihat_view');
	}

}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */