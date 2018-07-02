<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('BangXepHang_model');
		$this->load->model('TrangChu_model');
		$playlist=$this->TrangChu_model->GoiYPlaylist();
		$album=$this->TrangChu_model->GoiYAlbum();
		$casihot=$this->TrangChu_model->Get_danhsach_hot();
		$data=array('playlist'=>$playlist,
					'album'=>$album,
					'casihot'=>$casihot
					);
		$this->load->view('TrangChu_view',$data);
	}

	public function logout_controller($value='')
	{
		$this->session->sess_destroy();
		header('Location: '.base_url().'TrangChu');
	}
}
/* End of file trangchu.php */
/* Location: ./application/controllers/trangchu.php */
