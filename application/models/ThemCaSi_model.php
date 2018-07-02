<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThemCaSi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function themcasi($tencs,$ngaysinh,$gioitinh,$duongdananhcs,$duongdananhbiacs,$mota)
	{
		$sql="INSERT INTO casi(tencasi,ngaysinh,gioitinh,duongdananhcasi,duongdananhbia,mota) VALUES('$tencs','$ngaysinh','$gioitinh','$duongdananhcs','$duongdananhbiacs','$mota')";
		$this->db->query($sql);
		// $dem=$this->db->affected_rows();
		return $this->db->affected_rows();
	}

}

/* End of file ThemCaSi_model.php */
/* Location: ./application/models/ThemCaSi_model.php */