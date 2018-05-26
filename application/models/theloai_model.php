<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class theloai_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function Get_khuVuc()
	{

		$this->db->select('DISTINCT(khuvuc)');
		$dulieu=$this->db->get('theloai');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function Get_theLoai($khuvuc)
	{
		$this->db->select('tentheloai,idtheloai');
		$this->db->where('khuvuc', $khuvuc);
		$dulieu=$this->db->get('theloai');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file theloai_model.php */
/* Location: ./application/models/theloai_model.php */