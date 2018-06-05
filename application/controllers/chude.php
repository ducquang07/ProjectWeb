<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuDe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('ChuDe_view');
	}

}

/* End of file ChuDe.php */
/* Location: ./application/controllers/ChuDe.php */