<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class luu_binhluan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function binhluan()
	{
		$noidung=$this->input->post('noidung');
		$idnguoidung=$this->input->post('idnguoidung');
		$idbaihat=$this->input->post('idbaihat');
		$thoigian=$this->input->post('thoigian');
		$this->load->model('trinhphatnhac_model');
		$this->trinhphatnhac_model->luubinhluan($idbaihat,$idnguoidung,$thoigian,$noidung);
	}

}

/* End of file luu_binhluan.php */
/* Location: ./application/controllers/luu_binhluan.php */