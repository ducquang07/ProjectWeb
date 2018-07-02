<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SuaThongTinCaSi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	public function sua()
	{
		$tencs = $this->input->post('casi');
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrangCaNhan_model');
		$this->load->model('SuaThongTinCaSi_model');
		$thongtinnguoidung=$this->TrangCaNhan_model->laythongtinnguoidung($idusercurrent);
		$thongtincasi = $this->SuaThongTinCaSi_model->laythongtincasi($tencs);

		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'casi'=>array('thongtincasi'=>$thongtincasi)
				);

		$this->load->view('SuaThongTinCaSi_view', $data);
	}

	public function capnhatcasi()
	{
		$tencs = $this->input->post('tencasi');
		$ngaysinh = $this->input->post('ngaysinh');
		$gioitinh = $this->input->post('gioitinh');
		$duongdananhcs = $this->input->post('duongdananhcs');
		$duongdananhbiacs = $this->input->post('duongdananhbiacs');
		$mota = $this->input->post('mota');
		$this->load->model('SuaThongTinCaSi_model');
		if($this->SuaThongTinCaSi_model->capnhatcasi($tencs,$ngaysinh,$gioitinh,$duongdananhcs,$duongdananhbiacs,$mota))
		{
			echo 1;
		}
		else {
			echo 0;
		}
	}
}

/* End of file SuaThongTinCaSi.php */
/* Location: ./application/controllers/SuaThongTinCaSi.php */