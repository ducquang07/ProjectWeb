<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ThongTinCaSi_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function LayThongTinCaSi($idcasi)
	{
		//giải quyết repeatable read
		$sql="call proc_LayThongTinCaSi($idcasi)";
		//$sql="Select * from casi where idcasi='$idcasi'";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function laydanhsach_playlist($idcasi,$limit)
	{
		$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist from playlist where playlist.idcasi='$idcasi' limit 0, $limit";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function get_TotalRecord($idcasi)
	{
		$sql="Select * from playlist where idcasi='$idcasi'";
		$dulieu=$this->db->query($sql);
		$rowcount = $dulieu->num_rows();
		return $rowcount;
	}


	public function Get_Danhsachplaylist($currentpage,$limit,$idcasi)
	{
		$start=($currentpage-1)*$limit;

		$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi from playlist,casi where playlist.idcasi=casi.idcasi and casi.idcasi='$idcasi' limit $start, $limit";
		$dulieu=$this->db->query($sql);
		foreach($dulieu->result_array() as $row)
		{
			echo '<div class="col-lg-3 col-sm-6 portfolio-item">';
			echo '<div class="card h-100" id="item-playlist">';
			echo '	<a href="#" class="item-container">';
			echo '		<span class="item-playlist-luotnghe">';
			echo '			<i class="fa fa-headphones" aria-hidden="true"></i>';
			echo '			<span id="">'.$row['luotnghe'];
			echo '			</span>';
			echo '		</span>';
			echo '		<div class="item-hover">';
			echo '			<div class="item-hover-content">';
			echo '				<i class="fa fa-play fa-2x"></i>';
			echo '			</div>';
			echo '		</div>';
			echo '		<img class="card-img-top" width="150" height="200" src="'.$row['duongdananhplaylist'].'" alt="">';
			echo '	</a>';
			echo '	<div class="card-body">';
			echo '		<h4 class="card-title">';
			echo '			<a href="#">'.$row['tenplaylist'].'</a>';
			echo '		</h4>';
			echo '		<p class="card-text">'.$row['tencasi'].'</p>';
			echo '	</div>';
			echo '</div>';
			echo '</div>	';
		}
	}

}

/* End of file ThongTinCaSi_model.php */
/* Location: ./application/models/ThongTinCaSi_model.php */