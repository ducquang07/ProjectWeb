<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadImage.php';

class ThemNhacSi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('DangNhac_model');
		$thongtinnguoidung=$this->DangNhac_model->laythongtinnguoidung($idusercurrent);
		$thongtintheloai = $this->DangNhac_model->laythongtintheloai();
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'theloai'=>array('thongtintheloai' => $thongtintheloai));
		$this->load->view('ThemNhacSi_view', $data);
	}
	public function themnhacsi()
	{
		$this->load->model('ThemNhacSi_model');
		$tenns = $this->input->post('tennhacsi');
		$ngaysinh = $this->input->post('ngaysinh');
		$gioitinh = $this->input->post('gioitinh');
		$duongdananhns = $this->input->post('duongdananhns');
		$duongdananhbians = $this->input->post('duongdananhbians');
		$mota = $this->input->post('mota');
		if($this->ThemNhacSi_model->themnhacsi($tenns,$ngaysinh,$gioitinh,$duongdananhns,$duongdananhbians,$mota))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	public function uploadfileanh()
	{
		$uploadfile = new UploadImage();
	}
}

/* End of file ThemCaSi.php */
/* Location: ./application/controllers/ThemCaSi.php */