<?php include  "headaddbd.php"?>
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
			.input-group-append{
				margin-top: -39px;
				margin-left: 90%;
			}
		</style>
    </head>
	
    <body class="green-skin">
      
        <div id="main-wrapper">
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
	
			<section>
				<?php
						if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
							extract($_SESSION['user']);
							$hinh=$img_p.$img;
												// var_dump($hinh);
											
							}
					?>
								
					<form action="index.php?act=edit_taikhoan" method="POST" enctype="multipart/form-data">
						<div class="container-fluid">
								
					<div class="row">
									
												<div class="col-lg-3 col-md-4">
												<div class="dashboard-navbar">
													
													<div class="d-user-avater">
														<img src="<?=$hinh?>"class="img-fluid avater" alt="">
														<input type="hidden" name="hinh" value="<?=$img?>">
														
														<h4><?=$ho_ten?></h4>
														<span><?=$email?></span>
													</div>
													
													<div class="d-navigation">
														<ul>
														
															
															<li class="active" ><li class="dropdowns">
														
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
							
					
							<div class="row">
							<?php
									 $listBD_view =  loadall_BD_view($id_kh);                        
									array($listBD_view);
									$count = count($listBD_view);
																
									echo '
									<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-1">
										<div class="dashboard-stat-content"><h4>'.$count.'</h4> <span>Đã đăng</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
									'
								?>			
								
								<?php
									$listPheDuyet = BD_pheduyet($id_kh);                        
									array($listPheDuyet);
									$count = count($listPheDuyet);
																
									echo '
									<div class="col-lg-4 col-md-6 col-sm-12">
									<a href="index.php?act=pheduyet">
									<div class="dashboard-stat widget-2">
										<div class="dashboard-stat-content"><h4>'.$count.'</h4> <span>Đã duyệt</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
									</a>
								</div>
									'
								?>		
							
							<?php
									$listChuaDuyet = BD_chuaduyet($id_kh);                       
									array($listChuaDuyet);
									$count = count($listChuaDuyet);
																
									echo '
								<div class="col-lg-4 col-md-6 col-sm-12">
								<a href="index.php?act=chuaduyet">
									<div class="dashboard-stat widget-4">
										<div class="dashboard-stat-content"><h4>'.$count.'</h4> <span>Chưa duyệt</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
									</a>
								</div>
								
									'
								?>		
								
								

							</div>
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="card-header" id="Packages">
									  <h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#extraPackages" aria-expanded="false" aria-controls="extraSer">
										  See Available Packages and Payment Methods
										</button>
									  </h2>
									</div>
									<div id="extraPackages" class="collapse" aria-labelledby="Packages" data-parent="#accordionExample">
										<div class="row">
											
											<!-- Single Package -->
											
											<!-- Single Package -->
											
											<!-- Single Package -->
											
										</div>
										
										
										
									</div>
								</div>
							</div>
					
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>Tài khoản của bạn</h4>
									<div class="submit-section">
						
								
										<div class="form-row">
											<input type="hidden" name="id_kh" value="<?=$id_kh?>">
											<div class="form-group col-md-6">
												<label>Username</label>
												<input type="text" name="ho_ten" class="form-control" value="<?=$ho_ten?>">
												<span style="color:red">
														<?=isset($error['ho_ten']) ? $error['ho_ten'] : '' ?>
												</span>
											</div>
											
											<div class="form-group col-md-6">
												<label>Email</label>
												<input type="email"  name="email" class="form-control" value="<?=$email?>">
												<span style="color:red">
														<?=isset($error['email']) ? $error['email'] : '' ?>
												</span>
											</div>
											<div class="form-group col-md-6">
												<label>Avatar</label>
												<input type="file"   class="form-control" name="img">
												<span style="color:red">
														<?=isset($error['hinh']) ? $error['hinh'] : '' ?>
												</span>
											</div>
											
											<div class="form-group col-md-6">
												<label>Mật khẩu</label>
												<input type="password" name="mat_khau" class="form-control" id="ipnPassword" value="<?=$mat_khau?>">
												<div class="input-group-append">										
														<span class="fas fa-eye" class="btn btn-outline-secondary" id="btnPassword"></span>													
													</div>
												<span style="color:red">
														<?=isset($error['mat_khau']) ? $error['mat_khau'] : '' ?>
												</span>
											</div>
											
											<div class="form-group col-md-6">
												<label>Số điện thoại</label>
												<input type="text"  name="sdt" class="form-control" value="0<?=$so_dth?>">
												
												<span style="color:red">
														<?=isset($error['sdt']) ? $error['sdt'] : '' ?>
												</span>
											</div>
											<div class="form-group col-lg-12 col-md-12" >
												<button class="btn btn-theme" style="background-color: green;margin-left:44%;margin-top:20px" type="submit" name="capnhat">Cập nhật</button>
												<div class="tb" style="color: red;">
												<?php
													if(isset($thongbao)&&($thongbao!="")) echo $thongbao
													?>
												</div>
											</div>																			
											
										</div>
									</form>
									</div>
								</div>
								
							
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			<!-- <section class="theme-bg call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to Become a Real Estate Agent?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								<a href="#" class="btn btn-call-to-act">SignUp Today</a>
							</div>
							
						</div>
					</div>
				</div>
			</section> -->
		
		</div>
		<?php include  "footer.php"?>
		<script>
// step 1
const ipnElement = document.querySelector('#ipnPassword')
const btnElement = document.querySelector('#btnPassword')

// step 2
btnElement.addEventListener('click', function() {
  // step 3
  const currentType = ipnElement.getAttribute('type')
  // step 4
  ipnElement.setAttribute(
    'type',
    currentType === 'password' ? 'text' : 'password'
  )
})
  </script>