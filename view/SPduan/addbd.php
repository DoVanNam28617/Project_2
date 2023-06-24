<?php include  "headaddbd.php"?>
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
			<!-- ============================ Page Title End ================================== -->
			
			
			<!-- ============================ Submit Property Start ================================== -->
		
			<section>
			
				<div class="container">
					<div class="row">
						
						<!-- Submit Form -->
						<div class="col-lg-12 col-md-12">
						
							<div class="submit-page">
								
								<!-- Basic Information -->
							<div class="form-submit">	
									<!-- <h3>Tên bất động sản</h3> -->
									<div class="submit-section">
									<form action="index.php?act=addbd" method="post" enctype="multipart/form-data">
										<div class="form-row">
										
											<div class="form-group col-md-12">
												<label>Tên bất động sản<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
												<input type="text" class="form-control" name="ten_sp" >
												<span style="color:red">
													<?=isset($error['ten_sp']) ? $error['ten_sp'] : '' ?>
												</span>
											</div>
											
											
										
											<div class="form-group col-md-6">
											
                                              	<label>Danh mục</label>
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
													<span style="color:red">
														<?=isset($error['iddm']) ? $error['iddm'] : '' ?>
													</span>
											</div>
											
											<div class="form-group col-md-6">
												<label>Giá tiền</label>
												<input type="text" class="form-control" placeholder="USD" name="price" >
												<span style="color:red">
													<?=isset($error['price']) ? $error['price'] : '' ?>
												</span>
											</div>
											
											<div class="form-group col-md-6" >  
												<label>Địa chỉ</label>
												<input type="text" class="form-control" name="address" >
												<span style="color:red">
													<?=isset($error['address']) ? $error['address'] : '' ?>
												</span>
											</div>

											<div class="form-group col-md-6">
											
                                              	<label>Khu vực</label>
                                            <select name="iddd" id="ptypes" class="form-control">
                                                    <option value="0">-- Chọn khu vực --</option>
                                              
                                                        <?php
                                                           $listdiadiem = loadall_diadiem();
                                                            foreach($listdiadiem as $diadiem)
                                                            {
                                                            extract($diadiem);
                                                            echo '<option value="'.$id_dd.'">'.$ten_dd.'</option>';
                                                            }
															// var_dump($ten_dd);
                                                        ?>
                                                    </select>
													<span style="color:red">
													<?=isset($error['iddd']) ? $error['iddd'] : '' ?>
												</span>
											</div>
											<div class="form-group col-md-6"> 
												<label>Diện tích</label>
												<input type="text" class="form-control" name="dien_tich" >
												<span style="color:red">
													<?=isset($error['dien_tich']) ? $error['dien_tich'] : '' ?>
												</span>
											</div>

											<input type="hidden" name="trang_thai" value="0">
											<input type="hidden" name="goi_tin" value="0">
											
										
										</div>
									
									</div>
								
							
								 <div class="form-submit">	
									<h3>Ảnh</h3>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-12">
                                                        <input type="file" name="hinh"> <br>
														<span style="color:red">
																<?=isset($error['hinh']) ? $error['hinh'] : '' ?>
															</span>


                                                    <br> <br>   
												<label>Ảnh mô tả</label>
												<input type="file" name="anh_mota[]" multiple="multiple">
												<span style="color:red">
													<?=isset($error['anh_mota']) ? $error['anh_mota'] : '' ?>
												</span>
											</div>
											
										</div>
									</div>
								</div> 
								
							
							
								
								<!-- Detailed Information -->
								<div class="form-submit">	
									<h3>Mô tả bất động sản</h3>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-12">
												<label>Description</label>
												<textarea class="form-control h-120" name="mo_ta"></textarea required>
											</div>
											
											
											
										</div>
									</div>
								</div>
								
								<!-- Contact Information -->
					
								
								<!-- <div class="form-group col-lg-12 col-md-12">
									<label>GDPR Agreement *</label>
									<ul class="no-ul-list">
										<li>
											<input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
											<label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
										</li>
									</ul>
								</div> -->
								
								<div class="form-group col-lg-12 col-md-12">
									<button class="btn btn-theme" type="submit" name="dangbai">Đăng bài</button>
									<?php
												if(isset($thongbao)&&($thongbao!="")) echo $thongbao
										?>
								</div>
							</form>
											
						</div>
							</div>
								
						</div>
						
					</div>
				</div>
						
			</section>
		
			<!-- ============================ Submit Property End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
		
			<!-- ============================ Call To Action End ================================== -->
			
<?php include "footer.php"?>
