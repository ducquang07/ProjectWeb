<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChuDe_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
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

/* End of file ChuDe_model.php */
/* Location: ./application/models/ChuDe_model.php */