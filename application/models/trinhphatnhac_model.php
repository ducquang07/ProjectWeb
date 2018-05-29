<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trinhphatnhac_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laythongtinbaihat($idbaihat)
	{
		$sql="Select * from baihat,casi,theloai,nguoidung,nhacsi where  baihat.idcasi=casi.idcasi and baihat.idtheloai=theloai.idtheloai and baihat.idnguoidung=nguoidung.idnguoidung  and baihat.idnhacsi=nhacsi.idnhacsi and baihat.idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laythongtincasi($id)
	{
		$sql="Select * from casi where idcasi='$id'";
		$dulieu=$this->db_query($sql);
		$dulieu=$dulieu->result_array();
		echo "<pre>";
		var_dump($dulieu);
		echo "</pre>";
	}

	public function laythongtheloai($id)
	{
		$sql="Select * from theloai where idtheloai='$id'";
		$dulieu=$this->db_query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file trinhphatnhac_model.php */
/* Location: ./application/models/trinhphatnhac_model.php */