<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ZikZak - Website nghe nhạc trực tuyến miễn phí</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="<?php echo base_url() ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>css/creative.css" rel="stylesheet">
    <style>
    @font-face {
        font-family: 'Special Elite';
        font-style: normal;
        font-weight: 400;
        src: local('Special Elite Regular'), local('SpecialElite-Regular'), url(http://fonts.gstatic.com/s/specialelite/v8/XLYgIZbkc4JPUL5CVArUVL0ntnAOSA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    </style>
    <link href="<?php echo base_url() ?>css/custom-creative.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top" id="logo">
        <img src="<?php echo base_url() ?>img/logo/logo.png">
      </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Thông Tin</a>
                    </li>
                    <li class="divider" role="separator"></li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#signup">Đăng Ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#login">Đăng Nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white d-flex" id="home">
        <div class="background-wrap">
            <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
                <source src="<?php echo base_url() ?>video/Coldplay - Paradise (Official Video).mp4" type="video/mp4"> Video not supported
            </video>
        </div>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
            <strong>An online music for everyone</strong>
          </h1>
                </div>
                <div class="col-lg-8 mx-auto">
                    <br>
                    <br>
                    <br>
                    <a class="btn btn-primary btn-xl js-scroll-trigger btn-header" href="<?php echo base_url() ?>TrangChu">START NOW</a>
                </div>
            </div>
        </div>
    </header>
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" alt="" src="<?php echo base_url() ?>img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4" id="cap-about">Về Chúng Tôi</h2>
                        <br>
                        <p>Với <strong>ZIKZAK</strong>, thật dễ dàng để tìm kiếm bài hát yêu thích của bạn với chất lượng cao và hoàn toàn miễn phí. <strong>ZIKZAK</strong> thoả mãn gu âm nhạc khó tính nhất.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="login">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <form action="index/singin_controller" method="post" enctype="multidata/form-data">
                        <h1><center>Đăng Nhập</center></h1>
                        <br>
                        <hr>
                        <div class="form-group row">
                            <label for="username"><b>User name</b></label>
                            <input class="form-control" type="text" placeholder="Nhập tên đăng nhập" name="username" required>
                        </div>
                        <div class="form-group row">
                            <label for="psw"><b>Password</b></label>
                            <input class="form-control" type="password" placeholder="Nhập mật khẩu" name="pass" required>
                        </div>
                        <div class="form-group row">
                            <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                            </label>
                        </div>
                        <p>
                            <center>Don't have an account? <a href="#signup" style="color:dodgerblue">Sign up</a></center>
                        </p>
                        <div>
                            <input type="submit" name="dangnhap" class=" btn btn-success btn-block" value="Đăng nhập">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="signup">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <form action="index/signup_controller" method="post" enctype="multipart/form-data">
                        <h1><center>Đăng Ký</center></h1>
                        <h3><center>Vui lòng điền đầy đủ vào các trường bên dưới để đăng ký</center></h3>
                        <hr id="hrdangky_tren">
                        <div class="form-group row">
                            <label for="full-name"><b>Họ tên:</b></label>
                            <input class="form-control" type="text" placeholder="Enter your full name" name="fullname" required>
                        </div>
                        <div class="form-group row">
                            <label for="register-age"><b>Ngày sinh:</b></label>
                            <!-- <div class="col-10"> -->
                            <input class="form-control" name="ngaysinh" type="date" value="2011-08-19" id="ngaysinh">
                            <!-- </div> -->
                        </div>
                        <div class="form-group row " id="gioitinh">
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
                        <div class="form-group row">
                            <label for="diachi"><b>Địa chỉ:</b></label>
                            <input class="form-control" type="text" placeholder="Enter your address" name="diachi" required>
                        </div>
                        <div class="form-group row email">
                            <label for="email"><b>Email:</b></label>
                            <input class="form-control checkemail" type="text" placeholder="Enter your email" id="email" name="email" required>
                        </div>
                        <hr id="hrdangky_duoi">
                        <div class="form-group row tendangnhap">
                            <label for="username"><b>Tên đăng nhập:</b></label>
                            <input class="form-control checkusername" type="text" placeholder="Enter user name" id="username" name="username" required>
                        </div>
                        <div class="form-group row">
                            <label for="psw"><b>Mật khẩu:</b></label>
                            <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
                        </div>
                        <div class="form-group row">
                            <label for="psw-repeat"><b>Nhập lại mật khẩu:</b></label>
                            <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" required>
                        </div>
                        <div class="form-group row">
                            <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                            </label>
                        </div>
                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        <div>
                            <input type="submit" name="dangky" class=" btn btn-success btn-block" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-3 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright © Your Website 2018</p>
        </div>
    </footer>
    <script>
      $('.checkusername').blur(function(event) {
      $.ajax({
        url: 'index/checkusername',
        type: 'POST',
        dataType: 'json',
        data: {
              username: $('#username').val() 
              },
        })
      .done(function(data) {
        console.log("success");
        $("i.usernamekhadung").remove();
        if(data==0)
          {
            $('.tendangnhap').append('<i style="color:red;" class="usernamekhadung">Tên đã được sử dụng</i>');
          }      
        })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      });

      $('.checkemail').blur(function(event) {
        /* Act on the event */
        $.ajax({
          url: 'index/checkemail',
          type: 'POST',
        dataType: 'json',
        data: {
              email: $('#email').val() 
              },
        })
        .done(function(data) {
          console.log("success");
          $("i.emailkhadung").remove();
          if(data==0)
          {
            $('.email').append('<i style="color:red;" class="emailkhadung">Email đã được sử dụng</i>');
          }
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      });
    </script>
</body>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>vendor/lib/popper.min.js"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="<?php echo base_url() ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="<?php echo base_url() ?>js/creative.min.js"></script>

</html>