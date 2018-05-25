<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class playlist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('playlist_view');
	}

}

/* End of file playlist.php */
/* Location: ./application/controllers/playlist.php */