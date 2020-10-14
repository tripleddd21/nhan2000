<?php 
	include "view/layout/head-out-tour.php";
?>
<!-- Home -->

		<div class="home">
			<!-- Image by https://unsplash.com/@peecho -->
			<?php
				$banner = banner_select_loaitour_1();
				foreach ($banner as $value) {
					extract($value);
					echo "	<div class='home_background parallax-window' data-parallax='scroll' data-image-src='$Hinh_anh' data-speed='0.8'></div>
					";}
			?>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_content_inner">
								<div class="home_title">Tour đất liền</div>
								<div class="home_breadcrumbs">
									<ul class="home_breadcrumbs_list">
										<li class="home_breadcrumb"><a href="?page=index">Home</a></li>
										<li class="home_breadcrumb">Tour đất liền</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Find Form -->

		<!-- Offers -->

		<div class="offers">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Các điểm đến hàng đầu tại Việt Nam</h2>
							<div>Tận hưỡng những giây phút đầm ấm với gia đình</div>
						</div>
					</div>
				</div>
				<div class="row filtering_row">
					<div class="col col-edit-db">
						<div class="sorting_group_1">
							<ul class="item_sorting">
								<li>
									<span class="sorting_text">Tìm theo</span>
									<i class="fa fa-angle-down"></i>
									<ul>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Hiển trị tất cả</span></li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Theo giá</span></li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Theo tên</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">Chất lượng</span>
									<i class="fa fa-angle-down"></i>
									<ul>
										<li class="item_filter_btn" data-filter="*"><span>Hiển thị tất cả</span></li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Tăng dần</span></li>
										<li class="item_filter_btn" data-filter=".rating_1"><span>1</span></li>
										<li class="item_filter_btn" data-filter=".rating_2"><span>2</span></li>
										<li class="item_filter_btn" data-filter=".rating_3"><span>3</span></li>
										<li class="item_filter_btn" data-filter=".rating_4"><span>4</span></li>
										<li class="item_filter_btn" data-filter=".rating_5"><span>5</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">Giá</span>
									<i class="fa fa-angle-down"></i>
									<ul>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Măc định</span></li>
										<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Giá bán</span></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="sorting_group_2 clearfix">
							<div class="sorting_icons clearfix">
								<div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
								<div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="items item_grid clearfix">
							<?php
								$tour = tour_select_loaitour_1_all();
								foreach ($tour as $value) {
									extract($value);
									echo "	<div class='item clearfix rating_5 box'>
												<a href='index.php?page=tour-detail&matour=".$Ma_tour."'>
													<div class='item_image'><img src='$Hinh_anh'></div>
													<div class='item_content'>
														<div class='item_price'>$Gia</div>
														<div class='item_title'>$Ten_tour</div>
														<div class='rating rating_5' data-rating='5'>
															<i class='fa fa-star'></i>
															<i class='fa fa-star'></i>
															<i class='fa fa-star'></i>
															<i class='fa fa-star'></i>
															<i class='fa fa-star'></i>
														</div>
														<div class='item_more_link'>$Mo_ta</div>
													</div>
												</a>
											</div>
										";}
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="pages">
							<ul class="pages_list">
								<li class="page active"><a href="#">01.</a></li>
								<li class="page"><a href="#">02.</a></li>
								<li class="page"><a href="#">03.</a></li>
								<li class="page"><a href="#">04.</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			require "view/component/sub.php";
		?>
<?php 
	require "view/layout/footer-out-tour.php";
?>