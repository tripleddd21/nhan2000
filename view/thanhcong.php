
<?php
include "view/layout/head-tour-detail.php";
include "view/layout/head-register.php"
?>

<!-- <?php
// $Ma_KH = $_SESSION['khach_hang']['id'];
// $Ma_tour = $_SESSION['khach_hang']['Ma_gh']; 
// giohang_insert($Ma_tour,$Ma_KH);//lam o day
// $Email =  $_SESSION['khach_hang'];
// $date = $_POST['datekh'];
// echo $date;
// echo $Email;min

?>
 -->
 <style type="text/css">
        table, th, td{
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
            width:100%;
            background-color: white;
        }
        th, td{
            text-align:left;
            padding:10px;
            color: black;
        }
    </style>

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
                        <h3>Giỏ Hàng</h3>
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
                            <div class="home_title"></div>

                            <table>
        <tr>
            <th>Mã khách hàng</th>
            <th>Mã Tour</th>
            <th>Ngày Khởi hành</th>
            <th>Ghi chú</th>
            <th>Giá Tour</th>
            <th>Ngày Đặt</th>
        </tr>
        <?php 
        $Ma_KH = $_SESSION['khach_hang']['id'];
		$Ma_tour = $_SESSION['khach_hang']['Ma_gh'];
		$Gia =$_SESSION['khach_hang']['gia'];
        $ngay = $_SESSION['khach_hang']['date'] ;
        $ghichu = $_SESSION['khach_hang']['note'] ;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d');
		giohang_insert($Ma_tour,$Ma_KH);//lam o day
        echo "
        <tr>
            <td>$Ma_KH</td>
            <td>$Ma_tour</td>
            <td>$ngay</td>
           	<td>$ghichu</td>
           	<td>$Gia</td>
            <td>$date</td>

        </tr>
       "; ?>
    </table>
                        </div>
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




		