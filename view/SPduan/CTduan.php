<?php include  "headaddbd.php"?>
<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/single-property-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:19:46 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Rikada - Powerful Residence Real Estate Template</title>
		
        <!-- Custom CSS -->
        <link href="view/assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="view/assets/css/colors.css" rel="stylesheet">
		<link rel="stylesheet" href="./view/css/indexx.css">
		<style>
			.slider-nav{
				display: grid;
				grid-template-columns: 1fr 1fr 1fr 1fr 1fr ;
				gap: 8px;

			}
			.slider-nav img{
				width: 100%;
				height: 100px;
			}
		
		</style>
		
    </head>
	
    <body class="green-skin" >
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- <div id="preloader"><div class="preloader"><span></span><span></span></div></div> -->
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" >
		
		<div class="header header-light head-shadow">
			
			</div>
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<div class="page-title" style="background-color:#384E65">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title" style="margin-top:35px;color:white"></h2>
							<span class="ipn-subtitle" style="color:white"></span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="single-advance-property gray" style="padding:0px 50px 0px 120px">
				<div class="container-fluid p-0">
					<div class="row align-items-center" style="height: 600px;">

					<?php					
					 	// extract($listkh);
						extract($onesp);
						$hinh_p = $img_p . $hinh;
						echo '
						<div class="col-lg-7 col-md-7 col-sm-12" style="padding-left:100px">
								<div class="slider-for" style="width:100%;margin-top:50px;">
									<a href="assets/img/p-1.jpg" class="item-slick"><img src="'.$hinh_p.'" alt="Alt" height="400px"></a>
									
								</div> 
								';?>
								
								<div class="row" style="margin-top:5px">
									<div class="col-lg-12 col-md-12">
										
										<div class="slider-nav" >
										<?php foreach($lay_img as $lay_img ){
										extract( $lay_img );
										$hinh_path = $img_path.$anh;
										echo '
											<div   class="item-slick"><img src="'.$hinh_path .'" alt="Alt"></div>	
											';}?>									
										</div>
										
									
									</div>
								</div>
								
							</div>
							
									<?php
										extract($onekh);
										extract($onesp);
										$hinh_p = $img_p . $hinh;
										echo '
						
						<div class="col-lg-5 col-md-5 col-sm-12" >
							<div class="single-advance-caption" >
							
								
								<div class="agent-widget" style="width:80%;margin-top: -10px;">
									<div class="agent-title" style="height:300px">
										<div class="agent-photo"><img src="assets/img/user-6.jpg" alt=""></div>
										<div class="agent-details" style="margin-top:-100px">
											<h4><a href="#">'.$ho_ten.'</a></h4>
											<span><i class="lni-phone-handset"></i>0'.$so_dth.'</span>
										</div> <br>  <br>  <br>  <br>  
										<div class="block-body" >
									<ul class="dw-proprty-info">
										<li><strong>Email</strong>'.$email.'</li>													
									</ul>
								</div>
									</div>

									
								</div>
								
							</div>
						</div>
					
					</div>
					
				
				</div>
			</div>

			<section class="spd-wrap" >
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12 col-md-12">
						
							<div class="slide-property-detail">
								
								<div class="slide-property-first" style="margin-top:20px">
								<h4 class="property-name">'.$ten_sp.'</h4>
									<div class="pr-price-into">
										<h2>'.$don_gia.' tỷ<i></i> </h2>
										<span><i class="lni-map-marker"></i> '.$dia_chi.'</span>
									</div>
								</div>
								
								<div class="slide-property-sec">
									<div class="pr-all-info">
										
										<div class="pr-single-info">
											<div class="share-opt-wrap">
												<button type="button" class="btn-share" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-original-title="Share this">
													<i class="lni-share"></i>
												</button>
												<div class="dropdown-menu animated flipInX">
													<a href="#" class="cl-facebook"><i class="lni-facebook"></i></a>
													<a href="#" class="cl-twitter"><i class="lni-twitter"></i></a>
													<a href="#" class="cl-gplus"><i class="lni-google-plus"></i></a>
													<a href="#" class="cl-instagram"><i class="lni-instagram"></i></a>
												</div>
											</div>

										</div>
										
										<div class="pr-single-info">
											<a href="JavaScript:Void(0);" data-toggle="tooltip" data-original-title="Get Print"><i class="ti-printer"></i></a>
										</div>
										
										<div class="pr-single-info">
											<a href="JavaScript:Void(0);" class="compare-button" data-toggle="tooltip" data-original-title="Compare"><i class="ti-control-shuffle"></i></a>
										</div>
										
										<div class="pr-single-info">
											<a href="JavaScript:Void(0);" class="like-bitt add-to-favorite" data-toggle="tooltip" data-original-title="Add To Favorites"><i class="lni-heart-filled"></i></a>
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			';
						?>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray" >
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<?php 
							extract($onesp);
							extract($lay_diadiem);
					
							echo '
							<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Đặc điểm bất động sản</h4>
								</div>
								
								<div class="block-body">
									<ul class="dw-proprty-info">
										<li><strong>Giá tiền</strong>'.$don_gia.' tỷ</li>
										<li><strong>Diện tích</strong>'.$dien_tich.' m²</li>
									
										<li><strong>Khu vực</strong>'.$ten_dd.'</li>
									</ul>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="block-wrap">
								
								<div class="block-header">
									<h4 class="block-title">Mô tả dự án</h4>
								</div>
								
								<div class="block-body">
									<p>'.$mo_ta.'</p>
								</div>
								
							</div>
							
						
							
						</div>			
							';
						?>
						
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">
													
								<!-- Featured Property -->
								<div class="sidebar-widgets">
									
									<h4>Sản Phẩm cùng loại</h4>
									
									<div class="sidebar_featured_property">
										<?php
											foreach($sp_cung_loai as $sp_cung_loai){
												extract( $sp_cung_loai);
												$linksp = "index.php?act=sanphamct&id=".$id;
												$hinh_p=$img_p.$hinh;
												echo '
												<div class="sides_list_property">
												<div class="sides_list_property_thumb">
													<img src="'.$hinh_p.'" class="img-fluid" alt="">
												</div>
												<div class="sides_list_property_detail">
													<h4><a href="'.$linksp.'l">'.$ten_sp.'</a></h4>
													<span><i class="ti-location-pin"></i>'.$dia_chi.'</span>
													<div class="lists_property_price">
														<div class="lists_property_types">
															<div class="property_types_vlix sale">$'.$don_gia.'</div>
														</div>
														<div class="lists_property_price_value">
															<h4>'.$dien_tich.'m²</h4>
														</div>
													</div>
												</div>
											</div>
												';
										}
										?>
										
									</div>
									
								</div>
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
		
		</div>
		<?php include "footer.php"?>

