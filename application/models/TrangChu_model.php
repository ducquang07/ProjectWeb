<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function GoiYPlaylist()
	{
		$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi 
			  from playlist,casi 
			  where playlist.idcasi=casi.idcasi
			  and playlist.idplaylist in (Select distinct idplaylist from chitietplaylist)
			  and casi.tencasi in ('Various Artist') 
			  order by rand() limit 6";
		$result=$this->db->query($sql);
		return $result->result_array();
	}

	public function GoiYAlbum()
	{
		$sql="Select idplaylist,tenplaylist,luotnghe,duongdananhplaylist,casi.tencasi 
			  from playlist,casi
			  where playlist.idcasi=casi.idcasi
			  and casi.tencasi not in ('Various Artist')
			  order by rand() limit 6";
		$result=$this->db->query($sql);
		return $result->result_array();
	}

	public function Get_danhsach_hot()
	{
		$sql="Select distinct(idcasi),tencasi,duongdananhcasi from casi where idcasi in (select idcasi from baihat bh, baihat_casi ct where bh.idbaihat=ct.idbaihat order by luotnghe desc) and tencasi not in ('Various Artist') limit 6";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file TrangChu_model.php */
/* Location: ./application/models/TrangChu_model.php */