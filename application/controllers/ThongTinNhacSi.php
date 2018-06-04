<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThongTinNhacSi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	public function nhacsi($id)
	{
		$this->load->model('ThongTinNhacSi_model');
		$kq=$this->ThongTinNhacSi_model->LayThongTinNhacSi($id);
		$kq=array('thongtinnhacsi'=>$kq);
		$this->load->view('ThongTinNhacSi_view',$kq);
	}
}

/* End of file ThongTinNhacSi.php */
/* Location: ./application/controllers/ThongTinNhacSi.php */