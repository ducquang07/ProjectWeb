	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Playlist_model extends CI_Model {

		public $variable;

		public function __construct()
		{
			parent::__construct();
			
		}

		public function Get_theLoai($khuvuc)
		{
			$this->db->select('tentheloai,idtheloai');
			$this->db->where('khuvuc', $khuvuc);
			$dulieu=$this->db->get('theloai');
			$dulieu=$dulieu->result_array();
			return $dulieu;
		}

		public function Get_danhsach_hot()
		{
			$sql="Select distinct(idcasi),tencasi,duongdananh from casi where idcasi in (select idcasi from baihat order by luotnghe desc) limit 6";
			$dulieu=$this->db->query($sql);
			$dulieu=$dulieu->result_array();
			return $dulieu;
		}

		public function laydanhsach_playlist($keyword,$limit)
		{
			if($keyword===""){
				$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi from playlist,casi where playlist.idcasi=casi.idcasi limit 0, $limit";
			}
			else{
				$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi from playlist,casi where playlist.idcasi=casi.idcasi and match(playlist.tenplaylist) against('$keyword') limit 0, $limit";
			}
			$dulieu=$this->db->query($sql);
			$dulieu=$dulieu->result_array();
			return $dulieu;
		}

		public function get_TotalRecord($keyword)
		{
			
			if($keyword===""){
				$sql="Select idplaylist from playlist";
			}
			else{
				$sql="Select idplaylist from playlist where match(tenplaylist) against('$keyword')";
			}
			$dulieu=$this->db->query($sql);
			$rowcount = $dulieu->num_rows();
			return $rowcount;
		}

		public function Get_Danhsachplaylist($currentpage,$limit,$keyword)
		{
			$start=($currentpage-1)*$limit;
			if($keyword===""|| is_null($keyword))
			{
				$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi from playlist,casi where playlist.idcasi=casi.idcasi limit $start, $limit";
			}
			else
			{
				$sql="Select idplaylist,tenplaylist,luotnghe,playlist.duongdananhplaylist,tencasi from playlist,casi where playlist.idcasi=casi.idcasi and match(playlist.tenplaylist) against('$keyword') limit $start,$limit";
			}
			$dulieu=$this->db->query($sql);
			foreach($dulieu->result_array() as $row)
			{
				echo '<div class="col-lg-4 col-sm-6 portfolio-item">';
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

		/* End of file playlist_model.php */
	/* Location: ./application/models/playlist_model.php */
