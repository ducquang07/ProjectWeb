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
				echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="margin-right: 1.5rem;"><a class="dropdown-item" href="'.base_url().'trangcanhan"><em class="fa fa-user-circle mr-1"></em> Trang cá nhân</a>';
				echo '<a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>';
				echo '<a class="dropdown-item" href="'.base_url().'trangchu/logout_controller"><em class="fa fa-sign-out mr-1"></em> Logout</a>';
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
<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	<li class="nav-item active" data-toggle="tooltip" data-placement="right" title="" data-original-title="index">
		<a class="nav-link" href="<?php echo base_url() ?>index">
			<i class="fa fa-fw fa-home"></i>
			<span class="nav-link-text">Trang Chủ</span>
		</a>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="baihat">
		<a class="nav-link" href="<?php echo base_url() ?>baihat">
			<i class="fa fa-fw fa-music"></i>
			<span class="nav-link-text">Bài Hát</span>
		</a>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="playlist">
		<a class="nav-link" href="<?php echo base_url() ?>playlist">
			<i class="fa fa-fw fa-table"></i>
			<span class="nav-link-text">Playlist</span>
		</a>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="chude">
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
				<a href="<?php echo base_url() ?>chude" ><i>Xem Thêm . . .</i></a>
			</li>
		</ul>
	</li>
	<!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Example Pages">
		<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
			<i class="fa fa-fw fa-file"></i>
			<span class="nav-link-text">Example Pages</span>
		</a>
		<ul class="sidenav-second-level collapse" id="collapseExamplePages">
			<li>
				<a href="login.html">Login Page</a>
			</li>
			<li>
				<a href="register.html">Registration Page</a>
			</li>
			<li>
				<a href="forgot-password.html">Forgot Password Page</a>
			</li>
			<li>
				<a href="blank.html">Blank Page</a>
			</li>
		</ul>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Menu Levels">
		<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
			<i class="fa fa-fw fa-sitemap"></i>
			<span class="nav-link-text">Menu Levels</span>
		</a>
		<ul class="sidenav-second-level collapse" id="collapseMulti">
			<li>
				<a href="#">Second Level Item</a>
			</li>
			<li>
				<a href="#">Second Level Item</a>
			</li>
			<li>
				<a href="#">Second Level Item</a>
			</li>
			<li>
				<a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
				<ul class="sidenav-third-level collapse" id="collapseMulti2">
					<li>
						<a href="#">Third Level Item</a>
					</li>
					<li>
						<a href="#">Third Level Item</a>
					</li>
					<li>
						<a href="#">Third Level Item</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Link">
		<a class="nav-link" href="#">
			<i class="fa fa-fw fa-link"></i>
			<span class="nav-link-text">Link</span>
		</a>
	</li> -->
</ul>
<!--Kết thúc phần sidenar-->
</div>
</nav>
<!-- bắt đầu phần modal login -->
<div class="modal fade" id="login">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<form action="index/singin_controller" method="post" enctype="multidata/form-data">
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
				<form action="index/signup_controller" method="post" enctype="multidata/form-data">
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
                                <input type="radio" id="register-male" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="nam"> Nam
                            </label>
                            <label for="register-female" class="radio control-inline">
                                <input type="radio" id="register-female" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="nu"> Nữ
                            </label>
                            <label for="register-neutral" class="radio control-inline">
                                <input type="radio" id="register-neutral" name="gender" required="required" value="khac"> Khác
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

