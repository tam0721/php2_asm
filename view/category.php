	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Danh mục sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ <span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Sản phẩm</span></a>
						<!-- <a href="category.html">Fashon Category</a> -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<?php
		if($note ==1)
		echo "
		<script>alert('Da them vao gio hang');</script>";

	?>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Thương hiệu giày</div>
					<ul class="main-categories">
						<!-- <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>Fruits and Vegetables<span class="number">(53)</span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li> -->
						<?php
						$linkdm0="index.php?act=category";
							echo'
							<li class="main-nav-list"><a href="'.$linkdm0.'"><span
									class="lnr lnr-arrow-right"></span>ALL<span class="number"></span></a></li>';
							foreach ($dsdm as $dm) {
								extract($dm);
								$linkdm="index.php?act=category&iddm=".$ma_loai;
								echo'
									
									<li class="main-nav-list"><a href="'.$linkdm.'"><span
									class="lnr lnr-arrow-right"></span>'.$ten_loai.'<span class="number"></span></a></li>
									
								';
							}
						
						?>
	
					</ul>
				</div>
				<!-- <div class="sidebar-filter mt-50">
					<div class="common-filter">
						<div class="head">Sản phẩm theo giá</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Giá:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to"> - </div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<!-- <select>
							<option value="1">Phân loại</option>
							<option value="1">Phân loại</option>
							<option value="1">Phân loại</option>
						
						</select> -->
					</div>
					<div class="sorting mr-auto">
						<!-- <select>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
						</select> -->
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
						if($react==1){
							foreach($filtersp as $sp){
								extract($sp);
								$hinh=$img_path.$img;
								$price_1 = $price_old;
								if ($price_new > 0) $price_1 = $price_new;
								$sphct="index.php?act=sanphamct&idsp=".$id;
								echo '
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<a href="'.$sphct.'">
												<img class="img-fluid" src="'.$hinh.'" alt="" style="height:250px; width:250px;">
											</a>
											<div class="product-details">
												<h6>'.$name.'</h6>
											<div class="price">
												<h6>$'.$price_1.'</h6>
											</div>
											
											<form action="index.php?act=cartprocess" method="post">
													<input type="hidden" name="id" value="'.$id.'">
													<input type="hidden" name="name" value="'.$name.'">
													<input type="hidden" name="price" value="'.$price_1.'">
													<input type="hidden" name="img" value="'.$img.'">
													<input type="hidden" name="soluong" value="1">
											<div class="prd-bottom">
												<lable for="them" class="social-info">
													<span class="ti-bag"></span>
<<<<<<< HEAD
													<p class="hover-text">
														<input type="submit" name="addgiohang" id="them" value="Them vao gio" style="background: transparent;border: none !important;">
													</p>
												</lable>
											</form>
												<a href="#" class="social-info">
=======
													<p class="hover-text">Thêm giỏ</p>
												</a>
												<a href="" class="social-info">
>>>>>>> 08254aa56eed29616a6087f0cbdaedfec17a8934
													<span class="lnr lnr-heart"></span>
													<p class="hover-text">Yêu thích</p>
												</a>
												<a href="" class="social-info">
													<span class="lnr lnr-sync"></span>
													<p class="hover-text">So sánh</p>
												</a>
												<a href="" class="social-info">
													<span class="lnr lnr-move"></span>
													<p class="hover-text">xem thêm</p>
												</a>
											</div>
										</div>
									</div>
								</div>';
						}
					} else
						foreach($spnew as $sp){
							extract($sp);
							$hinh=$img_path.$img;
							$price_1 = $price_old;
							if ($price_new > 0) $price_1 = $price_new;
							$sphct="index.php?act=sanphamct&idsp=".$id;
							echo '
								<div class="col-lg-4 col-md-6">
									<div class="single-product">
										<a href="'.$sphct.'">
											<img class="img-fluid" src="'.$hinh.'" alt="" style="height:250px; width:250px;">
										</a>
										<div class="product-details">
											<h6>'.$name.'</h6>
										<div class="price">
											<h6>$'.$price_1.'</h6>
										</div>
										
										<form action="index.php?act=cartprocess" method="post">
												<input type="hidden" name="id" value="'.$id.'">
												<input type="hidden" name="name" value="'.$name.'">
												<input type="hidden" name="price" value="'.$price_1.'">
												<input type="hidden" name="img" value="'.$img.'">
												<input type="hidden" name="soluong" value="1">
										<div class="prd-bottom">
											<lable for="them" class="social-info">
												<span class="ti-bag"></span>
<<<<<<< HEAD
												<p class="hover-text">
													<input type="submit" name="addgiohang" id="them" value="Them vao gio" style="background: transparent;border: none !important;">
												</p>
											</lable>
										</form>
											<a href="#" class="social-info">
=======
												<p class="hover-text">Thêm giỏ</p>
											</a>
											<a href="" class="social-info">
>>>>>>> 08254aa56eed29616a6087f0cbdaedfec17a8934
												<span class="lnr lnr-heart"></span>
												<p class="hover-text">Yêu thích</p>
											</a>
											<a href="" class="social-info">
												<span class="lnr lnr-sync"></span>
												<p class="hover-text">So sánh</p>
											</a>
											<a href="'.$sphct.'" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">Xem thêm</p>
											</a>
										</div>
									</div>
								</div>
							</div>';
						}
						
					?>		
				
					</div>
				</section>
			
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<!-- <select>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
						</select> -->
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ưu đãi của tuần</h1>
						<p>Nhằm tri ân khách hàng cửa hàng chúng tôi đã tạo ra nhiều ưu đãi hấp dẫn
							để quý khách hàng có thể mua sắm các mẫu giày đẹp mắt với giá cả hợp lý.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Nike CV7562-104.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Nike CV7562-104</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Nike React Infinity Run.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Nike React Infinity Run</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Nike Air Max 921733-104.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Nike Air Max 921733-104</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Adidas Ultraboost FZ4007.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Adidas Ultraboost FZ4007</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Adidas Alpha Bounce GY5401.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Adidas Alpha Bounce GY5401</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Puma Bmw Mms Drift Cat.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Puma Bmw Mms Drift Cat</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Puma Magnify Nitro Wns.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Puma Magnify Nitro Wns</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Puma 375149-01.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Puma 375149-01</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex" id="imgDeal">
								<a href="#"><img src="img/product/Anta 812225586-3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Anta 812225586-3</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<style>
		#imgDeal img{
			width: 80px;
			height: 80px;
			border-radius: 5px;
		}
	</style>