<?php 
	require "view/layout/head-news-detail.php";
?>
			
	<!-- Home -->
	<div class="">
	<!-- Image by https://unsplash.com/@peecho -->
	
	<?php
		$banner = banner_select_loaitour_1();
		foreach ($banner as $value) {
			extract($value);
			echo "	
					<div class='' style='height:300px'>
						<img style='width:100%;height:100%' src='$Hinh_anh'>
						<div class='tour_content'>
							<h3>Chi tiết tin tức</h3>
						</div>
					</div>
			";}
	?>

</div>
	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 posts-list">
				<?php
					$manews = $_GET['manews'];
					$chitietnews = news_select_by_id($manews);
					// foreach ($chitietnews as $value) {
					extract($chitietnews);
					echo " 	
					<div class='single-post row'>
						<div class='col-lg-12'>
							<div class='feature-img'>
								<img class='img-fluid' src='$Hinh_anh'>
							</div>
						</div>
						<div class='col-lg-3 col-md-3 meta-details'>
							<div class='user-details row'>
								<p class='user-name col-lg-12 col-md-12 col-6'><a href='#'>Mark wiens</a> <span class='lnr lnr-user'></span></p>
								<p class='date col-lg-12 col-md-12 col-6'><a href='#'>12 Dec, 2017</a> <span class='lnr lnr-calendar-full'></span></p>
								<p class='view col-lg-12 col-md-12 col-6'><a href='#'>1.2M Views</a> <span class='lnr lnr-eye'></span></p>
								<p class='comments col-lg-12 col-md-12 col-6'><a href='#'>06 Comments</a> <span class='lnr lnr-bubble'></span></p>
								<ul class='social-links col-lg-12 col-md-12 col-6'>
									<li><a href='#'><i class='fa fa-facebook'></i></a></li>
									<li><a href='#'><i class='fa fa-twitter'></i></a></li>
									<li><a href='#'><i class='fa fa-github'></i></a></li>
									<li><a href='#'><i class='fa fa-behance'></i></a></li>
								</ul>
							</div>
						</div>
						<div class='col-lg-9 col-md-9'>
							<h3 class='mt-20 mb-20'>$Ten_news</h3>
							<p class='excert'>
								$Chi_tiet
							</p>
						</div>
					</div>
					";
				?>
				</div>
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->

<?php
	require "view/layout/footer-news-detail.php";
?>