<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trangcanhan_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function laythongtinnguoidung($idusercurrent)
	{
		$sql="Select * from nguoidung where idnguoidung = $idusercurrent";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
	public function suathongtincanhan($id, $ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email)
	{
		$sql="update nguoidung set ten=$ten, gioitinh=$gioitinh, ngaysinh=$ngaysinh, sdt=$sdt, diachi=$diachi, email=$email where idnguoidung=$id";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
}

/* End of file trangcanhan_model.php */
/* Location: ./application/models/trangcanhan_model.php */