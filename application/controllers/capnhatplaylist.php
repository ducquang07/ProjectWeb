<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include 'Upload_anhplaylist_Handler.php';
class capnhatplaylist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('trangcanhan_model');
		$thongtinnguoidung=$this->trangcanhan_model->laythongtinnguoidung($idusercurrent);

		$this->load->model('capnhatplaylist_model');
		
		$theloai_Vietnam=$this->capnhatplaylist_model->Get_theLoai('Việt Nam');
		$theloai_AuMy=$this->capnhatplaylist_model->Get_theLoai('Âu Mỹ');
		$theloai_ChauA=$this->capnhatplaylist_model->Get_theLoai('Châu Á');
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'theloai_Vietnam'=>array('danhsachtheloai'=>$theloai_Vietnam),
					'theloai_AuMy'=>array('danhsachtheloai'=>$theloai_AuMy),
					'theloai_ChauA'=>array('danhsachtheloai'=>$theloai_ChauA));
		$this->load->view('capnhatplaylist_view',$data);
	}

	public function laydanhsachbaihat()
	{
		$keyword=$this->input->post('keyword');
		$this->load->model('capnhatplaylist_model');
		$dulieu=$this->capnhatplaylist_model->laydanhsachbaihat($keyword);
	}

	public function searchcasi()//mấy cái này thì m tự sửa theo ý m thôi
	{
		$this->load->model('capnhatplaylist_model');
		// $keyword = $this->input->post('query');
		$keyword = strval($this->input->post('query'));//chuyển dữ liệu nhập được sang chuỗi
		$kq=$this->capnhatplaylist_model->timcasi($keyword);
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
		$this->load->model('capnhatplaylist_model');
		$tenplaylist=$this->input->post('tenplaylist');
		$mota=$this->input->post('mota');
		$duongdananhplaylist=$this->input->post('duongdananhplaylist');
		$idnguoidung = $this->session->userdata('id');;
		$idtheloai=$this->input->post('idtheloai');
		$tencasi=$this->input->post('tencasi');
		$casi=$this->capnhatplaylist_model->lay_idcasi($tencasi);

		if ($casi->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$casi=$casi->result_array(); //chuyển sang kiểu aray
			foreach ($casi as $key => $value)
			{
				$idcasi = $value["idcasi"];
			}
		}

		if($this->capnhatplaylist_model->capnhatplaylist($tenplaylist,$mota,$duongdananhplaylist,$idnguoidung,$idtheloai,$idcasi))
		{
			$this->load->view('capnhatthanhcong_playlist_view');
		}
		else
		{
			$this->load->view('capnhatthatbai_playlist_view');
		}

	}

}

/* End of file capnhatplaylist.php */
/* Location: ./application/controllers/capnhatplaylist.php */