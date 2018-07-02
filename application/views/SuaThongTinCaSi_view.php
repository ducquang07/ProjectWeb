<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ZikZak - Website nghe nhạc trực tuyến miễn phí</title>


	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.js"></script>    	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

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
							<?php 
							if($this->session->userdata('trangthai')=='ADMIN')
								{
							?>

							<div class="card mb-4 themcasi" >
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-plus"></i>  Sửa ca sĩ<ng></ng></h3>
									<!-- <form class="form" action="#"> -->

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Họ tên ca sĩ:</label>
											<div class="col-md-9">
												<input id="tencs" class="form-control" type="text" value="<?php foreach ($casi['thongtincasi'] as $key => $value) {echo $value['tencasi'];}?>" disabled>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Ngày sinh:</label>
											<div class="col-md-9">
												<input id="ngaysinhcs" class="form-control" type="date" value="<?php foreach ($casi['thongtincasi'] as $key => $value) {echo $value['ngaysinh'];}?>">
											</div>
										</div>

										<div class="form-group row " id="gioitinhcs">
				                            <label class="col-md-3 col-form-label">Giới tính:</label>
											<div class="col-md-9">
					                            <?php foreach ($casi['thongtincasi'] as $key => $value) 
													if($value['gioitinh']=='Nam')
													{
														echo '<label for="register-male" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam" checked > Nam 
														</label>';
														echo '<label for="register-female" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ"> Nữ 
														</label>';
														echo '<label for="register-neutral" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" value="Khác"> Khác 
														</label>';
													}
													else if($value['gioitinh']=='Nữ')
													{
														echo '<label for="register-male" class="radio control-inline"> 
														<input type="radio" name="gendere" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam" > Nam
														</label>';
														echo '<label for="register-female" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ" checked> Nữ 
														</label>';
														echo '<label for="register-neutral" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" value="Khác"> Khác
														</label>';
													}
													else
													{
														echo '<label for="register-male" class="radio control-inline">  
														<input type="radio" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nam" > Nam 
														</label>';
														echo '<label for="register-female" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" class="gender" data-msg-required="Please indicate your gender." value="Nữ" > Nữ 
														</label>';
														echo '<label for="register-neutral" class="radio control-inline"> 
														<input type="radio" name="gender" required="required" value="Khác" checked> Khác 
														</label>';
													}
													?>
				                        	</div>
				                        </div>

				                        <div class="form-group row">
											<label class="col-md-3 col-form-label">Chọn ảnh ca sĩ:</label>
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-6">
														<img id="anhcs" class="img-fluid" src="<?php foreach ($casi['thongtincasi'] as $key => $value) {echo $value['duongdananhcasi'];}?>"></img>
													</div>
													<div class="col-sm-6">
														<span class="btn btn-outline-success fileinput-button">
															<i class="glyphicon glyphicon-plus"></i>
															<span>Chọn file ảnh...</span>
															<input id="fileanhcs" class="form-control" type="file" name="files[]" multiple="">
														</span>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Chọn ảnh bìa ca sĩ:</label>
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-6">
														<img id="anhbia" class="img-fluid" src="<?php foreach ($casi['thongtincasi'] as $key => $value) {echo $value['duongdananhbia'];}?>"></img>
													</div>
													<div class="col-sm-6">
														<span class="btn btn-outline-success fileinput-button">
															<i class="glyphicon glyphicon-plus"></i>
															<span>Chọn file ảnh...</span>
															<input id="fileanhbiacs" class="form-control" type="file" name="files[]" multiple="">
														</span>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Mô tả:</label>
											<div class="col-md-9">
												<!-- <input id="motacs" class="form-control" type="text" value="<?php foreach ($casi['thongtincasi'] as $key => $value) {echo $value['mota'];}?>"> -->
												<textarea id="motacs" name="motacs" class="form-control motacs" ><?php foreach ($casi['thongtincasi'] as $key => $value) {echo $value['mota'];}?>
												</textarea>
											</div>
										</div>

										<div class="form-group row">
											<div class="col-md-7"></div>
											<div class="col-md-5 nutluu">
												<input type="button" class="btn btn-lg btn-secondary thoatcs" value="Thoát">
												<input type="button" class="btn btn-lg btn-success luucs" value="Lưu">
												<br>
											</div>
										</div>
										<!-- </form> -->
									</div>
								</div>
								<?php } ?>
						</div>
					</section>
				</div>
			</section>
		</main>
	</div>
	
</body>
<script>

	var duongdan = '<?php echo base_url() ?>';
	fileanhcs_url = $("#anhcs").attr("src");;
	fileanhbiacs_url = $("#anhbia").attr("src");;
	$('#fileanhcs').fileupload({
		url: duongdan + 'ThemCaSi/uploadfileanh',
		dataType: 'json',
		done: function(e, data){
			$.each(data.result.files, function (index, file) {
            	fileanhcs_url = file.url;
          	});
		}
	});

	$('#fileanhbiacs').fileupload({
		url: duongdan + 'ThemCaSi/uploadfileanh',
		dataType: 'json',
		done: function(e, data){
			$.each(data.result.files, function (index, file) {
            	fileanhbiacs_url = file.url;
          	});
		}
	});

	

	$('.thoatcs').click(function(event) {
		$(location).attr('href', '<?php echo base_url() ?>TrangCaNhan')
	});

	$('.luucs').click(function(event) {
		
		$.ajax({
		url: 'capnhatcasi',
		type: 'POST',
		dataType: 'json',
		data: {
			tencasi : $('#tencs').val(),
			ngaysinh : $('#ngaysinhcs').val(),
			gioitinh : $('[name="gender"]:radio:checked').val(),
			duongdananhcs : fileanhcs_url,
			duongdananhbiacs : fileanhbiacs_url,
			mota : $('.motacs').val()
			},
		})

		.done(function(data) {
			console.log("success");
			$("i.trangthaicapnhatcs").remove();
			if(data>0)
			{
				$('.nutluu').append('<i style="color:red;" class="trangthaicapnhatcs">Cập nhật ca sĩ thành công</i>');
	            // location.reload();
			}
			else
			{
				$('.nutluu').append('<i style="color:red;" class="trangthaicapnhatcs">Cập nhật ca sĩ thất bại</i>');
	            // location.reload();
			}
		})
		.fail(function() {
			console.log("error");
		})
	});
</script>
</html>