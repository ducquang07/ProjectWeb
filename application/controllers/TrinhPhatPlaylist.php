<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhPhatPlaylist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idplaylist=$_GET['idplaylist'];
		$idbaihat=$_GET['idbaihat'];
		$this->load->model('TrinhPhatPlaylist_model');
		$this->load->model('TrinhPhatNhac_model');
		$this->load->model('BaiHat_model');
		if($idbaihat==='')
		{
			$idbaihat=$this->TrinhPhatPlaylist_model->layidbaihat_dautien($idplaylist);
			$idbaihat=$idbaihat['idbaihat'];
		}

		
		$idusercurrent = $this->session->userdata('id');
		
		$thongtinbaihat=$this->TrinhPhatPlaylist_model->laythongtinbaihat($idbaihat);

		$thongtinnguoidung=$this->TrinhPhatNhac_model->laythongtinnguoidung($idusercurrent);
		$danhsachbinhluan=$this->TrinhPhatNhac_model->laydanhsachbinhluan($idbaihat);
		

		
		$danhsachbaihat=$this->BaiHat_model->show_Danhsachbaihat_keyword('',8);
		$thongtinplaylist=$this->TrinhPhatPlaylist_model->laythongtinplaylist($idplaylist);
		$thongtinnguoitaoplaylist=$this->TrinhPhatPlaylist_model->laythongnguoitaoplaylist($idplaylist);
		$danhsachbaihat=$this->TrinhPhatPlaylist_model->laydanhsachbaihat($idplaylist);

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

		$thongtinbaihatdangphat=array();
		foreach ($thongtinbaihat as $key => $value) {
			$baihatdangphat=array(
				"idbaihat"=>$value['idbaihat'],
				"tenbaihat"=>$value['tenbaihat'],
				"luotnghe"=>$value['luotnghe'],
				"duongdannhac"=>$value['duongdannhac'],
				"loibaihat"=>$value['loibaihat'],
				"duongdananhbaihat"=>$value['duongdananhbaihat'],
				"casi"=>$this->TrinhPhatPlaylist_model->laythongthongtincasi($value['idbaihat'])
			);
			array_push($thongtinbaihatdangphat,$baihatdangphat);
		}

		$data=array('baihat'=>array('thongtinbaihat'=>$thongtinbaihatdangphat),
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