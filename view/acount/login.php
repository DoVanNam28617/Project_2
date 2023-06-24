<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="view/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="view/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="view/login/images/img-01.png" alt="IMG">
					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
						<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Thoát
						
							<!-- <i class="fa-solid fa-arrow-rotate-left" aria-hidden="true"></i>
							<i class="fa-solid fa-arrow-turn-down-left"></i> -->
						</a>
					</div>
				</div>

				<form method ="POST" class="login100-form validate-form" action="index.php?act=dangnhap" >
					<span class="login100-form-title">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required: not null">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submid" name="login">
							Đăng nhập
						</button>
					</div> <br>
					<p style="color:red; font-size:15px">
					<?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                  ?>
					</p>

					<div class="text-center p-t-12">
						<span class="txt1">
							Quên
						</span>
						<a class="txt2" href="index.php?act=quenmatkhau">
							 mật khẩu?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php?act=dangki">
							Đăng ký tài khoản
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="view/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="view/login/vendor/bootstrap/js/popper.js"></script>
	<script src="view/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="view/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="view/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="view/login/js/main.js"></script>

</body>
</html>