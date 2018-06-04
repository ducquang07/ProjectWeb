<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangnhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('dangnhac_model');
		$thongtinnguoidung=$this->dangnhac_model->laythongtinnguoidung($idusercurrent);
		$thongtintheloai = $this->dangnhac_model->laythongtintheloai();
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'theloai'=>array('thongtintheloai' => $thongtintheloai));
		$this->load->view('dangnhac_view',$data);
	}

}

/* End of file dangnhac.php */
/* Location: ./application/controllers/dangnhac.php */