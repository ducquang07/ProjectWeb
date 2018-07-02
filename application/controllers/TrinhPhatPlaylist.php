<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhPhatPlaylist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idplaylist=$_GET['idplaylist'];

		$this->load->model('TrinhPhatPlaylist_model');


		$idbaihat=$this->TrinhPhatPlaylist_model->layidbaihat_dautien($idplaylist);
		$idbaihat=$idbaihat['idbaihat'];
		$idusercurrent = $this->session->userdata('id');
		

		$thongtinbaihat=$this->TrinhPhatPlaylist_model->laythongtinbaihat($idbaihat);
		$thongtinnguoidung=$this->TrinhPhatPlaylist_model->laythongtinnguoidung($idusercurrent);
		$danhsachbinhluan=$this->TrinhPhatPlaylist_model->laydanhsachbinhluan($idbaihat);
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
				"duongdannhac"=>$value['duongdannhac'],
				"loibaihat"=>$value['loibaihat'],
				"duongdananhnguoidung"=>$value['duongdananhnguoidung'],
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
			'playlist'=>array('thongtinplaylist'=>$thongtinplaylist),
			'danhsachbaihat'=>$listbaihat
		);

		$this->load->view('TrinhPhatPlaylist_view',$data);
	}


	public function phatplaylist()
	{
		$this->load->model('TrinhPhatPlaylist_model');
		$idbaihat=$this->input->post('idbaihat');
		$baihat=$this->TrinhPhatPlaylist_model->laythongtinbaihat($idbaihat);
		$baihat=array('baihat'=>$baihat);
		return $baihat;
	}

}

/* End of file  */
/* Location: ./application/controllers/ */