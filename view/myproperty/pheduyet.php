<?php
include 'headaddbd.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:19:50 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Rikada - Powerful Residence Real Estate Template</title>

	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">

	<!-- Custom Color Option -->
	<link href="assets/css/colors.css" rel="stylesheet">
	<style>
		#goi {
			width: 150px;
			border: 1px solid black;
			border-radius: 5px;
			height: 30px;
			margin-left: 10px;
		}

		.but {
			background-color: green;
			height: 35px;
			width: 60px;
			margin-top: 10px;
			font-size: 13px;
			color: white;
			border: 1px solid green;
			border-radius: 5px;
			cursor:pointer;
		}
	</style>
</head>

<body class="green-skin">

	<div id="main-wrapper">


		<!-- End Navigation -->
		<div class="clearfix"></div>

		<div class="page-title" style="background-color:#384E65">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">

						<h2 class="ipt-title" style="margin-top:35px;color:white">Welcome!</h2>
						<span class="ipn-subtitle" style="color:white">Welcome To Your Account</span>

					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Page Title End ================================== -->

		<!-- ============================ User Dashboard ================================== -->
		<section>
			<?php
			if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
				extract($_SESSION['user']);
				// var_dump($_SESSION['user']);
				$hinh = $img_p . $img;
				// var_dump($hinh);

			}
			?>



			<div class="row">

				<div class="col-lg-3 col-md-4">
					<div class="dashboard-navbar">

						<div class="d-user-avater">
							<img src="<?= $hinh ?>" class="img-fluid avater" alt="">
							<input type="hidden" name="hinh" value="<?= $img ?>">

							<h4><?= $ho_ten ?></h4>
							<span><?= $email ?></span>
						</div>

						<div class="d-navigation">
							<ul>
								<li class="active"><a href="index.php?act=edit_taikhoan"><i class="ti-user"></i>Quản lí tài khoản</a></li>

								<li class="active" style="margin-top:-15px">
								<li class="dropdowns">

									<p class="dropbtns"><i class="ti-pencil-alt" style="margin-right:8px"></i>Lịch sử bài đăng</p>
									<ul class="dropdownes-content">
										<a href="index.php?act=pheduyet">Đã phê duyệt</a> <br>
										<a href="index.php?act=chuaduyet" class="a">Chưa phê duyệt</a>


									</ul>

								</li>
								</li>
								<li><a href="index.php?act=LScoin"><i class="ti-layers"></i>Lịch sử nạp tiền</a></li>
								<li><a href="index.php?act=napcoin"><i class="fa-solid fa-coins" style="font-size:20px"></i></i>Nạp tiền</a></li>
							</ul>
						</div>

					</div>
				</div>

				
				
				



				<div class="col-lg-9 col-md-8">
					<span style="color:red">
						<?=isset($error['coin']) ? $error['coin'] : '' ?>
					</span>
					<div class="dashboard-wraper">

						<!-- Bookmark Property -->
						<div class="form-submit">
							<h4>Bài viết của bạn</h4>
						</div>



							<div class="row" style="width:100%">
								<div class="col-md-12 col-sm-12 col-md-12">
									
						<?php foreach ($listPheDuyet as $pheduyet) : ?>
							<?php extract($pheduyet);
							$hinh_anh = $img_p . $hinh;
							if($goi_tin >0){
								$goi_tin = "<b style='color:green'>Đẩy thành công</b>";
							}
							
							$linksp = "index.php?act=CTduan&id=$id &id_kh=$id_kh &id_dd=$id_dd"; ?>
									<div class="singles-dashboard-list">
										<div class="sd-list-left">
											<img src="<?= $hinh_anh ?>" class="img-fluid" alt="" />
										</div>
										<div class="sd-list-right" >
											<h4 class="listing_dashboard_title" ><a href="<?= $linksp ?>" class="theme-cl" style="color:#001100"><?= $ten_sp ?></a></h4>
											<div class="user_dashboard_listed">
												Price: <?= $don_gia ?> tỷ;
											</div>
											<div class="user_dashboard_listed">
												Địa chỉ: <?= $dia_chi ?>
											</div>
											<div class="user_dashboard_listed">
												Ngày đăng: <?= $ngay_dang ?>
											</div>
											<div class="user_dashboard_listed">
												Ngày/giờ phê duyệt: <?= $ngay_duyet ?>
											</div>
											<div class="user_dashboard_listed">
												Trạng thái: <?= $goi_tin ?>
											</div>

											

											<?php foreach ($listgoi as $goi_kh): ?>
												<?php extract($goi_kh);?>
												<?php if($goi_tin == 0){?> 
													<div class="action">	
													<form action="index.php?act=daytin" method="POST">
												
													<input type="text" name="goi_tin" value="1000"hidden>
												
													
													<input type="hidden" name="id_sp" value="<?= $id ?>">
													<input type="hidden" name="id_kh" value="<?= $id_kh ?>">
													<input type="hidden" name="coin_old" value="<?=$coin ?>">
													<button class="but" type="submit" name="daytin">Đẩy tin</button> <i>( 1000/1 lần đẩy tin )</i> <br> 
													<span style="color:red; font-weight:600">
														<?=isset($error['coin_old']) ? $error['coin_old'] : '' ?>
													</span>
												<?php }?>									
											</form>
											</div>	
										<?php endforeach ?>
											</div>	
													
											<?php endforeach ?>		
									</div>	
								</div>
					
							</div>						
					</div>
				</div>

			</div>
	</div>
	</section>


	</div>
	<?php include  "footer.php" ?>