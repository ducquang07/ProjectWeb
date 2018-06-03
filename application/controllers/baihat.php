<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'phantrang.php';
class baihat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$keyword='';
		$this->load->model('baihat_model');
		//--Lấy tổng số dòng tìm được
		$total_record=$this->baihat_model->get_TotalRecord($keyword);
		//Lấy mảng dữ liệu bài hát hiển thị lên trang
		//--Lấy mảng dữ liệu thể loại của từng khu vực
		$theloai_Vietnam=$this->baihat_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->baihat_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->baihat_model->Get_theLoai('Châu Á');
		//Lấy mảng dữ liệu của ca sĩ hot
		$casihot=$this->baihat_model->Get_danhsach_hot();
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

		$danhsachbaihat=$this->baihat_model->show_Danhsachbaihat_keyword($keyword,$config['limit']);
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


	

	public function trinhphatnhac($id)
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('trinhphatnhac_model');
		$thongtinbaihat=$this->trinhphatnhac_model->laythongtinbaihat($id);
		$thongtinnguoidung=$this->trinhphatnhac_model->laythongtinnguoidung($idusercurrent);
		$danhsachbinhluan=$this->trinhphatnhac_model->laydanhsachbinhluan($id);
		$thongtinnguoidang=$this->trinhphatnhac_model->laythongnguoidang($id);
		$this->trinhphatnhac_model->themluotnghe($id);
		$data=array('baihat'=>array('thongtinbaihat'=>$thongtinbaihat),
			'nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
			'binhluan'=>array('danhsachbinhluan'=>$danhsachbinhluan),
			'nguoidang'=>array('thongtinnguoidang'=>$thongtinnguoidang));
		//$this->trinhphatnhac_model->laythongtincasi($baihat['idcasi']);
		//$this->trinhphatnhac_model->laythongtheloai($id);

		$this->load->view('trinhphatnhac_view',$data);
	}


	public function timkiem()
	{
		$keyword=$_GET["keyword"];
		$this->load->model('baihat_model');


		$total_record=$this->baihat_model->get_TotalRecord($keyword);
		$theloai_Vietnam=$this->baihat_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->baihat_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->baihat_model->Get_theLoai('Châu Á');

		$casihot=$this->baihat_model->Get_danhsach_hot();

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
		$this->load->view('baihat_view',$data,false);
	}

}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */