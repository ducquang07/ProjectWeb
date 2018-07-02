<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThemNhacSi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function themnhacsi($tenns,$ngaysinh,$gioitinh,$duongdananhns,$duongdananhbians,$mota)
	{
		$sql="INSERT INTO nhacsi(tennhacsi,ngaysinh,gioitinh,duongdananhnhacsi,duongdananhbianhacsi,mota) VALUES('$tenns','$ngaysinh','$gioitinh','$duongdananhns','$duongdananhbians','$mota')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

}

/* End of file ThemCaSi_model.php */
/* Location: ./application/models/ThemCaSi_model.php */