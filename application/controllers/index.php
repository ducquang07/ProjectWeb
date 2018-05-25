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
		echo '<pre>';
		var_dump($ketqua);
		echo '</pre>';
		foreach ($ketqua as $key => $value) {
			foreach ($value as $key => $value) {
				if($value['tendangnhap']==$id && $value['matkhau']==$pass)
				{
					echo 'Đăng nhập thành công';
				}
			}
		}
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */