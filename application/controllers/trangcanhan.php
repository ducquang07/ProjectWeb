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
	public function suathongtin()
	{
		$idusercurrent = $this->session->userdata('id');
		$ten = $this->input->post('ten');
		$gioitinh = $this->input->post('gioitinh');
		$ngaysinh = $this->input->post('ngaysinh');
		$sdt = $this->input->post('sdt');
		$diachi = $this->input->post('diachi');
		$email = $this->input->post('email');
		$this->load->model('trangcanhan_model');
		if($this->trangcanhan_model->suathongtincanhan($idusercurrent, $ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email)>0)
		{
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
}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */