<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangnhac_model extends CI_Model {

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

	public function laythongtintheloai()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('theloai');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file dangnhac_model.php */
/* Location: ./application/models/dangnhac_model.php */