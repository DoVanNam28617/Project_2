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
	 <link rel="stylesheet" href="./view/css/index.css">

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
		
							<li><a href="index.php">Trang chủ<span class="submenu-indicator"></span></a>
									
								</li>
								
                                <li class="dropdowns">
                                    <a href=""class="dropbtsn">Dự án</a>
                                    <ul class="dropdowns-content">
                                        <a href="index.php?act=sanpham">All</a>
                                    <?php
                                        $dsdm = loadall_danhmuc();
                                            foreach ($dsdm as $dm){
                                                extract($dm);
												$linkdm = "index.php?act=sanpham&id_loai=".$id_loai;
                                                echo '
                                                            <a href="'.$linkdm.'">'.$ten_loai.'</a>
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
											extract($_SESSION['user']);
											$id_kh_coin = $_SESSION['user']['id_kh'];
											$coinOne=user_coin($id_kh_coin);
											extract($coinOne);
											$hinh = $img_p.$img;
										
							?> 
										
												<div class="btn-group account-drop">
													<button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;margin-left:50px">
													<!-- <i  class="fa-sharp fa-solid fa-circle-user" style="font-size:25px;color:#00BA74"></i> -->
													<li style="font-size:16px; color:red"> 
													<img src="<?=$hinh?>" class="avater-img" alt=""><?=$ho_ten?> - <i class="fa-solid fa-coins" style="font-size:20px;color:rgb(218, 218, 14);margin-left:px"></i>  <?=$coin?><span class="submenu-indicator"></span><span class="submenu-indicator"></span>
													
													</li>
													</button>
													<div class="dropdown-menu pull-right animated flipInX" x-placement="bottom-start" style="position: absolute; transform: translate3d(15px, 61px, 0px); top: 0px; left: 0px; will-change: transform;">
														<a href="index.php?act=edit_taikhoan"><i class="ti-user"></i>Hồ sơ</a>  <br>
														<?php if($vai_tro==10){?>                                
														<a href="admin/index.php"><i class="ti-layers"></i>Quản trị admin</a> <br>   
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
												<li><a  href="index.php?act=dangki"  ><i class="fas fa-user-circle mr-1" id="login"></i>Đăng ký</a></li>
											
												<li><a href="index.php?act=dangnhap"   ><i class="fas fa-user-circle mr-1" id="login"></i>Đăng nhập</a></li>
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
			