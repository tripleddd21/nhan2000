<?php 
	require "view/layout/head-news.php";
?>
        <!-- Home -->
		<div class="home">
			<!-- Image by https://unsplash.com/@peecho -->
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="view/images/news.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_content_inner">
								<div class="home_title">Tin tức</div>
								<div class="home_breadcrumbs">
									<ul class="home_breadcrumbs_list">
										<li class="home_breadcrumb"><a href="?page=index">Home</a></li>
										<li class="home_breadcrumb">Tin tức</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<!-- News -->

		<div class="news">
			<div class="container">
				<div class="row">

					<!-- News Posts -->
					<div class="col-lg-9">
						<div class="news_posts">
							<?php
								$news = news_select_all_3();
								foreach ($news as $value) {
									extract($value);
									echo "	<div class='news_post'>
												<div class='post_title'><a href='index.php?page=news-detail&manews=".$Ma_news."'>$Ten_news</a></div>
												<div class='post_meta'>
													<ul>
														<li><a href='#'>by admin</a></li>
														<li>january 31, 2018</li>
														<li><a href='#'>3 comments</a></li>
													</ul>
												</div>
												<div class='post_image'>
													<img src='$Hinh_anh'>
													<a href='index.php?page=news-detail&manews=".$Ma_news."'>
														<div class='post_image_box text-center'>+</div>
													</a>
												</div>
												<div class='post_text'>
													<p>$Mo_ta</p>
												</div>
											</div>
									";}
							?>
							

						</div>
					</div>

					<!-- Sidebar -->
					<div class="col-lg-3">
						<div class="sidebar">
							<div class="sidebar_search">
								<input type="search" class="sidebar_search_input" placeholder="Search">
							</div>

							<!-- Featured Posts -->
							<div class="sidebar_featured">

								<!-- Featured Post -->
								<div class="sidebar_featured_post">
									<div class="sidebar_featured_image"><img src="view/images/sidebar_featured_1.jpg" alt=""></div>
									<div class="sidebar_featured_title"><a href="#">Top destinations in Europe</a></div>
									<div class="sidebar_featured_meta">
										<ul>
											<li><a href="#">by admin</a></li>
											<li>january 31, 2018</li>
											<li><a href="#">3 comments</a></li>
										</ul>
									</div>
								</div>

								<!-- Featured Post -->
								<div class="sidebar_featured_post">
									<div class="sidebar_featured_image"><img src="view/images/sidebar_featured_2.jpg" alt=""></div>
									<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
									<div class="sidebar_featured_meta">
										<ul>
											<li><a href="#">by admin</a></li>
											<li>january 31, 2018</li>
											<li><a href="#">3 comments</a></li>
										</ul>
									</div>
								</div>

								<!-- Featured Post -->
								<div class="sidebar_featured_post">
									<div class="sidebar_featured_image"><img src="view/images/sidebar_featured_3.jpg" alt=""></div>
									<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
									<div class="sidebar_featured_meta">
										<ul>
											<li><a href="#">by admin</a></li>
											<li>january 31, 2018</li>
											<li><a href="#">3 comments</a></li>
										</ul>
									</div>
								</div>

							</div>

							<!-- Offers -->
							<div class="sidebar_offers">

								<!-- Offer -->
								<div class="sidebar_offer">
									<div class="sidebar_offer_background" style="background-image:url(view/images/offer_1.jpg)"></div>
									<div class="sidebar_offer_content">
										<div class="sidebar_offer_destination">bali</div>
										<div class="sidebar_offer_percent">38%</div>
										<div class="sidebar_offer_title">Last Minute Offer</div>
										<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed
											mauris.</div>
										<div class="sidebar_offer_button"><a href="">See Offer</a></div>
									</div>
								</div>

								<!-- Offer -->
								<div class="sidebar_offer">
									<div class="sidebar_offer_background" style="background-image:url(view/images/offer_2.jpg)"></div>
									<div class="sidebar_offer_content">
										<div class="sidebar_offer_destination">bali</div>
										<div class="sidebar_offer_percent">25%</div>
										<div class="sidebar_offer_title">Last Minute Offer</div>
										<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed
											mauris.</div>
										<div class="sidebar_offer_button"><a href="">See Offer</a></div>
									</div>
								</div>

							</div>

							<!-- Sidebar Quote -->
							<div class="sidebar_quote">
								<div class="quote_box"><img src="view/images/quote.png" alt=""></div>
								<div class="quote_text"><span>“Traveling</span> – it leaves you speechless, then turns you into a storyteller.”</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php
			require "view/component/sub.php";
		?>
<?php
	require "view/layout/footer-news.php";
?>