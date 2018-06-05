<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- tự động chuyển hướng  -->
	<meta http-equiv="refresh" content="2;url=<?php echo base_url() ?>TrangChu">
	<title>Đăng ký thành công</title>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
	<link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>css/custom-animation.css" rel="stylesheet">
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<h4 class="text-xs-center">
			<div class="alert alert-success">
				Chào <strong><?php echo $this->session->userdata('ten'); ?></strong>,<br>
				Bạn đã đăng ký <strong>thành công</strong>. Đang chuyển hướng vui lòng chờ.... <i class="fa fa-chevron-circle-right rotate360"></i>
			</div>
		</h4>
	</div>
</body>
	<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/lib/popper.min.js"></script>
</html>