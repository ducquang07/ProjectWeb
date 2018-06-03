<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'phantrang.php';
class playlist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('playlist_model');
		$keyword='';

		$total_record=$this->playlist_model->get_TotalRecord($keyword);

		$config = array(
			'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
			'total_record'  => $total_record, // Tổng số record
			'limit'         => 9,// limit
			'link_full'     => '{page}',// Link full có dạng như sau: domain/com/page/{page}
			'link_first'    => '1',// Link trang đầu tiên
		);
		//--Thực hiện phân trang
		$paging = new Pagination();
		$paging->init($config);
		$phantrang=$paging->html();

		$theloai_Vietnam=$this->playlist_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->playlist_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->playlist_model->Get_theLoai('Châu Á');
		$danhsachplaylist=$this->playlist_model->laydanhsach_playlist($keyword,$config['limit']);
		$data=array(
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'playlist'=>array('danhsachplaylist'=>$danhsachplaylist),
			'phantrang'=>$phantrang,
			'limit'=>$config['limit'],
			'keyword'=>$keyword
		);

		$this->load->view('playlist_view',$data);
	}


	public function Load_Page()
	{
		$pagenumer=$this->input->post('page');
		$keyword=$this->input->post('keyword');
		$limit=$this->input->post('limit');
		$this->load->model('playlist_model');
		$this->playlist_model->Get_Danhsachplaylist($pagenumer,$limit,$keyword);
	}

	public function timkiem()
	{
		$keyword=$_GET["keyword"];
		$this->load->model('playlist_model');

		$total_record=$this->playlist_model->get_TotalRecord($keyword);

		$config = array(
			'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
			'total_record'  => $total_record, // Tổng số record
			'limit'         => 9,// limit
			'link_full'     => '{page}',// Link full có dạng như sau: domain/com/page/{page}
			'link_first'    => '1',// Link trang đầu tiên
		);
		//--Thực hiện phân trang
		$paging = new Pagination();
		$paging->init($config);
		$phantrang=$paging->html();

		$theloai_Vietnam=$this->playlist_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->playlist_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->playlist_model->Get_theLoai('Châu Á');
		$danhsachplaylist=$this->playlist_model->laydanhsach_playlist($keyword,$config['limit']);
		$data=array(
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
			'playlist'=>array('danhsachplaylist'=>$danhsachplaylist),
			'phantrang'=>$phantrang,
			'limit'=>$config['limit'],
			'keyword'=>$keyword
		);

		$this->load->view('playlist_view',$data);
	}

}

/* End of file playlist.php */
/* Location: ./application/controllers/playlist.php */