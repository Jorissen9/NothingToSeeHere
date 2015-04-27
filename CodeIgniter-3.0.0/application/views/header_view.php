<!DOCTYPE html>
<html class="csstransforms no-csstransforms3d csstransitions">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="TEDxUHasselt">
		<meta name="keywords" content="TEDxUHasselt TEDx UHasselt Universiteit Hasselt ">
		<meta name="author" content="Kenny Vanrusselt, Bjorn Jorissen, Remco Van Gestel, Sören Veestraeten">

		<title>TEDxUHasselt</title>

		<!-- Bootstrap: http://getbootstrap.com/ -->
		<link href="<?php echo base_url('assets/css/Bootstrap/bootstrap.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/Bootstrap/bootstrap-select.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/Navigation/font-awesome.css') ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/Navigation/menu.css') ?>" rel="stylesheet">

		<link rel="icon" type="image/png" href="<?php echo base_url('assets/imgs/favicon-32x32.png') ?>">

		<script type="text/javascript" src="<?php echo base_url('assets/css/Navigation/assets/js/jquery.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/Navigation/function.js')?>"></script>
		<script type="text/javascript" >
			function showLoginForm() {
				showLoginButtons();
				document.getElementById('login').style.display = 'block';
				document.getElementById('loginShow').style.display = 'none';
			}
			function showRegisterForm() {
				showLoginButtons();
				document.getElementById('register').style.display = 'block';
				document.getElementById('registerShow').style.display = 'none';
				document.getElementById('loginSpace').style.display = 'none';
			}
			function showLoginButtons() {
				document.getElementById('register').style.display = 'none';
				document.getElementById('login').style.display = 'none';
				document.getElementById('loginSpace').style.display = '';
				document.getElementById('loginShow').style.display = 'block';
				document.getElementById('registerShow').style.display = 'block';
			}
		</script>
	</head>
	<body></body>
</html>