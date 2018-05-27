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
	public function signup_controller()
	{
		$fullname = $this->input->post('fullname');
		$dateinput = $this->input->post('dateinput');
		$gender = $this->input->post('gender');
		$diachi = $this->input->post('diachi');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$psw = $this->input->post('psw');

		$target_dir = "anhavatar/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    // echo "Xin lỗi, Đã tồn tại file trùng tên";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["anhavatar"]["size"] > 20000000) {
		    echo "Xin lỗi, kích thước file quá lơn";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    // echo "Xin lỗi, chỉ chấp nhận file JPG, JPEG, PNG & GIF.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    // echo "Xin lỗi, file của bạn chưa được upload.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
		        // echo "File ". basename( $_FILES["anhavatar"]["name"]). " đã được upload.";
		    } else {
		        echo "Xin lỗi, đã có lỗi trong quá trình upload ảnh.";
		    }
		}
		$anhavatar = base_url()."anhavatar/".basename($_FILES["anhavatar"]["name"]);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */