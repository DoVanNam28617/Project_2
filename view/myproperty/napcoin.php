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
        .vietcom{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            width: 180px;
            margin-left: 42%;
            border: 1px solid white;
            border-radius: 8px;
            box-shadow:  0px 5px 20px 5px #257B53;;
            padding: 5px;
        }
        .vietcom .img{
            width: 50px;
        }
        .vietcom .img img{
            width: 100%;
            height: 40px;
        }
        .stk{
            color:#257B53;
        }
        .stk b{
            font-weight: 700;
        }
        #select{
            height: 30px;
            border: 1px solid gray;
            border-radius: 5px;
        }
        #id{
            text-align: center;
            
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
														<li class="active"><a href="index.php?act=edit_taikhoan"><i class="ti-user"></i>Quản lí tài khoản</a></li>
															
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
                        <h4 style="margin-top: -50px;text-align:center">Nạp tiền tài khoản</h4> 
                            <p style="text-align:center">Chuyển tiền theo tài khoản Admin</p> 
                            <div class="vietcom">
                                <div class="img">
                                    <img src="uploads/logoVietcom.jpg" alt="">
                                </div>
                                <div class="stk">                                 
                                    6688998899
                                   <b>Admin</b>                                
                                </div>
                            </div>
                             <br><br>
							<div class="dashboard-wraper">
                              
								<!-- Basic Information -->
								<div class="form-submit">	
									
									<div class="submit-section">
						
									<form action="index.php?act=napcoin" method="POST" enctype="multipart/form-data">
										<div class="form-row">
											<input type="hidden" name="id_kh" value="<?=$id_kh?>">
											<div class="form-group col-md-6">
												<label>Username</label>
												<input type="text" name="ho_ten" class="form-control" value="<?=$ho_ten?>">
												
											</div>
											
											<div class="form-group col-md-6">
												<label>Số coin muốn nạp</label> <br>
												<select name="so_coin" id="select" style="width:150px">
                                                    <option value="0" id="id">---Mức coin---</option>
                                                    <option value="300">300</option>
                                                    <option value="500">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="2000">2000</option>
                                                </select> <br>
												<span style="color:red">
														<?=isset($error['so_coin']) ? $error['so_coin'] : '' ?>
												</span>
											</div>
											<div class="form-group col-md-6">
												<label>Ảnh chuyển khoản</label>
												<input type="file"   class="form-control" name="img"> <br>
												<span style="color:red">
														<?=isset($error['img']) ? $error['img'] : '' ?>
												</span>
											</div>
												<input type="text" name="id_kh "value="<?=$id_kh?>" hidden>																																
											<div class="form-group col-lg-12 col-md-12" >
												<button class="btn btn-theme" style="background-color: green;margin-left:44%;margin-top:20px" type="submit" name="hoantat">Hoàn tất</button>
												<div class="tb" style="color: red;">
											
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
			</section>
			 -->

		</div>
		<?php include  "footer.php"?>	
		