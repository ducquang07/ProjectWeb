<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'phantrang.php';
class baihat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('baihat_model');
		$ketqua=$this->baihat_model->getAllData_baihat();
		$this->load->model('theloai_model');
		$theloai_Vietnam=$this->theloai_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->theloai_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->theloai_model->Get_theLoai('Châu Á');
		$this->load->model('casi_model');
		$casihot=$this->casi_model->Get_danhsach_hot();




		

		$config = array(
			'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
			'total_record'  => count($ketqua), // Tổng số record
			'limit'         => 5,// limit
			'link_full'     => '{page}',// Link full có dạng như sau: domain/com/page/{page}
			'link_first'    => 'baihat',// Link trang đầu tiên
		);

		$paging = new Pagination();
		$paging->init($config);
		$phantrang=$paging->html();


		$data=array('baihat'=>array('danhsachbaihat'=>$ketqua),
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'danhsachcasihot'=>array('danhsachcasi'=>$casihot),
			'phantrang'=>$phantrang
		);


		$this->load->view('baihat_view',$data);
	}

	public function Load_Page()
	{
		$pagenumer=$this->input->post('page');
		//$this->load->model('baihat_model');
		//$ketqua=$this->baihat_model->Get_Danhsachbaihat($pagenumer);
		//$ketqua=array('danhsachbaihat_page'=>$ketqua);
		//$this->load->view('baihat_view', $ketqua);
		return 'aaaaa';
	}



}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */