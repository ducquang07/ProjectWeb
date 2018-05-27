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
		$this->load->model('theloai_model');
		$this->load->model('casi_model');

		//--Lấy tổng số dòng tìm được
		$total_record=count($this->baihat_model->getAllData_baihat());
		//--Lấy mảng dữ liệu thể loại của từng khu vực
		$theloai_Vietnam=$this->theloai_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->theloai_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->theloai_model->Get_theLoai('Châu Á');
		//Lấy mảng dữ liệu của ca sĩ hot
		$casihot=$this->casi_model->Get_danhsach_hot();
		//Lấy mảng dữ liệu bài hát hiển thị lên trang
		$danhsachbaihat=$this->baihat_model->show_Danhsachbaihat();

		//--Thiết lập cơ chế phân trang
		$config = array(
			'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
			'total_record'  => $total_record, // Tổng số record
			'limit'         => 5,// limit
			'link_full'     => '{page}',// Link full có dạng như sau: domain/com/page/{page}
			'link_first'    => '1',// Link trang đầu tiên
		);
		//--Thực hiện phân trang
		$paging = new Pagination();
		$paging->init($config);
		$phantrang=$paging->html();

		//--Mảng data chưa toàn bộ dữ liệu để truyền vào baihat_view
		$data=array('baihat'=>array('danhsachbaihat'=>$danhsachbaihat),
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'danhsachcasihot'=>array('danhsachcasi'=>$casihot),
			'phantrang'=>$phantrang
		);

		//--Tiến hành load baihat_view với dữ liệu là $data
		$this->load->view('baihat_view',$data);
	}

	public function Load_Page()
	{
		$pagenumer=$this->input->post('page');
		$this->load->model('baihat_model');
		$this->baihat_model->Get_Danhsachbaihat($pagenumer);
	}



}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */