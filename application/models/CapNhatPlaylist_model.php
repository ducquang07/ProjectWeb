<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CapNhatPlaylist_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laydanhsachbaihat($keyword)
	{
		if($keyword!==""||$keyword!==null){
			$sql="Select baihat.idbaihat,baihat.tenbaihat,casi.tencasi 
			from baihat,casi,baihat_casi
			where casi.idcasi=baihat_casi.idcasi 
			and baihat.idbaihat=baihat_casi.idbaihat
			and baihat.tenbaihat like '%$keyword%'";
			$dulieu=$this->db->query($sql);
			foreach($dulieu->result_array() as $row){
				echo '<li id="'.$row['idbaihat'].'">';
				echo '<a id="tenbaihat">'.$row['tenbaihat'].'</a>-';
				echo '<a id="tencasi">'.$row['tencasi'].'</a>';
				echo '<span class="btn btn-lg btn-success btn-chon" style="padding: .1rem 0.5rem;float: right"><i class="fa fa-arrow-right"></i></span>';
				echo '</li>';
			}
		}
	}

	public function laythongtinplaylist($idplaylist)
	{
		$sql="select playlist.tenplaylist,playlist.idplaylist, casi.tencasi,playlist.mota,playlist.duongdananhplaylist,playlist.idtheloai,playlist.idcasi
		from playlist,casi 
		where playlist.idcasi=casi.idcasi and playlist.idplaylist='$idplaylist'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function Get_theLoai($khuvuc)
	{
		$this->db->select('tentheloai,idtheloai');
		$this->db->where('khuvuc', $khuvuc);
		$dulieu=$this->db->get('theloai');
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function timcasi($keyword)
	{
		$sql="Select * from casi where tencasi like '%$keyword%'";
		$dulieu=$this->db->query($sql);
		return $dulieu;
	}

	public function lay_idcasi($tencasi)
	{
		$sql="Select idcasi from casi where tencasi ='$tencasi'";
		$dulieu=$this->db->query($sql);
		return $dulieu;
	}

	public function capnhatplaylist($idplaylist,$tenplaylist,$mota,$duongdananhplaylist,$idtheloai,$idcasi)
	{	
		if($duongdananhplaylist!='')
			$sql="Update playlist set tenplaylist='$tenplaylist', mota='$mota',duongdananhplaylist='$duongdananhplaylist',
		idtheloai='$idtheloai',idcasi='$idcasi' where idplaylist='$idplaylist'";
		else
			$sql="Update playlist set tenplaylist='$tenplaylist', mota='$mota',idtheloai='$idtheloai',idcasi='$idcasi' where idplaylist='$idplaylist'";
		return $this->db->query($sql);
	}




	public function laydanhsachbaihatplaylist($idplaylist)
	{

		$this->db->query("SET SESSION TRANSACTION ISOLATION LEVEL Read Uncommitted");
		$this->db->trans_start();
		$sql="Select baihat.idbaihat,tenbaihat,tencasi from baihat,casi,chitietplaylist ,baihat_casi
		where baihat.idbaihat=baihat_casi.idbaihat
		and casi.idcasi=baihat_casi.idcasi
		and chitietplaylist.idbaihat=baihat.idbaihat 
		and chitietplaylist.idplaylist='$idplaylist'";
		$dulieu=$this->db->query($sql);
		$this->db->trans_complete();
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function thembaihatvaoplaylist($idplaylist,$idbaihat)
	{
		$sql="Insert into chitietplaylist values($idplaylist,$idbaihat)";
		return $this->db->query($sql);
	}

	public function xoabaihatkhoiplaylist($idplaylist,$idbaihat)
	{
		$sql="Delete from chitietplaylist where idplaylist='$idplaylist' and idbaihat='$idbaihat'";
		return $this->db->query($sql);
	}

	public function xoalistbaihat($idplaylist)
	{
		$sql="Delete from chitietplaylist where idplaylist='$idplaylist'";
		return $this->db->query($sql);
	}


}

/* End of file CapNhatPlaylist_model.php */
/* Location: ./application/models/CapNhatPlaylist_model.php */
