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

	public function taoplaylist($tenplaylist,$idusercurrent)
	{
		$duongdananhplaylist='http://localhost/ProjectWeb/img/img_playlist/img-playlist-default.jpg';
		$idcasi=0;
		$tencasi='Various Artist';
		$sql="Insert into Playlist (tenplaylist,idnguoidung,idcasi,duongdananhplaylist) values ('$tenplaylist','$idusercurrent','$idcasi','$duongdananhplaylist')";

		$dulieu=array('tenplaylist'=>$tenplaylist,
			'idnguoidung'=>$idusercurrent,
			'idcasi'=>$idcasi,
			'duongdananhplaylist'=>$duongdananhplaylist);
		$this->db->insert('Playlist', $dulieu);
		if($this->db->insert_id())
		{
			echo '<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100" id="item-playlist">
			<a href="#" class="item-container">
			<div class="item-hover">
			<div class="item-hover-content">
			<i class="fa fa-play fa-2x"></i>
			</div>
			</div>
			<img class="card-img-top" width="150" height="200" src="'.$duongdananhplaylist.'" alt="">
			</a>
			<div class="card-body">
			<h4 class="card-title">
			<a href="#">'.$tenplaylist.'</a>
			</h4>
			<p class="card-text">'.$tencasi.'</p>
			</div>
			<div class="footer">
			<div class="row">

			<div class="col-md-4">
			<form action="<?php echo base_url()?>CapNhatPlaylist" method="POST" enctype="multi-data">
			<button class="btn btn-lg btn-warning">Sửa</button>
			<input type="text" hidden value="'.$this->db->insert_id().'" name="idplaylist">
			</form>
			</div>
			<span class="col-md-1"></span>
			<div class="col-md-4"><button class="btn btn-lg btn-danger">Xóa</button></div>
			</div>
			</div>
			</div>
			</div>';
		}
	}
}

/* End of file trangcanhan_model.php */
/* Location: ./application/models/trangcanhan_model.php */
