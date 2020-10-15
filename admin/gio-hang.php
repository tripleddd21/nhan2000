
<?php 
    // $temp = false;
    // if(isset($_POST['action']) && $_POST['action'] == 'add-cate' ){
    //     $tenloaitour = $_POST['name'];
    //     $sort=$_POST['sort'];
    //     loai_tour_insert($tenloaitour,$sort);
    // }

    // if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    //     khach_hang_delete($_GET['id']);
    // }


    // if(isset($_GET['action']) && $_GET['action'] == 'edit'){
    //     $temp = true;
    //     $loaitour = loai_tour_select_by_id($_GET['id']);
    //     $temp=true;

    // }
    // if(isset($_POST['action']) && $_POST['action'] == 'edit'){
    //     $maloaitour = $_POST['id'];
    //     $tenloaitour = $_POST['name'];
    //     $sort = $_POST['sort'];
    //     loai_tour_update($maloaitour,$tenloaitour,$sort);
    //     header('Localtion: admin.php?page=loai-tour');
    //     $temp = false;
    // }
?>     
        
        
        
        
<div class="page">

    <?php 
        require "layout/header.php";
    ?> 

    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">

            <?php 
                require "layout/navbar.php";
            ?> 


        </div>
        <!-- End Left Sidebar -->
        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">Tour Đã Đặt</h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="admin.php?page=gio-hang">DANH SÁCH</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row flex-row">
                    <div class="col-12">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <!-- <span class="input-group-text">Person</span> -->
                                    <input type="submit" name="thongke" value="Search" class="input-group-text">
                                </div>
                                <input type="text" placeholder="Search Month" class="form-control" name="search-month" >
                                <input type="text" placeholder="Search Year" class="form-control" name="search-year" >
                            </div>
                        </form>
                        
                        <!-- Sorting -->
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4>Danh sách Tour</h4>
                            </div>
                            <div class="widget-body">
                                <div class="table-responsive">
                                    <table id="sorting-table" class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Mã giỏ hàng</th>
                                                <th>Tên tour </th>
                                                <th>Tên khách hàng </th>
                                                <th>Ngày đặt</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            giohang_create_view();
                                            if(isset($_GET['thongke']))
                                            {
                                                $searchm = $_GET['search-month'];
                                                $searchy = $_GET['search-year'];
                                                $giohang =  giohang_select_month_year($searchm, $searchy);
                                                foreach ($giohang as $item){
                                                   extract($item);
                                                    echo "<tr>";
                                                    echo "<td>".$Ma_giohang."</td>";
                                                    echo "<td>".$Ten_tour."</td>";
                                                    echo "<td>".$Ten_KH."</td>";
                                                    echo "<td>".$Ngay_dat."</td>";
                                                    echo "<td>".$Email."</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            else{
                                                $giohang= giohang_select_by_kh();
                                                foreach ($giohang as $item){
                                                    extract($item);
                                                    echo "<tr>";
                                                    echo "<td>".$Ma_giohang."</td>";
                                                    echo "<td>".$Ten_tour."</td>";
                                                    echo "<td>".$Ten_KH."</td>";
                                                    echo "<td>".$Ngay_dat."</td>";
                                                    echo "<td>".$Email."</td>";
                                                    echo "</tr>";
                                                }
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Sorting -->
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Container -->
            <?php 
                require "layout/footer.php";
            ?> 
            
        </div>
    </div>
    <!-- End Page Content -->
</div>

