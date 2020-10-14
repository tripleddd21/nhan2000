<?php 
	require "view/layout/head-login.php";
?>
<!-- Home -->

<?php 
	if(isset($_POST['email'])){
		$Email = $_POST['email'];
		$matkhau = $_POST['password'];
		$khachhang = khach_hang_select_by_email($Email);
		if( $khachhang != null){
			if($khachhang['Mat_khau'] == $matkhau)
			{
				$_SESSION['khach_hang'] = [
					'id' => $khachhang['Ma_KH'],
					'name' => $khachhang['Ten_KH'],
					'email' => $khachhang['Email']
				];
				echo'<script>
					window.location.assign("index.php")
				</script>';
				
			}else {
				//$mes = 'Mật khẩu không chính xác';
				// echo 'sai mat khau'; // sua fontend
				echo '<script language="javascript">';
                echo 'alert("Bạn đã nhập sai mật khẩu. Xin vui lòng nhập lại")';
                echo '</script>';
			}
				
			
		}else{
			//$mes = 'Tài khoản không tồn tại';
			// echo 'Tài khoản không tồn tại'; // sua fontend
			echo '<script language="javascript">';
                echo 'alert("Tài khoản không tồn tại")';
                echo '</script>';
		}
	}
?>
<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="view/images/signin_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row ">
				<div class="col-md-12">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Đăng nhập</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="login-form">
						<div class="main-div">
							<form id="Login" method='post' >
								<div class="form-group">
									<input name ="email"type="email" class="form-control" id="inputUsername" placeholder="Tên tài khoản">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu">
								</div>
								<div class="forgot">
									<p></p> <a href="index.php?page=register">Đăng ký</a>
								</div>
								<button type="submit" class="btn btn-primary">Đăng nhập</button>
						
								</form>
							</div>
					</div>
				</div>									
			</div>			
		</div>
	</div>

	<!-- Find Form -->

<?php 
	require "view/layout/footer-login.php";
?>