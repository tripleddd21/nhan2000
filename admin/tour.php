<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-tour'){
        $ten = $_POST['name'];
        $mota = $_POST['mota'];
        $chitiet = $_POST['chitiet'];
        $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
        $ngaykhoihanh = $_POST['date'];
        $thoigian= $_POST['thoigian'];
        $gia = $_POST['price'];
        $maloaitour = $_POST['loaitour'];

        //Kiểm tra sản phẩm có tồn tại hay chưa
        if(tour_select_by_name($ten) == null){
            tour_insert($ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour);
            move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanh );
        }else {
            $MESSAGE = "Sản phẩm đã tồn tại";
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        tour_deletes($_GET['id']);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $tour = tour_select_by_id($_GET['id']);

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $matour = $_POST['id'];
        $ten = $_POST['name'];
        $mota = $_POST['mota'];
        $chitiet = $_POST['chitiet'];
        $ngaykhoihanh = $_POST['date'];
        $thoigian = $_POST['thoigian'];
        $gia = $_POST['price'];
        $maloaitour = $_POST['loaitour'];
        if($_FILES['image']['error'] == 4){
            $hinhanh = tour_select_by_id($matour)['Images'];
        }else{
            $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
        }
        tour_update($matour,$ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour);
        $temp = false;
        header('Localtion: admin.php?page=tour');
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
	                                <h2 class="page-header-title">Tour</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="#">ADD</a></li>
			                                <li class="breadcrumb-item active">Tour</li>
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
                                        <h4>Tour mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <label class="col-lg-2 form-control-label">Tên Tour</label>
                                                <div class="col-lg-10">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Ten_tour'] ?>' name="name" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Tên tour</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label class="col-lg-2  form-control-label">Mô tả</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Mo_ta'] ?>' name="mota" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Mô tả</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <label class="col-lg-2 form-control-label">Chi tiết</label>
                                                <div class="col-lg-10 mb-3">
                                                    <textarea class="form-control mt-5" value ='<?php if($temp == true) echo $tour['Chi_tiet'] ?>' name="chitiet" required></textarea>
                                                   
                                                </div>

                                                <label class="col-lg-2 form-control-label">Hình ảnh</label>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="file"  name="image" required>
                                                                <?php if($temp == true) echo "<img style='widtd: 100px ;height: 50px;' src='".$tour['Hinh_anh'] ."'>"  ?>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <!-- <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div> -->
                                                <label class="col-lg-2 form-control-label">Ngày khởi hành</label>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour['Ngay_khoihanh'] ?>' name="date" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Ngày khởi hành(yyyy/mm/dd)</label>
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                <label class="col-lg-2 form-control-label">Thời gian</label>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour['Thoi_gian'] ?>' name="thoigian" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Thời gian đi</label>
                                                            </div>
                                                        </div>                                                    
                                                    </div>

                                                

                                                <label class="col-lg-2 form-control-label">Giá</label>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour['Gia'] ?>' name="price" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Giá chuyến đi</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php if($temp == true) echo '<input type="hidden" name="id" value="'. $tour['Ma_tour'] .'"> '?>
                                                <label class="col-lg-2 form-control-label" for="loaitour">Loại tour</label>
                                                <div class="col-lg-10 select mb-3">
                                                    <select name="loaitour" id='loai_tour' class="custom-select form-control mt-5">
                                                        <?php 
                                                            $listloaitour = loai_tour_select_all();
                                                            foreach ($listloaitour as $value) {
                                                                extract($value);
                                                                if($tour['Ma_loaitour'] == $Ma_loaitour ){
                                                                    echo "<option value='".$Ma_loaitour."'>".$Ten_loaitour."</option>";
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
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-tour" id="add-tour" type="submit"><i class="la la-check"></i>Thêm tour ngay</button>
                                                        <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-tour" type="submit"><i class="la la-check"></i>Cập nhập tour</button>
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
                                                        <th>Mã tour</th>
                                                        <th>Tên tour</th>
                                                        <th>Mô tả</th>
                                                        <th>Chi tiết</th>
                                                        <th>Hình ảnh</th>
                                                        <th>Ngày đi</th>
                                                        <th>Thời gian</th>
                                                        <th>Giá</th>
                                                        <th>Loại tour</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $tour = tour_select_all(); // goi phuong thuc lay danh sach
                                                    foreach ($tour as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$Ma_tour."</span></td>";
                                                        echo "<td>".$Ten_tour."</span></td>";
                                                        echo "<td>".$Mo_ta."</td>";
                                                        echo "<td>".$Chi_tiet."</td>";
                                                        echo "<td><img style='width: 50px; height: 50px; object-fit:cover' src='$Hinh_anh' alt=''></td>";
                                                        echo "<td>".$Ngay_khoihanh."</td>";
                                                        echo "<td>".$Thoi_gian."</td>";
                                                        echo "<td>".$Gia."</td>";
                                                        echo "<td>".$Ma_loaitour."</td>";
                                                        echo "<td class='td-actions'><a href='admin.php?page=tour&id=$Ma_tour&action=edit'><i class='la la-edit edit'></i></a><a href='admin.php?page=tour&id=$Ma_tour&action=delete'><i class='la la-close delete'></i></a></td>";
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