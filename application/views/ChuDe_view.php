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
						<li class="nav-item" data-toggle="tooltip" id="baihat">
							<a class="nav-link" href="<?php echo base_url() ?>BaiHat">
								<i class="fa fa-fw fa-music"></i>
								<span class="nav-link-text">Bài Hát</span>
							</a>
						</li>
						<li class="nav-item" data-toggle="tooltip" id="playlist">
							<a class="nav-link" href="<?php echo base_url() ?>Playlist">
								<i class="fa fa-fw fa-table"></i>
								<span class="nav-link-text">Playlist</span>
							</a>
						</li>
						<li class="nav-item active" data-toggle="tooltip" id="chude">
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
										<div class="input-group timkiem-group">
											<input class="form-control input-timkiem" type="text" placeholder="Tìm chủ đề">
											<span class="input-group-append">
												<button class="btn btn-primary btn-timkiem" type="button">
													<i class="fa fa-search"></i>
												</button>
											</span>
										</div>
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
															<li class="item-chitiet-Theloai" id="<?php echo $value['idtheloai'] ?>">
																<a href="#"><?php echo $value['tentheloai'] ?>	
																</a>
															</li>
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
															<li class="item-chitiet-Theloai" id="<?php echo $value['idtheloai'] ?>">
																<a href="#"><?php echo $value['tentheloai'] ?></a>
															</li>
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
															<li class="item-chitiet-Theloai" id="<?php echo $value['idtheloai'] ?>">
																<a href="#"><?php echo $value['tentheloai'] ?></a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!--Ket thuc danh muc the loai -->
									</div>
									<!--kết thúc phần thể loại-->

									<!--Phần Playlist-->
									<div class="card mb-4" id="chude">
										<div class="card-block">
											<h4  class="card-title" >
												<a href="chu-de.html">CHỦ ĐỀ NỔI BẬT</a>
											</h4>
											<div class="canvas-wrapper">
												<div class="row">
													
													<!--Item-chude-->
													<div class="col-lg-6 portfolio-item">
														<div class="card h-100" id="item-chude">
															<a href="#" class="item-container">
																<div class="item-hover">
																	<div class="item-hover-content">
																		<i class="fa fa-play fa-2x"></i>
																	</div>
																</div>
																<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-1.jpg" alt="">
															</a>
															<div class="card-body">
																<div class="jumbotron jumbotron-fluid">
																	<h4 class="card-title">
																		<a href="#">EDM</a>
																	</h4>
																</div>
																<ul>
																	<li>
																		<a href="#">EDM Superstar DJ 2017</a>
																	</li>
																	<li>
																		<a href="#">Best EDM Track For Summer</a>
																	</li>
																	<li>
																		<a href="#">Ultra Music Fetival 2018</a>
																	</li>
																</ul>
																
															</div>
														</div>
													</div>

													<!--Item-chude-->
													<div class="col-lg-6 portfolio-item">
														<div class="card h-100" id="item-chude">
															<a href="#" class="item-container">
																<div class="item-hover">
																	<div class="item-hover-content">
																		<i class="fa fa-play fa-2x"></i>
																	</div>
																</div>
																<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-1.jpg" alt="">
															</a>
															<div class="card-body">
																<div class="jumbotron jumbotron-fluid">
																	<h4 class="card-title">
																		<a href="#">EDM</a>
																	</h4>
																</div>
																<ul>
																	<li>
																		<a href="#">EDM Superstar DJ 2017</a>
																	</li>
																	<li>
																		<a href="#">Best EDM Track For Summer</a>
																	</li>
																	<li>
																		<a href="#">Ultra Music Fetival 2018</a>
																	</li>
																</ul>
																
															</div>
														</div>
													</div>

													<!--Item-chude-->
													<div class="col-lg-6 portfolio-item">
														<div class="card h-100" id="item-chude">
															<a href="#" class="item-container">
																<div class="item-hover">
																	<div class="item-hover-content">
																		<i class="fa fa-play fa-2x"></i>
																	</div>
																</div>
																<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_playlist/playlist-1.jpg" alt="">
															</a>
															<div class="card-body">
																<div class="jumbotron jumbotron-fluid">
																	<h4 class="card-title">
																		<a href="#">EDM</a>
																	</h4>
																</div>
																<ul>
																	<li>
																		<a href="#">EDM Superstar DJ 2017</a>
																	</li>
																	<li>
																		<a href="#">Best EDM Track For Summer</a>
																	</li>
																	<li>
																		<a href="#">Ultra Music Fetival 2018</a>
																	</li>
																</ul>
																
															</div>
														</div>
													</div>

													<!--Item-chude-->
													<div class="col-lg-6 portfolio-item">
														<div class="card h-100" id="item-chude">
															<a href="#" class="item-container">
																<div class="item-hover">
																	<div class="item-hover-content">
																		<i class="fa fa-play fa-2x"></i>
																	</div>
																</div>
																<img class="card-img-top" width="150" height="200" src="<?php echo base_url() ?>img/img_chude/chude-edm.jpg" alt="">
															</a>
															<div class="card-body">
																<div class="jumbotron jumbotron-fluid">
																	<h4 class="card-title">
																		<a href="#">EDM</a>
																	</h4>
																</div>
																<ul>
																	<li>
																		<a href="#">EDM Superstar DJ 2017</a>
																	</li>
																	<li>
																		<a href="#">Best EDM Track For Summer</a>
																	</li>
																	<li>
																		<a href="#">Ultra Music Fetival 2018</a>
																	</li>
																</ul>
																
															</div>
														</div>
													</div>

												</div>
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
									<!--Kết thuc phần playlist-->

									

								</div>
								<div class="col-md-12 col-lg-4">

									<div class="card mb-4">
										<div class="card-block">
											
											<!--Bắt đầu phẩn bảng xếp hạng-->
											<?php require "BangXepHang_view.php" ?>
											<!--Kết thúc bảng xếp hạng-->
										</div>

									</div>
									<!--Kết thúc phần chủ đề-->
								</dropdowniv>
								
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
