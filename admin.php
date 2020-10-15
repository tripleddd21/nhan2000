<?php
	//session_start();
	ob_start();
	// add thu vien
	require "dao/pdo.php";
	require "dao/loai-tour.php";
	require "dao/tour.php";
	require "dao/news.php";
	require "dao/gallery.php";
	require "dao/banner.php";
	require "dao/khachhang.php";
	require "dao/admin.php";
	require "dao/giohang.php";
	require "Classes/PHPExcel.php";
	
	// add head
	require "admin/layout/head-admin.php";

	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	elseif(isset($_GET['thongke'])){
		$page= "gio-hang";
	}
	else {
		$page = 'index';
		
	}
	if($page=="index")
	{
		require "admin/index.php";
		giohang_drop_view();
	}
	elseif($page=="loai-tour")
	{
		require "admin/loai-tour.php";
	}
	elseif($page=="tour")
	{
		require "admin/tour.php";
	}
	elseif($page=="news")
	{
		require "admin/news.php";
	}
	elseif($page=="gallery")
	{
		require "admin/gallery.php";
	}
	elseif($page=="banner")
	{
		require "admin/banner.php";
	}
	elseif($page=="khach-hang")
	{
		require "admin/khach-hang.php";
	}
	elseif($page=="gio-hang")
	{
		include "admin/gio-hang.php";
	}
	elseif($page=="profile")
	{
		require "admin/profile.php";
	}
	else{
		echo '';
		giohang_drop_view();
	}


	// add footer
	require "admin/layout/foot-admin.php";
?>
<?php 
ob_end_flush();
?>
