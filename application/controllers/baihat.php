<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class baihat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('baihat_model');
		$ketqua=$this->baihat_model->getAllData_baihat();
		//$ketqua=array('danhsachbaihat' => $ketqua );
		
		$this->load->model('theloai_model');
		$khuvuc=$this->theloai_model->Get_khuVuc();
		//$khuvuc=array('danhsachkhuvuc'=>$khuvuc);
		$data=array('baihat'=>array('danhsachbaihat'=>$ketqua),'khuvuc'=>array('danhsachkhuvuc'=>$khuvuc));
		$this->load->view('baihat_view',$data);
	}


}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */