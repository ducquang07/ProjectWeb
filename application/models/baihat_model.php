<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class baihat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllData_baihat()
	{
		//$this->db->select('*');
		//$this->db->order_by('luotnghe','desc');
		//$dulieu=$this->db->get('baihat');
		$sql="Select * from baihat,casi where baihat.idcasi=casi.idcasi order by luotnghe desc";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function Get_Danhsachbaihat()
	{
		$start=($currentpage-1)*5;
		$sql='Select * from baihat,casi where baihat.idcasi=casi.idcasi order by luotnghe desc limit '.$start.','.$start+10;
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file baihat_model.php */
/* Location: ./application/models/baihat_model.php */