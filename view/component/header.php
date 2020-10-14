</head>

<body>
<?php 
	if(isset($_GET['clear'])){
		unset($_SESSION['khach_hang']);
	}
?>  
	<div class="super_container">
        <!-- Header -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="header_container d-flex flex-row align-items-center justify-content-start">
                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">
                                    <div>Momatrip</div>
                                    <div>travel agency</div>
                                    <!-- <div class="logo_image"><img src="view/images/logo.png" alt=""></div> -->
                                </div>
                            </div>
                            <!-- Main Navigation -->
                            <nav class="main_nav ml-auto">
                                    <?php if(isset($_SESSION['khach_hang'])){?>
                                        <ul class="main_nav_list">
                                            <li class="main_nav_item <?php if(isset($_GET['page'])){$page=$_GET['page'];}else {$page = 'index';}?>"><a href="index.php?page=index"></a></li>
                                            <li class="main_nav_item <?php if($page == 'index') echo 'active' ?>"><a href="index.php?page=index">Trang chủ</a></li>
                                            <li class="main_nav_item <?php if($page == 'out-tour') echo 'active' ?>"><a href="index.php?page=out-tour">DL đất liền</a></li>
                                            <li class="main_nav_item <?php if($page == 'in-tour') echo 'active' ?>"><a href="index.php?page=in-tour">DL biển đảo</a></li>
                                            <li class="main_nav_item <?php if($page == 'news') echo 'active' ?>"><a href="index.php?page=news">Tin tức</a></li>
                                            <li class="main_nav_item <?php if($page == 'contact') echo 'active' ?>"><a href="index.php?page=contact">Liên hệ</a></li>
                                            
                                            <li class="main_nav_item <?php  ?>"><a href=""><?=$_SESSION['khach_hang']['name']?></a></li>
                                            <li class="main_nav_item"><a href="?clear=true">Đăng xuất</a></li>
                                            <!-- <li class="nav-item"><a class="nav-link" href="?clear=true">Đăng xuất</a></li> -->
                                        </ul>
                                    <?php 
                                    }
                                    else{
                                    ?>
                                            <ul class="main_nav_list">
                                                <li class="main_nav_item <?php if(isset($_GET['page'])){$page=$_GET['page'];}else {$page = 'index';}?>"><a href="index.php?page=index"></a></li>
                                                <li class="main_nav_item <?php if($page == 'index') echo 'active' ?>"><a href="index.php?page=index">Trang chủ</a></li>
                                                <li class="main_nav_item <?php if($page == 'out-tour') echo 'active' ?>"><a href="index.php?page=out-tour">Tour Đất Liền</a></li>
                                                <li class="main_nav_item <?php if($page == 'in-tour') echo 'active' ?>"><a href="index.php?page=in-tour">Tour biển đảo</a></li>
                                                <li class="main_nav_item <?php if($page == 'news') echo 'active' ?>"><a href="index.php?page=news">Tin tức</a></li>
                                                <li class="main_nav_item <?php if($page == 'contact') echo 'active' ?>"><a href="index.php?page=contact">Liên hệ</a></li>
                                                <li class="main_nav_item <?php if($page == 'login') echo 'active' ?>"><a href="index.php?page=login">Đăng nhập</a></li>
                                                <li class="main_nav_item <?php if($page == 'register') echo 'active' ?>"><a href="index.php?page=register">Đăng ký</a></li>
                                            </ul>
                                    <?php } ?>
                            </nav>
                            <!-- Search -->
                            <div class="search">
                                <form action="#" class="search_form">
                                    <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
                                    <button type="submit" class="search_button ml-auto ctrl_class"><img src="view/images/search.png" alt=""></button>
                                </form>
                            </div>
                            <!-- Hamburger -->
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Menu -->
        <div class="menu_container menu_mm">
            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>
            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <div class="menu_search_form_container">
                        <form action="#" id="menu_search_form">
                            <input type="search" class="menu_search_input menu_mm">
                            <button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="view/images/search_2.png" alt=""></button>
                        </form>
                    </div>
                
                    <?php if(isset($_SESSION['khach_hang'])){?>
                        <ul class="menu_list menu_mm">
                            <li class="menu_item menu_mm <?php if(isset($_GET['page'])){$page=$_GET['page'];}else {$page = 'index';}?>"><a href="index.php?page=index"></a></li>
                            <li class="menu_item menu_mm"><a href="index.php?page=index">Trang chủ</a></li>
                            <li class="menu_item menu_mm"><a href="index.php?page=out-tour">DL đất liền</a></li>
                            <li class="menu_item menu_mm"><a href="index.php?page=in-tour">DL biển đảo</a></li>
                            <li class="menu_item menu_mm"><a href="index.php?page=news">Tin tức</a></li>
                            <li class="menu_item menu_mm"><a href="index.php?page=contact">Liên hệ</a></li>
                            <li class="menu_item menu_mm <?php  ?>"><a href=""><?=$_SESSION['khach_hang']['name']?></a></li>
                            <li class="menu_item menu_mm"><a href="?clear=true">Đăng xuất</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="?clear=true">Đăng xuất</a></li> -->
                        </ul>
                    <?php 
                    }
                    else{
                    ?>
                            <ul class="main_nav_list">
                                <li class="menu_item menu_mm <?php if(isset($_GET['page'])){$page=$_GET['page'];}else {$page = 'index';}?>"><a href="index.php?page=index"></a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=index">Trang chủ</a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=out-tour">DL đất liền</a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=in-tour">DL biển đảo</a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=news">Tin tức</a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=contact">Liên hệ</a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=login">Đăng nhập</a></li>
                                <li class="menu_item menu_mm"><a href="index.php?page=register">Đăng ký</a></li>
                            </ul>
                    <?php } ?>
                    <!-- Menu Social -->
                    <div class="menu_social_container menu_mm">
                        <ul class="menu_social menu_mm">
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="menu_copyright menu_mm">MOMA Trip All rights reserved</div>
                </div>
            </div>
        </div>