<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-gallery'){
        $tengallery = $_POST['name-gallery'];
        $hinhanhgallery = 'view/images/gallery/'.$_FILES['image']['name'];

        //Kiểm tra sản phẩm có tồn tại hay chưa
        if(gallery_select_by_name($tengallery) == null){
            gallery_insert($tengallery,$hinhanhgallery);
            move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanhgallery );
        }else {
            $MESSAGE = "Gallery đã tồn tại";
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        gallery_deletes($_GET['id']);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $gallery = gallery_select_by_id($_GET['id']);

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $magallery = $_POST['id-gallery'];
        $tengallery = $_POST['name-gallery'];
        if($_FILES['image']['error'] == 4){
            $hinhanhgallery = gallery_select_by_id($magallery)['Images'];
        }else{
            $hinhanhgallery = 'view/images/gallery/'.$_FILES['image']['name'];
        }
        gallery_update($magallery,$hinhanhgallery);
        $temp = false;
        header('Localtion: admin.php?page=gallery');
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
	                                <h2 class="page-header-title">Gallery</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="#">ADD</a></li>
			                                <li class="breadcrumb-item active">Gallery</li>
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
                                        <h4>Gallery mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <label class="col-lg-3 form-control-label">Tên gallery</label>
                                                <div class="col-lg-9">
                                                    <div class="mb-3 position-relative">
                                                        <input type="text" class="form-control" value ='<?php if($temp == true) echo $gallery['Ten_gallery'] ?>' name="name-gallery">
                                                    </div>
                                                </div>

                                                

                                                <label class="col-lg-3 form-control-label">Hình ảnh</label>
                                                    <div class="col-lg-9">
                                                        <div class="mb-3 position-relative">
                                                            <div class="group material-input">
                                                                <input type="file"  name="image" required>
                                                                <?php if($temp == true) echo "<img style='widtd: 100px ;height: 50px;' src='".$gallery['Hinh_anh'] ."'>"  ?>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                   

                                                    <?php if($temp == true) echo '<input type="hidden" name="id-gallery" value="'. $gallery['Ma_gallery'] .'"> '?>
                                                   

                                            </div>
                                            <div class="text-right">

                                                <?php 
                                                    if(!$temp)
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-gallery" id="add-gallery" type="submit"><i class="la la-check"></i>Thêm gallery ngay</button>
                                                        <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-gallery" type="submit"><i class="la la-check"></i>Cập nhập gallery</button>
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
                                                        <th>Mã gallery</th>
                                                        <th>Tên gallery</th>
                                                        <!-- <th>Mô tả</th>
                                                        <th>Chi tiết</th> -->
                                                        <th>Hình ảnh</th>
                                                        <!-- <th>Thời gian</th>
                                                        <th>Giá</th>
                                                        <th>Loại news</th> -->
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $gallery = gallery_select_all(); // goi phuong thuc lay danh sach
                                                    foreach ($gallery as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$Ma_gallery."</span></td>";
                                                        echo "<td>".$Ten_gallery."</span></td>";
                                                        // echo "<td>".$Mo_ta."</td>";
                                                        // echo "<td>".$Chi_tiet."</td>";
                                                        echo "<td><img style='width: 50px; height: 50px; object-fit:cover' src='$Hinh_anh' alt=''></td>";
                                                        // echo "<td>".$Ngay_khoihanh."</td>";
                                                        // echo "<td>".$Gia."</td>";
                                                        // echo "<td>".$Ten_loaigallery."</td>";
                                                        echo "<td class='td-actions'><a href='admin.php?page=gallery&id=$Ma_gallery&action=edit'><i class='la la-edit edit'></i></a><a href='admin.php?page=gallery&id=$Ma_gallery&action=delete'><i class='la la-close delete'></i></a></td>";
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