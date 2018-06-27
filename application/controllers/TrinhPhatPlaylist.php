<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhPhatPlaylist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrinhPhatNhac_model');
		$thongtinbaihat=$this->TrinhPhatNhac_model->laythongtinbaihat(1);
		$thongtinnguoidung=$this->TrinhPhatNhac_model->laythongtinnguoidung($idusercurrent);
		$danhsachbinhluan=$this->TrinhPhatNhac_model->laydanhsachbinhluan(1);
		
		$this->TrinhPhatNhac_model->themluotnghe(1);

		$this->load->model('BaiHat_model');
		$this->load->model('TrinhPhatPlaylist_model');
		$danhsachbaihat=$this->BaiHat_model->show_Danhsachbaihat_keyword('',8);
		$thongtinplaylist=$this->TrinhPhatPlaylist_model->laythongtinplaylist(1);
		$thongtinnguoitaoplaylist=$this->TrinhPhatPlaylist_model->laythongnguoitaoplaylist(1);
		$danhsachbaihat=$this->TrinhPhatPlaylist_model->laydanhsachbaihat(1);


		$listbaihat=array();
		foreach ($danhsachbaihat as $key => $value) {
			$danhsachcasi=$this->TrinhPhatPlaylist_model->laythongthongtincasi($value['idbaihat']);
			$baihat =array(
				"idbaihat"=>$value['idbaihat'],
				"tenbaihat"=>$value['tenbaihat'],
				"luotnghe"=>$value['luotnghe'],
				"casi"=>$danhsachcasi
			);
			array_push($listbaihat,$baihat);
		}

		$data=array('baihat'=>array('thongtinbaihat'=>$thongtinbaihat),
			'nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
			'binhluan'=>array('danhsachbinhluan'=>$danhsachbinhluan),
			'nguoitaoplaylist'=>array('thongtinnguoitaoplaylist'=>$thongtinnguoitaoplaylist),
			'listbaihat'=>array('danhsachbaihat'=>$danhsachbaihat),
			'playlist'=>array('thongtinplaylist'=>$thongtinplaylist),
			'danhsachbaihat'=>$listbaihat
		);
		//$this->TrinhPhatNhac_model->laythongtincasi($baihat['idcasi']);
		//$this->TrinhPhatNhac_model->laythongtheloai($id);

		$this->load->view('TrinhPhatPlaylist_view',$data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */