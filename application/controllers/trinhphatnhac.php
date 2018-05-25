<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trinhphatnhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('trinhphatnhac_view');
	}

}

/* End of file trinhphatnhac.php */
/* Location: ./application/controllers/trinhphatnhac.php */