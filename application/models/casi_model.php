<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class casi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function Get_danhsach_hot()
	{
		$sql="Select distinct(idcasi),tencasi,duongdananh from casi where idcasi in (select idcasi from baihat order by luotnghe desc) limit 6";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

}

/* End of file casi_model */
/* Location: ./application/models/casi_model */