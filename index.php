<?php
	session_start();
	// add thu vien
	require "dao/pdo.php";
	require "dao/loai-tour.php";
	require "dao/tour.php";
	require "dao/news.php";
	require "dao/gallery.php";
	require "dao/khachhang.php";
	require "dao/banner.php";
	require "dao/giohang.php";
	
	// add head
	// require "view/layout/head-index.php";

	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else {
		$page = 'index';
	}

	if($page=="index")
	{
		require "view/index.php";
	}
	elseif($page=="login")
	{
		require "view/login.php";
	}
	elseif($page=="register")
	{
		require "view/register.php";
	}
	elseif($page=="out-tour")
	{
		require "view/out-tour.php";
	}
	elseif($page=="in-tour")
	{
		require "view/in-tour.php";
	}
	elseif($page=="news")
	{
		require "view/news.php";
	}
	elseif($page=="contact")
	{
		require "view/contact.php";
	}
	elseif($page=="tour-detail")
	{
		require "view/tour-detail.php";
	}
	elseif($page=="news-detail")
	{
		require "view/news-detail.php";
	}elseif($page== "booking"){
		require "view/booking.php";
	}elseif($page== "thanhcong"){
		require "view/thanhcong.php";
	}
	else{
		echo '';
	}

	// add footer
	// require "view/layout/footer.php";
?>
