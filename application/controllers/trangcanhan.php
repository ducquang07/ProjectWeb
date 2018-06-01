<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trangcanhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('trangcanhan_model');
		$thongtinnguoidung=$this->trangcanhan_model->laythongtinnguoidung($idusercurrent);
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung));
		$this->load->view('trangcanhan_view',$data);
	}

}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */