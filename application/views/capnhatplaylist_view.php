
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ZikZak - Website nghe nhạc trực tuyến miễn phí</title>

	
	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/lib/typeahead.js"></script>

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
							<div class="card mb-4 " >
								<div class="card-block">
									<h3 class="card-title"><i class="fa fa-user"></i>  Cập nhật PLAYLIST<ng></ng></h3>
									<form class="form" action="#">
										<?php foreach ($playlist['thongtinplaylist'] as $key => $value) {?>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Tên playlist:</label>
											<div class="col-md-9">
												<input name="tenplaylist" class="form-control" type="text"   id="tenplaylist" value="<?php echo $value['tenplaylist'] ?>">
												<input type="text" hidden value="<?php echo $value['idplaylist'] ?>" name='idplaylist' id="idplaylist">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Ca sĩ:</label>
											<div class="col-md-9">
												<input name="tencasi" class="form-control" type="text"  value="<?php echo $value['tencasi'] ?>" id="tencasi">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-md-3 col-form-label">Hình ảnh playlist:</label>
											<div class="col-md-9">
												<div class="row">
													<div class="col-sm-6">
														<img class="img-fluid" src="<?php echo $value['duongdananhplaylist'] ?>">
													</div>
													<div class="col-sm-6">

													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<input id="file-anh" class="form-control" type="file" name="files[]" multiple="" >
													</div>
												</div>
												<script type="text/javascript">
													function readURL(input) {
														if (input.files && input.files[0]) {
															var reader = new FileReader();

															reader.onload = function (e) {
																$('#profile-img-tag').attr('src', e.target.result);
															}
															reader.readAsDataURL(input.files[0]);
														}
													}
													$("#anhavatar").change(function(){
														readURL(this);
													});
												</script>
												<!-- <input id="anhavatar" name="files[]" class="form-control" type="file"> -->
											</div>
										</div>
										<?php } ?>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">Thể loại:</label>
											<div class="col-md-9">
												<select class="form-control form-control-lg" id="theloai">
													<optgroup label="Việt Nam"></optgroup>
													<?php foreach ($theloai_Vietnam['danhsachtheloai'] as $key => $value) {
														echo '<option value="'.$value['idtheloai'].'">'.$value['tentheloai'].'</option>';
													} ?>
													<optgroup label="Âu Mỹ"></optgroup>
													<?php foreach ($theloai_AuMy['danhsachtheloai'] as $key => $value) {
														echo '<option value="'.$value['idtheloai'].'">'.$value['tentheloai'].'</option>';
													} ?>
													<optgroup label="Châu Á"></optgroup>
													<?php foreach ($theloai_ChauA['danhsachtheloai'] as $key => $value) {
														echo '<option value="'.$value['idtheloai'].'">'.$value['tentheloai'].'</option>';
													} ?>
												</select>

											</div>
										</div>


										


										<div class="form-group row">
											<label class="col-md-3 col-form-label">Mô tả:</label>
											<div class="col-md-9">
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="mota"></textarea>
											</div>

										</div>

										<div class="form-group ">
											<div class="row">
												<label class="col-md-6 col-form-label">Danh sách bài hát:</label>
												<label class="col-md-5 col-form-label">Danh sách bài hát của playlist:</label>
											</div>
											<div class="row mb-4">
												<div class="col-md-6">
													<input class="filter form-control" id="trabaihat" type="text" placeholder="Nhập từ khóa để tìm bài hát" value=""> 
													<div class="contain" style="height:auto;max-height:400px;overflow:scroll;">
														<ul id="myUL">	

														</ul>
													</div>
												</div> 
												<div class="col-md-6"> 

													<div class="contain-select" style="height:auto;max-height:400px;overflow:scroll;">
														<ul id="myUL">	
															<?php foreach ($danhsachbaihat['danhsachbaihatplaylist'] as $key => $value) {?>
															<li id="<?php echo $value['idbaihat'] ?>">
																<a ><?php echo $value['tenbaihat'] ?></a>-
																<a class="item-baihat-tencasi"><?php echo $value['tencasi'] ?></a>
																<span class="btn btn-lg btn-danger btn-chon" style="padding: .1rem 0.5rem;float: right">
																	<i class="fa fa-trash"></i>
																</span>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-7"></div>
												<div class="col-md-4"><span class="btn btn-lg btn-danger" id="btn-xoalist">Xóa list bài hát</span></div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-3"></div>
											<div class="col-md-3">
												<button class="btn btn-lg btn-secondary" type="button" id="btn-luu"><i class="fa fa-save"></i> Lưu</button>
											</div>

											<div class="col-md-3">
												<button class="btn btn-lg btn-secondary" type="button" id="btn-trolai"><i class="fa fa-arrow-left"></i> Trở lại</button>
											</div>
											<div class="col-md-3"></div>
										</div>
									</form>
								</div>
							</div>
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
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.js"></script>
    	<!-- Placed at the end of the document so the pages load faster -->
    	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    	<script type="text/javascript" src="<?php echo base_url() ?>vendor/lib/typeahead.js"></script>
    	

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    	<script>

    		$(document).ready(function () {
    			$('#tencasi').typeahead({
    				source: function (query, result) {
    					$.ajax({
    						url: "capnhatplaylist/searchcasi",
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


    		$("#trabaihat").change(function(event) {

    			$.ajax({
    				url: '<?php echo base_url() ?>/capnhatplaylist/laydanhsachbaihat',
    				type: 'POST',
    				dataType: 'html',
    				data: {keyword: $(this).val()},
    			})
    			.done(function() {
    				console.log("success");
    			})
    			.fail(function() {
    				console.log("error");
    			})
    			.always(function(data) {
    				console.log("complete");
    				$(".contain ul li").remove();
    				$(".contain ul").append(data);
    			});
    		});
    	/*$("#keyword").change(function(event) {
    		if ($(this).val()==='') $("#timkiem").attr('action', '<?php echo base_url() ?>/baihat');
    		else $("#timkiem").attr('action', '<?php echo base_url() ?>/baihat/Load_with_keyword');	
    	});*/

    	/*$(".contain ul li").click(function(event) {
    		$(".contain-select ul").append('<li>'+$(this).html()+'</li>');
    	});*/


    	//thêm bài hát vào playlist
    	$(".contain ul").on('click','li',function(e){
    		var idbaihat =$(this).closest('li').attr("id");
    		if ($('.contain-select ul').has('#'+idbaihat).length) {
    			return;
    		}
    		$(".contain-select ul").append('<li id="'+idbaihat+'">'+$(this).closest('li').html()+'</li>');
    		$(".contain-select ul li span").remove();
    		$(".contain-select ul li ").append('<span class="btn btn-lg btn-danger btn-chon"><i class="fa fa-trash"></i></span>');
    		$.ajax({
    			url: '<?php echo base_url() ?>/capnhatplaylist/thembaihatvaoplaylist',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				idplaylist:$("#idplaylist").val(),
    				idbaihat:$(this).closest('li').attr("id")
    			},
    		})
    		.done(function() {
    			console.log("success");
    		})
    		.fail(function() {
    			console.log("error");
    		})
    		.always(function() {
    			console.log("complete");
    		});
    		
    	});

    	//xóa bài hát khỏi playlist
    	$(".contain-select ul").on('click','.btn-chon',function(e){
    		idbaihat_temp=$(this).closest('li').attr("id");
    		$(this).closest('li').remove();
    		$.ajax({
    			url: '<?php echo base_url() ?>/capnhatplaylist/xoabaihatkhoiplaylist',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				idplaylist:$("#idplaylist").val(),
    				idbaihat:idbaihat_temp
    			},
    		})
    		.done(function() {
    			console.log("success");
    		})
    		.fail(function() {
    			console.log("error");
    		})
    		.always(function() {
    			console.log("complete");
    		});
    		
    	});

    	//xóa list bài hát
    	$("#btn-xoalist").click(function(event) {
    		$(".contain-select ul li").remove();
    		$.ajax({
    			url: '<?php echo base_url()?>capnhatplaylist/xoalistbaihat',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				idplaylist: $("#idplaylist").val()
    			},
    		})
    		.done(function() {
    			console.log("success");
    		})
    		.fail(function() {
    			console.log("error");
    		})
    		.always(function() {
    			console.log("complete");
    		});
    		
    	});

    	$('#fileanh').fileupload({
    		url: '<?php echo base_url()?>capnhatplaylist/uploadfileanh',
    		dataType: 'json',
    		done: function(e, data){
    			$.each(data.result.files, function (index, file) {
    				fileanhplaylist = file.url;
    			});
    		}
    	});




    	/*$("#btn-luu").click(function(event) {
    		$.ajax({
    			url: 'capnhatplaylist/themplaylist',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				tenplaylist:$("#tenplaylist").val(),
    				mota:$("#mota").val(),
    				duongdananhplaylist:fileanhplaylist,
    				idtheloai:$("#theloai option:selected").val(),			
    				tencasi:$("#tencasi").val(),
    			},
    		})
    		.done(function() {
    			console.log("success");

    		})
    		.fail(function() {
    			console.log("error");
    		})
    		.always(function() {
    			console.log("complete");
    		});
    	});*/

    	$("#btn-luu").click(function(event) {
    		$.ajax({
    			url: 'capnhatplaylist/suaplaylist',
    			type: 'POST',
    			dataType: 'json',
    			data: {
    				tenplaylist:$("#tenplaylist").val(),		
    				idplaylist:$("#idplaylist").val()
    			},
    		})
    		.done(function() {
    			console.log("success");

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
</html>