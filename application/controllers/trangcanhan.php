<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class trangcanhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('trangcanhan_model');
		$danhsachplaylist=$this->trangcanhan_model->laydanhsachplaylist($idusercurrent);
		$thongtinnguoidung=$this->trangcanhan_model->laythongtinnguoidung($idusercurrent);
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'playlist'=>array('danhsachplaylist'=>$danhsachplaylist));
		$this->load->view('trangcanhan_view',$data);
	}
	public function suathongtin()
	{
		$this->load->model('trangcanhan_model');
		$idusercurrent = $this->session->userdata('id');
		$ten = $this->input->post('ten');
		$gioitinh = $this->input->post('gioitinh');
		$ngaysinh = $this->input->post('ngaysinh');
		$sdt = $this->input->post('sdt');
		$diachi = $this->input->post('diachi');
		$email = $this->input->post('email');
		$duongdananhnguoidung = $this->input->post('duongdananhnguoidung');

		if($this->trangcanhan_model->suathongtincanhan($idusercurrent, $ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email, $duongdananhnguoidung)>0)
		{
			// $path="'".substr($this->session->userdata('duongdananh'), 28)."'";
			// unlink("$path");
			$this->session->set_userdata('duongdananh',$duongdananhnguoidung);
			echo 1;
		}
		else
		{
			echo 0;
		}
	}

	public function doimatkhau()
	{
		$this->load->model('trangcanhan_model');
		$idusercurrent = $this->session->userdata('id');
		$thongtinnguoidung=$this->trangcanhan_model->laythongtinnguoidung($idusercurrent);
		$nguoidung = array('thongtinnguoidung'=>$thongtinnguoidung);

		foreach ($nguoidung['thongtinnguoidung'] as $key => $value)
		{
			$passcurrent = $value['matkhau'];
		};
		$tendangnhap = $this->input->post('tendangnhap');
		$newpass = $this->input->post('matkhaumoi');
		$oldpass = $this->input->post('matkhaucu');
		if($oldpass==$passcurrent)
		{
			if($this->trangcanhan_model->doimatkhauuser($idusercurrent,$newpass)>0)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
		else
		{
			echo ' mat khau khong trung';
		}
	}

	public function uploadfile()
	{
		$uploadfile = new UploadHandler();

	}
}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */