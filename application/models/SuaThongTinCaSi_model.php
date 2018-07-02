<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SuaThongTinCaSi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laythongtincasi($tencasi)
	{
		$sql="Select * from casi where tencasi='$tencasi'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function capnhatcasi($tencasi,$ngaysinh,$gioitinh,$duongdananhcs,$duongdananhbiacs,$mota)
	{
		$sql="update casi set ngaysinh='$ngaysinh', gioitinh='$gioitinh', duongdananhcasi ='$duongdananhcs', duongdananhbia='$duongdananhbiacs', mota='$mota' where tencasi='$tencasi' ";
		return $this->db->query($sql);
	}

}

/* End of file SuaThongTinCaSi_model.php */
/* Location: ./application/models/SuaThongTinCaSi_model.php */