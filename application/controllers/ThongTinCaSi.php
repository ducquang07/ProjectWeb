<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThongTinCaSi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $tencasi=$this->input->post('tencasi');
		
	}
	public function casi($id)
	{
		$this->load->model('ThongTinCaSi_model');
		$kq=$this->ThongTinCaSi_model->LayThongTinCaSi($id);
		$kq=array('thongtincasi'=>$kq);
		$this->load->view('ThongTinCaSi_view',$kq);
	}
}

/* End of file ThongTinCaSi.php */
/* Location: ./application/controllers/ThongTinCaSi.php */