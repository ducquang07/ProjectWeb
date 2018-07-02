<?php 

$this->load->model('BangXepHang_model');

$currentdate = date("Y-m-d");

$data_bangxephangVN=$this->BangXepHang_model->BangXepHang_VietNam($currentdate);
$data_bangxephangKPOP=$this->BangXepHang_model->BangXepHang_KPOP($currentdate);
$data_bangxephangUS=$this->BangXepHang_model->BangXepHang_US($currentdate);

$bangxephangVN=array();
$bangxephangKPOP=array();
$bangxephangUS=array();

foreach ($data_bangxephangVN as $key => $value) {
	$danhsachcasi=$this->BangXepHang_model->Casi_baihat($value['idbaihat']);		
	$baihat =array(
		"idbaihat"=>$value['idbaihat'],
		"tenbaihat"=>$value['tenbaihat'],
		"duongdananhbaihat"=>$value['duongdananhbaihat'],
		"casi"=>$danhsachcasi
	);
	array_push($bangxephangVN,$baihat);
}

foreach ($data_bangxephangKPOP as $key => $value) {
	$danhsachcasi=$this->BangXepHang_model->Casi_baihat($value['idbaihat']);		
	$baihat =array(
		"idbaihat"=>$value['idbaihat'],
		"tenbaihat"=>$value['tenbaihat'],
		"duongdananhbaihat"=>$value['duongdananhbaihat'],
		"casi"=>$danhsachcasi
	);
	array_push($bangxephangKPOP,$baihat);
}

foreach ($data_bangxephangUS as $key => $value) {
	$danhsachcasi=$this->BangXepHang_model->Casi_baihat($value['idbaihat']);		
	$baihat =array(
		"idbaihat"=>$value['idbaihat'],
		"tenbaihat"=>$value['tenbaihat'],
		"duongdananhbaihat"=>$value['duongdananhbaihat'],
		"casi"=>$danhsachcasi
	);
	array_push($bangxephangUS,$baihat);
}
?>
<!--Bắt đầu phẩn bảng xếp hạng-->
<h3 class="card-title">Bảng xếp hạng</h3>
<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
<div id="bxh">
	<div class="TabbedPanels" id="TabbedPanels1">
		<ul class="row TabbedPanelsTabGroup" >
			<li tabindex="0" class="col TabbedPanelsTab TabbedPanelsTabSelected TabbedPanelsTabFocused" style="border-top-left-radius:10px;">V-POP</li>
			<li tabindex="0" class="col TabbedPanelsTab">K-POP</li>
			<li tabindex="0" class="col TabbedPanelsTab" style="border-top-right-radius:10px;">ÂU-MỸ</li>
		</ul>
		<div class="TabbedPanelsContentGroup">
			<div class="TabbedPanelsContent TabbedPanelsContentVisible" style="display: block;">
				<ul style="padding-left: 0px;">
					<?php 
					$i = 1;
					foreach ($bangxephangVN as $key => $value) {
						if($i===1){?>
						<li class="first-item">
							<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo $value['duongdananhbaihat']?>"></a>
							<div class="container">
								<div class="row des">
									<span class="col rank"><?php echo $i ?></span>
									<div class="col-9 info">
										<h3 class="song-name ellipsis">
											<a class="txt-primary" href="<?php echo base_url()?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat']?>
											</a>
										</h3>
										<h4 class="singer-name ellipsis">
											<?php foreach ($value['casi'] as $key1 => $value1) {?>
											<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi txt-info"><?php echo $value1['tencasi'] ?>
											</a> 

											<?php 
											if ($value1 !== end($value['casi']))
												echo ","; }?>
										</h4>
									</div>
								</div>
							</div>
						</li>
						<?php }
						else {?>
						<li class="rank-item"  >
							<div class="container">
								<div class="row des">
									<span class="col rank"><?php echo $i ?></span>
									<div class="col-9 info">
										<h3 class="song-name ellipsis">
											<a  class="txt-primary" href="<?php echo base_url()?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat'] ?></a>
										</h3>
										<h4 class="singer-name ellipsis">
											<?php foreach ($value['casi'] as $key1 => $value1) {?>
											<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi txt-info"><?php echo $value1['tencasi'] ?>
											</a> 

											<?php 
											if ($value1 !== end($value['casi']))
												echo ","; }?>
										</h4>
									</div>
								</div>
							</div>
						</li>
						<?php	}
						$i=$i+1;
					} ?>

				</ul>
				<div class="footer-bxh">
					<form action="<?php echo base_url() ?>Baihat">
						<button type="submit" class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả
						</button>
					</form>
				</div>

			</div>
			<!-- END! content VPOP --> 
			<div class="TabbedPanelsContent" style="display: none;">
				<ul style="padding-left: 0px;">
					<?php 
					$i = 1;
					foreach ($bangxephangKPOP as $key => $value) {
						if($i===1){?>
						<li class="first-item">
							<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo $value['duongdananhbaihat']?>"></a>
							<div class="container">
								<div class="row des">
									<span class="col rank"><?php echo $i ?></span>
									<div class="col-9 info">
										<h3 class="song-name ellipsis">
											<a class="txt-primary" href="<?php echo base_url()?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat']?>
											</a>
										</h3>
										<h4 class="singer-name ellipsis">
											<?php foreach ($value['casi'] as $key1 => $value1) {?>
											<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi txt-info"><?php echo $value1['tencasi'] ?>
											</a> 

											<?php 
											if ($value1 !== end($value['casi']))
												echo ","; }?>
										</h4>
									</div>
								</div>
							</div>
						</li>
						<?php }
						else {?>
						<li class="rank-item"  >
							<div class="container">
								<div class="row des">
									<span class="col rank"><?php echo $i ?></span>
									<div class="col-9 info">
										<h3 class="song-name ellipsis">
											<a  class="txt-primary" href="<?php echo base_url()?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat'] ?></a>
										</h3>
										<h4 class="singer-name ellipsis">
											<?php foreach ($value['casi'] as $key1 => $value1) {?>
											<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi txt-info"><?php echo $value1['tencasi'] ?>
											</a> 

											<?php 
											if ($value1 !== end($value['casi']))
												echo ","; }?>
										</h4>
									</div>
								</div>
							</div>
						</li>
						<?php	}
						$i=$i+1;
					} ?>
				</ul>
				<div class="footer-bxh">
					<form action="<?php echo base_url() ?>Baihat">
						<button type="submit" class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả
						</button>
					</form>
				</div>

			</div>
			<!-- END! content K-POP --> 
			<!-- content ÂU MỸ -->
			<div class="TabbedPanelsContent" style="display: none;">
				<ul style="padding-left: 0px;">
					<?php 
					$i = 1;
					foreach ($bangxephangUS as $key => $value) {
						if($i===1){?>
						<li class="first-item">
							<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo $value['duongdananhbaihat']?>"></a>
							<div class="container">
								<div class="row des">
									<span class="col rank"><?php echo $i ?></span>
									<div class="col-9 info">
										<h3 class="song-name ellipsis">
											<a class="txt-primary" href="<?php echo base_url()?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat']?>
											</a>
										</h3>
										<h4 class="singer-name ellipsis">
											<?php foreach ($value['casi'] as $key1 => $value1) {?>
											<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi txt-info"><?php echo $value1['tencasi'] ?>
											</a> 

											<?php 
											if ($value1 !== end($value['casi']))
												echo ","; }?>
										</h4>
									</div>
								</div>
							</div>
						</li>
						<?php }
						else {?>
						<li class="rank-item"  >
							<div class="container">
								<div class="row des">
									<span class="col rank"><?php echo $i ?></span>
									<div class="col-9 info">
										<h3 class="song-name ellipsis">
											<a  class="txt-primary" href="<?php echo base_url()?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat'] ?></a>
										</h3>
										<h4 class="singer-name ellipsis">
											<?php foreach ($value['casi'] as $key1 => $value1) {?>
											<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi txt-info"><?php echo $value1['tencasi'] ?>
											</a> 

											<?php 
											if ($value1 !== end($value['casi']))
												echo ","; }?>
										</h4>
									</div>
								</div>
							</div>
						</li>
						<?php	}
						$i=$i+1;
					} ?>
				</ul>
				<div class="footer-bxh">
					<form action="<?php echo base_url() ?>Baihat">
						<button type="submit" class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả
						</button>
					</form>
				</div>

			</div>
			<!-- END! content ÂU MỸ -->

		</div>
	</div>
	<!-- END! tab âm nhac -->

</div>
												<!--Kết thúc bảng xếp hạng-->