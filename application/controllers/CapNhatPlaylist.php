<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'Upload_anhplaylist_Handler.php';
class CapNhatPlaylist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idplaylist=$this->input->post('idplaylist');

		$idusercurrent = $this->session->userdata('id');
		$this->load->model('TrangCaNhan_model');
		$this->load->model('CapNhatPlaylist_model');
		$thongtinnguoidung=$this->TrangCaNhan_model->laythongtinnguoidung($idusercurrent);

		$playlist=$this->CapNhatPlaylist_model->laythongtinplaylist($idplaylist);
		$danhsachbaihatplaylist=$this->CapNhatPlaylist_model->laydanhsachbaihatplaylist($idplaylist);

		$theloai_Vietnam=$this->CapNhatPlaylist_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->CapNhatPlaylist_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->CapNhatPlaylist_model->Get_theLoai('Châu Á');
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
				    'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
					'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
					'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA),
					'playlist'=>array('thongtinplaylist'=>$playlist),
					'danhsachbaihat'=>array('danhsachbaihatplaylist'=>$danhsachbaihatplaylist)
				);


		$this->load->view('CapNhatPlaylist_view',$data);
	}

	public function laydanhsachbaihat()
	{
		$keyword=$this->input->post('keyword');
		$this->load->model('CapNhatPlaylist_model');
		$dulieu=$this->CapNhatPlaylist_model->laydanhsachbaihat($keyword);
	}

	public function searchcasi()//mấy cái này thì m tự sửa theo ý m thôi
	{
		$this->load->model('CapNhatPlaylist_model');
		// $keyword = $this->input->post('query');
		$keyword = strval($this->input->post('query'));//chuyển dữ liệu nhập được sang chuỗi
		$kq=$this->CapNhatPlaylist_model->timcasi($keyword);
		if ($kq->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$kq=$kq->result_array(); //chuyển sang kiểu aray
			foreach ($kq as $key => $value)
			{
				$dscasi[] = $value["tencasi"];
			}
			echo json_encode($dscasi);// 
		}
	}

	public function uploadfileanh()
	{
		$uploadfile = new UploadImageHandler();
	}

	public function themplaylist()
	{
		$this->load->model('CapNhatPlaylist_model');
		$tenplaylist=$this->input->post('tenplaylist');
		$mota=$this->input->post('mota');
		$duongdananhplaylist=$this->input->post('duongdananhplaylist');
		$idnguoidung = $this->session->userdata('id');;
		$idtheloai=$this->input->post('idtheloai');
		$tencasi=$this->input->post('tencasi');
		$casi=$this->CapNhatPlaylist_model->lay_idcasi($tencasi);

		if ($casi->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$casi=$casi->result_array(); //chuyển sang kiểu aray
			foreach ($casi as $key => $value)
			{
				$idcasi = $value["idcasi"];
			}
		}

		if($this->CapNhatPlaylist_model->capnhatplaylist($tenplaylist,$mota,$duongdananhplaylist,$idnguoidung,$idtheloai,$idcasi))
		{
			$this->load->view('CapNhatThanhCong_Playlist_view');
		}
		else
		{
			$this->load->view('CapNhatThatBai_Playlist_view');
		}

	}

	public function suaplaylist()
	{
		$this->load->model('CapNhatPlaylist_model');
		$tenplaylist=$this->input->post('tenplaylist');
		$idplaylist=$this->input->post('idplaylist');
		if($this->CapNhatPlaylist_model->suaplaylist($idplaylist,$tenplaylist))
		{
			$this->load->view('CapNhatThanhCong_Playlist_view');
		}
		else
		{
			$this->load->view('CapNhatThatBai_Playlist_view');
		}
	}

	public function thembaihatvaoplaylist()
	{
		$idplaylist=$this->input->post('idplaylist');
		$idbaihat=$this->input->post('idbaihat');
		$this->load->model('CapNhatPlaylist_model');
		if($this->CapNhatPlaylist_model->thembaihatvaoplaylist($idplaylist,$idbaihat))
		{
			//$this->load->view('CapNhatThanhCong_Playlist_view');
			echo 1;
		}
		else
		{
			//$this->load->view('CapNhatThatBai_Playlist_view');
			echo 0;
		}
	}


	public function xoabaihatkhoiplaylist()
	{
		$idplaylist=$this->input->post('idplaylist');
		$idbaihat=$this->input->post('idbaihat');
		$this->load->model('CapNhatPlaylist_model');
		if($this->CapNhatPlaylist_model->xoabaihatkhoiplaylist($idplaylist,$idbaihat))
		{
			//$this->load->view('CapNhatThanhCong_Playlist_view');
			echo 1;
		}
		else
		{
			//$this->load->view('CapNhatThatBai_Playlist_view');
			echo 0;
		}
	}

	public function xoalistbaihat()
	{
		$idplaylist=$this->input->post('idplaylist');
		$this->load->model('CapNhatPlaylist_model');
		if($this->CapNhatPlaylist_model->xoalistbaihat($idplaylist))
		{
			//$this->load->view('CapNhatThanhCong_Playlist_view');
			echo 1;
		}
		else
		{
			//$this->load->view('CapNhatThatBai_Playlist_view');
			echo 0;
		}
	}
}

/* End of file capnhatplaylist.php */
/* Location: ./application/controllers/capnhatplaylist.php */
