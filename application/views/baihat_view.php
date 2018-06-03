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
		<?php require('navbar.php') ?>
		<!--Kết thúc navbar-->

		<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">

			<section class="main-content">
				<div class="col-sm-12">
					<section class="row">

						<!--Step 1-->

						<div class="col-md-12 col-lg-8">
							<div class="mb-4">
								<form action="#" method="GET" id="timkiem">
									<div class="input-group timkiem-group">
										<input class="form-control input-timkiem" type="text" placeholder="Tìm bài hát" name="keyword" id="keyword" value="<?php echo $keyword ?>">
										<span class="input-group-append">
											<button class="btn btn-primary btn-timkiem" type="submit" >
												<i class="fa fa-search"></i>
											</button>
										</span>
									</div>
								</form>
							</div>


							<!--Phần thể loại-->
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
													<li class="item-chitiet-Theloai" id="<?php echo $value['idtheloai'] ?>"><a href="#"><?php echo $value['tentheloai'] ?></a></li>
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
													<li class="item-chitiet-Theloai" id="<?php echo $value['idtheloai'] ?>"><a href="#"><?php echo $value['tentheloai'] ?></a></li>
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
													<li class="item-chitiet-Theloai" id="<?php echo $value['idtheloai'] ?>"><a href="#"><?php echo $value['tentheloai'] ?></a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--Ket thuc danh muc the loai -->
							</div>
							<!--kết thúc phần thể loại-->


							<!--Phần danh sách bài hát-->
							<div class="card mb-4">
								<div class="card-block">
									<h3 class="card-title">Tất cả bài hát</h3>
									<div class="table-responsive" id="contain-bdsaihat">
										<table class="table table-striped" id="BaiHat-TBL">
											<?php if(count($baihat['danhsachbaihat'])===0){ ?>
											<div class="alert alert-danger thongbao" role="alert" style="color: #721c24;">
												<b>Không tìm thấy bài hát.</b>
											</div>
											<?php }?>
											<tbody>
												<!--Item bai hat-->
												<?php foreach ($baihat['danhsachbaihat'] as $key => $value) {?>
												<tr class="item-baihat">
													<td>
														<div class="content-baihat">
															<a href="<?php echo base_url() ?>baihat/trinhphatnhac/<?php echo $value['idbaihat'] ?>" class="item-baihat-tenbaihat"><?php echo $value['tenbaihat'] ?></a>
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
												<!--Ket thuc Item bai hat-->
											</tbody>
										</table>
									</div>
									<div class="box_pageview">
										<?php echo $phantrang ?>
									</div>
								</div>
							</div>

							<!--Kết thúc phần danh sách bài hát-->



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
						<!--Step 1-->


						<!--Step 2-->
						<!--Bắt đầu phần chủ đề-->
						<div class="col-md-12 col-lg-4">

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
    	

    	/*$(".btn-timkiem").click(function(event) {
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

    	});*/


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
    			console.log(<?php echo $limit ?>);
    			$('#BaiHat-TBL tbody tr').remove();
    			$('#BaiHat-TBL tbody').append(data);
    		});
    	});

    	/*$("#keyword").change(function(event) {
    		$tukhoa=$(this).val();
    		if ($tukhoa==='') $("#timkiem").attr('action', '<?php echo base_url() ?>/baihat');
    		else $("#timkiem").attr('action', '<?php echo base_url() ?>baihat/timkiem/'+$tukhoa);	
    	});*/

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
