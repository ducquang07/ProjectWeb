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
		$theloai_Vietnam=$this->theloai_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->theloai_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->theloai_model->Get_theLoai('Châu Á');
		//$khuvuc=array('danhsachkhuvuc'=>$khuvuc);
		$data=array('baihat'=>array('danhsachbaihat'=>$ketqua),
									'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
									'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
									'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA)
								);
		$this->load->view('baihat_view',$data);
	}


}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */