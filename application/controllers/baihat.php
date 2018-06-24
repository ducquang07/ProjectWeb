<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'phantrang.php';
class BaiHat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$keyword='';
		$this->load->model('BaiHat_model');
		//--Lấy tổng số dòng tìm được
		$total_record=$this->BaiHat_model->get_TotalRecord($keyword);
		//Lấy mảng dữ liệu bài hát hiển thị lên trang
		//--Lấy mảng dữ liệu thể loại của từng khu vực
		$theloai_Vietnam=$this->BaiHat_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->BaiHat_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->BaiHat_model->Get_theLoai('Châu Á');
		//Lấy mảng dữ liệu của ca sĩ hot
		$casihot=$this->BaiHat_model->Get_danhsach_hot();
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

		$danhsachbaihat=$this->BaiHat_model->show_Danhsachbaihat_keyword($keyword,$config['limit']);
		$listbaihat=array();
		foreach ($danhsachbaihat as $key => $value) {
			$danhsachcasi=$this->BaiHat_model->GetCaSi($value['idbaihat']);
			$baihat =array(
				"idbaihat"=>$value['idbaihat'],
				"tenbaihat"=>$value['tenbaihat'],
				"luotnghe"=>$value['luotnghe'],
				"casi"=>$danhsachcasi
			);
			array_push($listbaihat,$baihat);
		}
		$data=array('baihat'=>array('danhsachbaihat'=>$listbaihat),
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'danhsachcasihot'=>array('danhsachcasi'=>$casihot),
			'phantrang'=>$phantrang,
			'limit'=>$config['limit'],
			'keyword'=>$keyword
		);

		$this->load->view('BaiHat_view',$data);
		//--Tiến hành load BaiHat_view với dữ liệu là $data
	}

	public function Load_Page()
	{
		$pagenumer=$this->input->post('page');
		$keyword=$this->input->post('keyword');
		$limit=$this->input->post('limit');
		$this->load->model('BaiHat_model');
		$this->BaiHat_model->Get_Danhsachbaihat($pagenumer,$limit,$keyword);
	}


	

	public function trinhphatnhac($id)
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrinhPhatNhac_model');
		$thongtinbaihat=$this->TrinhPhatNhac_model->laythongtinbaihat($id);
		$thongtinnguoidung=$this->TrinhPhatNhac_model->laythongtinnguoidung($idusercurrent);
		$danhsachbinhluan=$this->TrinhPhatNhac_model->laydanhsachbinhluan($id);
		$thongtinnguoidang=$this->TrinhPhatNhac_model->laythongnguoidang($id);
		$this->TrinhPhatNhac_model->themluotnghe($id);
		$data=array('baihat'=>array('thongtinbaihat'=>$thongtinbaihat),
			'nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
			'binhluan'=>array('danhsachbinhluan'=>$danhsachbinhluan),
			'nguoidang'=>array('thongtinnguoidang'=>$thongtinnguoidang));
		//$this->TrinhPhatNhac_model->laythongtincasi($baihat['idcasi']);
		//$this->TrinhPhatNhac_model->laythongtheloai($id);

		$this->load->view('TrinhPhatNhac_view',$data);
	}


	public function timkiem()
	{
		$keyword=$_GET["keyword"];
		$this->load->model('BaiHat_model');


		$total_record=$this->BaiHat_model->get_TotalRecord($keyword);
		$theloai_Vietnam=$this->BaiHat_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->BaiHat_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->BaiHat_model->Get_theLoai('Châu Á');

		$casihot=$this->BaiHat_model->Get_danhsach_hot();

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

		$danhsachbaihat=$this->BaiHat_model->show_Danhsachbaihat_keyword($keyword,$config['limit']);

		$listbaihat=array();
		foreach ($danhsachbaihat as $key => $value) {
			$danhsachcasi=$this->BaiHat_model->GetCaSi($value['idbaihat']);
			$baihat =array(
				"idbaihat"=>$value['idbaihat'],
				"tenbaihat"=>$value['tenbaihat'],
				"luotnghe"=>$value['luotnghe'],
				"casi"=>$danhsachcasi
			);
			array_push($listbaihat,$baihat);
		}

		$data=array('baihat'=>array('danhsachbaihat'=>$listbaihat),
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'danhsachcasihot'=>array('danhsachcasi'=>$casihot),
			'phantrang'=>$phantrang,
			'limit'=>$config['limit'],
			'keyword'=>$keyword
		);
		$this->load->view('BaiHat_view',$data,false);
	}

	public function GetCaSi($idbaihat)
	{
		$this->load->model('BaiHat_model');
		$dulieu=$this->BaiHat_model->GetCaSi($idbaihat);
		$dulieu=array('casi'=>$dulieu);
		return $dulieu;
	}

}

/* End of file baihat.php */
/* Location: ./application/controllers/baihat.php */