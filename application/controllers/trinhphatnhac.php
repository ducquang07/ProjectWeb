<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhPhatNhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*
		$id = $_GET['id'];
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrinhPhatNhac_model');
		$thongtinbaihat=$this->TrinhPhatNhac_model->laythongtinbaihat($id);
		$thongtinnguoidung=$this->TrinhPhatNhac_model->laythongtinnguoidung($idusercurrent);
		$danhsachbinhluan=$this->TrinhPhatNhac_model->laydanhsachbinhluan($id);
		$thongtinnguoidang=$this->TrinhPhatNhac_model->laythongnguoidang($id);
		$this->TrinhPhatNhac_model->themluotnghe($id);
		$data=array('baihat'=>array('thongtinbaihat'=>$thongtinbaihat),
			'nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
			'binhluan'=>array('danhsachbinhluan'=>$danhsachbinhluan),
			'nguoidang'=>array('thongtinnguoidang'=>$thongtinnguoidang));
		//$this->TrinhPhatNhac_model->laythongtincasi($baihat['idcasi']);
		//$this->TrinhPhatNhac_model->laythongtheloai($id);

		$this->load->view('trinhphatnhac_view',$data);*/
	}

	public function binhluan()
	{
		$noidung=$this->input->post('noidung');
		$idnguoidung=$this->input->post('idnguoidung');
		$idbaihat=$this->input->post('idbaihat');
		$thoigian=$this->input->post('thoigian');
		$this->load->model('TrinhPhatNhac_model');
		$this->TrinhPhatNhac_model->luubinhluan($idbaihat,$idnguoidung,$thoigian,$noidung);
	}

	public function binhluan_moinhat()
	{
		$idbaihat=$this->input->post('idbaihat');
		$this->load->model('TrinhPhatNhac_model');
		$this->TrinhPhatNhac_model->binhluan_moinhat($idbaihat);
	}

	public function binhluan_cunhat()
	{
		$idbaihat=$this->input->post('idbaihat');
		$this->load->model('TrinhPhatNhac_model');
		$this->TrinhPhatNhac_model->binhluan_cunhat($idbaihat);
	}

}

/* End of file trinhphatnhac.php */
/* Location: ./application/controllers/trinhphatnhac.php */