<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:19:29 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Rikada - Powerful Residence Real Estate Template</title>
	
        <!-- Custom CSS -->
        <link href="view/assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
	 <link href="view/assets/css/colors.css" rel="stylesheet">
     <link rel="stylesheet" href="view/icon/fontawesome-free-6.2.0-web/css/all.css">
	 <link rel="stylesheet" href="view/css/index.css">
    </head>
	<body class="red-skin">
  <style>
	#fa-user-circle:hover{
		color: red;
	}
  </style>      
        <div id="main-wrapper">
		
           
			<div class="header header-transparent change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo" href="#"><img src="view/assets/img/logo-red-light.png" class="logo" alt="" /></a>
							<a class="nav-brand fixed-logo" href="#"><img src="view/assets/img/logo-red.png" class="logo" alt="" /></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
		
								<li class="active"><a href="index.php">Trang chủ<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a class="active" href="index.html">Home Layout 1</a></li>
										<li><a href="home-2.html">Home Layout 2</a></li>
										<li><a href="home-3.html">Home Layout 3</a></li>
										<li><a href="home-4.html">Home Layout 4</a></li>
										<li><a href="home-5.html">Home Layout 5</a></li>
										<li><a href="home-6.html">Home Layout 6</a></li>
										<li><a href="home-7.html">Home Layout </a></li>
										<li><a href="home-8.html">Home Layout 8</a></li>
										<li><a href="map.html">Map Home Layout</a></li>
									</ul>
								</li>
								
                                <li class="dropdown">
                                    <a href=""class="dropbtn">Dự án</a>
                                    <ul class="dropdown-content">
                                        <a href="index.php?act=sanpham">All</a>
                                    <?php
                                        $dsdm = loadall_danhmuc();
                                            foreach ($dsdm as $dm){
                                                extract($dm);
                                                // $linkdm = "index.php?act=sanpham&ma_loai=".$ma_loai;
                                                echo '
                                                            <a href="">'.$ten_loai.'</a>
                                                    '; 
                                            }
                                        ?>
                                    </ul>
    
                    		</li>
							
																			
									<!-- <li><a  href="index.php?act=dangki">Sign Up</a></li>; -->
													
								
							</ul>
						
							<ul class="nav-menu nav-menu-social align-to-right" >
						
							<?php
										if(isset(($_SESSION['user']))){
											extract($_SESSION['user'])
										
							?> 
										
												<div class="btn-group account-drop">
													<button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;margin-left:50px">
													<i  class="fa-sharp fa-solid fa-circle-user" style="font-size:25px;color:#00BA74"></i>
													<li style="font-size:16px; color:red">
															<b style="font-size:20px;color:red;margin-left:3px">Hi,</b> <?=$ho_ten?><span class="submenu-indicator"></span>
													
													</li>
													</button>
													<div class="dropdown-menu pull-right animated flipInX" x-placement="bottom-start" style="position: absolute; transform: translate3d(15px, 61px, 0px); top: 0px; left: 0px; will-change: transform;">
														<a href="my-profile.html"><i class="ti-user"></i>Cập nhật tài khoản</a>  
														<?php if($vai_tro==10){?>                                
														<a href="admin/index.php"><i class="ti-layers"></i>Quản trị admin</a>    
														<?php }?>                               
														<a href="index.php?act=thoat"><i class="ti-bookmark"></i>Đăng Xuất</a>                                   
														<!-- <a class="active" href="change-password.html"><i class="ti-unlock"></i>Change Password</a> -->
													</div>
												</div>
								
											</li>
										
								<li class="add-listing theme-bg" style="background-color:#00BA74">
									<a href="index.php?act=addbd">Đăng bài</a>
								</li>
											<?php
											
									
						
										}else{
															

											?>
												<li><a  href="index.php?act=dangki"><i class="fas fa-user-circle mr-1" id="login"></i>Sign Up</a></li>
											
												<li><a href="index.php?act=dangnhap" ><i class="fas fa-user-circle mr-1" id="login"></i>sign in</a></li>
												<li class="add-listing theme-bg" style="background-color:#00BA74">
														<a href="index.php?act=dangnhap">Đăng bài</a>
												</li>

											<?php }?>
								<li>
								
								</li> 
								
							
							 
								
							</ul>
						
						
												
						</div>
					</nav>
				</div>
			</div>
			