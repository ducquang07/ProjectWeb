<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Index_view');
	}

	public function singin_controller()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$this->load->model('Index_model');
		$ketqua = $this->Index_model->singin($username,$pass);
		$ketqua = array('mangketqua' => $ketqua);

		foreach ($ketqua as $key => $value) {
			if(count($value)==0)
				{
					$this->load->view('DangNhapThatBai_view');
				}
			foreach ($value as $key => $value) {
				if($value['tendangnhap']==$username && $value['matkhau']==$pass)
				{
					$this->session->set_userdata('tendangnhap',$value['tendangnhap']);
					$this->session->set_userdata('matkhau',$value['matkhau']);
					$this->session->set_userdata('id',$value['idnguoidung']);
					$this->session->set_userdata('ten',$value['ten']);
					$this->session->set_userdata('trangthai',$value['trangthai']);
					$this->session->set_userdata('duongdananh',$value['duongdananhnguoidung']);
					// $data = array( 'ten' => $_SESSION["ten"],
					// 			   'tendangnhap' => $_SESSION["tendangnhap"],
					// 			   'trangthai' => $_SESSION["trangthai"]
					// 			);
					$this->load->view('DangNhapThanhCong_view');
				}
				
			}
		}
	}
	public function checkusername()
	{
		$flag = 1;
		$username = $this->input->post('username');
		$this->db->select('tendangnhap');
		$data = $this->db->get('nguoidung');
		$data = $data->result_array();
		if ($username=='')
			{
				echo $flag=-1;
				return $flag;
			}
		foreach ($data as $key => $value) {
			if($value["tendangnhap"]==$username)
			{
				$flag = 0;
			}
		}
		echo $flag;
	}

	public function checkemail()
	{
		$flag = 1;
		$email = $this->input->post('email');
		$this->db->select('email');
		$data = $this->db->get('nguoidung');
		$data = $data->result_array();
		if ($email=='')
			{
				echo $flag=-1;
				return $flag;
			}
		foreach ($data as $key => $value) {
			if($value["email"]==$email)
			{
				$flag = 0;
			}
		}
		echo $flag;
	}

	public function signup_controller()
	{
		$fullname = $this->input->post('fullname');
		$ngaysinh = $this->input->post('ngaysinh');
		$gender = $this->input->post('gender');
		$diachi = $this->input->post('diachi');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$psw = $this->input->post('psw');
		$trangthai = 'BASIC';
		$duongdananh = base_url()."anhavatar/default_avatar.jpg";
		$this->load->model('Index_model');

		if($this->Index_model->insert_user($fullname,$ngaysinh,$gender,$diachi,$email,$username,$psw,$trangthai,$duongdananh))
		{

			$ketqua = $this->Index_model->singin($username,$psw);
			$ketqua = array('mangketqua' => $ketqua);

			foreach ($ketqua as $key => $value) {
				foreach ($value as $key => $value) {
					if($value['tendangnhap']==$username && $value['matkhau']==$psw)
					{
						$this->session->set_userdata('tendangnhap',$value['tendangnhap']);
						$this->session->set_userdata('matkhau',$value['matkhau']);
						$this->session->set_userdata('id',$value['idnguoidung']);
						$this->session->set_userdata('ten',$value['ten']);
						$this->session->set_userdata('trangthai',$value['trangthai']);
						$this->session->set_userdata('duongdananh',$value['duongdananhnguoidung']);
					}
					
				}
			}
			$this->load->view('DangKyThanhCong_view');
		}
		else
		{
			$this->load->view('DangKyThatBai_view');
		}
		
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */
