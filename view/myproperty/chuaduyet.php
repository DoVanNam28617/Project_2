<?php
      include 'headaddbd.php';  
?>
<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:19:50 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>` - Powerful Residence Real Estate Template</title>
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
    </head>
	
    <body class="green-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- <div id="preloader"><div class="preloader"><span></span><span></span></div></div> -->
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
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
														<a href=""><img src="<?=$hinh?>"class="img-fluid avater" alt=""></a>
														<input type="hidden" name="hinh" value="<?=$img?>">
														
														<h4><?=$ho_ten?></h4>
														<span><?=$email?></span>
													</div>
													
													<div class="d-navigation">
														<ul>
															<li class="active"><a href="index.php?act=edit_taikhoan"><i class="ti-user"></i>Quản lí tài khoản</a></li>
															
															<li class="active" style="margin-top:-15px"><li class="dropdowns">
														
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
                        <div class="dashboard-wraper">
							
                            <!-- Bookmark Property -->
                            <div class="form-submit">	
                                <h4>bài viết của bạn</h4>
                            </div>
                            
                            <div class="row">
                            
                              <?php foreach($listChuaDuyet as $pheduyet){
								extract($pheduyet);
								$hinh_anh = $img_p.$hinh;
								$linksp = "index.php?act=CTduan&id=$id &id_kh=$id_kh &id_dd=$id_dd";
								echo '
								<div class="col-md-12 col-sm-12 col-md-12">
								<div class="singles-dashboard-list">
									<div class="sd-list-left">
										<img src="'.$hinh_anh.'" class="img-fluid" alt="" />
									</div>
									<div class="sd-list-right">
										<h4 class="listing_dashboard_title"><a href="'.$linksp.'" class="theme-cl">'.$ten_sp.'</a></h4>
										<div class="user_dashboard_listed">
											Price: '.$don_gia.' tỷ;
										</div>				
										<div class="user_dashboard_listed">
											Địa chỉ: '.$dia_chi.'
										</div>
										<div class="user_dashboard_listed">
											Ngày đăng: '.$ngay_dang.'
										</div>
										<div class="user_dashboard_listed">
											Lí do chưa duyệt: '.$li_do.'
										</div>
										<div class="action">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="202 User View"><i class="ti-eye"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Delete Property" class="delete"><i class="ti-close"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
										</div>
									</div>
								</div>
							</div>
								';

							  }?>
						            
                            </div>
                            
                        </div>
							
						</div>
                        
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			
<?php include "footer.php"?>
		