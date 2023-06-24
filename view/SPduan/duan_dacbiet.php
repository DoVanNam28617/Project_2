<?php include  "headaddbd.php"?>
<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/listings-list-with-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:19:52 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Rikada - Powerful Residence Real Estate Template</title>

        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		
    </head>
	<style>
        .image{
            width: 40%;
           
        }
        .image img{
            height: 200px;
            width: 100%;
        }
        .listing{
            display: grid;
            grid-template-columns: 35% 65% ;
        }
        #timDuan{
            width: 200px;
            height: 30px;
            border: 2px solid black;
            border-radius: 5px;
            margin-bottom: 15px;
            font-weight: 700;           
        }
		.kyw{
			width: 150px;
			height: 30px;
			border: 1px solid black;
			border-radius: 5px;
			margin-right: 5px;
			}
			.kyw:hover{
			border: 2px solid red;
			}
			.iddm:hover{
			border: 2px solid rgb(5, 112, 243);
			}
			/* .iddm:hover{
			border: 2px solid green;
			} */
			.iddm{
			width: 150px;
			height: 30px;
			border: 1px solid black;
			border-radius: 5px;
			/* margin-left: 10px; */
			text-align: center;
			}
			.button{
				border: 1px solid red;
				border-radius: 5px;
				background-color: red;
				color: white;
				cursor: pointer;
			}
    </style>
    <body class="green-skin">
   
        <div id="main-wrapper">
		
			<div class="page-title"  style="background-color:#384E65">
				<!-- <div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title" style="margin-top:35px;color:white">Property List</h2>
							<span class="ipn-subtitle">Property List With Sidebar</span>
							
						</div>
					</div>
				</div> -->
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ All Property ================================== -->
			<section>
			
				<div class="container">
					<div class="row">
						
						<div class="col-lg-8 col-md-12 list-layout">
							<div class="row">
							
								<div class="col-lg-12 col-md-12">
									<div class="filter-fl">
                                    <?php
                                        $duan_dacbiet = sanpham_loadall_dac_biet();                                       
                                        // array($duanNew);
                                        $count = count($duan_dacbiet);
                                                                       
                                        echo '
                                        <h4>các dự án đặc biệt: <span class="theme-cl">'.$count.'</span></h4>
                                        '
                                    ?>										
										<div class="btn-group custom-drop">
											<button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Short By<i class="ti-angle-down"></i>
											</button>
											<div class="dropdown-menu pull-right animated flipInX">
												<a href="#">Latest</a>
												<a href="#">Most View</a>
												<a href="#">Most Popular</a>
											</div>
										</div>
									</div>
								</div>
								
							
								<!-- Single Property Start -->
                            <?php foreach ($duan_dacbiet as $duan_DB): ?>
                                <?php 
                                        extract($duan_DB);
                                        $linksp = "index.php?act=sanphamct&id=".$id;
                                        $hinh = $img_p.$hinh;                                 
                                ?>
								<div class="col-lg-12 col-md-12">
									<div class="property-listing property-1">
											
										<div class="image">
											<a href="single-property-2.html">
												<img src="<?= $hinh?>" class="img-fluid mx-auto" alt="" />
											</a>
										
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper">
												<div class="listing-short-detail">
													<h4 class="listing-name"><a href="<?= $linksp?>"><?= $ten_sp?></a></h4>
													<span class="listing-location"><i class="ti-location-pin"></i><?= $dia_chi?></span>
												</div>
												<div class="list-author">
													<a href="#"><img src="assets/img/add-user.png" class="img-fluid img-circle avater-30" alt=""></a>
												</div>
											</div>
										
											<div >
												<ul class="listing">
													<li><strong>Diện tích: </strong><?= $dien_tich?> m²</li>
													<li><strong>Ngày đăng: </strong><?= $ngay_dang?></li>
													<!-- <li><strong>Sqft:</strong>3,700</li> -->
												</ul>
											</div>
										
											<div class="listing-footer-wrapper">
												<div class="listing-price">
													<h4 class="list-pr"><?= $don_gia?> tỷ</h4>
												</div>
												<!-- <div class="listing-detail-btn">
													<a href="single-property-2.html" class="more-btn">More Info</a>
												</div> -->
											</div>
											
										</div>
										
									</div>
								</div>
                            <?php endforeach?>
							
							</div>
							
							<!-- Pagination -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination p-center">
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Previous">
											<span class="ti-arrow-left"></span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item active"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">18</a></li>
										<li class="page-item">
										  <a class="page-link" href="#" aria-label="Next">
											<span class="ti-arrow-right"></span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
									</ul>
								</div>
							</div>
					
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="page-sidebar">
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
								<h4>Tìm dự án</h4>
								<form action="index.php?act=duan_search" method="POST">
									<input type="text" name="kyw" placeholder="Tìm bất động sản" class="kyw">                                          
								
									<select name="iddm" class="iddm">
									<option value="0">--Danh mục--</option>
									<option value="0">Tất cả</option>
										<?php
											foreach($listdanhmuc as $danhmuc)
											{
											extract($danhmuc);
											echo '<option value="'.$id_loai.'">'.$ten_loai.'</option>';
											}
										?>
									</select> <br> <br>

									<select name="iddd" class="iddm">
									<option value="0">--Khu vực--</option>
									<option value="0">Tất cả</option>
										<?php
											foreach($listdiadiem as $diadiem)
											{
											extract($diadiem);
											echo '<option value="'.$id_dd.'">'.$ten_dd.'</option>';
											}
										?>
									</select>

									<h4>Lọc theo giá</h4>																	
                                
                                    <select name="donGia" id="timDuan">
                                        <option value="0">All</option>
                                        <option value="50">Tất cả</option>
                                        <option value="10">1 - 10 tỷ</option>
                                        <option value="20">10 -20 tỷ</option>
                                        <option value="30">20 - 30 tỷ</option>
                                    </select>

									<div class="ameneties-features">								
										<button type="submit" name="tim" class="btn btn-theme full-width">Lọc dự án</button>
									
									</div>
                               
								</div>
							</div>
						</form>
							
							<!-- Sidebar End -->
						
						</div>
					</div>
				</div>	
			</section>
			<!-- ============================ All Property ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
		
<?php include  "footer.php"?>				
