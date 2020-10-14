<!-- Begin Side Navbar -->
<nav class="side-navbar box-scroll sidebar-scroll">
    <span class="heading">MOMATRIP ĐI MUÔN NƠI</span>

    <ul class="list-unstyled">
        
        <li><a href="#dropdown-forms" aria-expanded="true" data-toggle="collapse"><i class="la la-list-alt"></i><span>QUẢN LÝ</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled show pt-0">
                <li class="p-0 " style='height: 0px !important; border: 0' <?php if(isset($_GET['page'])){$page=$_GET['page'];}else {$page = 'index';}?>><a class="active" href="admin.php?page=index"></a></li>

                <li><a class="<?php if($page == 'loai-tour') echo 'active' ?>" href="admin.php?page=loai-tour">Loại Tour</a></li>

                <li><a class="<?php if($page == 'tour') echo 'active' ?>" href="admin.php?page=tour">Tour</a></li>

                <li><a class="<?php if($page == 'news') echo 'active' ?>" href="admin.php?page=news">News</a></li>

                <li><a class="<?php if($page == 'gallery') echo 'active' ?>" href="admin.php?page=gallery">Gallery</a></li>

                <li><a class="<?php if($page == 'banner') echo 'active' ?>" href="admin.php?page=banner">Banner</a></li>
                <li><a class="<?php if($page == 'gio-hang') echo 'active' ?>" href="admin.php?page=gio-hang">Tour đã đặt</a></li>
            </ul>
        </li>
        <li><a href="#dropdown-forms" aria-expanded="true" data-toggle="collapse"><i class="la la-list-alt"></i><span>KHÁCH HÀNG</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled show pt-0">
                <li><a class="<?php if($page == 'khach-hang') echo 'active' ?>" href="admin.php?page=khach-hang">Khách hàng</a></li>
            </ul>
        </li>
        <li><a href="#dropdown-forms" aria-expanded="true" data-toggle="collapse"><i class="la la-list-alt"></i><span>ADMIN</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled show pt-0">
                <li><a class="<?php if($page == 'profile') echo 'active' ?>" href="admin.php?page=profile">Admin</a></li>
            </ul>
        </li>

    </ul>
    <!-- End Main Navigation -->
</nav>
<!-- End Side Navbar -->