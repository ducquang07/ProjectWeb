<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BangXepHang_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function BangXepHang_VietNam($currentdate)
	{
		// $sql="call proc_Bangxephang_VietNam('$currentdate')";
		$sql="Select baihat.*,thongke.ngay,sum(thongke.luotnghe) as 'xephangluotnghe'
		from baihat,thongke,theloai
		where baihat.idbaihat=thongke.idbaihat and baihat.idtheloai=theloai.idtheloai
		and theloai.khuvuc='Việt Nam'
		and thongke.ngay between '$currentdate' - Interval 7 day and '$currentdate'
		group by baihat.idbaihat,baihat.tenbaihat
		order by xephangluotnghe desc
		limit 10";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function Casi_baihat($idbaihat)
	{
		$sql="Select casi.idcasi,casi.tencasi from casi,baihat_casi where casi.idcasi=baihat_casi.idcasi and idbaihat=$idbaihat";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function BangXepHang_KPOP($currentdate)
	{
		$sql="Select baihat.*,thongke.ngay,sum(thongke.luotnghe) as 'xephangluotnghe'
		from baihat,thongke,theloai
		where baihat.idbaihat=thongke.idbaihat and baihat.idtheloai=theloai.idtheloai
		and theloai.khuvuc='Châu Á'
		and thongke.ngay between '$currentdate' - Interval 7 day and '$currentdate'
		group by baihat.idbaihat,baihat.tenbaihat
		order by xephangluotnghe desc
		limit 10";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

	public function BangXepHang_US($currentdate)
	{
		$sql="Select baihat.*,thongke.ngay,sum(thongke.luotnghe) as 'xephangluotnghe'
		from baihat,thongke,theloai
		where baihat.idbaihat=thongke.idbaihat and baihat.idtheloai=theloai.idtheloai
		and theloai.khuvuc='Âu Mỹ'
		and thongke.ngay between '$currentdate' - Interval 7 day and '$currentdate'
		group by baihat.idbaihat,baihat.tenbaihat
		order by xephangluotnghe desc
		limit 10";
		$dulieu=$this->db->query($sql);
		$dulieu=$dulieu->result_array();
		return $dulieu;
	}

}

/* End of file BangXepHang_model.php */
/* Location: ./application/models/BangXepHang_model.php */