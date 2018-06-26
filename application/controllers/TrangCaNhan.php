<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class TrangCaNhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrangCaNhan_model');
		$danhsachplaylist=$this->TrangCaNhan_model->laydanhsachplaylist($idusercurrent);
		$thongtinnguoidung=$this->TrangCaNhan_model->laythongtinnguoidung($idusercurrent);
		$danhsachbaihat=$this->TrangCaNhan_model->laydanhsachbaihatupload($idusercurrent);

		$listbaihat_upload=array();

		foreach ($danhsachbaihat as $key => $value) {
			$danhsachcasi=$this->TrangCaNhan_model->laydanhsachcasi($value['idbaihat']);
			$baihat=array(
					"idbaihat"=>$value['idbaihat'],
					"tenbaihat"=>$value['tenbaihat'],
					"luotnghe"=>$value['luotnghe'],
					"casi"=>$danhsachcasi
			);
			array_push($listbaihat_upload,$baihat);
		}

		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'playlist'=>array('danhsachplaylist'=>$danhsachplaylist),
					'danhsachbaihat_upload'=>array('listbaihat_upload'=>$listbaihat_upload)
				);
		$this->load->view('TrangCaNhan_view',$data);
	}
	public function suathongtin()
	{
		$this->load->model('TrangCaNhan_model');
		$idusercurrent = $this->session->userdata('id');
		$ten = $this->input->post('ten');
		$gioitinh = $this->input->post('gioitinh');
		$ngaysinh = $this->input->post('ngaysinh');
		$sdt = $this->input->post('sdt');
		$diachi = $this->input->post('diachi');
		$email = $this->input->post('email');
		$duongdananhnguoidung = $this->input->post('duongdananhnguoidung');

		if($this->TrangCaNhan_model->suathongtincanhan($idusercurrent, $ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email, $duongdananhnguoidung)>0)
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
		$this->load->model('TrangCaNhan_model');
		$idusercurrent = $this->session->userdata('id');
		$thongtinnguoidung=$this->TrangCaNhan_model->laythongtinnguoidung($idusercurrent);
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
			if($this->TrangCaNhan_model->doimatkhauuser($idusercurrent,$newpass)>0)
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

	public function taoplaylist()
	{
		$tenplaylist=$this->input->post('tenplaylist');
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrangCaNhan_model');
		$this->TrangCaNhan_model->taoplaylist($tenplaylist,$idusercurrent);
	}

	public function xoaplaylist()
	{
		$idplaylist=$this->input->post('idplaylist');
		$this->load->model('TrangCaNhan_model');
		if($this->TrangCaNhan_model->xoaplaylist($idplaylist))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */
