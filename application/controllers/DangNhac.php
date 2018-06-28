<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadMusicHandler.php';
include 'UploadImageHandler.php';

class DangNhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('DangNhac_model');
		$thongtinnguoidung=$this->DangNhac_model->laythongtinnguoidung($idusercurrent);
		$thongtintheloai = $this->DangNhac_model->laythongtintheloai();
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung),
					'theloai'=>array('thongtintheloai' => $thongtintheloai));
		$this->load->view('DangNhac_view',$data);
	}
	public function searchcasi()
	{
		$this->load->model('DangNhac_model');
		// $keyword = $this->input->post('query');
		$keyword = strval($this->input->post('query'));//chuyển dữ liệu nhập được sang chuỗi
		$kq=$this->DangNhac_model->timcasi($keyword);
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
		$this->load->model('DangNhac_model');
		// $keyword = $this->input->post('query');
		$keyword = strval($this->input->post('query'));//chuyển dữ liệu nhập được sang chuỗi
		$kq=$this->DangNhac_model->timnhacsi($keyword);
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
		$this->load->model('DangNhac_model');
		$tenbaihat = $this->input->post('tenbaihat');
		$duongdannhac = $this->input->post('duongdannhac');
		$dem = $this->input->post('dem')
		// $duongdananhbaihat = 'link';
		$duongdananhbaihat = $this->input->post('duongdananhbaihat');
		$tennhacsi = $this->input->post('tennhacsi');
		$tencasi0 = $this->input->post('tencasi0');
		$tencasi1 = $this->input->post('tencasi1');
		$tencasi2 = $this->input->post('tencasi2');
		$tencasi3 = $this->input->post('tencasi3');
		$tencasi4 = $this->input->post('tencasi4');

		// $casi[];
		for ($i = 0; $i < dem ; $i++) 
		{
			$casi[$i]=null;
		}
		$casi[0]=$this->DangNhac_model->timcasi($tencasi0);
		$casi[1]=$this->DangNhac_model->timcasi($tencasi1);
		$casi[2]=$this->DangNhac_model->timcasi($tencasi2);
		$casi[3]=$this->DangNhac_model->timcasi($tencasi3);
		$casi[4]=$this->DangNhac_model->timcasi($tencasi4);


		$nhacsi=$this->DangNhac_model->timnhacsi($tennhacsi);

		// $idcasi[];

		for($i=0;$i<5;$i++)
		{
			if ($casi[$i]->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
			{
				$casi[$i]=$casi[$i]->result_array(); //chuyển sang kiểu aray
				foreach ($casi[$i] as $key => $value)
				{
					$idcasi[$i] = $value["idcasi"];
				}
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
		if($this->DangNhac_model->thembaihat($tenbaihat,$duongdannhac,$duongdananhbaihat,$idnhacsi,$idnguoidung,$idtheloai))
		{
			$baihat=$this->DangNhac_model->timidbaihat($tenbaihat,$idnguoidung);
			if ($baihat->num_rows() > 0) //số dòng lớn hơn 0 thì thực hiện
			{
				$baihat=$baihat->result_array(); //chuyển sang kiểu aray
				foreach ($baihat as $key => $value)
				{
					$idbaihat = $value["idbaihat"];
				}
			}
			if($this->DangNhac_model->thembaihat_casi($idbaihat,$idcasi[0],$idcasi[1],$idcasi[2],$idcasi[3],$idcasi[4]))
			{
				echo 1;
			}
		}
		else
		{
			echo 0;
		}
	}
}

/* End of file dangnhac.php */
/* Location: ./application/controllers/dangnhac.php */
