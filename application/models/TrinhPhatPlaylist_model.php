<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhPhatPlaylist_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laythongtinplaylist($idplaylist)
	{
		$sql="Select * from playlist,nguoidung,casi 
		where playlist.idnguoidung=nguoidung.idnguoidung and playlist.idcasi=casi.idcasi
		and idplaylist='$idplaylist'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;

	}

	public function laythongnguoitaoplaylist($idplaylist)
	{
		$sql="Select * from nguoidung where idnguoidung in (Select idnguoidung from playlist where idplaylist='$idplaylist')";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsachbaihat($idplaylist)
	{
		$sql="Select * from playlist,baihat,chitietplaylist,nguoidung
		where playlist.idplaylist=chitietplaylist.idplaylist
		and nguoidung.idnguoidung=baihat.idnguoidung
		and baihat.idbaihat=chitietplaylist.idbaihat
		and playlist.idplaylist='$idplaylist'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laythongthongtincasi($idbaihat)
	{
		$sql="Select casi.idcasi,casi.tencasi from casi,baihat_casi where casi.idcasi=baihat_casi.idcasi and idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function layidbaihat_dautien($idplaylist)
	{
		$sql="select baihat.idbaihat from playlist,baihat,chitietplaylist
		where playlist.idplaylist=chitietplaylist.idplaylist
		and baihat.idbaihat=chitietplaylist.idbaihat and playlist.idplaylist='$idplaylist' Limit 1";
		$dulieu=$this->db->query($sql);
		$num_row=$dulieu->num_rows();
		$dulieu=$dulieu->result_array();
		if($num_row>0)
			return $dulieu[0];
		else return 0;
	}

	public function laythongtinbaihat($idbaihat)
	{
		$sql="Select * from baihat where baihat.idbaihat=$idbaihat";
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

	public function laydanhsachbinhluan($idbaihat)
	{	
		$sql="Select * from binhluan,nguoidung where binhluan.idnguoidung=nguoidung.idnguoidung and binhluan.idbaihat='$idbaihat' order by thoigian desc";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}


	public function themluotnghe($idplaylist)
	{
		$sql="Update playlist set luotnghe=luotnghe+1 where idplaylist='$idplaylist'";
		$this->db->query($sql);
	}


}

/* End of file TrinhPhatPlaylist_model.php */
/* Location: ./application/models/TrinhPhatPlaylist_model.php */