
<?php 

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
                                    <!-- <input type="submit" name="search" value="Search" class="input-group-text"> -->
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
                                                <th>Giá</th>
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
                                                $objExcel = new PHPExcel();
                                                $objExcel->setActiveSheetIndex(0);
                                                $name = "Thongke-$searchm-$searchy";
                                                $sheet = $objExcel->getActiveSheet()->setTitle($name);
                                                $rowCount = 1;
                                                $sheet->setCellValue('A'.$rowCount,'Mã giỏ hàng');
                                                $sheet->setCellValue('B'.$rowCount,'Tên Tour');
                                                $sheet->setCellValue('C'.$rowCount,'Tên khách hàng');
                                                $sheet->setCellValue('D'.$rowCount,'Ngày đặt');
                                                $sheet->setCellValue('E'.$rowCount,'Email');
                                                $sheet->setCellValue('F'.$rowCount,'Giá');
                                                foreach ($giohang as $item){
                                                   extract($item);
                                                    echo "<tr>";
                                                    echo "<td>".$Ma_giohang."</td>";
                                                    echo "<td>".$Ten_tour."</td>";
                                                    echo "<td>".$Ten_KH."</td>";
                                                    echo "<td>".$Ngay_dat."</td>";
                                                    echo "<td>".$Email."</td>";
                                                    echo "<td>".$Gia."</td>";
                                                    echo "</tr>";
                                                    $rowCount++;
                                                    $sheet->setCellValue('A'.$rowCount,$Ma_giohang);
                                                $sheet->setCellValue('B'.$rowCount,$Ten_tour);
                                                $sheet->setCellValue('C'.$rowCount,$Ten_KH);
                                                $sheet->setCellValue('D'.$rowCount,$Ngay_dat);
                                                $sheet->setCellValue('E'.$rowCount,$Email);
                                                $sheet->setCellValue('F'.$rowCount,$Gia);
                                                }

                                                $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
                                                $filename = 'thongke.xlsx';
                                                
                                                header('Content-Disposition: attachment; filename="'.$filename.'"');
                                                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                                                header('Content-Length: ' .filesize($filename));
                                                header('Content-Transfer-Encoding: binary');
                                                header('Cache-Control: must-revalidate');
                                                header('Pragma: no-cache');
                                                // //readfile($filename);
                                               // @header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                                               //  @header('Content-Disposition: attachment;filename="thongke.xlsx"');
                                               //  @header('Cache-Control: max-age=0');
                                                
                                                $objWriter->save($filename);
                                                exit();

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
                                                    echo "<td>".$Gia."</td>";
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

