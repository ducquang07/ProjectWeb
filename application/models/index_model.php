<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function singin($username,$pass)
	{
		$tendangnhap = $username;
		$matkhau = $pass;
		// $this->db->query('start transaction;');
		// $this->db->query('SET SESSION TRANSACTION ISOLATION LEVEL serializable;');
		// $this->db->query("call proc_KiemTraDangNhap('ducquang','ducquang',@out_value)");
		// echo $flag = $this->db->query("select @out_value");
		// if($flag==1)
		$this->db->trans_start();
		$this->db->select('idnguoidung,ten,tendangnhap,matkhau,trangthai,duongdananhnguoidung');
		$this->db->where('tendangnhap', $tendangnhap);
		$this->db->where('matkhau', $matkhau);
		$kq = $this->db->get('nguoidung');
		$this->db->trans_complete();
		$kq = $kq->result_array();
		return $kq;
		
	}

	public function insert_user($fullname,$ngaysinh,$gender,$diachi,$email,$username,$psw,$trangthai,$duongdananh)
	{
		$dulieu = array(
			'ten' => $fullname,
			'tendangnhap' => $username,
			'matkhau' => $psw,
			'gioitinh' => $gender,
			'ngaysinh' => $ngaysinh,
			'diachi' => $diachi,
			'email' => $email,
			'trangthai' => $trangthai,
			'duongdananh' => $duongdananh
			);

		$flag = 1;
		$this->db->select('tendangnhap');
		$data = $this->db->get('nguoidung');
		$data = $data->result_array();
		foreach ($data as $key => $value) {
			if($value["tendangnhap"]==$username)
			{
				$flag = 0;
			}
		}
		if($flag)
		{
			$this->db->insert('nguoidung', $dulieu);
			return $this->db->insert_id();
		}
		else {
			return 0;
		}
		
	}
}

/* End of file index_model.php */
/* Location: ./application/models/index_model.php */