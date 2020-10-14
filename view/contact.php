<?php 
	require "view/layout/head-contact.php";
?> 
        <!-- Home -->

		<div class="home">
			<!-- Image by https://unsplash.com/@peecho -->
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="view/images/hinhnen/the-coliseum-1928274__340.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_content_inner">
								<div class="home_title">Liên hệ</div>
								<div class="home_breadcrumbs">
									<ul class="home_breadcrumbs_list">
										<li class="home_breadcrumb"><a href="?page=index">Home</a></li>
										<li class="home_breadcrumb">Liên hệ</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact -->

		<div class="contact">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="contact_title">Liên hệ với chúng tôi</div>
						<div class="contact_subtitle">Hello world</div>
					</div>
				</div>
				<div class="row contact_content">
					<div class="col-lg-5">
						<div class="contact_text">
							<p>Momatrip là du lịch trên khắp cả nước Việt nam và cả Thế giới, kinh doanh đa dạng các tour du lịch khác nhau. </p>
						</div>
						<div class="contact_info">
							<div class="contact_info_box">i</div>
							<div class="contact_info_container">
								<div class="contact_info_content">
									<ul>
										<li>Địa chỉ: 141 Chiến Thắng, Tân Triều, Thanh Trì, Hà Nội </li>
										<li>Phone: +84 389 999 999</li>
										<li>Email: momatrip@gmail.com</li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="clearfix">
								<input id="contact_input_name" class="contact_input contact_input_name" type="text" placeholder="Tên" required="required"
								 data-error="Name is required.">
								<input id="contact_input_email" class="contact_input contact_input_email" type="text" placeholder="E-mail"
								 required="required" data-error="E-mail is required.">
								<input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Tiêu đề">
								<textarea id="contact_input_message" class="contact_message_input contact_input_message" name="message"
								 placeholder="Nội dung" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">Gửi</button>
							</form>
						</div>
					</div>
				</div>
				<div class="row contact_map">
					<!-- Google Map -->

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.294809518551!2d105.79403981459542!3d20.98081639478994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc508f938fd%3A0x883e474806a2d1f2!2zSOG7jWMgVmnhu4duIEvhu7kgVGh14bqtdCBN4bqtdCBNw6M!5e0!3m2!1svi!2s!4v1599894577338!5m2!1svi!2s" width="1200" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>

		<?php
			require "view/component/sub.php";
		?>
<?php 
	require "view/layout/footer-contact.php";
?> 