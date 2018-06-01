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
}

/* End of file trangcanhan_model.php */
/* Location: ./application/models/trangcanhan_model.php */