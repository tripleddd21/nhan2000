<?php 
	require "view/layout/head-index.php";
?>
	<!-- Home -->
		<div class="home">
			<div class="home_background" style="background-image:url(view/images/home.jpg)"></div>
			<div class="home_content">
				<div class="home_content_inner">
					<div class="home_text_large">TRAVEL</div>
					<div class="home_text_small">It's time to</div>
				</div>
			</div>
		</div>
		<!-- DU LỊCH ĐẤT LIỀN -->
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>DU LỊCH ĐẤT LIỀN</h2>
							<div>Tour được nhiều người quan tâm</div>
						</div>
					</div>
				</div>
				<div class="row top_content">
					<?php
						$tour = tour_select_loaitour_1();
						foreach ($tour as $value) {
							extract($value);
							echo "	<div class='col-lg-4 col-md-6 top_col'>
										<div class='top_item'>
											<a href='index.php?page=tour-detail&matour=$Ma_tour'>
												<div class='top_item_image'><img src='$Hinh_anh'></div>
												<div class='top_item_content'>
													<div class='top_item_price'>$Gia</div>
													<div class='top_item_text'>$Ten_tour</div>
													
												</div>
											</a>
										</div>
									</div>
							";}
					?>
				</div>
			</div>
		</div>
		<!-- DU LỊCH BIỂN ĐẢO -->
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>DU LỊCH BIỂN ĐẢO QUÊ HƯƠNG</h2>
							<div>Đến những bãi biển tuyệt vời trong dịp nghỉ lễ 2-9</div>
						</div>
					</div>
				</div>
				<div class="row top_content">
					<?php
						$tour = tour_select_loaitour_2();
						foreach ($tour as $value) {
							extract($value);
							echo "	<div class='col-lg-4 col-md-6 top_col'>
										<div class='top_item'>
											<a href='index.php?page=tour-detail&matour=".$Ma_tour."'>
												<div class='top_item_image'><img src='$Hinh_anh'></div>
												<div class='top_item_content'>
													<div class='top_item_price'>$Gia</div>
													<div class='top_item_text'>$Ten_tour</div>
													
												</div>
											</a>
										</div>
									</div>
							";}
					?>
				</div>
			</div>
		</div>

	
		<!-- THƯ VIỆN ẢNH -->

		<div class="popular">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Thư viện</h2>
							<div>Khoảnh khắc đẹp nhất</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
							<?php
								$gallery = gallery_select_all();
								foreach ($gallery as $value) {
									extract($value);
									echo 	"	<div class='popular_item'>
													
													<img src='$Hinh_anh'>
													<div class='popular_item_content'>
														<div class='popular_item_price'></div>
														<div class='popular_item_title'>$Ten_gallery</div>
													</div>
													
												</div>
											";}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Special -->

		<div class="special">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Cảnh đẹp quanh ta</h2>
							<div>Cùng nhau nhìn lại những nơi này</div>
						</div>
					</div>
				</div>
			</div>
			<div class="special_content">
				<div class="special_slider_container">
					<div class="owl-carousel owl-theme special_slider">
						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item">
								<div class="special_item_background"><img src="view/images/special_1.jpg" ></div>
								<div class="special_item_content text-center">
									<div class="special_category">Visiting</div>
									<div class="special_title"><a href="">Nha Trang</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_2.jpg"></div>
								<div class="special_item_content text-center">
									<div class="special_category">Culture</div>
									<div class="special_title"><a href="">Đà Lạt</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_3.jpg" ></div>
								<div class="special_item_content text-center">
									<div class="special_category">Sunbathing</div>
									<div class="special_title"><a href="">Sapa</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_4.jpg"></div>
								<div class="special_item_content text-center">
									<div class="special_category">Visiting</div>
									<div class="special_title"><a href="">Qui Nhơn</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_5.jpg"></div>
								<div class="special_item_content text-center">
									<div class="special_category">Visiting</div>
									<div class="special_title"><a href="">Phú Quốc</a></div>
								</div>
							</div>
						</div>

					</div>

					<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
						<img src="view/images/special_slider.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<?php
			require "view/component/sub.php";
		?>
<?php
	require "view/layout/footer-index.php";
?>