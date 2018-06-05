<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('TrangChu_view');
	}
	public function logout_controller($value='')
	{
		$this->session->sess_destroy();
		header('Location: '.base_url().'TrangChu');
	}
}
/* End of file trangchu.php */
/* Location: ./application/controllers/trangchu.php */
