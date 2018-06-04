<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadMusicHandler.php';
include 'UploadImageHandler.php';

class dangnhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('dangnhac_model');
		$thongtinnguoidung=$this->dangnhac_model->laythongtinnguoidung($idusercurrent);
		$thongtintheloai = $this->dangnhac_model->laythongtintheloai();
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'theloai'=>array('thongtintheloai' => $thongtintheloai));
		$this->load->view('dangnhac_view',$data);
	}
	public function searchcasi()
	{
		$this->load->model('dangnhac_model');
		// $keyword = $this->input->post('query');
		$keyword = strval($this->input->post('query'));//chuyển dữ liệu nhập được sang chuỗi
		$kq=$this->dangnhac_model->timcasi($keyword);
		if ($kq->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$kq=$kq->result_array(); //chuyển sang kiểu aray
			foreach ($kq as $key => $value)
			{
				$dscasi[] = $value["tencasi"];
			}
			echo json_encode($dscasi);
		}
	}

	public function searchnhacsi()
	{
		$this->load->model('dangnhac_model');
		// $keyword = $this->input->post('query');
		$keyword = strval($this->input->post('query'));//chuyển dữ liệu nhập được sang chuỗi
		$kq=$this->dangnhac_model->timnhacsi($keyword);
		if ($kq->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$kq=$kq->result_array(); //chuyển sang kiểu aray
			foreach ($kq as $key => $value)
			{
				$dsnhacsi[] = $value["tennhacsi"];
			}
			echo json_encode($dsnhacsi);
		}
	}

	public function uploadfilenhac()
	{
		$uploadfile = new UploadMusicHandler();
	}
	public function uploadfileanh()
	{
		$uploadfile = new UploadImageHandler();
	}

	public function thembaihat()
	{
		$this->load->model('dangnhac_model');
		$tenbaihat = $this->input->post('tenbaihat');
		$duongdannhac = $this->input->post('duongdannhac');
		// $duongdananhbaihat = 'link';
		$duongdananhbaihat = $this->input->post('duongdananhbaihat');
		$tennhacsi = $this->input->post('tennhacsi');
		$tencasi = $this->input->post('tencasi');
		$casi=$this->dangnhac_model->timcasi($tencasi);
		$nhacsi=$this->dangnhac_model->timnhacsi($tennhacsi);
		
		if ($casi->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$casi=$casi->result_array(); //chuyển sang kiểu aray
			foreach ($casi as $key => $value)
			{
				$idcasi = $value["idcasi"];
			}
		}

		if ($nhacsi->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
		{
			$nhacsi=$nhacsi->result_array(); //chuyển sang kiểu aray
			foreach ($nhacsi as $key => $value)
			{
				$idnhacsi = $value["idnhacsi"];
			}
		}

		$idnguoidung = $this->session->userdata('id');;
		$idtheloai = $this->input->post('idtheloai');
		if($this->dangnhac_model->thembaihat($tenbaihat,$duongdannhac,$duongdananhbaihat,$idnhacsi,$idcasi,$idnguoidung,$idtheloai))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
}

/* End of file dangnhac.php */
/* Location: ./application/controllers/dangnhac.php */