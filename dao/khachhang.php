<?php
    // require_once 'pdo.php';

    function khach_hang_insert($tenkhachhang,$email,$sodienthoai,$matkhau){
        $sql = "INSERT INTO khach_hang(Ten_KH,Email,Sdt,Mat_khau) VALUES(?,?,?,?)";
        pdo_execute($sql,$tenkhachhang,$email,$sodienthoai,$matkhau);
    }

    function khach_hang_update($makhachhang,$tenkhachhang,$email,$sodienthoai,$matkhau){
        $sql = "UPDATE khach_hang SET Ten_KH=? , Email = ?, Sdt=? , Mat_khau=?  WHERE 	Ma_KH =?";
        pdo_execute($sql,$tenkhachhang,$email,$sodienthoai,$matkhau,$makhachhang);
    }
    function khach_hang_delete($makhachhang){
        $sql = "DELETE FROM khach_hang WHERE Ma_KH=?";
        if(is_array($makhachhang)){
            foreach ($makhachhang as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $makhachhang);
        }
    }
    function khach_hang_select_by_id($makhachhang){
        $sql = "SELECT * FROM khach_hang WHERE Ma_KH=?";
        return pdo_query_one($sql, $makhachhang);
    }
    function khach_hang_select_all(){
        $sql = "SELECT * FROM khach_hang ORDER BY Ma_KH DESC";
        return pdo_query($sql);
    }
    function khach_hang_exist($makhachhang){
        $sql = "SELECT count(*) FROM khach_hang WHERE Ma_KH=?";
        return pdo_query_value($sql, $makhachhang) > 0;
    }
    function khach_hang_select_by_name($tenkhachhang){
		$sql = "SELECT * FROM khach_hang WHERE Ten_KH=?";
		return pdo_query_one($sql, $tenkhachhang);
	}
?>
