<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Medialoot Bootstrap 4 Dashboard Template</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels_VD.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels.js" type="text/javascript"></script>

	<!-- Icons -->
	<link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/sidenav.css" rel="stylesheet">
	<!-- Custom styles -->
	<link href="<?php echo base_url() ?>css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/custom-sidenav.css" rel="stylesheet">
	
	<script>
		<?php foreach ($baihat['thongtinbaihat'] as $key => $value) {
			$obj_baihat=array('tenbaihat'=>$value['tenbaihat'],
				'idbaihat'=>$value['idbaihat'],
				'tencasi'=>$value['tencasi'],
				'duongdannhac'=>$value['duongdannhac'],
				'luotnghe'=>$value['luotnghe'],
				'loibaihat'=>$value['loibaihat']
			);
		} ?>
		<?php foreach ($nguoidang['thongtinnguoidang'] as $key => $value) {
			$obj_nguoidang=array('duongdananh'=>$value['duongdananhnguoidung'],
				'ten'=>$value['ten']);
		} ?>
		<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {

			$obj_nguoidung=array('duongdananh'=>$value['duongdananhnguoidung'],
				'idnguoidung'=>$value['idnguoidung']);
		} ?>
	</script>
	
</head>
<body id="page-top">
	<div class="container-fluid" id="wrapper">

		<!--Bắt đầu navbar-->
		<?php require('navbar.php') ?>
		<!--Kết thúc navbar-->

		<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
			<section class="main-content">
				<div class="col-sm-12">
					<section class="row">
						<div class="col-md-12 col-lg-8">
							<div class="mb-4">
								<form action="#" method="GET" id="timkiem">
									<div class="input-group timkiem-group">
										<input class="form-control input-timkiem" type="text" placeholder="Tìm bài hát" name="keyword" id="keyword" value="">
										<span class="input-group-append">
											<button class="btn btn-primary btn-timkiem" type="submit" >
												<i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</form>
							</div>

							<!--Bắt đầu phần phát nhạc-->
							<div class="mb-4 name-title">
								<h3 class="card-title" id="tenbaihat"><?php echo $obj_baihat['tenbaihat']?></h3>
								<span>-</span>
								<h4 class="card-title" id="tencasi"><a href="#" ><?php echo $obj_baihat['tencasi']?></a></h4>
							</div>
							<div class="card mb-4">
								<img class="card-img-top img-fluid" src="<?php echo base_url() ?>img/img_baihat/Demons-Imagine Dragon.jpg" alt="">
								<audio controls autoplay>
									<source src="<?php echo $obj_baihat['duongdannhac']?>" type="audio/mpeg">
									</audio>
								</div>
								<!--Kết thúc phần phát nhạc-->
								<!--Bắt đầu thanh service-bar-->
								<div class="mb-4  service-bar container" >
									<div class="row">
										<div class="user-upload">
											<img width="50" height="auto" class="circle float-left profile-photo" alt="profile photo" src="<?php echo $obj_nguoidang['duongdananh']?>">
											Upload bởi:<br>
											<a href="#" id="name-user-upload"><?php echo $obj_nguoidang['ten']?></a>
										</div>
										<ul id="menu-dichvu">

											<li><a class="btn-secondary btn-lg" href="#"><i  class="fa fa-plus" ></i> Thêm vào</a></li>
											<li><a class="btn-secondary btn-lg" href="#"><i  class="fa fa-download" ></i> Tải về</a></li>
											<li><a class="btn-secondary btn-lg" href="#"><i  class="fa fa-reply" ></i> Phản hồi</a></li>
											<li><i class="fa fa-headphones" aria-hidden="true"></i><p class="item-baihat-luotnghe" style="display:inline;"><?php echo $obj_baihat['luotnghe']?></p></li>
										</ul>
									</div>
								</div>
								<!--Kết thúc phần service-bar-->
								<div class="card mb-4">
									<div class="card-block">
										<div class="lyric" id="_divLyricHtml">
											<div class="pd_name_lyric">
												<h3 class="card-title name_lyric">Lời bài hát: <?php echo $obj_baihat['tenbaihat']?></h3>        
												<p class="name_post">
												</p>
												<p class="name_post">Lời đăng bởi: <a rel="nofollow" href="#" title="philiplee"><?php echo $obj_nguoidang['ten']?></a></p>
											</div>

											<p id="divLyric" class="pd_lyric trans" style="height:auto;max-height:400px;overflow:scroll;">
												<?php echo nl2br($obj_baihat['loibaihat']);?>

											</p>
										</div>
									</div>
								</div>

								<!--Phần bình luận-->
								<div class="card mb-4">
									<div class="card-block">
										<section class="box-comment">
											<h3 class="card-title name_lyric">Bình luận (
												<span id="commentCounter"><?php echo count($binhluan['danhsachbinhluan'])?></span> )
											</h3>    
										</section>
										<form action="" method="POST" class="frm-comment fn-comment">
											<div class="container">
												<div class=" row">
													<p class="col-md-3 avatar">
														<img width="100" height="auto" class="photo-user-comment" alt="profile photo" src="<?php echo $obj_nguoidung['duongdananh']?>">
													</p>
													<div class="col-md-9 wrap-comment">
														<textarea name="content" class="text-input txt-comment"></textarea>
													</div>
												</div>
												<div class="card-block">
													<button class="btn btn-sm btn-success offset-3 btn-binhluan" type="button">Bình luận </button>
													<input type="text" hidden id="idnguoidung" value="<?php echo $obj_nguoidung['idnguoidung'] ?>">
													<input type="text" hidden id="idbaihat" value="<?php echo $obj_baihat['idbaihat']?>">
												</div>
												<div class="container thongbao-binhluan"></div>
											</div>

											<div class="divider"></div>
											<div class="card-block">
												<select class="form-control col-3 offset-9 cbb-binhluan">
													<option value="new">Mới nhất</option>
													<option value="old">Cũ nhất</option>
												</select>
											</div>
											<!--bình luân-->
											<div class="container binhluan-container">
												<?php foreach ($binhluan['danhsachbinhluan'] as $key => $value) { ?>

												<div class="form-group row ">
													<p class="col-md-2 avatar"><img width="60" height="auto" class="photo-user-comment" alt="profile photo" src="<?php echo $value['duongdananhnguoidung'] ?>"></p>
													<div class="col-md-10">
														<div class="row user-comment"><a href="#"><?php echo $value['ten'] ?></a></div>
														<div class="row comment">
															<span ><?php echo $value['noidung'] ?></span>
														</div>
														<div class="row time-comment">
															<span><?php echo $value['thoigian'] ?></span>
														</div>
													</div>
												</div>


												<?php } ?>
											</div>
											<!--kết thúc bình luân-->

										</form>

									</div>

								</div>
								<!--Kết thúc phần bình luận-->
							</div>
							<div class="col-md-12 col-lg-4">

								<div class="card mb-4">
									<div class="card-block">

										<!--Bắt đầu phẩn bảng xếp hạng-->
										<h3 class="card-title">Bảng xếp hạng Playlist</h3>
										<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
										<div id="bxh">
											<div class="TabbedPanels" id="TabbedPanels1">
												<ul class="row TabbedPanelsTabGroup">
													<li tabindex="0" class="col TabbedPanelsTab TabbedPanelsTabSelected TabbedPanelsTabFocused" style="border-top-left-radius:10px;">V-POP</li>
													<li tabindex="0" class="col TabbedPanelsTab">K-POP</li>
													<li tabindex="0" class="col TabbedPanelsTab" style="border-top-right-radius:10px;">ÂU-MỸ</li>
												</ul>
												<div class="TabbedPanelsContentGroup">
													<div class="TabbedPanelsContent TabbedPanelsContentVisible" style="display: block;">
														<ul style="padding-left: 0px;">
															<li class="first-item">
																<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo base_url() ?>img/dungnhuthoiquen.jpg"></a>
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-01">01</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis">
																				<a title="Vợ Người Ta - Phan Mạnh Quỳnh" class="txt-primary" href="#">Đừng như thói quen</a>
																			</h3>
																			<h4 class="singer-name ellipsis">
																				<a title="Phan Mạnh Quỳnh" class="txt-info" href="http://mp3.zing.vn/nghe-si/Phan-Manh-Quynh#from=laban">JayKii, Sara Lưu</a>
																			</h4>
																		</div>
																	</div>
																</div>
																<!-- END! des -->
																<!-- END! bai 1 -->
															</li>
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-02">02</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Người âm phủ</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">OSAD, VRT</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 2 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-03">03</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Chạm đáy nỗi đau</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">ERIK</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 3 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-04">04</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Cô Gái M52</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">HuyR, Tùng Viu</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 4 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-05">05</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Ai Khóc Nỗi Đau Này</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Bảo Anh</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 5 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-06">06</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Ngắm Hoa Lệ Rơi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Châu Khải Phong</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 6 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-07">07</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Yêu Thương Ngày Đó</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Soobin Hoàng Sơn</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 7 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-08">08</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Lỡ Như Anh Yêu Em?</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Châu Khải Phong</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 8 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-09">09</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Quan Trọng Là Thần Thái</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">OnlyC, Karik</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 9 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-10">10</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Tâm sự tuổi 30</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Trịnh Thăng Bình</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 10 -->
														</ul>
														<div class="footer-bxh">
															<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
														</div>

													</div>
													<!-- END! content VPOP --> 
													<div class="TabbedPanelsContent" style="display: none;">
														<ul style="padding-left: 0px;">
															<li class="first-item">
																<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo base_url() ?>img/FIRE.jpg"></a>
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-01">01</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis">
																				<a title="Vợ Người Ta - Phan Mạnh Quỳnh" class="txt-primary" href="#">FIRE
																				</a>
																			</h3>
																			<h4 class="singer-name ellipsis">
																				<a title="Phan Mạnh Quỳnh" class="txt-info" href="http://mp3.zing.vn/nghe-si/Phan-Manh-Quynh#from=laban">BTS (Bangtan Boys)
																				</a>
																			</h4>
																		</div>
																	</div>
																</div>
																<!-- END! des -->
																<!-- END! bai 1 -->
															</li>
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-02">02</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a>
																			</h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 2 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-03">03</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 3 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-04">04</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 4 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-05">05</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 5 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-06">06</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 6 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-07">07</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 7 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-08">08</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 8 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-09">09</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 9 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-10">10</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 10 -->
														</ul>
														<div class="footer-bxh">
															<div class="footer-bxh">
																<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
															</div>
														</div>

													</div>
													<!-- END! content K-POP --> 
													<div class="TabbedPanelsContent" style="display: none;">
														<ul style="padding-left: 0px;">
															<li class="first-item">
																<a class="zthumb" href="#"><img width="100%" alt="Cause I Love You" src="<?php echo base_url() ?>img/noo.jpg"></a>
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-01">01</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis">
																				<a title="Vợ Người Ta - Phan Mạnh Quỳnh" class="txt-primary" href="#">Cause i love you</a>
																			</h3>
																			<h4 class="singer-name ellipsis">
																				<a title="Phan Mạnh Quỳnh" class="txt-info" href="http://mp3.zing.vn/nghe-si/Phan-Manh-Quynh#from=laban">Noo Phước Thịnh</a>
																			</h4>
																		</div>
																	</div>
																</div>
																<!-- END! des -->
																<!-- END! bai 1 -->
															</li>
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-02">02</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 2 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-03">03</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 3 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-04">04</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 4 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-05">05</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 5 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-06">06</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 6 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-07">07</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 7 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-08">08</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 8 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-09">09</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 9 -->
															<li class="rank-item">
																<div class="container">
																	<div class="row des">
																		<span class="col rank rank-10">10</span>
																		<div class="col-9 info">
																			<h3 class="song-name ellipsis"><a title="Em cứ đi đi" class="txt-primary" href="#">Em cứ đi đi</a></h3>
																			<h4 class="singer-name ellipsis"><a title="Khắc Việt" class="txt-info" href="#">Khắc Việt</a></h4>
																		</div>
																	</div>
																</div>
															</li>
															<!-- END! bai 10 -->
														</ul>
														<div class="footer-bxh">
															<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
														</div>

													</div>
													<!-- END! content ÂU MỸ -->

												</div>
											</div>
											<!-- END! tab âm nhac -->

										</div>
										<!--Kết thúc bảng xếp hạng-->
									</div>

								</div>
								<!--Kết thúc phần chủ đề-->

								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Todo List</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" aria-expanded="false" aria-haspopup="true" type="button" data-toggle="dropdown"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a>
											</div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>
										<ul class="todo-list mt-2 mb-2">

											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input class="custom-control-input" id="customCheck1" type="checkbox">
														<label class="custom-control-label custom-control-description" for="customCheck1">Make Coffee</label>
														<div class="float-right action-buttons"><a class="trash" href="#"><em class="fa fa-trash"></em></a></div>
													</div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input class="custom-control-input" id="customCheck2" type="checkbox">
														<label class="custom-control-label custom-control-description" for="customCheck2">Check emails</label>
														<div class="float-right action-buttons"><a class="trash" href="#"><em class="fa fa-trash"></em></a></div>
													</div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input class="custom-control-input" id="customCheck3" type="checkbox">
														<label class="custom-control-label custom-control-description" for="customCheck3">Reply to Jane</label>
														<div class="float-right action-buttons"><a class="trash" href="#"><em class="fa fa-trash"></em></a></div>
													</div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input class="custom-control-input" id="customCheck4" type="checkbox">
														<label class="custom-control-label custom-control-description" for="customCheck4">Work on the new design</label>
														<div class="float-right action-buttons"><a class="trash" href="#"><em class="fa fa-trash"></em></a></div>
													</div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control custom-checkbox">
														<input class="custom-control-input" id="customCheck5" type="checkbox">
														<label class="custom-control-label custom-control-description" for="customCheck5">Get feedback</label>
														<div class="float-right action-buttons"><a class="trash" href="#"><em class="fa fa-trash"></em></a></div>
													</div>
												</div>
											</li>
										</ul>
										<div class="card-footer todo-list-footer">
											<div class="input-group">
												<input class="form-control input-md" id="btn-input" type="text" placeholder="Add new task"><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>



						</section>
					</div>
				</section>

			</main>

		</div>
		<script type="text/javascript">
			var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
		</script>
		<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script>
			$(".btn-binhluan").click(function(event) {
				if($(".txt-comment").val()!="")
				{
					var currentdate = new Date(); 
					var datetime = currentdate.getFullYear() + "-"
					+ (currentdate.getMonth()+1)  + "-" 
					+ currentdate.getDate() + " "  
					+ currentdate.getHours() + ":"  
					+ currentdate.getMinutes() + ":" 
					+ currentdate.getSeconds();
					console.log(datetime);
					$.ajax({
						url: '<?php echo base_url()?>/trinhphatnhac/binhluan',
						type: 'POST',
						dataType: 'html',
						data: {
							noidung:$(".txt-comment").val(),
							idnguoidung:$("#idnguoidung").val(),
							idbaihat:$("#idbaihat").val(),
							thoigian:datetime
						},
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function(data) {
						console.log("complete");
						if($('.cbb-binhluan option:selected').val()==="new")
						{
							$(".binhluan-container").prepend(data);
						}
						else{
							$(".binhluan-container").append(data);
						}
						$(".thongbao").remove();
						$noidung='<div class="alert alert-success thongbao" role="alert" style="color:green;"><b>Bình luận được đăng thành công.</b></div>';
						$(".thongbao-binhluan").append($noidung);
						noidung:$(".txt-comment").val("");	
					});
				}
				else
				{
					$noidung='<div class="alert alert-danger thongbao" role="alert" style="color: #721c24;"><b>Nội dung bình luận không được để trống.</b></div>';
					$(".thongbao-binhluan").append($noidung);
				}

			});

			$('.cbb-binhluan').change(function(event) {
				if($('.cbb-binhluan option:selected').val()==="new")
				{
					$.ajax({
						url: '<?php echo base_url()?>/trinhphatnhac/binhluan_moinhat',
						type: 'POST',
						dataType: 'html',
						data: {idbaihat:$("#idbaihat").val()},
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function(data) {
						console.log("complete");
						$(".binhluan-container").empty();
						$(".binhluan-container").append(data);
					});
					
				}
				else
				{
					$.ajax({
						url: '<?php echo base_url()?>/trinhphatnhac/binhluan_cunhat',
						type: 'POST',
						dataType: 'html',
						data: {idbaihat:$("#idbaihat").val()},
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function(data) {
						console.log("complete");
						$(".binhluan-container").empty();
						$(".binhluan-container").append(data);
					});
				}
				
			});

			$(".btn-timkiem").click(function(event) {
				$tukhoa=$("#keyword").val();
				if($tukhoa==='')
					$("#timkiem").attr('action', '<?php echo base_url() ?>baihat');
				else
					$("#timkiem").attr('action', '<?php echo base_url() ?>baihat/timkiem/?keyword='+$tukhoa);
			});
		</script>
	</body>
	</html>