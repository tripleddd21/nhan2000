<?php
function giohang_insert($Ma_tour,$Ma_KH){
        $sql = "INSERT INTO gio_hang(Ma_tour,Ma_KH) VALUES(?,?)";
        pdo_execute($sql,$Ma_tour,$Ma_KH);
    } 

function giohang_select_all(){
        $sql = "SELECT * FROM gio_hang ORDER BY Ma_giohang DESC ";
        return pdo_query($sql);
    }
 function giohang_select_by_kh(){
 	$sql = "SELECT * FROM tour_dat ";
			return pdo_query($sql);
 }  
 function giohang_select_by_makh($search){
        $sql = "SELECT * FROM gio_hang, khach_hang
        		WHERE gio_hang.Ma_KH = khach_hang.Ma_KH
				AND gio_hang.Ma_KH like '%$search%'";
        return pdo_query($sql);
    }

function giohang_create_view(){
 	$sql = "
 			CREATE VIEW IF NOT EXISTS tour_dat AS
 			SELECT  gio_hang.Ma_giohang,gio_hang.Ngay_dat,tour.Ten_tour,
 					khach_hang.Ten_KH, khach_hang.Email
			FROM gio_hang,khach_hang, tour
			WHERE gio_hang.Ma_KH = khach_hang.Ma_KH
			AND gio_hang.Ma_tour = tour.Ma_tour " ;
		 pdo_query_create($sql);
 }    
function giohang_select_ten_kh($search){
 	$sql = "SELECT *
			FROM tour_dat
			WHERE Ten_KH like '%$search%' ";
			return pdo_query($sql);
 }  
function giohang_select_month($search1){
 	$sql = "SELECT Ma_giohang , MONTH(Ngay_dat) as month, 
 			FROM tour_dat
			";
			return pdo_query($sql);
 }
function giohang_drop_view()
{
	$sql = " DROP VIEW tour_dat ";
	pdo_query_create($sql);
}

?>