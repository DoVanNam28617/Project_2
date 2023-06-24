<link rel="stylesheet" href="view/css/index.css"> 

<section class="gray">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center mb-3">
								<h2>Dự án nổi bật</h2>
								<p>Dự án mới & dự án lớn đang được quan tâm số 1.</p>
							</div>
						</div>
					</div>
					
				
					
							<div class="product">
								
								<?php foreach ($bdsnew as $bds) {
									extract($bds);
									$linksp = "index.php?act=CTduan&id=$id &id_kh=$id_kh &id_dd=$id_dd";
									$hinh_p = $img_p . $hinh;

									// $ngay_day =strtotime( $ngay_daytin);
									// date_default_timezone_set('ASIA/Ho_Chi_Minh');
									// $date = strtotime(date('h:i:sa Y-m-d'));
									// $day = '86400';
									// $kq = $date - $ngay_day;
									// if($kq < $day){
            						echo '
									
										
									<div class="list_flash">
										<div class="img">
										<a href="'.$linksp.'"><img src="'.$hinh_p .'" alt="" ></a>
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
									</div>	';
					}
    ?>
								
							</div> 
<!-- 
							<div class="buttonHT">
								<button>Mở rộng </button>
							</div>  -->

		
								
							</div>
							<div class="buttonCT">
								<a href="index.php?act=duan_dacbiet"><button>Xem tiếp </button></a>
							</div>
						</div>
				
							
				
					
				
				</div>
			</section>
			
			<section>
				<div class="container">
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Bất động sản theo khu vực</h2>
								<p>Top khu vực bất động sản lớn của cả nước</p>
							</div>
						</div>
					</div>
					
					<div class="rows">
								
								<?php 
								
								foreach ($list_dd as $dd) {
									extract($dd);
									// var_dump($id_dd);
									$linkdd = "index.php?act=sanphamdd&id_dd=".$id_dd;
									$hinh = $img_p.$img;
									echo '<div class="row_content">
									<div class="location-listing" >
										<div class="row_img" >
											<a href="listings-list-with-sidebar.html"><img src="'.$hinh.'" class="img-fluid" alt="" /></a>
										</div>
										<div class="location-listing-caption">
											<h4><a href="'.$linkdd.'">'.$ten_dd.'</a></h4>
											<span class="theme-cl">'.$soluong.' dự án</span>
										</div>
									</div>
								</div>';
        } ?>
           
			
						
					
					</div>
				</div>
			</section>
			<!-- ============================ Property Location End ================================== -->
			
			<!-- ============================ Smart Testimonials ================================== -->
			<section class="image-cover pb-0" style="background:#122947 url(view/assets/img/pattern.png) no-repeat;">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-6 col-md-7">
							<h2 class="text-light">các doanh nghiệp đã nói gì ?</h2>
							
							<div class="smart-textimonials smart-light" id="smart-textimonials">
								
								<!-- Single Item -->
								<div class="item">
									<div class="smart-tes-content">
										<p>Tất cả dự án đề rất tốt, mọi dự án đều có tiềm năng, đem lại lợi nhuận sử dụng cao cho cá nhân và tập thể.</p>
									</div>
									
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="view/assets/img/user-3.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Shark Bình</h4>
												<span class="st-author-subtitle">CEO Việt Nam</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="smart-tes-content">
										<p>Những dự án chất lượng nhất mà chúng tôi đang thấy tại đây. Waooo nó thật tuyệt vời, tất cả đều là những thứ chúng tôi cần.</p>
									</div>
									
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="view/assets/img/user-8.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Shark Liên</h4>
												<span class="st-author-subtitle">CEO Việt Nam</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="smart-tes-content">
										<p>Mọi thứ đều hoàn hả. Thật tuyệt vời khi những thứ chúng tôi cần đều ở đây.</p>
									</div>
									
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="view/assets/img/user-3.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Shark Hưng</h4>
												<span class="st-author-subtitle">CEO Việt Nam</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="item">
									<div class="smart-tes-content">
										<p>Thật tuyệt vời. Đó là từ tôi muốn nói đến với những dự án ở đây. Các dự án đã đem lại cho chúng tôi vô vàn những thuận lợi.</p>
									</div>
									
									<div class="smart-tes-author">
										<div class="st-author-box">
											<div class="st-author-thumb">
												<img src="view/assets/img/user-5.jpg" class="img-fluid" alt="" />
											</div>
											<div class="st-author-info">
												<h4 class="st-author-title">Shark Phú</h4>
												<span class="st-author-subtitle">CEO Việt Nam</span>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Item -->
								
								
							</div>
						</div>
						
						<div class="col-lg-6 col-md-5">
							<img src="view/assets/img/avatar-large-1.png" class="img-fluid" alt="">
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->
			
			<!-- ================================= Blog Grid ================================== -->
			<section>
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading center">
								<h2>Bất động sản cho bạn</h2>
								<p>Chúng tôi luôn đem đến cho khách hàng những dự án phù hợp nhất</p>
							</div>
						</div>
					</div>
					
					<div class="product_item">
						<?php
							foreach($listbinhthuong as $dacbiet){
								extract($dacbiet);
								$linksp = "index.php?act=CTduan&id=$id &id_kh=$id_kh &id_dd=$id_dd";
								$hinh = $img_p.$hinh;
								echo '
								<div class="list_flash">
										<div class="img">
										<a href="'.$linksp.'"><img src="'.$hinh.'" alt="" ></a>
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
								
									</div>	';
							}
						?>											
					</div>

					<div class="buttonHTP2">
						<button>Mở rộng </button>
					</div>

					<div class="list_item_product" style="display:none">
						<div class="product_item">
							<?php
								foreach($lisbinhthuongP2 as $binhthuong){
									extract($binhthuong);
									$linksp = "index.php?act=CTduan&id=$id &id_kh=$id_kh &id_dd=$id_dd";
									$hinh = $img_p.$hinh;
									echo '
									<div class="list_flash">
											<div class="img">
											<a href="'.$linksp.'"><img src="'.$hinh.'" alt="" ></a>
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
									
										</div>	';
								}
							?>											
						</div>
					</div>
					<div class="buttonCTP2">
						<a href="index.php?act=sanpham"><button>Xem tất cả </button></a>
					</div>

					
				</div>		
			</section>
			<!-- ================= Blog Grid End ================= -->
						
			
			<!-- ============================ Call To Action ================================== -->
		
			<!-- ============================ Call To Action End ================================== -->

	<script>
        const themSp = document.querySelector(".buttonHT");
        const butCT = document.querySelector(".buttonCT");
        const listProduct = document.querySelector(".list_product"); 
		const themSPBT = document.querySelector(".buttonHTP2");
		const listProduct_item = document.querySelector(".list_item_product");
		const butCTP2 = document.querySelector(".buttonCTP2");


                
        let flag = 0;

        themSp.addEventListener('click',function(){
                 flag++;
                 if(flag % 2 !=0){
				   listProduct.style.display ='block';
                   butCT.style.display = 'block';
                   themSp.style.display = 'none';
                   listProduct.style.margin ='30px 0px 0px 0px';
                 }else{
					listProduct.style.display = 'none';
					butCT.style.display = 'none';
                   themSp.style.display = 'block';
                 }
                 flag+=1;
               })

		themSPBT.addEventListener('click',function(){
                 flag++;
                 if(flag % 2 !=0){
				  listProduct_item.style.display ='block';
				   butCTP2.style.display = 'block';
                   themSPBT.style.display = 'none';
                   listProduct_item.style.margin ='30px 0px 0px 0px';
                 }else{
					listProduct_item.style.display ='none';
					butCTP2.style.display = 'none';
                   themSPBT.style.display = 'blobk';
                   listProduct_item.style.margin ='30px 0px 0px 0px';
                 }
                 flag+=1;
               })
       
			
    </script>  		
