<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class baihat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}


	public function Get_Danhsachbaihat($currentpage,$limit,$keyword)
	{
		$start=($currentpage-1)*$limit;
		if($keyword==="")
		{
			$sql="Select * from baihat,casi where baihat.idcasi=casi.idcasi order by luotnghe desc limit $start, $limit";
		}
		else
		{
			$sql="Select * from baihat,casi where baihat.idcasi=casi.idcasi and match(baihat.tenbaihat) against('$keyword') limit $start,$limit";
		}
		$dulieu=$this->db->query($sql);
		foreach($dulieu->result_array() as $row)
		{
			echo '<tr class="item-baihat">';
			echo '<td>';										
			echo '<div class="content-baihat">';											
			echo '<a href="baihat/trinhphatnhac/'.$row['idbaihat'].'" class="item-baihat-tenbaihat">'.$row['tenbaihat'].'</a>-';		
			echo '<a href="#" class="item-baihat-tencasi">'.$row['tencasi'].'</a>';					
			echo '</div>';											
			echo '</td>';												
			echo '<td>';									
			echo '</td>';
			echo '<td>';
			echo '<div class="item-baihat-luotnghe">'.$row['luotnghe'].'<span class="item-baihat-icon"><i class="fa fa-headphones " aria-hidden="true"></i></span></div>';
			echo '</td>';
			echo '<td>';
			echo '<span class="item-baihat-icon"><i class="fa fa-play" aria-hidden="true"></i></span>';
			echo '<span class="item-baihat-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>';
			echo '<span class="item-baihat-icon"><i class="fa fa-download" aria-hidden="true"></i></span>';
			echo '</td>';										
			echo '</tr>';	
		}
	}

	public function get_TotalRecord($keyword)
	{
		$sql="Select * from baihat where tenbaihat like '%$keyword%' order by luotnghe desc";
		$dulieu=$this->db->query($sql);
		$rowcount = $dulieu->num_rows();
		return $rowcount;
	}

	public function show_Danhsachbaihat_keyword($keyword,$limit,$phantrang)
	{
		if($keyword===""){
			$sql="Select * from baihat,casi where baihat.idcasi=casi.idcasi  order by luotnghe desc limit 0, $limit";
		}
		else{
			$sql="Select * from baihat,casi where baihat.idcasi=casi.idcasi and baihat.idcasi=casi.idcasi and match(baihat.tenbaihat) against('$keyword') limit 0, $limit";
		}
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

}

/* End of file baihat_model.php */
/* Location: ./application/models/baihat_model.php */