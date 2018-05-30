<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'phantrang.php';
class baihat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->Load_with_keyword();
		//--Tiến hành load baihat_view với dữ liệu là $data
	}

	public function Load_Page()
	{
		$pagenumer=$this->input->post('page');
		$keyword=$this->input->post('keyword');
		$limit=$this->input->post('limit');
		$this->load->model('baihat_model');
		$this->baihat_model->Get_Danhsachbaihat($pagenumer,$limit,$keyword);
	}


	public function Load_with_keyword()
	{
		$keyword=$this->input->post('keyword');
		if($keyword===null)
		{
			$keyword='';
		}
		
		
		$this->load->model('baihat_model');
		$this->load->model('theloai_model');
		$this->load->model('casi_model');
		//--Lấy tổng số dòng tìm được
		$total_record=$this->baihat_model->get_TotalRecord($keyword);
		//Lấy mảng dữ liệu bài hát hiển thị lên trang
		//--Lấy mảng dữ liệu thể loại của từng khu vực
		$theloai_Vietnam=$this->theloai_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->theloai_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->theloai_model->Get_theLoai('Châu Á');
		//Lấy mảng dữ liệu của ca sĩ hot
		$casihot=$this->casi_model->Get_danhsach_hot();
		$config = array(
			'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
			'total_record'  => $total_record, // Tổng số record
			'limit'         => 10,// limit
			'link_full'     => '{page}',// Link full có dạng như sau: domain/com/page/{page}
			'link_first'    => '1',// Link trang đầu tiên
		);
		//--Thực hiện phân trang
		$paging = new Pagination();
		$paging->init($config);
		$phantrang=$paging->html();

		$danhsachbaihat=$this->baihat_model->show_Danhsachbaihat_keyword($keyword,$config['limit'],$phantrang);
		$data=array('baihat'=>array('danhsachbaihat'=>$danhsachbaihat),
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'danhsachcasihot'=>array('danhsachcasi'=>$casihot),
			'phantrang'=>$phantrang,
			'limit'=>$config['limit'],
			'keyword'=>$keyword
		);
		$this->load->view('baihat_view',$data);
	}
}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */