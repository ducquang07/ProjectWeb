<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function singin($id,$pass)
	{
		$tendangnhap = $id;
		$matkhau = $pass;
		$this->db->select('ten,tendangnhap,matkhau,trangthai');
		$this->db->where('tendangnhap', $tendangnhap);
		$this->db->where('matkhau', $matkhau);
		$kq = $this->db->get('nguoidung');
		$kq = $kq->result_array();
		// echo '<pre>';
		// var_dump($kq);
		// echo '</pre>';
		return $kq;
	}
}

/* End of file index_model.php */
/* Location: ./application/models/index_model.php */