<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThongTinNhacSi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function LayThongTinNhacSi($idcasi)
	{
		$sql="select * from nhacsi where idnhacsi=$idnhacsi";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file ThongTinNhacSi_model.php */
/* Location: ./application/models/ThongTinNhacSi_model.php */