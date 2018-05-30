<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trinhphatnhac_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laythongtinbaihat($idbaihat)
	{
		$sql="Select * from baihat,casi,theloai,nhacsi where  baihat.idcasi=casi.idcasi and baihat.idtheloai=theloai.idtheloai and baihat.idnhacsi=nhacsi.idnhacsi and baihat.idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laythongtinnguoidung($idbaihat)
	{
		$sql="Select * from nguoidung where idnguoidung in (Select idnguoidung from baihat where idbaihat=$idbaihat)";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsachbinhluan($idbaihat)
	{
		$this->db->select('*');
		$this->db->where('idbaihat', $idbaihat);
		$dulieu=$this->db->get('binhluan');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file trinhphatnhac_model.php */
/* Location: ./application/models/trinhphatnhac_model.php */