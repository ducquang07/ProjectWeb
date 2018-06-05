<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ZikZak - Website nghe nhạc trực tuyến miễn phí</title>


	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels_VD.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url() ?>SpryAssets_AN/SpryTabbedPanels.js" type="text/javascript"></script>
	<!-- jquery upload và crop image -->
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/load-image.all.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/canvas-to-blob.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/jquery.iframe-transport.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload-process.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>jqueryupload/js/jquery.fileupload-image.js"></script>

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
	<!-- css upload và crop image -->
	<link href="<?php echo base_url() ?>jqueryupload/css/jquery.fileupload-ui.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>jqueryupload/css/jquery.fileupload.css" rel="stylesheet">
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
						<div class="col-md-12">
							<div class="card card-user mb-4 ">
								<div class="row">
									<div class="col-lg-3">
										<div class="avatar-casi">
											<img id="anhdaidien" src="<?php foreach ($thongtincasi as $key => $value) {echo $value['duongdananhcasi'];}?>" alt="" />
										</div>
										<div class="content">
											<div class="friend-profile__groups">
												<div class="user-profile-details">
													<h4 class="title"><?php foreach ($thongtincasi as $key => $value) {echo $value['tencasi'];}?></h4>

													<div class="user-profile-details__line">
														<span data-translate-inner="STR_PROFILE_LABEL_GENDER">Giới tính:</span>
														<span data-translate-inner="STR_GENDER_MALE"><?php foreach ($thongtincasi as $key => $value) {echo $value['gioitinh'];}?></span>
													</div>
													<div class="user-profile-details__line">
														<span data-translate-inner="STR_PROFILE_LABEL_BIRTHDAY">Ngày sinh:</span>
														<span style="position: relative;"><?php foreach ($thongtincasi as $key => $value) {echo $value['ngaysinh'];}?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="image-background">
											<img src="<?php foreach ($thongtincasi as $key => $value) {echo $value['duongdananhbia'];}?>" alt="..." style=" width: 100%;">
											<!-- <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="..." style=" width: 100%;"> -->
										</div>
									</div>
									<!-- <p><button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Chỉnh sửa</button></p> -->
								</div>
							</div>
						</div>
						<!--Step 2-->
						<div class="card-block">
							<h4  class="card-title" style="color: green;">TIỂU SỬ</h4>
							<div class="canvas-wrapper">
								<p><?php foreach ($thongtincasi as $key => $value) {echo $value['mota'];}?></p>
							</div>
						</div>
					</section>
					<section class="row">
						<div class="col-md-12">
							<!--Phần Playlist-->
							<div class="card mb-4" id="playlist">
								<div class="card-block">
									<h3 class="card-title">Danh sách Playlist</h3>
									<div class="canvas-wrapper">
										<?php if(count($danhsachplaylist)===0){ ?>
										<div class="alert alert-danger thongbao" role="alert" style="color: #721c24;">
											<b>Không tìm thấy playlist.</b>
										</div>
										<?php }?>
										<div class="row playlist-container">

											<?php foreach ($danhsachplaylist as $key => $value) { ?>
											<!--Item-playlist-->
											<div class="col-lg-3 col-sm-6 portfolio-item">
												<div class="card h-100" id="item-playlist">
													<a href="#" class="item-container">
														<span class="item-playlist-luotnghe">
															<i class="fa fa-headphones" aria-hidden="true"></i>
															<span id=""><?php echo $value['luotnghe'] ?>
															</span>
														</span>
														<div class="item-hover">
															<div class="item-hover-content">
																<i class="fa fa-play fa-2x"></i>
															</div>
														</div>
														<img class="card-img-top" width="150" height="200" src="<?php echo $value['duongdananhplaylist'] ?>" alt="">
													</a>
													<div class="card-body">
														<h4 class="card-title">
															<a href="#"><?php echo $value['tenplaylist'] ?></a>
														</h4>
														<p class="card-text"><?php echo $value['tencasi'] ?></p>
													</div>
												</div>
											</div>
											<!--Item-playlist-->
											<?php } ?>
											
										</div>
									</div>
								</div>
								<div class="box_pageview">
									<?php echo $phantrang ?>
								</div>
							</div>
						</div>
						<!--Kết thuc phần playlist-->
					</div>
				</section>
			</div>
		</section>
	</main>
</div>
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.js"></script>
    	<!-- Placed at the end of the document so the pages load faster -->
    	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script type="text/javascript" src="<?php echo base_url() ?>vendor/lib/typeahead.js"></script>
    	

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    	<script type="text/javascript">
    		var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    	</script>

    	<script>
    		$('.box_pageview a').click(function(event) {
    			$('.box_pageview').find('a').removeClass('active');
    			$(this).addClass('active');
    			$.ajax({
    				url: '<?php echo base_url() ?>ThongTinCaSi/Load_Page',
    				type: 'POST',
    				dataType: 'html',
    				data: {
    					page:$(this).attr("id"),
    					idcasi: <?php foreach ($thongtincasi as $key => $value) echo $value['idcasi'] ?>,
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
    				$('.playlist-container div').remove();
    				$('.playlist-container').append(data);
    			});
    		});
    	</script>
    </body>
    </html>
