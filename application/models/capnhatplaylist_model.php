<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class capnhatplaylist_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laydanhsachbaihat($keyword)
	{
		if($keyword!==""||$keyword!==null){
			$sql="Select idbaihat,tenbaihat,tencasi from baihat,casi where casi.idcasi=baihat.idcasi and match(baihat.tenbaihat) against('$keyword')";
			$dulieu=$this->db->query($sql);
			foreach($dulieu->result_array() as $row){
				echo '<li id="'.$row['idbaihat'].'">';
				echo '<a >'.$row['tenbaihat'].'</a>-';
				echo '<a class="item-baihat-tencasi">'.$row['tencasi'].'</a>';
				echo '<span class="btn btn-lg btn-success btn-chon" style="padding: .1rem 0.5rem;float: right"><i class="fa fa-arrow-right"></i></span>';
				echo '</li>';
			}
		}
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

	public function capnhatplaylist($tenplaylist,$mota,$duongdananhplaylist,$idnguoidung,$idtheloai,$idcasi)
	{
		$luotnghe=0;
		$sql="INSERT INTO playlist( tenplaylist, mota, duongdananhplaylist,luotnghe, idnguoidung, idtheloai, idcasi) VALUES ('$tenplaylist','$mota','$duongdananhplaylist','$luotnghe','$idnguoidung','$idtheloai','$idcasi')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
}

/* End of file capnhatplaylist_model.php */
/* Location: ./application/models/capnhatplaylist_model.php */