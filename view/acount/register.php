<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký</title>
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
					<img src="view/login/images/img-01.png" alt="IMG"> <br> <br> 
					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
						<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Thoát
						
							<!-- <i class="fa-solid fa-arrow-rotate-left" aria-hidden="true"></i>
							<i class="fa-solid fa-arrow-turn-down-left"></i> -->
						</a>
					</div>
				</div>

				<form class="login100-form validate-form" action="index.php?act=dangki" method="post" enctype="multipart/form-data">
					<span class="login100-form-title">
					Đăng ký tài khoản
					</span>
				
					<div class="wrap-input100 validate-input" data-validate = "Username không được để trống">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						<span  style="color:red" >
						<?php  if(isset($error['username'])){
                        echo  $error['username'];
                    }else if(isset($error['usernames'])){
                        echo  $error['usernames'];

                    } ?>
                            </span> 
					</div>
                              
					<div class="wrap-input100 validate-input" data-validate = "Email không được trống và đúng định dạnh">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<span  style="color:red" >
                                    <?=isset($error['email']) ? $error['email'] : '' ?>
                            </span> 
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password không được để trống">
						<input class="input100" type="password" name="pass" placeholder="Password"> 
						
					<!-- <input type="text" value="2" name="vaitro" hidden> -->
					<input type="hidden"  name="vaitro" value="0">
                    <input type="hidden"  name="kichhoat" value="0">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					 
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Re-Password không được để trống">
						<input class="input100" type="password" name="re-pass" placeholder="Re-Password"> 
						
					<!-- <input type="text" value="2" name="vaitro" hidden> -->
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span  style="color:red" >
                                    <?=isset($error['re-pass']) ? $error['re-pass'] : '' ?>
                            </span> 
					 
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Số điện thoại không được để trống">			
					<input type="number"  class="input100"  name="sdt" placeholder="Số điện thoại">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
						<span  style="color:red" >
                                    <?=isset($error['phone']) ? $error['phone'] : '' ?>
                            </span> 
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="dangki">
                        Đăng ký
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php?act=dangnhap">
                            Đăng nhập
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
					
				
			</div>
		</div>
	</div>
	<?php if (isset($thongbao) && $thongbao != "") {
     echo $thongbao;
 } ?>

	
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