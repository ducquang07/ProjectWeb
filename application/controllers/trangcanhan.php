<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class trangcanhan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$idusercurrent = $this->session->userdata('id');
		$this->load->model('trangcanhan_model');
		$thongtinnguoidung=$this->trangcanhan_model->laythongtinnguoidung($idusercurrent);
		$data=array('nguoidung'=>array('thongtinnguoidung'=>$thongtinnguoidung));
		$this->load->view('trangcanhan_view',$data);
	}
	public function suathongtin()
	{
		$this->load->model('trangcanhan_model');
		$idusercurrent = $this->session->userdata('id');
		$ten = $this->input->post('ten');
		$gioitinh = $this->input->post('gioitinh');
		$ngaysinh = $this->input->post('ngaysinh');
		$sdt = $this->input->post('sdt');
		$diachi = $this->input->post('diachi');
		$email = $this->input->post('email');
		$duongdananhnguoidung = $this->input->post('duongdananhnguoidung');
		

		// $target_dir = "anhupload/";
		// $rename = time();
		// $target_file = $target_dir . $rename . basename($_FILES["anhavatar"]["name"]);
		// $uploadOk = 1;
		// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// // Check if image file is a actual image or fake image
		// if(isset($_POST["submit"])) {
		//     $check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
		//     if($check !== false) {
		//         // echo "File is an image - " . $check["mime"] . ".";
		//         $uploadOk = 1;
		//     } else {
		//         // echo "File is not an image.";
		//         $uploadOk = 0;
		//     }
		// }
		// // Check file size
		// if ($_FILES["anhavatar"]["size"] > 20000000) {
		//     // echo "Xin lỗi, kích thước file quá lơn";
		//     $uploadOk = 0;
		// }
		// // Allow certain file formats
		// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		// && $imageFileType != "gif" ) {
		//     // echo "Xin lỗi, chỉ chấp nhận file JPG, JPEG, PNG & GIF.";
		//     $uploadOk = 0;
		// }
		// // Check if $uploadOk is set to 0 by an error
		// if ($uploadOk == 0) {
		//     // echo "Xin lỗi, file của bạn chưa được upload.";
		// // if everything is ok, try to upload file
		// } else {
		//     if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
		//         // echo "File ". basename( $_FILES["anhavatar"]["name"]). " đã được upload.";
		//     } else {
		//         // echo "Xin lỗi, đã có lỗi trong quá trình upload ảnh.";
		//     }
		// }
		// $duongdananhnguoidung = base_url().$target_file;


		if($this->trangcanhan_model->suathongtincanhan($idusercurrent, $ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email, $duongdananhnguoidung)>0)
		{
			// $path="'".substr($this->session->userdata('duongdananh'), 28)."'";
			// unlink("$path");
			$this->session->set_userdata('duongdananh',$duongdananhnguoidung);
			echo 1;
		}
		else
		{
			echo 0;
		}
	}

	public function doimatkhau()
	{
		$this->load->model('trangcanhan_model');
		$idusercurrent = $this->session->userdata('id');
		$thongtinnguoidung=$this->trangcanhan_model->laythongtinnguoidung($idusercurrent);
		$nguoidung = array('thongtinnguoidung'=>$thongtinnguoidung);

		foreach ($nguoidung['thongtinnguoidung'] as $key => $value)
		{
			$passcurrent = $value['matkhau'];
		};
		$tendangnhap = $this->input->post('tendangnhap');
		$newpass = $this->input->post('matkhaumoi');
		$oldpass = $this->input->post('matkhaucu');
		if($oldpass==$passcurrent)
		{
			if($this->trangcanhan_model->doimatkhauuser($idusercurrent,$newpass)>0)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
		}
		else
		{
			echo ' mat khau khong trung';
		}
	}

		public function uploadfile()
	{
		$uploadfile = new UploadHandler();

	}
}

/* End of file trangcanhan.php */
/* Location: ./application/controllers/trangcanhan.php */