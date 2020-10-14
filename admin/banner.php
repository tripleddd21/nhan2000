<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-banner'){
        $tenbanner = $_POST['name-banner'];
        $chitietbanner = $_POST['chitiet-banner'];
        $hinhanhbanner = 'view/images/banner/'.$_FILES['image']['name'];
        $maloaitour = $_POST['loaitour'];

        //Kiểm tra banner có tồn tại hay chưa
        if(banner_select_by_name($tenbanner) == null){
            banner_insert($tenbanner,$chitietbanner,$hinhanhbanner,$maloaitour);
            move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanhbanner );
        }else {
            $MESSAGE = "Banner đã tồn tại";
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        banner_deletes($_GET['id']);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $banner = banner_select_by_id($_GET['id']);

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $mabanner = $_POST['id'];
        $tenbanner = $_POST['name-banner'];
        $chitietbanner = $_POST['chitiet-banner'];
        $maloaitour = $_POST['loaitour'];
        if($_FILES['image']['error'] == 4){
            $hinhanhbanner = banner_select_by_id($mabanner)['Images'];
        }else{
            $hinhanhbanner = 'view/images/banner/'.$_FILES['image']['name'];
        }
        banner_update($mabanner,$tenbanner,$chitietbanner,$hinhanhbanner,$maloaitour);
        $temp = false;
        header('Localtion: admin.php?page=banner');
    }

?>        

        <div class="page">
            <?php 
                require "admin/layout/header.php";
            ?> 

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <?php 
                        require "admin/layout/navbar.php";
                    ?> 
                </div>
                <!-- End Left Sidebar -->

                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Banner</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="#">ADD</a></li>
			                                <li class="breadcrumb-item active">Banner</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Banner mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label">Tên banner</label>
                                                <div class="col-lg-9">
                                                    <div class="mb-3 position-relative">
                                                        <input type="text" class="form-control" value ='<?php if($temp == true) echo $banner['Ten_banner'] ?>' name="name-banner">
                                                    </div>
                                                </div>

                                                
                                                
                                                <label class="col-lg-3 form-control-label">Chi tiết</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" value ='<?php if($temp == true) echo $banner['Chi_tiet'] ?>' name="chitiet-banner" required></textarea>
                                                   
                                                </div>

                                                <label class="col-lg-3 form-control-label">Hình ảnh</label>
                                                    <div class="col-lg-9">
                                                        <div class="mb-3 position-relative">
                                                            <div class="group material-input">
                                                                <input type="file"  name="image" required>
                                                                <?php if($temp == true) echo "<img style='widtd: 100px ;height: 50px;' src='".$banner['Hinh_anh'] ."'>"  ?>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                   

                                                    

                                                    <?php if($temp == true) echo '<input type="hidden" name="id" value="'. $banner['Ma_banner'] .'"> '?>
                                                    <label class="col-lg-3 form-control-label" for="loaitour">Loại tour</label>
                                                    <div class="col-lg-9 select mb-3">
                                                        <select name="loaitour" id='loai_tour' class="custom-select form-control">
                                                            <?php 
                                                                $listloaitour = loai_tour_select_all();
                                                                foreach ($listloaitour as $value) {
                                                                    extract($value);
                                                                    if($banner['Ma_loaitour'] == $Ma_loaitour ){
                                                                        echo "<option selected value='".$Ma_loaitour."'>".$Ten_loaitour."</option>";
                                                                    }else{
                                                                        echo "<option value='".$Ma_loaitour."'>".$Ten_loaitour."</option>";
                                                                    }
                                                                    
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>

                                            </div>
                                            <div class="text-right">

                                                <?php 
                                                    if(!$temp)
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-banner" id="add-banner" type="submit"><i class="la la-check"></i>Thêm banner ngay</button>
                                                        <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-banner" type="submit"><i class="la la-check"></i>Cập nhập banner</button>
                                                        <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>';
                                                ?>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                                <!-- End Form -->
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Danh sách</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mã banner</th>
                                                        <th>Tên banner</th>
                                                        <!-- <th>Mô tả</th> -->
                                                        <th>Chi tiết</th>
                                                        <th>Hình ảnh</th>
                                                        <!-- <th>Thời gian</th>
                                                        <th>Giá</th> -->
                                                        <th>Loại tour</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $banner = banner_select_all(); // goi phuong thuc lay danh sach
                                                    foreach ($banner as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$Ma_banner."</span></td>";
                                                        echo "<td>".$Ten_banner."</span></td>";
                                                        // echo "<td>".$Mo_ta."</td>";
                                                        echo "<td>".$Chi_tiet."</td>";
                                                        echo "<td><img style='width: 50px; height: 50px; object-fit:cover' src='$Hinh_anh' alt=''></td>";
                                                        // echo "<td>".$Ngay_khoihanh."</td>";
                                                        // echo "<td>".$Gia."</td>";
                                                        echo "<td>".$Ma_loaitour."</td>";
                                                        echo "<td class='td-actions'><a href='admin.php?page=banner&id=$Ma_banner&action=edit'><i class='la la-edit edit'></i></a><a href='admin.php?page=banner&id=$Ma_banner&action=delete'><i class='la la-close delete'></i></a></td>";
                                                        echo "</tr>";
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



                    <!-- Begin Page Footer-->
                    <?php 
                        require "layout/footer.php";
                    ?> 
                </div>
            </div>
            <!-- End Page Content -->
        </div>