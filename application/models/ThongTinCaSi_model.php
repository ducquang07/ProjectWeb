<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThongTinCaSi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function LayThongTinCaSi($idcasi)
	{
		//giải quyết repeatable read
		$sql="call proc_LayThongTinCaSi($idcasi)";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

}

/* End of file ThongTinCaSi_model.php */
/* Location: ./application/models/ThongTinCaSi_model.php */