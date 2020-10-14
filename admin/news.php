<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-news'){
        $tennews = $_POST['name-news'];
        $motanews = $_POST['mota-news'];
        $chitietnews = $_POST['chitiet-news'];
        $hinhanhnews = 'view/images/news/'.$_FILES['image']['name'];
        // $ngaykhoihanh = $_POST['date'];
        // $gia = $_POST['price'];
        // $maloaitour = $_POST['loaitour'];

        //Kiểm tra sản phẩm có tồn tại hay chưa
        if(news_select_by_name($tennews) == null){
            news_insert($tennews,$motanews,$chitietnews,$hinhanhnews);
            move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanhnews );
        }else {
            $MESSAGE = "Sản phẩm đã tồn tại";
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        news_deletes($_GET['id']);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $news = news_select_by_id($_GET['id']);

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $manews = $_POST['id-news'];
        $tennews = $_POST['name-news'];
        $motanews = $_POST['mota-news'];
        $chitietnews = $_POST['chitiet-news'];
        // $ngaykhoihanh = $_POST['date'];
        // $gia = $_POST['price'];
        // $maloaitour = $_POST['loaitour'];
        if($_FILES['image']['error'] == 4){
            $hinhanhnews = news_select_by_id($manews)['Images'];
        }else{
            $hinhanhnews = 'view/images/news/'.$_FILES['image']['name'];
        }
        news_update($manews,$tennews,$motanews,$chitietnews,$hinhanhnews);
        $temp = false;
        header('Localtion: admin.php?page=news');
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
	                                <h2 class="page-header-title">News</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="#">ADD</a></li>
			                                <li class="breadcrumb-item active">News</li>
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
                                        <h4>News mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label">Tên News</label>
                                                <div class="col-lg-9">
                                                    <div class="mb-3 position-relative">
                                                        <input type="text" class="form-control" value ='<?php if($temp == true) echo $news['Ten_news'] ?>' name="name-news">
                                                    </div>
                                                </div>

                                                <label class="col-lg-3 form-control-label">Mô tả</label>
                                                <div class="col-lg-9 mb-3">
                                                    <input type="text" class="form-control" value ='<?php if($temp == true) echo $news['Mo_ta'] ?>' name="mota-news">
                                                </div>
                                                
                                                <label class="col-lg-3 form-control-label">Chi tiết</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" value ='<?php if($temp == true) echo $news['Chi_tiet'] ?>' name="chitiet-news" required></textarea>
                                                   
                                                </div>

                                                <label class="col-lg-3 form-control-label">Hình ảnh</label>
                                                    <div class="col-lg-9">
                                                        <div class="mb-3 position-relative">
                                                            <div class="group material-input">
                                                                <input type="file"  name="image" required>
                                                                <?php if($temp == true) echo "<img style='widtd: 100px ;height: 50px;' src='".$news['Hinh_anh'] ."'>"  ?>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    

                                                    <?php if($temp == true) echo '<input type="hidden" name="id-news" value="'. $news['Ma_news'] .'"> '?>
                                                    

                                            </div>
                                            <div class="text-right">

                                                <?php 
                                                    if(!$temp)
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-news" id="add-news" type="submit"><i class="la la-check"></i>Thêm news ngay</button>
                                                        <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-news" type="submit"><i class="la la-check"></i>Cập nhập news</button>
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
                                                        <th>Mã news</th>
                                                        <th>Tên news</th>
                                                        <th>Mô tả</th>
                                                        <th>Chi tiết</th>
                                                        <th>Hình ảnh</th>
                                                        <!-- <th>Thời gian</th>
                                                        <th>Giá</th>
                                                        <th>Loại news</th> -->
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $news = news_select_all(); // goi phuong thuc lay danh sach
                                                    foreach ($news as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$Ma_news."</span></td>";
                                                        echo "<td>".$Ten_news."</span></td>";
                                                        echo "<td>".$Mo_ta."</td>";
                                                        echo "<td>".$Chi_tiet."</td>";
                                                        echo "<td><img style='width: 50px; height: 50px; object-fit:cover' src='$Hinh_anh' alt=''></td>";
                                                        // echo "<td>".$Ngay_khoihanh."</td>";
                                                        // echo "<td>".$Gia."</td>";
                                                        // echo "<td>".$Ten_loainews."</td>";
                                                        echo "<td class='td-actions'><a href='admin.php?page=news&id=$Ma_news&action=edit'><i class='la la-edit edit'></i></a><a href='admin.php?page=news&id=$Ma_news&action=delete'><i class='la la-close delete'></i></a></td>";
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