<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Assets/Backend/layout1/css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>Lotteria</title>
    <meta name="description" content="Lotteria">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lotteria">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Lotteria">
    <link rel="canonical" href="index.html">
    <link rel="shortcut icon" href="Assets/frontend/100/047/633/themes/517833/assets/lotteria_logo.png?1481775169361" type="image/x-icon" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='Assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='Assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <script src='Assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='Assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='Assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='Assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
	include_once("Views/Frontend/HeaderView.php");
?>
<div class="container" style="margin-top:40px;">
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post" action="index.php?area=Backend&controller=Signup&action=doSignup">
                        <div class="row" style="margin-top:5px;">
							<div class="col-md-2">Full name</div>
							<div class="col-md-9"><input type="name" name="name" required class="form-control"></div>
						</div>
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2">Email</div>
							<div class="col-md-9"><input type="email" name="email" required class="form-control"></div>
						</div>
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2">Password</div>
							<div class="col-md-9"><input type="password" name="password" required class="form-control"></div>
						</div>
                        <div class="row" style="margin-top:5px;">
							<div class="col-md-2">Phone</div>
							<div class="col-md-9"><input type="phone" name="phone" required class="form-control"></div>
						</div>
                        <div class="row" style="margin-top:5px;">
							<div class="col-md-2">Address</div>
							<div class="col-md-9"><input type="address" name="address" required class="form-control"></div>
						</div>
						<div class="row" style="margin-top:5px;margin-left:110px;">
							<div class="col-md-2"></div>
							<div class="col-md-9">
								<input type="submit" value="Signup" class="btn btn-primary"> 
								<input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</form>
					<div align="center">
						<a href="index.php?area=Backend&controller=Login">Bạn đã tài khoản? Đăng nhập ngay</a>
					</div>						
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>