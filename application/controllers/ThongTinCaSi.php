<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'phantrang.php';
class ThongTinCaSi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $tencasi=$this->input->post('tencasi');
		
	}
	public function casi($id)
	{
		$this->load->model('ThongTinCaSi_model');
		
		$total_record=$this->ThongTinCaSi_model->get_TotalRecord($id);
		$config = array(
			'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
			'total_record'  => $total_record, // Tổng số record
			'limit'         => 8,// limit
			'link_full'     => '{page}',// Link full có dạng như sau: domain/com/page/{page}
			'link_first'    => '1',// Link trang đầu tiên
		);

		$paging = new Pagination();
		$paging->init($config);
		$phantrang=$paging->html();
		$danhsachplaylist=$this->ThongTinCaSi_model->laydanhsach_playlist($id,$config['limit']);
		$kq=$this->ThongTinCaSi_model->LayThongTinCaSi($id);
		$kq=array(	'thongtincasi'=>$kq,
					'danhsachplaylist'=>$danhsachplaylist,
					'phantrang'=>$phantrang,
					'limit'=>$config['limit']);
		$this->load->view('ThongTinCaSi_view',$kq);


	}

	public function Load_Page()
	{
		$pagenumer=$this->input->post('page');
		$idcasi=$this->input->post('idcasi');
		$limit=$this->input->post('limit');
		$this->load->model('ThongTinCaSi_model');
		$this->ThongTinCaSi_model->Get_Danhsachplaylist($pagenumer,$limit,$idcasi);
	}
}

/* End of file ThongTinCaSi.php */
/* Location: ./application/controllers/ThongTinCaSi.php */