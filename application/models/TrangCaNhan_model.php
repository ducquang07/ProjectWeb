<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangCaNhan_model extends CI_Model {

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
	public function suathongtincanhan($id, $ten, $gioitinh, $ngaysinh, $sdt, $diachi, $email, $duongdananhnguoidung)
	{
		$sql="update nguoidung set ten='".$ten."', gioitinh='".$gioitinh."', ngaysinh='".$ngaysinh."', sdt='".$sdt."', diachi='".$diachi."', email='".$email."', duongdananhnguoidung='".$duongdananhnguoidung."'where idnguoidung='".$id."'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function doimatkhauuser($idusercurrent,$newpass)
	{
		$sql="call proc_ThayDoiMatKhau('".$idusercurrent."','".$newpass."')";
		if($this->db->query($sql))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function laydanhsachplaylist($idusercurrent)
	{
		$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi from playlist,casi where playlist.idcasi=casi.idcasi and idnguoidung=$idusercurrent";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsachbaihatupload($idusercurrent)
	{
		$sql="Select * from baihat where idnguoidung='$idusercurrent'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsachcasi($idbaibat)
	{
		$sql="Select casi.idcasi,casi.tencasi from casi,baihat_casi where casi.idcasi=baihat_casi.idcasi and baihat_casi.idbaihat='$idbaibat'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}
}

/* End of file trangcanhan_model.php */
/* Location: ./application/models/trangcanhan_model.php */
