
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
									
								</li>
								
                                <li class="dropdowns">
                                    <a href=""class="dropbtns">Dự án</a>
                                    <ul class="dropdowns-content">
                                        <a href="index.php?act=sanpham">All</a>
                                    <?php
                                        $dsdm = loadall_danhmuc();
                                            foreach ($dsdm as $dm){
                                                // extract($dm);

												$dm['id_loai'];
                                                $linkdm = "index.php?act=sanpham&id_loai=".$dm['id_loai'];;
                                                echo '
                                                            <a href="'.$linkdm.'">'.$dm['ten_loai'].'</a>
                                                    '; 
                                            }
                                        ?>
                                    </ul>
    
                    		</li>
															
			
							</ul>
						
							<ul class="nav-menu nav-menu-social align-to-right" >
						
							<?php
										if(isset(($_SESSION['user']))){
											extract($_SESSION['user']);
											$id_kh_coin = $_SESSION['user']['id_kh'];
											$coinOne=user_coin($id_kh_coin);
											if(is_array($coinOne)){
												extract($coinOne);
											$hinh = $img_p.$img;
											}
																					
											

																			
							?> 
										<!-- <li style="font-size:16px; color:red">
															<i class="fa-solid fa-coins" style="font-size:20px;color:rgb(218, 218, 14);margin-left:px"></i>  <?=$coin?><span class="submenu-indicator"></span>
													
										</li> -->
												<div class="btn-group account-drop">
													<button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;margin-left:50px">
													<!-- <i  class="fa-sharp fa-solid fa-circle-user" style="font-size:25px;color:#00BA74;margin-left:10px"></i> -->
													<li style="font-size:16px; color:red"> 
													<img src="<?=$hinh?>" class="avater-img" alt=""><?=$ho_ten?> - <i class="fa-solid fa-coins" style="font-size:20px;color:rgb(218, 218, 14);margin-left:px"></i>  <?=$coin?><span class="submenu-indicator"></span><span class="submenu-indicator"></span>
													
													</li>
													</button>
													<div class="dropdown-menu pull-right animated flipInX" x-placement="bottom-start" style="position: absolute; transform: translate3d(15px, 61px, 0px); top: 0px; left: 0px; will-change: transform;">
														<a href="index.php?act=edit_taikhoan&id_kh=<?=$id_kh?>"<?=$ho_ten?>><i class="ti-user"></i>Hồ sơ</a> <br> 
														<?php if($vai_tro==10){?>                                
														<a href="admin/index.php"><i class="ti-layers"></i>Quản trị admin</a>    <br>
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
											
					
										}
									else{
															

											?>
												<li><a  href="index.php?act=dangki" ><i class="fas fa-user-circle mr-1" id="login"></i>Đăng ký</a></li>
											
												<li>
													<a href="index.php?act=dangnhap" >
														<i class="fas fa-user-circle mr-1"></i>Đăng nhập</a>
												</li>
											
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
																
			<a id="back2Top" class="top-scroll" title="Back to top" href="#" style="display: inline;"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		<!-- Color Switcher -->
		<div class="style-switcher">
			<div class="css-trigger"><a href="#"><i class="ti-settings"></i></a></div>
			<div>
				<ul id="themecolors" class="m-t-20">
					<li><a href="javascript:void(0)" data-skin="default-skin" class="default-theme">1</a></li>
					<li><a href="javascript:void(0)" data-skin="red-skin" class="red-theme">2</a></li>
					<li><a href="javascript:void(0)" data-skin="green-skin" class="green-theme">3</a></li>
					<li><a href="javascript:void(0)" data-skin="blue-skin" class="blue-theme">4</a></li>
					<li><a href="javascript:void(0)" data-skin="yellow-skin" class="yellow-theme">5</a></li>
					<li><a href="javascript:void(0)" data-skin="purple-skin" class="purple-theme">6</a></li>
					<li><a href="javascript:void(0)" data-skin="oceangreen-skin" class="oceangreen-theme">7</a></li>
					<li><a href="javascript:void(0)" data-skin="goodgreen-skin" class="goodgreen-theme">8</a></li>
					<li><a href="javascript:void(0)" data-skin="goodred-skin" class="goodred-theme">9</a></li>
					<li><a href="javascript:void(0)" data-skin="blue2-skin" class="blue2-theme">10</a></li>				
				</ul>
			</div>
		</div>

		
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>



<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"></body><!-- Mirrored from themezhub.net/rikada-demo-05/rikada/submit-property-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Nov 2022 13:20:12 GMT --></html>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero-banner" style="background:url(view/assets/img/new-banner-4.jpg) no-repeat;" data-overlay="6">
				<div class="container">
					
					<h1 class="big-header-capt mb-0" style="font-size:30px">Hãy để chúng tôi dẫn bạn đến ngôi nhà ước mơ</h1>
					<p class="text-center mb-5">Rikada mái ấm cho mọi gia đình</p>
				
											
					<!-- Type -->
					<!-- <div class="property-search-type">
						<label class="active"><input class="first-tab" name="tab" checked="checked" type="radio">Any Status</label>
						<label><input name="tab" type="radio">For Sale</label>
						<label><input name="tab" type="radio">For Rent</label>
						<div class="property-search-type-arrow"></div>
					</div> -->
					<div class="full-search-2 eclip-search italian-search hero-search-radius">
						<div class="hero-search-content">
							<form action="index.php?act=search" method="POST">
							
							<div class="row">
							
								<div class="col-lg-3 col-md-3 col-sm-12 small-padd">
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control b-r" placeholder="Tên bất động sản" name="kyw">
											<i class="ti-search"></i>
										</div>
									</div>
								</div>
	
								
								<div class="col-lg-3 col-md-3 col-sm-12 small-padd">
									<div class="form-group">
										<div class="input-with-icon">
											
                                            <select name="iddm" id="ptypes" class="form-control">
                                                    <option value="0">-- Chọn danh mục --</option>
                                              
                                                        <?php
                                                           $listdanhmuc = loadall_danhmuc();
                                                            foreach($listdanhmuc as $danhmuc)
                                                            {
                                                            extract($danhmuc);
                                                            echo '<option value="'.$id_loai.'">'.$ten_loai.'</option>';
                                                            }
                                                        ?>
                                                    </select>
										
											<i class="ti-briefcase"></i>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-3 col-sm-12 small-padd">
									<div class="form-group">
										<div class="input-with-icon">
												<select name="iddd" id="ptypes" class="form-control">
                                                    	<option value="0">-- Chọn khu vực --</option>
                                              
                                                        <?php
                                                           $listkhuvuc = loadall_diadiem();
                                                            foreach($listkhuvuc as $khuvuc)
                                                            {
                                                            extract($khuvuc);
                                                            echo '<option value="'.$id_dd.'">'.$ten_dd.'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                            <i class="ti-location-pin"></i>
										</div>
									</div>
                                  
								</div>
								
								<select name="donGia" id="timDuan" hidden>
                                        <option value="0">All</option>
                                        <option value="50">Tất cả</option>
                                        <option value="10">1 - 10 tỷ</option>
                                        <option value="20">10 -20 tỷ</option>
                                        <option value="30">20 - 30 tỷ</option>
                                    </select>

                                <!-- <i class="ti-location-pin"></i> -->
								
								<div class="col-lg-1 col-md-1 col-sm-12 small-padd">
									<div class="form-group">
										<a role="button" class="collapsed ad-search" data-toggle="collapse" href="#advance-search" aria-expanded="false" aria-controls="advance-search"></a>
									</div>
								</div>
								
								<div class="col-lg-2 col-md-2 col-sm-12 small-padd">
									<div class="form-group">
										<input type="submit"  class="btn search-btn" name="listgo" value="Tìm kiếm">
									</div>
                                    <!-- <input   name="listgo" value="Go" class="btn btn-cancel" class="go"> -->
								</div>
								
							</div>
							</form>
							
						
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/rangeslider.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/lightbox.js"></script> 
		<script src="assets/js/imagesloaded.js"></script>
		 
		<script src="assets/js/custom.js"></script>
		<script src="assets/js/cl-switch.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
		<script src="assets/js/dropzone.js"></script>
		<!-- New Js -->

	<!-- Code injected by live-server -->
			