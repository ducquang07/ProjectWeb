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

						</div>
						<!--Step 2-->

						<div class="col-md-12 col-lg-8">
							<div class="card mb-4 dangbaihat" >
								<div class="card-block">
									<h3 class="card-title"> Đăng bài hát<ng></ng></h3>
									<!-- <form class="form" action="#"> -->
										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Tên bài hát:</label>
											<div class="col-md-9">
												<input id="tenbaihat" class="form-control" type="text">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Ca sĩ:</label>
											<div class="col-md-9 casi">
												<input id="casi0" class="form-control casi0" type="text">
											</div>
											<div class="col-md-3"></div>
											<div class="col-md-9">
												<br>
												<input type="button" class="btn btn-secondary themcasi" value="Thêm Ca Sĩ">
												<input type="button" class="btn btn-secondary xoacasi" value="Xoá Ca Sĩ">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Nhạc sĩ:</label>
											<div class="col-md-9">
												<input id="nhacsi" class="form-control" type="text">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Chọn file ảnh:</label>
											<div class="col-md-9">
												<span class="btn btn-outline-success fileinput-button">
								                    <i class="glyphicon glyphicon-plus"></i>
								                    <span>Chọn file ảnh...</span>
								                    <input id="fileanh" class="form-control" type="file" name="files[]" multiple="">
						                		</span>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Chọn file nhạc:</label>
											<div class="col-md-9">
												<span class="btn btn-outline-success fileinput-button">
								                    <i class="glyphicon glyphicon-plus"></i>
								                    <span>Chọn file nhạc...</span>
								                    <input id="filenhac" class="form-control" type="file" name="files[]" multiple="">
						                		</span>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Thể loại:</label>
											<div class="col-md-9">
												<select type="select" class="form-control" name="theloai" id="theloai">
													<?php foreach ($theloai['thongtintheloai'] as $key => $value):?> 
														<option value="<?= $value['idtheloai'] ?>"><?= $value['tentheloai'] ?></option>
													<?php endforeach ?>										
												</select>
												
											</div>
										</div>
										
										<div class="form-group row">
											<div class="col-md-7"></div>
											<div class="col-md-5 nuttailen">
												<a class="btn btn-lg btn-secondary" href="<?php echo base_url() ?>TrangCaNhan">Trở Lại</a>
												<input type="button" class="btn btn-lg btn-outline-danger tailen" value="Tải lên">
												<br>
											</div>
											
										</div>
									<!-- </form> -->
								</div>
							</div>
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

</body>
<script>
	dem = 1;

	$(document).ready(function () {
		$('.themcasi').click(function(event) {
			$('.casi').append('<input id="casi'+dem+'" class="form-control casi'+dem+'" type="text">');
			dem=dem+1;
		});
		$('.xoacasi').click(function(event) {
			if(dem>0)
			{
				$('input.casi'+dem).remove();
				if(dem>1)
				{
					dem=dem-1;
				}
			}
		});
	})

    $(document).ready(function () {
        $('#casi').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "DangNhac/searchcasi",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });

    $(document).ready(function () {
        $('#nhacsi').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "DangNhac/searchnhacsi",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });

    duongdan = '<?php echo base_url() ?>';

	$('#filenhac').fileupload({
		url: duongdan + 'DangNhac/uploadfilenhac',
		dataType: 'json',
		acceptFileTypes:  /(\.|\/)(mp3)$/i,//danh sách trắng cho phép upload
		maxFileSize: 150000000,//tính bằng byte
		done: function(e, data){
			$.each(data.result.files, function (index, file) {
            	filemusicurl = file.url;
            	filename = $('input[type=file]').val().split('\\').pop();
          	});
		}
	});

	$('#fileanh').fileupload({
		url: duongdan + 'DangNhac/uploadfileanh',
		dataType: 'json',
		done: function(e, data){
			$.each(data.result.files, function (index, file) {
            	fileanhmusicurl = file.url;
          	});
		}
	});

	casi =[];
	for(i=0;i<dem;i++)
	{
		casi[i]=$('#casi'+dem).val();
	}

	$('.tailen').click(function(event) {
		// if(!tenfile)
		// {
		// 	tenfile= $("#anhdaidien").attr("src");
		// }
		$.ajax({
			url: 'DangNhac/thembaihat',
			type: 'POST',
			dataType: 'json',
			data: {
				tennhacsi : $('#nhacsi').val(),
				tencasi : casi,
				tenbaihat : $('#tenbaihat').val(),
				// tenbaihat : $('#tenbaihat').val(),
				idtheloai : $('#theloai').val(),
				duongdannhac : filemusicurl,
				duongdananhbaihat : fileanhmusicurl,
				dem : dem
				},
		})
		.done(function(data) {
			console.log("success");
			$("i.trangthaitailen").remove();
			if(data>0)
			{
				$('.nuttailen').append('<i style="color:red;" class="trangthaitailen">Tải lên thành công</i>');
	            // location.reload();
			}
			else
			{
				$('.nuttailen').append('<i style="color:red;" class="trangthaitailen">Tải lên thất bại</i>');
	            // location.reload();
			}
		})
		.fail(function() {
			console.log("error");
		})
	});
</script>
</html>
