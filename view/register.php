<?php 
	include "view/layout/head-register.php";
?>

<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-khachhang' ){
        $tenkhachhang = $_POST['name'];
        $email=$_POST['email'];
        $sodienthoai=$_POST['sdt'];
        $matkhau=$_POST['password'];
        khach_hang_insert($tenkhachhang,$email,$sodienthoai,$matkhau);
        
        if(khach_hang_select_by_name($tenkhachhang) == null){
            khach_hang_insert($tenkhachhang,$email,$sodienthoai,$matkhau);
            // move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanh );
        }else {
            $MESSAGE = "Khách hàng đã tồn tại";
        }
        echo'<script>
					window.location.assign("index.php?page=login")
				</script>';
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        khach_hang_delete($_GET['id']);
    }


    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $khachhang = khach_hang_select_by_id($_GET['id']);
        $temp=true;

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $makhachhang = $_POST['id'];
        $tenkhachhang = $_POST['name'];
        $email = $_POST['email'];
        $sodienthoai=$_POST['sdt'];
        $matkhau=$_POST['password'];
        khach_hang_update($makhachhang,$tenkhachhang,$email,$sodienthoai,$matkhau);
        // header('Localtion: index.php?page=register');
        $temp = false;
    }
?>     
     
<!-- Home -->
<div class="home">
    <!-- Image by https://unsplash.com/@peecho -->
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="view/images/register2.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="home_content">
                    <div class="home_content_inner">
                        <div class="home_title">Đăng ký</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="login-form">
                    <div class="main-div">
                        
                        <form id="Login" enctype="multipart/form-data" method='post' >
                    
                            <div class="form-group">
                    
                    
                                <input type="text" class="form-control" value ='<?php if($temp == true) echo $khachhang['Ten_KH'] ?>' id="inputEmail" name="name" placeholder="Họ và tên">
                    
                            </div>
                            <div class="form-group">
                    
                    
                                <input type="email" class="form-control" value ='<?php if($temp == true) echo $khachhang['Email'] ?>' id="inputEmail" name="email" placeholder="Email">
                    
                            </div>
                            <div class="form-group">
                    
                    
                                <input type="text" value ='<?php if($temp == true) echo $khachhang['Sdt'] ?>' class="form-control" id="inputEmail" name="sdt" placeholder="Số điện thoại">
                    
                            </div>
                    
                            <div class="form-group">
                    
                                <input type="password" value ='<?php if($temp == true) echo $khachhang['Mat_khau'] ?>' class="form-control" name="password" id="inputPassword" placeholder="Mật khẩu">
                    
                            </div>
                            <?php 
                                if(!$temp)
                                    echo '<button class="btn btn-gradient-01" name="action" value="add-khachhang" id="add-tour" type="submit"><i class="la la-check"></i>Đăng ký</button>
                                    <button class="btn btn-gradient-01" ><a style="color:#000" href="index.php?page=login">Đăng nhập</a></button>
                                    <button class="btn btn-gradient-01" type="reset"><i class="la la-rotate-left"></i>Reset</button>
                                    
                                    ';
                                else 
                                    echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-tour" type="submit"><i class="la la-check"></i>Chỉnh sửa thông tin</button>
                                    <button class="btn-gradient-01" ><a style="color:#000" href="index.php?page=login">Đăng nhập</a></button>
                                    <button class="btn-gradient-01" type="reset"><i class="la la-rotate-left"></i>Reset</button>
                                    ';
                            ?>
                        </form>
                        </div>

                </div>
            </div>									
        </div>			
    </div>
</div>

<!-- Find Form -->
<?php 
	include "view/layout/footer-register.php";
?>