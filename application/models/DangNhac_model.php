<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangNhac_model extends CI_Model {

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

	public function laythongtintheloai()
	{
		$this->db->select('*');
		$dulieu = $this->db->get('theloai');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function timcasi($keyword)
	{
		$sql="Select * from casi where tencasi like '%$keyword%'";
		$dulieu=$this->db->query($sql);
		return $dulieu;
	}

	public function timnhacsi($keyword)
	{
		$sql="Select * from nhacsi where tennhacsi like '%$keyword%'";
		$dulieu=$this->db->query($sql);
		return $dulieu;
	}

	public function thembaihat($tenbaihat,$duongdannhac,$duongdananhbaihat,$idnhacsi,$idcasi,$idnguoidung,$idtheloai)
	{
		$sql="INSERT INTO baihat( tenbaihat, duongdannhac, duongdananhbaihat, idnhacsi, idnguoidung, idtheloai) VALUES ('$tenbaihat','$duongdannhac','$duongdananhbaihat','$idnhacsi','$idnguoidung','$idtheloai')";
		$this->db->query($sql);
		$dem=$this->db->affected_rows();
		foreach ($casi as $value) {
			echo $value;	
		}
		return $this->db->affected_rows();
	}
}

/* End of file dangnhac_model.php */
/* Location: ./application/models/dangnhac_model.php */
