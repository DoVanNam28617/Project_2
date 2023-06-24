<?php   include 'headaddbd.php'?>
<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:19:51 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Rikada - Powerful Residence Real Estate Template</title>
		
        <!-- Custom CSS -->
        <link href="view/assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="view/assets/css/colors.css" rel="stylesheet">
        <style>
            .blog-wrap-grid{
                width: 400px;
            }
            .blog-wrap-grid img{
                width: 100%;
                height: 300px;
            }
			.col-md-6{
				display: grid;
				grid-template-columns: 1fr 1fr 1fr;
				gap: 32px;
			}
        </style>
		
    </head>
	

			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title" style="background-color:#384E65">
				<!-- <div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title" style="margin-top:35px;color:white">Submit Property</h2>
							<span class="ipn-subtitle" style="color:white">Just Submit Your Property</span>
							
						</div>
					</div>
				</div> -->
			</div>
		
		
		<section>
			
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading center" style="color:black" >
								<p style="font-size:30px">Khu vực</h3> <strong><?=$ten_dd?></p>
							</div>
						</div>
					</div>
				
					<!-- row Start -->
					
					<div class="product">
						<?php
                                  foreach ($dsdd as $dd){
                                    extract($dd);
                                    $linksp = "index.php?act=sanphamct&id=".$id;
                                    $hinh = $img_p.$hinh;
										echo '
												
									<div class="list_flash">
									<div class="img">
									<a href="'.$linksp.'"><img src="'.$hinh .'" alt="" ></a>
									</div>
									<div class="name">
										<a href="'.$linksp.'"><p>'.$ten_sp.'</p></a>
									</div>
									<div class="price">
										<div class="gia">
										<p>'.$don_gia.' tỷ</p>
										</div>
										<div class="sell">
										<p>'.$dien_tich.' m² </p>
										</div>
									</div>
									<div class="address">
									<p>'.$dia_chi.'</p>                                       
								</div>
								<div class="seen">
															   
							</div>
								</div>	
										';
								}?>
						</div>
				
					<!-- /row -->
                   
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
								<li class="page-item"><a class="page-link" href="">1</a></li>
								<li class="page-item"><a class="page-link" href="index.php?act=search">2</a></li>
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
						
			</section>
		
			<!-- ============================ Submit Property End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
		
			<?php include "footer.php"?>

		
