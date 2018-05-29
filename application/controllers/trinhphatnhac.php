<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trinhphatnhac extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$id = $_GET['id'];
		$this->load->model('trinhphatnhac_model');
		$thongtinbaihat=$this->trinhphatnhac_model->laythongtinbaihat($id);
		$data=array('baihat'=>array('thongtinbaihat'=>$thongtinbaihat));
		//$this->trinhphatnhac_model->laythongtincasi($baihat['idcasi']);
		//$this->trinhphatnhac_model->laythongtheloai($id);
		$this->load->view('trinhphatnhac_view',$data);
	}

}

/* End of file trinhphatnhac.php */
/* Location: ./application/controllers/trinhphatnhac.php */