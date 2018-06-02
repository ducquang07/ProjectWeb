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
	public function suathongtin($ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email)
	{
		$idusercurrent = $this->session->userdata('id');
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
}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */