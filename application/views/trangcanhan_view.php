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
						
						<div class="col-md-12 col-lg-4">

							<div class="card card-user mb-4 ">

								<div class="image-background">
									<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="..." style=" width: 100%;">
								</div>
								<div class="avatar-profile">
									<img id="anhdaidien" src="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {
										echo $value['duongdananhnguoidung'];
									}?>" alt="" />
								</div>
								<div class="content">
									<div class="friend-profile__groups">
										<div class="user-profile-details">
											<h4 class="title"><?php echo $this->session->userdata('ten'); ?><br></h4>

											<div class="user-profile-details__line">
												<span data-translate-inner="STR_PROFILE_LABEL_GENDER">Giới tính:</span>
												<span data-translate-inner="STR_GENDER_MALE"><?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['gioitinh'];}?></span>
											</div>
											<div class="user-profile-details__line">
												<span data-translate-inner="STR_PROFILE_LABEL_BIRTHDAY">Ngày sinh:</span>
												<span style="position: relative;"><?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['ngaysinh'];}?></span>
											</div>
										</div>
									</div>
									<!-- <p><button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Chỉnh sửa</button></p> -->
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
							<div class="card mb-4 thongtinnguoidung" >
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-user"></i>  Thông tin người dùng<ng></ng></h3>
									<!-- <form class="form" action="#"> -->
										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Họ tên:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['ten'];}?>">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Ngày sinh:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['ngaysinh'];}?>">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Giới tính:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['gioitinh'];}?>">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Email:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['email'];}?>">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Điện thoại:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['sdt'];}?>">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Địa chỉ:</label>
											<div class="col-md-9">
												<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['diachi'];}?>">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-5"></div>
											<div class="col-md-4">
												<button class="btn btn-lg btn-secondary suathongtin"><i class="fa fa-pencil"></i> Chỉnh sửa</button>
											</div>
											<div class="col-md-3"></div>
										</div>
										<!-- </form> -->
									</div>
								</div>

								<div class="card mb-4 thongtinnguoidungsua d-none" >
									<div class="card-block">
										<h3 class="card-title"><i class="fa fa-user"></i>  Thông tin người dùng<ng></ng></h3>
										<!-- <form class="form" action="#"> -->

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Ảnh đại diện:</label>
												<div class="col-md-9">
													<div class="row">
														<div class="col-sm-6">
															<img class="img-fluid" src="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['duongdananhnguoidung'];}?>"></img>
														</div>
														<div class="col-sm-6">
															<span class="btn btn-outline-success fileinput-button">
																<i class="glyphicon glyphicon-plus"></i>
																<span>Thêm ảnh...</span>
																<input id="anhavatar" class="form-control" type="file" name="files[]" multiple="">
															</span>
														</div>
													</div>
													<!-- <input id="anhavatar" name="files[]" class="form-control" type="file"> -->
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Họ tên:</label>
												<div class="col-md-9">
													<input id="tenedit" class="form-control" type="text" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['ten'];}?>">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Ngày sinh:</label>
												<div class="col-md-9">
													<input id="ngaysinhedit" class="form-control" type="date" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['ngaysinh'];}?>">
												</div>
											</div>

											<div class="form-group row" id="gioitinhedit">
												<label class="col-md-3 col-form-label">Giới tính:</label>
												<div class="col-md-9">
													<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) 
													if($value['gioitinh']=='Nam')
													{
														echo '<label for="register-male" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam" checked > Nam 
														</label>';
														echo '<label for="register-female" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ"> Nữ 
														</label>';
														echo '<label for="register-neutral" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" value="Khác"> Khác 
														</label>';
													}
													else if($value['gioitinh']=='Nữ')
													{
														echo '<label for="register-male" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam" > Nam
														</label>';
														echo '<label for="register-female" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ" checked> Nữ 
														</label>';
														echo '<label for="register-neutral" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" value="Khác"> Khác
														</label>';
													}
													else
													{
														echo '<label for="register-male" class="radio control-inline">  
														<input type="radio" name="genderedit" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam" > Nam 
														</label>';
														echo '<label for="register-female" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ" > Nữ 
														</label>';
														echo '<label for="register-neutral" class="radio control-inline"> 
														<input type="radio" name="genderedit" required="required" value="Khác" checked> Khác 
														</label>';
													}
													?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Email:</label>
												<div class="col-md-9">
													<input id="emailedit" class="form-control" type="text" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['email'];}?>">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Điện thoại:</label>
												<div class="col-md-9">
													<input id="sdtedit" class="form-control" type="text"  value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['sdt'];}?>">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Địa chỉ:</label>
												<div class="col-md-9">
													<input id="diachiedit" class="form-control" type="text" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['diachi'];}?>">
												</div>
											</div>
											
											<div class="form-group row">
												<div class="col-md-7"></div>
												<div class="col-md-5 nutluu">
													<input type="button" class="btn btn-lg btn-secondary thoatchinhsua" value="Thoát">
													<input type="button" class="btn btn-lg btn-success luuchinhsua" value="Lưu">
													<br>
												</div>
											</div>
											<!-- </form> -->
										</div>
									</div>

									<div class="card mb-4 thongtintaikhoan" >
										<div class="card-block">
											<h3 class="card-title"><i class="fa fa-user"></i>  Thông tin tài khoản<ng></ng></h3>
											<form class="form" action="#">

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Tài khoản:</label>
													<div class="col-md-9">
														<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['tendangnhap'];}?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Mật khẩu:</label>
													<div class="col-md-9">
														<button class="btn btn-lg btn-secondary doimatkhau" type="button">Đổi mật khẩu</button>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Email:</label>
													<div class="col-md-9">
														<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['email'];}?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Điện thoại:</label>
													<div class="col-md-9">
														<input name="readonly" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['sdt'];}?>">
													</div>
												</div>
											</form>
										</div>
									</div>

									<div class="card mb-4 thongtintaikhoansua d-none" >
										<div class="card-block">
											<h3 class="card-title"><i class="fa fa-user"></i>  Đổi mật khẩu<ng></ng></h3>
											<form class="form" action="#">

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Tài khoản:</label>
													<div class="col-md-9">
														<input id="tendangnhap" name="tendangnhap" class="form-control" type="text" readonly="" value="<?php foreach ($nguoidung['thongtinnguoidung'] as $key => $value) {echo $value['tendangnhap'];}?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Mật khẩu cũ:</label>
													<div class="col-md-9">
														<input id="matkhaucu" name="matkhaucu" class="form-control" type="password">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-md-3 col-form-label">Mật khẩu mới:</label>
													<div class="col-md-9">
														<input id="matkhaumoi" name="matkhaumoi" class="form-control" type="password">
													</div>
												</div>
<!-- 										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Nhập lại mật khẩu mới:</label>
											<div class="col-md-9">
												<input id="rematkhaumoi" name="rematkhaumoi" class="form-control nhaplaimatkhau" type="text">
											</div>
										</div> -->

										<div class="form-group row">
											<div class="col-md-7"></div>
											<div class="col-md-5 nutluumatkhau">
												<input type="button" class="btn btn-lg btn-secondary thoatsuamatkhau" value="Thoát">
												<input type="button" class="btn btn-lg btn-success luumatkhau" value="Lưu">
												<br>
											</div>
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

										<a href="<?php echo base_url() ?>dangnhac" class="btn btn-lg btn-outline-success"><i class="fa fa-upload"></i> Upload bài hát</a>
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
											<?php foreach ($playlist['danhsachplaylist'] as $key => $value) { ?>
											<div class="col-lg-4 col-sm-6 portfolio-item">
												<div class="card h-100" id="item-playlist">
													<a href="#" class="item-container">
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
													<div class="footer">
														<div class="row">

															<div class="col-md-4">
																<form action="<?php echo base_url()?>capnhatplaylist" method="POST" enctype="multi-data">
																	<button class="btn btn-lg btn-warning">Sửa</button>
																	<input type="text" hidden value="<?php echo $value['idplaylist'] ?>" name='idplaylist'>
																</form>
															</div>
															<span class="col-md-1"></span>
															<div class="col-md-4"><button class="btn btn-lg btn-danger">Xóa</button></div>
														</div>
													</div>
												</div>
											</div>
											<!--Item-playlist-->
											<?php } ?>



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
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.js"></script>
    	<!-- Placed at the end of the document so the pages load faster -->
    	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	
    	

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    	<script type="text/javascript">
    		var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    	</script>


    	<script>
    		$('.suathongtin').click(function(event) {
    			$( "div.thongtinnguoidung" ).addClass( "d-none" );
    			$( "div.thongtinnguoidungsua" ).removeClass( "d-none" );
    		});

    		$('.doimatkhau').click(function(event) {
    			$( "div.thongtintaikhoan" ).addClass( "d-none" );
    			$( "div.thongtintaikhoansua" ).removeClass( "d-none" );
    		});

    		$('.thoatchinhsua').click(function(event) {
    			$( "div.thongtinnguoidungsua" ).addClass( "d-none" );
    			$( "div.thongtinnguoidung" ).removeClass( "d-none" );
    		});

    		$('.thoatsuamatkhau').click(function(event) {
    			$( "div.thongtintaikhoansua" ).addClass( "d-none" );
    			$( "div.thongtintaikhoan" ).removeClass( "d-none" );
    		});

    		duongdan = '<?php echo base_url() ?>';
    		tenfile = null;
    		$('#anhavatar').fileupload({
    			url: duongdan + 'TrangCaNhan/uploadfile',
    			dataType: 'json',
    			disableImageResize: /Android(?!.*Chrome)|Opera/ 
    			.test(window.navigator && navigator.userAgent),
		    imageMaxWidth: 800,//crop ngoại trừ android và opera
		    imageMaxHeight: 800,
		    imageCrop: true, // Force cropped images
		    done: function(e, data){
		    	$.each(data.result.files, function (index, file) {
		    		tenfile = file.url;
		    	});
		    }
		});

    		$('.luuchinhsua').click(function(event) {
    		// console.log($('input:radio[name=genderedit]:checked').val()); 
    		// console.log($('[name="genderedit"]:radio:checked').val());
    		// cả 2 câu đều dùng được
    		if(!tenfile)
    		{
    			tenfile= $("#anhdaidien").attr("src");
    		}
    		$.ajax({
    			url: 'TrangCaNhan/suathongtin',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				ten : $('#tenedit').val(),
    				gioitinh : $('[name="genderedit"]:radio:checked').val(), //lấy giới tính thông qua name từ radio
    				ngaysinh : $('#ngaysinhedit').val(),
    				sdt : $('#sdtedit').val(),
    				diachi : $('#diachiedit').val(),
    				email : $('#emailedit').val(),
    				duongdananhnguoidung : tenfile
    			},
    		})
    		.done(function(data) {
    			console.log("success");
    			$("i.trangthailuu").remove();
    			if(data>0)
    			{
    				$('.nutluu').append('<i style="color:red;" class="trangthailuu">Đã lưu thành công</i>');
    				location.reload();
    			}
    			else
    			{
    				$('.nutluu').append('<i style="color:red;" class="trangthailuu">Lưu thất bại</i>');
    				location.reload();
    			}
    		})
    		.fail(function() {
    			console.log("error");
    		})
    	});

    		$('.luumatkhau').click(function(event) {
    			$.ajax({
    				url: 'TrangCaNhan/doimatkhau',
    				type: 'POST',
    				dataType: 'json',
    				data: {
    					tendangnhap : $('#tendangnhap').val(),
    					matkhaucu : $('#matkhaucu').val(),
    					matkhaumoi : $('#matkhaumoi').val()
    				},
    			})
    			.done(function(data) {
    				console.log("success");
    				$("i.trangthailuumatkhau").remove();
    				if(data>0)
    				{
    					$('.nutluumatkhau').append('<i style="color:red;" class="trangthailuumatkhau">Đã thay đổi thành công</i>');
		            // location.reload();
		        }
		        else
		        {
		        	$('.nutluumatkhau').append('<i style="color:red;" class="trangthailuumatkhau">Thay đổi thất bại</i>');
		            // location.reload();
		        }
		    })
    			.fail(function() {
    				console.log("error");
    			})

    		});

    	</script>

    </body>
    </html>
