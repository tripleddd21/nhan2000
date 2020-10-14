
<?php
include "view/layout/head-tour-detail.php";
include "view/layout/head-register.php"
?>


<?php 
if(isset($_POST['email'])){
        // echo $_SESSION['khach_hang']['name'];
    $Email = $_POST['email'];
    if($Email != $_SESSION['khach_hang']['email'] )
    {
        echo '<script language="javascript">';
                echo 'alert("Bạn đã nhập sai mail.")';
                echo '</script>';
    }
        else {
            $khachhang1 = khach_hang_select_by_email($Email); 
        // echo $khachhang1['Ten_KH'];
            if($khachhang1['Ten_KH'] == $_SESSION['khach_hang']['name']){
                $matour = $_GET['matour'];
                $chitiettour = tour_select_by_id($matour);
                extract($chitiettour);
                $_SESSION['khach_hang']['Ma_gh'] = $matour;
                $_SESSION['khach_hang']['gia'] = $Gia;
                $_SESSION['khach_hang']['date'] = $_POST['ngay'];
                $_SESSION['khach_hang']['note'] = $_POST['ghichu'];
                // $_SESSION['khach_hang']['ngaydat'] = $_POST['ghichu'];
               echo'<script>
                    window.location.assign("index.php?page=thanhcong")
                </script>';

            }else {
                //$mes = 'Mật khẩu không chính xác';
                // sua fontend
                echo '<script language="javascript">';
                echo 'alert("Bạn đã nhập sai ten.")';
                echo '</script>';
               
        }
    }          
} 
?>

<!-- Sua o cho nay -->
<!-- Sua o cho nay -->
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
                        <h3>Đặt tour</h3>
                    </div>
                </div>
        ";
    }
    ?> 

</div>

<div>

    
    <div class="home">
        <!-- Image by https://unsplash.com/@peecho -->
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="view/images/register2.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">Đặt tour</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="login-form">
                        <div class="main-div">
                            <form id="Booking" method='post'>
                                <div class="row form-group">
                                    <?php
                                    $matour = $_GET['matour'];
                                    $chitiettour = tour_select_by_id($matour);
                                    extract($chitiettour);
                                        echo "$Ten_tour";
                                    ?>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12"> <label for="fullname">Họ tên</label> 
                                        <input type="text" id="fullname" class="form-control"> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12"> <label for="fullname">Email</label> 
                                        <!-- <input type="email" id="email" class="form-control"> </div> -->
                                        <input name ="email" type="email" class="form-control" >
                                    </div>
                                </div>
                               <!--  <div class="row form-group"> -->
                                    <!-- <div class="col-md-12"> <label for="activities">Tour</label> <select name="#" id="activities" class="form-control">
                                            <option value=""><b>DU LỊCH VỊNH HẠ LONG</b></option>
                                            <option value=""><b>DU LỊCH NHA TRANG - BÃI DÀI</b></option>
                                            <option value=""><b></b>DU LỊCH NHA TRANG - ĐÀ LẠT</option>
                                            <option value=""><b>DU LỊCH TẠI SAPA</b></option>
                                            <option value=""><b>DU LỊCH TẠI HUẾ</b></option>
                                            <option value=""><b>DU LỊCH THÁC BẢN GIỐC</b></option>
                                        </select> </div> -->
                                <!-- </div> -->
                                
                                <div class="row form-group">
                                    <div class="col-md-12"> <label for="date-start">Ngày khởi hành</label> <input type="text" id="date-start" class="form-control"X name="ngay"> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12"> <label for="note">Ghi chú</label> <input type="text" id="note" class="form-control" name="ghichu"> </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12"> 
                                        <!-- <input type="submit" class="btn btn-primary btn-block" value="Đặt tour"> -->
                                        <button type="submit" class="btn btn-primary" >Đặt tour</button> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Sua o cho nay -->
    <!-- Sua o cho nay -->
    

    <?php
    require "view/layout/footer-index.php";
    ?>

