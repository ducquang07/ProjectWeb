	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class playlist_model extends CI_Model {

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
				$sql="Select idplaylist,tenplaylist,playlist.duongdananh,tencasi from playlist,casi where playlist.idcasi=casi.idcasi limit 0, $limit";
			}
			else{
				$sql="Select idplaylist,tenplaylist,playlist.duongdananh,tencasi from playlist,casi where playlist.idcasi=casi.idcasi limit 0, $limit";
			}
			$dulieu=$this->db->query($sql);
			$dulieu=$dulieu->result_array();
			return $dulieu;
		}

		public function get_TotalRecord($keyword)
		{
			$sql="Select * from playlist where tenplaylist like '%$keyword%'";
			$dulieu=$this->db->query($sql);
			$rowcount = $dulieu->num_rows();
			return $rowcount;
		}

	}
	
	/* End of file playlist_model.php */
	/* Location: ./application/models/playlist_model.php */