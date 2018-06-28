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
	public function timidbaihat($tenbaihat,$idnguoidung)
	{	
		$sql="Select * from baihat where tenbaihat = '$tenbaihat' and idnguoidung = '$idnguoidung'";
		$dulieu=$this->db->query($sql);
		return $dulieu;
	}
	public function thembaihat($tenbaihat,$duongdannhac,$duongdananhbaihat,$idnhacsi,$idnguoidung,$idtheloai)
	{
		$sql="INSERT INTO baihat( tenbaihat, duongdannhac, duongdananhbaihat, idnhacsi, idnguoidung, idtheloai) VALUES ('$tenbaihat','$duongdannhac','$duongdananhbaihat','$idnhacsi','$idnguoidung','$idtheloai')";
		$this->db->query($sql);
		$dem=$this->db->affected_rows();
		return $this->db->affected_rows();
	}
	public function thembaihat_casi($idbaihat,$idcasi0,$idcasi1,$idcasi2,$idcasi3,$idcasi4)
	{
		if($idcasi4 != null)
		{
			$sql="INSERT INTO baihat_casi(idbaihat, idcasi) VALUES ('$idbaihat','$idcasi0'),('$idbaihat','$idcasi1'),('$idbaihat','$idcasi2'),('$idbaihat','$idcasi3'),('$idbaihat','$idcasi4')";
			$this->db->query($sql);
			$dem=$this->db->affected_rows();
			return $this->db->affected_rows();
		}
		else if($idcasi3 != null)
		{
			$sql="INSERT INTO baihat_casi(idbaihat, idcasi) VALUES ('$idbaihat','$idcasi0'),('$idbaihat','$idcasi1'),('$idbaihat','$idcasi2'),('$idbaihat','$idcasi3')";
			$this->db->query($sql);
			$dem=$this->db->affected_rows();
			return $this->db->affected_rows();
		}
		else if($idcasi2 != null)
		{
			$sql="INSERT INTO baihat_casi(idbaihat, idcasi) VALUES ('$idbaihat','$idcasi0'),('$idbaihat','$idcasi1'),('$idbaihat','$idcasi2')";
			$this->db->query($sql);
			$dem=$this->db->affected_rows();
			return $this->db->affected_rows();
		}
		else if($idcasi1 != null)
		{
			$sql="INSERT INTO baihat_casi(idbaihat, idcasi) VALUES ('$idbaihat','$idcasi0'),('$idbaihat','$idcasi1')";
			$this->db->query($sql);
			$dem=$this->db->affected_rows();
			return $this->db->affected_rows();
		}
		else
		{
			$sql="INSERT INTO baihat_casi(idbaihat, idcasi) VALUES ('$idbaihat','$idcasi0')";
			$this->db->query($sql);
			$dem=$this->db->affected_rows();
			return $this->db->affected_rows();
		}
	}
}

/* End of file dangnhac_model.php */
/* Location: ./application/models/dangnhac_model.php */
