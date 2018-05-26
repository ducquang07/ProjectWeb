<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ZikZak - Website nghe nhạc trực tuyến miễn phí</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels_VD.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels.js" type="text/javascript"></script>

	<!-- Icons -->
	<link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/sidenav.css" rel="stylesheet">
	<!-- Custom styles -->
	<link href="<?php echo base_url() ?>css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/custom-sidenav.css" rel="stylesheet">
</head>
<body id="page-top">
	<div class="container-fluid" id="wrapper">
		<!--Bắt đầu navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-zikzak fixed-top" id="mainNav">
			<!-- <a class="navbar-brand" href="index.html">Start Bootrap</a> -->
			<a class="navbar-brand" href="#page-top" id="logo">
				<img src="<?php echo base_url() ?>img/logo/logo.png">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="btn btn-stripped dropdown-toggle" id="dropdown_User" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">
							<img width="40" height="auto" class="circle float-left profile-photo" alt="profile photo" src="<?php echo base_url() ?>img/User-Pic.jpg">
							<div class="username mt-1">
								<div class="mb-1">Thái Nguyễn</div>
								<h6>Super Admin</h6>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="margin-right: 1.5rem;"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
							<a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
							<a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a>
						</div>
					</li>
					
				</ul>
				<!--Bắt đầu phần sidenav-->
				<?php require('sidenav.php') ?>
				<!--Kết thúc phần sidenar-->
			</div>
			
		</nav>
		<!--Kết thúc navbar-->
		<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">

			<section class="main-content">
				<div class="col-sm-12">
					<section class="row">
						<div class="col-md-12 col-lg-8">
							<div class="mb-4">
								<div class="input-group timkiem-group">
									<input class="form-control input-timkiem" type="text" placeholder="Tìm bài hát">
									<span class="input-group-append">
										<button class="btn btn-primary btn-timkiem" type="button">
											<i class="fa fa-search"></i>
										</button>
									</span>
								</div>
							</div>

							<div class="card mb-4">
								<h5 class="card-header">Danh mục thể loại</h5>
								<div class="card-body" id="item-Theloai">
									<!--Danh muc the loai -->
									<div class="danhmuc_Theloai">	
										<div class="row">
											<div class="col-lg-4" id="Ten-Theloai">Việt Nam</div>
											<div class="col-lg-8" id="Chitiet-Theloai">
												<ul class="list-unstyled mb-0 row">
													<?php foreach ($theloai_Vietnam['danhsachtheloai'] as $key => $value){?> 
													<li class="item-chitiet-Theloai"><a href="#"><?php echo $value['tentheloai'] ?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
									<!--Ket thuc danh muc the loai -->
									<!--Danh muc the loai -->
									<div class="danhmuc_Theloai">	
										<div class="row ">
											<div class="col-lg-4" id="Ten-Theloai">Âu Mỹ</div>
											<div class="col-lg-8" id="Chitiet-Theloai">
												<ul class="list-unstyled mb-0 row">
													<?php foreach ($theloai_AuMy['danhsachtheloai'] as $key => $value){?> 
													<li class="item-chitiet-Theloai"><a href="#"><?php echo $value['tentheloai'] ?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
									<!--Ket thuc danh muc the loai -->
									<!--Danh muc the loai -->
									<div class="danhmuc_Theloai">	
										<div class="row ">
											<div class="col-lg-4" id="Ten-Theloai">Châu Á</div>
											<div class="col-lg-8" id="Chitiet-Theloai">
												<ul class="list-unstyled mb-0 row">
													<?php foreach ($theloai_ChauA['danhsachtheloai'] as $key => $value){?>
													<li class="item-chitiet-Theloai"><a href="#"><?php echo $value['tentheloai'] ?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--Ket thuc danh muc the loai -->
							</div>


							<!--Phần danh sách bài hát-->
							<div class="card mb-4">
								<div class="card-block">
									<h3 class="card-title">Tất cả bài hát</h3>
										<div class="table-responsive ">
											<table class="table table-striped" id="BaiHat-TBL">
												
												<tbody>

													<?php foreach ($baihat['danhsachbaihat'] as $key => $value) {?>
													<tr class="item-baihat">
														<td>
															<div class="content-baihat">
																<a href="#" class="item-baihat-tenbaihat"><?php echo $value['tenbaihat'] ?></a>
																-
																<a href="#" class="item-baihat-tencasi"><?php echo $value['tencasi'] ?></a>
															</div>
														</td>
														<td>
															
														</td>
														<td>
															<div class="item-baihat-luotnghe"><?php echo $value['luotnghe'] ?><span class="item-baihat-icon"><i class="fa fa-headphones " aria-hidden="true"></i></span>
															</div>
														</td>
														<td>
															<span class="item-baihat-icon"><i class="fa fa-play" aria-hidden="true"></i></span>
															<span class="item-baihat-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
															<span class="item-baihat-icon"><i class="fa fa-download" aria-hidden="true"></i></span>
														</td>
													</tr>
													<?php } ?>
													<!--Item bai hat-->
													
													<!--Ket thuc Item bai hat-->	
												</tbody>
											</table>
										</div>
										<div class="box_pageview">
											<a href="javascript:;" class="active">1</a>
											<a href="#" rel="next" title="">2</a>
											<a href="#" rel="next" title="">3</a>
											<a href="#" rel="next" title="">4</a>
											<a href="#" rel="next" title="">5</a>
											<a href="#" rel="next" title="">6</a>
											<a href="#" rel="next" title="">7</a>
											<a href="#" rel="Trang cuối" title="">Trang cuối</a>
										</div>
									</div>

								</div>

								<!--Kết thúc phần danh sách bài hát-->
								<!--
								<div class="card mb-4">
									<div class="card-block">
										<ol class="carousel-indicators">
											<a data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image1.jpg">
											</a>
											<a data-target="#carouselExampleIndicators" data-slide-to="1">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image2.jpg">
											</a>
											<a data-target="#carouselExampleIndicators" data-slide-to="2">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image3.jpg">
											</a>
											<a data-target="#carouselExampleIndicators" data-slide-to="2">
												<img width="160" height="70" alt="Tạm Thời Tôi Muốn Một Mình" src="img/img_trangchu/header-image4.jpg">
											</a>
										</ol>
									</div>
								</div>-->
								
								


								<!--Playlist trang chủ-->
								<div class="card mb-4" id="playlist">
									<div class="card-block">
										<h3 class="card-title">Nghe gì hôm nay</h3>

										<h6 class="card-subtitle mb-2 text-muted">Playlist</h6>
										<div class="canvas-wrapper">
											<div class="row">
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-1.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Đón hè nhẹ nhàng</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-2.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Nhạc Sôi Động Dành Cho Ngày Hè</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-3.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Nhạc Acoustic Cho Những Ngày Hè</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-4.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Pool Party</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-5.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Những chuyến đi dài</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
												<!--Item-playlist-->
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-6.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Những Bài Hát Hay Nhất Được Đặt Làm Nhạc Chuông</a>
															</h4>
															<p class="card-text">Various Artists</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									</div>
								</div>
								<!--Kết thuc phần playlist-->

								<!--Bắt đầu phần album-->
								<div class="card mb-4" id="album">
									<div class="card-block">
										<h3 class="card-title">Album hot</h3>
										<h6 class="card-subtitle mb-2 text-muted">Playlist</h6>
										<div class="canvas-wrapper">
											<div class="row">
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-1.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Xin Đừng Rời Xa (Single)
																</a>
															</h4>
															<p class="card-text">Ngô Kiến Huy</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-2.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Rời Bỏ (Single)</a>
															</h4>
															<p class="card-text">Hòa Minzy</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-3.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Rồi Người Thương Cũng Hóa Người Dưng </a>
															</h4>
															<p class="card-text">Hiền Hồ</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-4.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Đừng Như Thói Quen (Single)</a>
															</h4>
															<p class="card-text">JayKii, Sara</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-5.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Hôn Anh (Single)</a>
															</h4>
															<p class="card-text">MIN</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 portfolio-item">
													<div class="card h-100" id="item-playlist">
														<a href="#" class="item-container">
															<div class="item-hover">
																<div class="item-hover-content">
																	<i class="fa fa-play fa-2x"></i>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_album/album-6.jpg" alt="">
														</a>
														<div class="card-body">
															<h4 class="card-title">
																<a href="#">Only You (Single)</a>
															</h4>
															<p class="card-text">Hà Nhi</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									</div>
								</div>
								<!--Kết thúc phần album-->


								<!--Bắt đầu phần ca sĩ-->
								<div class="card mb-4" id="album">
									<div class="card-block">
										<h3 class="card-title">Ca sĩ hot</h3>
										<h6 class="card-subtitle mb-2 text-muted"></h6>
										<div class="canvas-wrapper" >
											<div class="row">
												<?php foreach ($danhsachcasihot['danhsachcasi'] as $key => $value) {?>
													<div class="col-lg-4 col-sm-6 portfolio-item">
													<!--Item-casi-->
													<div class="card h-100" id="item-casi">
														<a href="#">
															<div class="item-hover">
																<div class="item-hover-content">
																	<p class="text-white"><?php echo $value['tencasi'] ?></p>
																</div>
															</div>
															<img class="card-img-top" width="150" height="200" src="<?php echo $value['duongdananh'] ?>" alt="">
														</a>
														
													</div>
												</div>
												<?php } ?>
												
											
											</div>
										</div>
										<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									</div>
								</div>
								<!--Kết thúc phần ca sĩ-->	



							</div>
							<div class="col-md-12 col-lg-4">

								<div class="card mb-4">
									<div class="card-block">
										<!--Bắt đầu phần chủ đề-->
										<h3 class="card-title">Chủ đề hot</h3>

										<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>

										<div class="list-group" id="chude">
											<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
												<img  src="<?php echo base_url() ?>img/img_chude/chude-1.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
													<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-2.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
													<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-3.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
													<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
														<img  src="<?php echo base_url() ?>img/img_chude/chude-4.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
														<!--<span class="des">
															<span class="sum-pci">Đừng bỏ lỡ những ca khúc HIT đã từng gây sóng gió một thời.</span>
														</span>-->
													</a>
												</div>
												<button class="btn btn-sm btn-subtle" type="button" style="margin-top:10px;"><em class="fa fa-list-ul"></em> Xem tất cả</button>
												<div class="divider"></div>
												<div id="calendar"></div>
												<div class="divider"></div>
												<!--Kết thúc phần chủ đề-->
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
																	<li class="rank-item"  >
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
									</dropdowniv>
									<div class="card mb-4">
										<div class="card-block">
											<h3 class="card-title">Todo List</h3>
											<div class="dropdown card-title-btn-container">
												<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
													<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
													<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
												</div>
												<h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>
												<ul class="todo-list mt-2 mb-2">

													<li class="todo-list-item">
														<div class="checkbox mt-1 mb-2">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheck1">
																<label class="custom-control-label custom-control-description" for="customCheck1">Make Coffee</label>
																<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
															</div>
														</li>
														<li class="todo-list-item">
															<div class="checkbox mt-1 mb-2">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck2">
																	<label class="custom-control-label custom-control-description" for="customCheck2">Check emails</label>
																	<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																</div>
															</li>
															<li class="todo-list-item">
																<div class="checkbox mt-1 mb-2">
																	<div class="custom-control custom-checkbox">
																		<input type="checkbox" class="custom-control-input" id="customCheck3">
																		<label class="custom-control-label custom-control-description" for="customCheck3">Reply to Jane</label>
																		<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																	</div>
																</li>
																<li class="todo-list-item">
																	<div class="checkbox mt-1 mb-2">
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label custom-control-description" for="customCheck4">Work on the new design</label>
																			<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																		</div>
																	</li>
																	<li class="todo-list-item">
																		<div class="checkbox mt-1 mb-2">
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck5">
																				<label class="custom-control-label custom-control-description" for="customCheck5">Get feedback</label>
																				<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
																			</div>
																		</li>
																	</ul>
																	<div class="card-footer todo-list-footer">
																		<div class="input-group">
																			<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
																				<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
																			</span></div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
														<section class="row">
															<div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div>
														</section>
													</div>
												</section>
											</main>
										</div>
									</div>

    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    	<script src="<?php echo base_url() ?>js/chart.min.js"></script>
    	<script src="<?php echo base_url() ?>js/chart-data.js"></script>
    	<script src="<?php echo base_url() ?>js/easypiechart.js"></script>
    	<script src="<?php echo base_url() ?>js/easypiechart-data.js"></script>
    	<script src="<?php echo base_url() ?>js/bootstrap-datepicker.js"></script>
    	<script src="<?php echo base_url() ?>js/custom.js"></script>
    	<script>
    		var startCharts = function () {
    			var chart1 = document.getElementById("line-chart").getContext("2d");
    			window.myLine = new Chart(chart1).Line(lineChartData, {
    				responsive: true,
    				scaleLineColor: "rgba(0,0,0,.2)",
    				scaleGridLineColor: "rgba(0,0,0,.05)",
    				scaleFontColor: "#c5c7cc "
    			});
    		}; 
    		window.setTimeout(startCharts(), 1000);
    	</script>

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    	<script type="text/javascript">
    		var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    	</script>
    </body>
    </html>
