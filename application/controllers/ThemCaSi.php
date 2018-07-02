<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThemCaSi extends CI_Controller {

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
		$this->load->view('ThemCaSi_view', $data);
	}
	public function themcasi()
	{
		$this->load->model('ThemCaSi_model');
		$tencs = $this->input->post('tencasi');
		$ngaysinh = $this->input->post('ngaysinh');
		$gioitinh = $this->input->post('gioitinh');
		$duongdananhcs = $this->input->post('duongdananhcs');
		$duongdananhbiacs = $this->input->post('duongdananhbiacs');
		$mota = $this->input->post('mota');
		if($this->ThemCaSi_model->themcasi($tencs,$ngaysinh,$gioitinh,$duongdananhcs,$duongdananhbiacs,$mota))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
}

/* End of file ThemCaSi.php */
/* Location: ./application/controllers/ThemCaSi.php */