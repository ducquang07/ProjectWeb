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
				'loibaihat'=>$value['loibaihat'],
				'duongdananhbaihat'=>$value['duongdananhbaihat'],
				'casi'=> $value['casi']
			);
		} ?>

		<?php foreach ($playlist['thongtinplaylist'] as $key => $value) {
			$obj_playlist=array('tenplaylist'=>$value['tenplaylist'],
				'idplaylist'=>$value['idplaylist'],
				'idcasi'=>$value['idcasi'],
				'tencasi'=>$value['tencasi'],
				'luotnghe'=>$value['luotnghe'],
				'duongdananhplaylist'=>$value['duongdananhplaylist']
			);
		} ?>

		<?php foreach ($nguoitaoplaylist['thongtinnguoitaoplaylist'] as $key => $value) {
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

		<nav class="navbar navbar-expand-lg navbar-dark bg-zikzak fixed-top" id="mainNav">
			<!-- <a class="navbar-brand" href="index.html">Start Bootrap</a> -->
			<a class="navbar-brand " href="#page-top" id="logo">
				<div class="tada">
					<img src="<?php echo base_url() ?>img/logo/logo.png">
				</div>
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="btn btn-stripped dropdown-toggle" id="dropdown_User" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">
							<?php 
							if (isset($_SESSION["ten"]))
							{
								echo '<img width="40" height="auto" class="circle float-left profile-photo" alt="profile photo" src="'.$this->session->userdata('duongdananh').'">';
								echo "<div class=\"username mt-1\">";
								echo "<div class=\"mb-1\">".$this->session->userdata('ten')."</div>";
								echo "<h6>".$this->session->userdata('trangthai')."</h6>";
								echo "</div>";
								echo "</a>";
								echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="margin-right: 1.5rem;"><a class="dropdown-item" href="'.base_url().'TrangCaNhan"><em class="fa fa-user-circle mr-1"></em> Trang cá nhân</a>';
								echo '<a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>';
								echo '<a class="dropdown-item" href="'.base_url().'TrangChu/logout_controller"><em class="fa fa-sign-out mr-1"></em> Logout</a>';
								echo '</div>';
							}
							else
							{
								echo '<img width="40" height="auto" class="circle float-left profile-photo" alt="profile photo" src="http://localhost/ProjectWeb/img/default_avatar.jpg">';
								echo "</a>";
								echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="margin-right: 1.5rem;">';
								echo '<a class="dropdown-item" href="" data-toggle="modal" data-target="#login"><em class="fa fa-sign-in mr-1"></em> Đăng nhập </a>';
								echo '<a class="dropdown-item" href="" data-toggle="modal" data-target="#signup"><em class="fa fa-user-plus mr-1"></em> Đăng ký </a>';
								echo '</div>';
							}
							?>
						</li>
					</ul>
					<!--Bắt đầu phần sidenav-->
					<ul class="navbar-nav navbar-sidenav mainnavbar" id="mainnavbar">
						<li class="nav-item" data-toggle="tooltip" id="trangchu">
							<a class="nav-link" href="<?php echo base_url() ?>TrangChu">
								<i class="fa fa-fw fa-home"></i>
								<span class="nav-link-text">Trang Chủ</span>
							</a>
						</li>
						<li class="nav-item " data-toggle="tooltip" id="baihat">
							<a class="nav-link" href="<?php echo base_url() ?>BaiHat">
								<i class="fa fa-fw fa-music"></i>
								<span class="nav-link-text">Bài Hát</span>
							</a>
						</li>
						<li class="nav-item active" data-toggle="tooltip" id="playlist">
							<a class="nav-link" href="<?php echo base_url() ?>Playlist">
								<i class="fa fa-fw fa-table"></i>
								<span class="nav-link-text">Playlist</span>
							</a>
						</li>
						<li class="nav-item" data-toggle="tooltip" id="chude">
							<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
								<i class="fa fa-fw fa-star-o"></i>
								<span class="nav-link-text">Chủ Đề</span>
							</a>
							<ul class="sidenav-second-level collapse" id="collapseComponents">
								<li>
									<a href="#">Nhạc Hot</a>
								</li>
								<li>
									<a href="#">For Love</a>
								</li>
								<li>
									<a href="#">Wedding</a>
								</li>
								<li>
									<a href="#">EDM</a>
								</li>
								<li>
									<a href="#">US-UK Hits</a>
								</li>
								<li>
									<a href="<?php echo base_url() ?>ChuDe" ><i>Xem Thêm . . .</i></a>
								</li>
							</ul>
						</li>
					</ul>
					<!--Kết thúc phần sidenar-->
				</div>
			</nav>
			<!-- bắt đầu phần modal login -->
			<div class="modal fade" id="login">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<form action="Index/singin_controller" method="post" enctype="multidata/form-data">
							<div class="modal-header">
								<h4 class="modal-title"><strong>Đăng nhập</strong></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="username"><b>User name</b></label>
									<input class="form-control" type="text" placeholder="Nhập tên đăng nhập" name="username" required>
								</div>
								<div class="form-group">
									<label for="psw"><b>Password</b></label>
									<input class="form-control" type="password" placeholder="Nhập mật khẩu" name="pass" required>
								</div>
								<div class="form-group">
									<label>
										<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
									</label>
								</div>
								<p>
									<center>Don't have an account? <a href="#signup" style="color:dodgerblue">Sign up</a></center>
								</p>                                            				
							</div>
							<div class="modal-footer">
								<input type="submit" name="dangnhap" class=" btn btn-success" value="Đăng nhập">
							</div>
						</form>	
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
			<!-- /. kết thúc phần modal login -->

			<!-- bắt đầu phần modal sign up-->
			<div class="modal fade" id="signup">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<form action="Index/signup_controller" method="post" enctype="multidata/form-data">
							<div class="modal-header">
								<h4 class="modal-title"><strong>Đăng ký</strong></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="full-name"><b>Họ tên:</b></label>
									<input class="form-control" type="text" placeholder="Enter your full name" name="fullname" required>
								</div>
								<div class="form-group">
									<label for="register-age"><b>Ngày sinh:</b></label>
									<!-- <div class="col-10"> -->
										<input class="form-control" name="ngaysinh" type="date" value="2011-08-19" id="ngaysinh">
										<!-- </div> -->
									</div>
									<div class="form-group" id="gioitinh">
										<label><b>Giới tính:</b></label>
										<label for="register-male" class="radio control-inline">
											<input type="radio" id="register-male" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam"> Nam
										</label>
										<label for="register-female" class="radio control-inline">
											<input type="radio" id="register-female" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ"> Nữ
										</label>
										<label for="register-neutral" class="radio control-inline">
											<input type="radio" id="register-neutral" name="gender" required="required" value="Khác"> Khác
										</label>
									</div>
									<div class="form-group">
										<label for="diachi"><b>Địa chỉ:</b></label>
										<input class="form-control" type="text" placeholder="Enter your address" name="diachi" required>
									</div>
									<div class="form-group email">
										<label for="email"><b>Email:</b></label>
										<input class="form-control checkemail" type="text" placeholder="Enter your email" id="email" name="email" required>
									</div>
									<!-- <hr id="hrdangky_duoi"> -->
									<div class="form-group tendangnhap">
										<label for="username"><b>Tên đăng nhập:</b></label>
										<input class="form-control checkusername" type="text" placeholder="Enter user name" id="username" name="username" required>
									</div>
									<div class="form-group">
										<label for="psw"><b>Mật khẩu:</b></label>
										<input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
									</div>
									<div class="form-group">
										<label for="psw-repeat"><b>Nhập lại mật khẩu:</b></label>
										<input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" required>
									</div>
									<div class="form-group">
										<label>
											<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
										</label>
									</div>
									<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
								</div>
								<div class="modal-footer">
									<input type="submit" name="dangky" class=" btn btn-success " value="Đăng ký">
								</div>
							</form>	
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>
				<!-- /. kết thúc phần modal sign up-->

				<!--Kết thúc navbar-->

				<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
					<section class="main-content">
						<div class="col-sm-12">
							<section class="row">
								<div class="col-md-12 col-lg-8">
									<div class="mb-4">
										<form action="#" method="GET" id="timkiem">
											<div class="input-group timkiem-group">
												<input class="form-control input-timkiem" type="text" placeholder="Tìm playlist" name="keyword" id="keyword" value="">
												<span class="input-group-append">
													<button class="btn btn-primary btn-timkiem" type="submit" >
														<i class="fa fa-search"></i>
													</button>
												</span>
											</div>
										</form>
									</div>

									<!--Bắt đầu phần phát nhạc-->

									<div class="card mb-1" style="background-color: #F1F3F4" id="content-playlist">
										<div class="row">
											<img class="card-img-top img-fluid col-md-5" src="<?php echo $obj_playlist['duongdananhplaylist'] ?>" alt="">
											<div class=" name-title col-md-7">
												<div class="mb-4">
													<p></p>
													<h3 class="card-title" id="tenplaylist"><?php echo $obj_playlist['tenplaylist']?></h3>
													<span>-</span>
													<h4 class="card-title"><a  href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $obj_baihat['tenbaihat'] ?>" ><?php echo $obj_playlist['tencasi']?></a></h4>
												</div>
												
												<p class="col-md-7 text-center" id="baihat_dangphat">
													<h5>Đang phát : <a id="tenbaihat" href="#"><?php echo $obj_baihat['tenbaihat'] ?></a></h5>
													Thể hiện :
													<div id="casithehien"> 
														<?php foreach ($obj_baihat['casi'] as $key => $value) {?>
														<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value['idcasi'] ?>" class="item-baihat-tencasi"><?php echo $value['tencasi'] ?>
														</a> 

														<?php 
														if ($value !== end($obj_baihat['casi']))
															echo ","; }?>
													</div>
												</p>
											</div>

										</div>

										<audio id='audio' controls autoplay><source src="<?php echo $obj_baihat['duongdannhac']?>" type="audio/mpeg">
										</audio>
										
									</div>
									<!--Kết thúc phần phát nhạc-->
									


									<!--Playlist bài hát-->
									<div class="card mb-4">
										<div class="">
											<div class="lyric" id="_divLyricHtml">

												<div  class="pd_lyric trans" style="height:auto;max-height:300px;overflow:scroll;">

													<table class="table table-striped" id="BaiHat-TBL">
														<?php if(count($danhsachbaihat)===0){ ?>
														<div class="alert alert-danger thongbao" role="alert" style="color: #721c24;">
															<b>Không tìm thấy bài hát.</b>
														</div>
														<?php }?>
														<tbody>
															<!--Item bai hat-->
															<?php foreach ($danhsachbaihat as $key => $value) {?>
															<tr class="item-baihat" id="<?php echo $value['idbaihat'] ?>">
																<td>
																	<div class="content-baihat" >
																		<a href="#" class="item-baihat-tenbaihat" id="<?php echo $value['idbaihat'] ?>"><?php echo $value['tenbaihat'] ?>
																		</a>
																		-
																		<div class='casi'>
																			<?php foreach ($value['casi'] as $key1 => $value1) {?>
																			<a href="<?php echo base_url() ?>ThongTinCaSi/casi/<?php echo $value1['idcasi'] ?>" class="item-baihat-tencasi"><?php echo $value1['tencasi'] ?>
																			</a> 
																			<?php 
																			if ($value1 !== end($value['casi']))
																				echo ","; }?>
																		</div>
																		<div class="loibaihat" hidden >
																			<?php echo nl2br($value['loibaihat']) ?>
																		</div>
																	</div>
																</td>
																<td>

																</td>
																<td>
																	<div class="item-baihat-luotnghe"><?php echo $value['luotnghe'] ?><span class="item-baihat-icon"><i class="fa fa-headphones " aria-hidden="true"></i></span>
																	</div>
																</td>
																<td>
																	<a class="item-baihat-icon" href="<?php echo base_url() ?>BaiHat/TrinhPhatNhac/<?php echo $value['idbaihat'] ?>"><i class="fa fa-play" aria-hidden="true"></i></a>
																	<span class="item-baihat-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
																	<span class="item-baihat-icon"><i class="fa fa-download" aria-hidden="true"></i></span>
																</td>
															</tr>
															<?php } ?>
															<!--Ket thuc Item bai hat-->
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!--Playlist bài hát-->

									<!--Bắt đầu thanh service-bar-->
									<div class="mb-4  service-bar container" >
										<div class="row">
											<div class="user-upload">
												<img width="50" height="auto" class="circle float-left profile-photo" id="anhnguoiupload" alt="profile photo" src="<?php echo $obj_nguoidang['duongdananh']?>">
												Upload bởi:<br>
												<a href="#" id="name-user-upload"><?php echo $obj_nguoidang['ten']?></a>
											</div>
											<ul id="menu-dichvu">

												<li><a class="btn-secondary btn-lg" href="#"><i  class="fa fa-plus" ></i> Thêm vào</a></li>
												<li><a class="btn-secondary btn-lg" href="#"><i  class="fa fa-download" ></i> Tải về</a></li>
												<li><a class="btn-secondary btn-lg" href="#"><i  class="fa fa-reply" ></i> Phản hồi</a></li>
												<li><i class="fa fa-headphones" aria-hidden="true"></i><p class="item-baihat-luotnghe" style="display:inline;"><?php echo $obj_playlist['luotnghe']?></p></li>
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
				var i=0;

				var list_audio=[];

				<?php foreach ($danhsachbaihat as $key => $value) {?>
					list_audio.push({
						idbaihat:"<?php echo $value['idbaihat']?>",
						tenbaihat:"<?php echo $value['tenbaihat'] ?>",
						duongdannhac:"<?php echo $value['duongdannhac'] ?>",
						duongdananhnguoidung:"<?php echo $value['duongdananhnguoidung'] ?>",
						casi:'<?php foreach ($value['casi'] as $key1 => $value1) {
							echo '<a href="'.base_url().'ThongTinCaSi/casi/'.$value1['idcasi'].'" class="item-baihat-tencasi">'.$value1['tencasi'].'</a>' 	;

							if ($value1 !== end($value['casi']))
								echo ","; }?>'											
						});
					<?php }?>

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
								url: '<?php echo base_url()?>/TrinhPhatNhac/binhluan',
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
								url: '<?php echo base_url()?>/TrinhPhatNhac/binhluan_moinhat',
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
								url: '<?php echo base_url()?>/TrinhPhatNhac/binhluan_cunhat',
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
							$("#timkiem").attr('action', '<?php echo base_url() ?>Playlist');
						else
							$("#timkiem").attr('action', '<?php echo base_url() ?>Playlist/timkiem/?keyword='+$tukhoa);
					});



					$(".item-baihat-tenbaihat").click(function(event) {
						$idbaihat=$(this).attr('id');
						$loibaihat=$(this).closest('.content-baihat').find('.loibaihat').html();
						i=list_audio.findIndex(item => item.idbaihat==$idbaihat);
						$("#tenbaihat").html(list_audio[i].tenbaihat);
						$("#casithehien").html(list_audio[i].casi);
						$("#divLyric").html($loibaihat);
						$(".name_lyric").html("Lời bài hát: "+list_audio[i].tenbaihat);
						$("#anhnguoiupload").attr('src',list_audio[i].duongdananhnguoidung);
						aud = document.getElementById("audio");
						aud.src = list_audio[i].duongdannhac;
						aud.load();
						aud.play();
					});


					//Xử lí chuyển bài hát playlist
					var nextSong= "";
					var aud = document.getElementById("audio");
					aud.onended = function() {
						i++;
						nextSong = list_audio[i].duongdannhac;
						aud.src = nextSong;
						aud.load();
						aud.play();
						$(".name_lyric").html("Lời bài hát: "+list_audio[i].tenbaihat);
						$("#anhnguoiupload").attr('src',list_audio[i].duongdananhnguoidung);
						$("#tenbaihat").html(list_audio[i].tenbaihat);
						$("#casithehien").html(list_audio[i].casi);
						$("#divLyric").html($('#'+list_audio).find('.loibaihat').html());
					};

				</script>

			</body>
</html>
