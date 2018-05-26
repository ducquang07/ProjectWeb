<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index_view');
	}

	public function singin_controller()
	{
		$id = $this->input->post('id');
		$pass = $this->input->post('pass');
		$this->load->model('index_model');
		$ketqua = $this->index_model->singin($id,$pass);
		$ketqua = array('mangketqua' => $ketqua);

		foreach ($ketqua as $key => $value) {
			if(count($value)==0)
				{
					$this->load->view('dangnhapthatbai_view');
				}
			foreach ($value as $key => $value) {
				if($value['tendangnhap']==$id && $value['matkhau']==$pass)
				{
					$this->session->set_userdata('tendangnhap',$value['tendangnhap']);
					$this->session->set_userdata('ten',$value['ten']);
					$this->session->set_userdata('trangthai',$value['trangthai']);
					$this->session->set_userdata('duongdananh',$value['duongdananh']);
					// $data = array( 'ten' => $_SESSION["ten"],
					// 			   'tendangnhap' => $_SESSION["tendangnhap"],
					// 			   'trangthai' => $_SESSION["trangthai"]
					// 			);
					$this->load->view('dangnhapthanhcong_view');
				}
				
			}
		}
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */