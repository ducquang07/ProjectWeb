<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trinhphatnhac_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laythongtinbaihat($idbaihat)
	{
		$sql="Select * from baihat,casi,theloai,nhacsi where  baihat.idcasi=casi.idcasi and baihat.idtheloai=theloai.idtheloai and baihat.idnhacsi=nhacsi.idnhacsi and baihat.idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laythongtinnguoidung($idusercurrent)
	{
		$sql="Select * from nguoidung where idnguoidung = $idusercurrent";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laythongnguoidang($idbaihat)
	{
		$sql="Select * from nguoidung where idnguoidung in (Select idnguoidung from baihat where idbaihat='$idbaihat')";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsachbinhluan($idbaihat)
	{	
		$sql="Select * from binhluan,nguoidung where binhluan.idnguoidung=nguoidung.idnguoidung and binhluan.idbaihat='$idbaihat' order by thoigian desc";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function luubinhluan($idbaihat,$idnguoidung,$thoigian,$noidung)
	{
		$data=array('noidung'=>$noidung,
			'idbaihat'=>$idbaihat,
			'idnguoidung'=>$idnguoidung,
			'thoigian'=>$thoigian);
		$this->db->insert('binhluan',$data);
		if($this->db->insert_id()){
			$dulieu=$this->laythongtinnguoidung($idnguoidung);
			foreach ($dulieu as $key => $value) {
				echo '<div class="form-group row ">';
				echo '<p class="col-md-2 avatar"><img width="60" height="auto" class="photo-user-comment" alt="profile photo" src="'.$value['duongdananhnguoidung'].'"></p>';
				echo '<div class="col-md-10">';
				echo '<div class="row user-comment"><a href="#">'.$value['ten'].'</a></div>';
				echo '<div class="row comment">';
				echo '<span >'.$noidung.'</span>';
				echo '</div>';
				echo '<div class="row time-comment">';
				echo '<span>'.$thoigian.'</span>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
			
		}
	}

	public function themluotnghe($idbaihat)
	{
		$sql="Update baihat set luotnghe=luotnghe+1 where idbaihat='$idbaihat'";
		$this->db->query($sql);
	}

	public function binhluan_moinhat($idbaihat)
	{
		$sql="Select * from binhluan,nguoidung where binhluan.idnguoidung=nguoidung.idnguoidung and binhluan.idbaihat='$idbaihat' order by thoigian desc";
		$dulieu=$this->db->query($sql);
		foreach($dulieu->result_array() as $row)
		{
			echo '<div class="form-group row ">';
			echo '<p class="col-md-2 avatar"><img width="60" height="auto" class="photo-user-comment" alt="profile photo" src="'.$row['duongdananhnguoidung'].'"></p>';
			echo '<div class="col-md-10">';
			echo '<div class="row user-comment"><a href="#">'.$row['ten'].'</a></div>';
			echo '<div class="row comment">';
			echo '<span >'.$row['noidung'].'</span>';
			echo '</div>';
			echo '<div class="row time-comment">';
			echo '<span>'.$row['thoigian'].'</span>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
	}

	public function binhluan_cunhat($idbaihat)
	{
		$sql="Select * from binhluan,nguoidung where binhluan.idnguoidung=nguoidung.idnguoidung and binhluan.idbaihat='$idbaihat' order by thoigian asc";
		$dulieu=$this->db->query($sql);
		foreach($dulieu->result_array() as $row)
		{
			echo '<div class="form-group row ">';
			echo '<p class="col-md-2 avatar"><img width="60" height="auto" class="photo-user-comment" alt="profile photo" src="'.$row['duongdananhnguoidung'].'"></p>';
			echo '<div class="col-md-10">';
			echo '<div class="row user-comment"><a href="#">'.$row['ten'].'</a></div>';
			echo '<div class="row comment">';
			echo '<span >'.$row['noidung'].'</span>';
			echo '</div>';
			echo '<div class="row time-comment">';
			echo '<span>'.$row['thoigian'].'</span>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
	}

	
}

/* End of file trinhphatnhac_model.php */
/* Location: ./application/models/trinhphatnhac_model.php */