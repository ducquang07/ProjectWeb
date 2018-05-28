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

	<style>
	


</style>
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
						<!--Step 2-->
						
						<div class="col-md-12 col-lg-4">

							<div class="card card-user mb-4 ">

								<div class="image-background">
									<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="..." style=" width: 100%;">
								</div>
								<div class="avatar">
									<img src="http://localhost/ProjectWeb/img/User-Pic.jpg" alt="" />
								</div>
								<div class="content">
									<div class="friend-profile__groups">
										<div class="user-profile-details">
											<h4 class="title">Nguyễn Thành Thái<br></h4>

											<div class="user-profile-details__line">
												<span data-translate-inner="STR_PROFILE_LABEL_GENDER">Giới tính:</span>
												<span data-translate-inner="STR_GENDER_MALE">Nam</span>
											</div>
											<div class="user-profile-details__line">
												<span data-translate-inner="STR_PROFILE_LABEL_BIRTHDAY">Ngày sinh:</span>
												<span style="position: relative;">09/04/1997</span>
											</div>
											<div class="user-profile-details__line">
												<span data-translate-inner="STR_PROFILE_LABEL_BIRTHDAY">Địa chỉ:</span>
												<span style="position: relative;">anywhhere</span>
											</div>
										</div>
									</div>
									<p><button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Chỉnh sửa</button></p>
								</div>
							</div>

							<div class="card mb-4">
								<div class="card-block">

									<h3 class="card-title">Chủ đề hot</h3>

									<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>

									<div class="list-group" id="chude">
										<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
											<img  src="<?php echo base_url() ?>img/img_chude/chude-1.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">
										</a>
										<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
											<img  src="<?php echo base_url() ?>img/img_chude/chude-2.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">

										</a>
										<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
											<img  src="<?php echo base_url() ?>img/img_chude/chude-3.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">

										</a>
										<a href="/chu-de/new-hit/IWZ9ZIWD.html#home_chude_01" title="Những Bài Hit" class="list-group-item list-group-item-action flex-column align-items-start">
											<img  src="<?php echo base_url() ?>img/img_chude/chude-4.png" class="img-responsive" alt="Những Bài Hit" style="width: 100%;">

										</a>
									</div>
									<button class="btn btn-sm btn-subtle" type="button" style="margin-top:10px;"><em class="fa fa-list-ul"></em> Xem tất cả</button>
									<div class="divider"></div>
									<div id="calendar"></div>
									<div class="divider"></div>
									<!--Kết thúc phần chủ đề-->

								</div>

							</div>
							<!--Kết thúc phần chủ đề-->
						</div>
						<!--Step 2-->
						<!--Step 1-->

						<div class="col-md-12 col-lg-8">
							<div class="card mb-4 " >
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-user"></i>  Thông tin người dùng<ng></ng></h3>
									<form class="form" action="#">
										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Tài khoản:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="thainguyen">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Email:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="15520783@gm.uit.edu.vn">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Điện thoại:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="+841633481630">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-5"></div>
											<div class="col-md-4">
												<button class="btn btn-lg btn-secondary" type="button"><i class="fa fa-pencil"></i> Chỉnh sửa</button>
											</div>
											<div class="col-md-3"></div>
										</div>
									</form>
								</div>
							</div>


							


							<!--Bài hát yêu thích-->
							<div class="card mb-4" id="baihatyeuthich">
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-heart"></i>  Bài hát yêu thích</h3>
									<div class="table-responsive" id="contain-bdsaihat">
										<table class="table table-striped" id="BaiHat-TBL">
											
											<div class="alert alert-danger thongbao" role="alert" style="color: #721c24;">
												<b>Không tìm thấy bài hát.</b>
											</div>
											
											<tbody>
												<!--Item bai hat-->
												
												<tr class="item-baihat">
													<td>
														<div class="content-baihat">
															<a href="#" class="item-baihat-tenbaihat"></a>
															-
															<a href="#" class="item-baihat-tencasi"></a>
														</div>
													</td>
													<td>

													</td>
													<td>
														<div class="item-baihat-luotnghe"><span class="item-baihat-icon"><i class="fa fa-headphones " aria-hidden="true"></i></span>
														</div>
													</td>
													<td>
														<span class="item-baihat-icon"><i class="fa fa-play" aria-hidden="true"></i></span>
														<span class="item-baihat-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
														<span class="item-baihat-icon"><i class="fa fa-download" aria-hidden="true"></i></span>
													</td>
												</tr>
												
												<!--Ket thuc Item bai hat-->
											</tbody>
										</table>
									</div>
									<div class="box_pageview">

									</div>
								</div>
							</div>
							<!--Bài hát yêu thích-->

							<!--Bài hát upload-->
							<div class="card mb-4" id="baihatyeuthich">
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-upload"></i>  Bài hát upload</h3>
									<div class="table-responsive" id="contain-bdsaihat">
										<table class="table table-striped" id="BaiHat-TBL">
											
											<div class="alert alert-danger thongbao" role="alert" style="color: #721c24;">
												<b>Không tìm thấy bài hát.</b>
											</div>
											
											<tbody>
												<!--Item bai hat-->
												
												<tr class="item-baihat">
													<td>
														<div class="content-baihat">
															<a href="#" class="item-baihat-tenbaihat"></a>
															-
															<a href="#" class="item-baihat-tencasi"></a>
														</div>
													</td>
													<td>

													</td>
													<td>
														<div class="item-baihat-luotnghe"><span class="item-baihat-icon"><i class="fa fa-headphones " aria-hidden="true"></i></span>
														</div>
													</td>
													<td>
														<span class="item-baihat-icon"><i class="fa fa-play" aria-hidden="true"></i></span>
														<span class="item-baihat-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
														<span class="item-baihat-icon"><i class="fa fa-download" aria-hidden="true"></i></span>
													</td>
												</tr>
												
												<!--Ket thuc Item bai hat-->
											</tbody>
										</table>

										<button class="btn btn-lg btn-success" type="button"><i class="fa fa-upload"></i> Upload bài hát</button>
									</div>
									<div class="box_pageview">

									</div>
								</div>
							</div>
							<!--Bài hát upload-->


							<!--Playlist trang chủ-->
							<div class="card mb-4" id="playlist">
								<div class="card-block">
									<h3 class="card-title">Playlist cá nhân</h3>

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
													<div class="footer">
														<div class="container">
															<span class="col-md-4 m-lg-2 btn btn-warning"><i class="fa fa-pencil"></i></span>
															<span class="col-md-1"></span>
															<span class="col-md-4 btn btn-danger"><i class="fa fa-remove"></i></span>
														</div>
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
													<div class="footer">
														<div class="container">
															<span class="col-md-4 m-lg-2 btn btn-warning"><i class="fa fa-pencil"></i></span>
															<span class="col-md-1"></span>
															<span class="col-md-4 btn btn-danger"><i class="fa fa-remove"></i></span>
														</div>
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
													<div class="footer">
														<div class="container">
															<span class="col-md-4 m-lg-2 btn btn-warning"><i class="fa fa-pencil"></i></span>
															<span class="col-md-1"></span>
															<span class="col-md-4 btn btn-danger"><i class="fa fa-remove"></i></span>
														</div>
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
													<div class="footer">
														<div class="container">
															<span class="col-md-4 m-lg-2 btn btn-warning"><i class="fa fa-pencil"></i></span>
															<span class="col-md-1"></span>
															<span class="col-md-4 btn btn-danger"><i class="fa fa-remove"></i></span>
														</div>
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
													<div class="footer">
														<div class="container">
															<span class="col-md-4 m-lg-2 btn btn-warning"><i class="fa fa-pencil"></i></span>
															<span class="col-md-1"></span>
															<span class="col-md-4 btn btn-danger"><i class="fa fa-remove"></i></span>
														</div>
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
													<div class="footer">
														<div class="container">
															<span class="col-md-4 m-lg-2 btn btn-warning"><i class="fa fa-pencil"></i></span>
															<span class="col-md-1"></span>
															<span class="col-md-4 btn btn-danger"><i class="fa fa-remove"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<!--Kết thuc phần playlist-->


							<!--Bắt đầu phần album-->
							<div class="card mb-4" id="album">
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-heart"></i>  Playlist yêu thích</h3>
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
								</div>
							</div>
							<!--Kết thúc phần album-->




						</div>
						<!--Step 1-->



					</div>
				</section>
			</div>
		</section>
	</main>
</div>
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--
    	<script src="<?php echo base_url() ?>js/chart.min.js"></script>
    	<script src="<?php echo base_url() ?>js/chart-data.js"></script>
    	<script src="<?php echo base_url() ?>js/easypiechart.js"></script>
    	<script src="<?php echo base_url() ?>js/easypiechart-data.js"></script>
    	<script src="<?php echo base_url() ?>js/bootstrap-datepicker.js"></script>
    	<script src="<?php echo base_url() ?>js/custom.js"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>


    <script>
    	

    	$(".btn-timkiem").click(function(event) {
    		$.ajax({
    			url: 'baihat/Load_with_keyword',
    			type: 'POST',
    			dataType: 'html',
    			data: {keyword: $('#keyword').val()},
    		})
    		.done(function() {
    			console.log("success");
    		})
    		.fail(function() {
    			console.log("error");
    		})
    		.always(function(data) {
    			console.log("complete");
    		});

    	});

    	$(document).ready(function() {
    		$keyword=$("#keyword").val();
    	});

    	$('.box_pageview a').click(function(event) {
    		$('.box_pageview').find('a').removeClass('active');
    		$(this).addClass('active');
    		$.ajax({
    			url: '<?php echo base_url() ?>/baihat/Load_Page',
    			type: 'POST',
    			dataType: 'html',
    			data: {
    				page:$(this).attr("id"),
    				keyword:$keyword,
    				limit:<?php echo $limit ?>
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
    			$('#BaiHat-TBL tbody tr').remove();
    			$('#BaiHat-TBL tbody').append(data);
    		});
    	});

    	/*$("#keyword").change(function(event) {
    		if ($(this).val()==='') $("#timkiem").attr('action', '<?php echo base_url() ?>/baihat');
    		else $("#timkiem").attr('action', '<?php echo base_url() ?>/baihat/Load_with_keyword');	
    	});*/

    	
    </script>

</body>
</html>
