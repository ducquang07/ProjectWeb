<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuDe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('BangXepHang_model');
		$this->load->model('ChuDe_model');

		$theloai_Vietnam=$this->ChuDe_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->ChuDe_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->ChuDe_model->Get_theLoai('Châu Á');


		$data=array(
			'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
			'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
			'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA)
			
		);

		$this->load->view('ChuDe_view',$data);
	}

}

/* End of file ChuDe.php */
/* Location: ./application/controllers/ChuDe.php */
