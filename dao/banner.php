<?php 
	function banner_insert($tenbanner,$chitietbanner,$hinhanhbanner,$maloaitour){
		$sql = "INSERT INTO banner(Ten_banner,Chi_tiet,Hinh_anh,Ma_loaitour) VALUES(?,?,?,?)";
		pdo_execute($sql,$tenbanner,$chitietbanner,$hinhanhbanner,$maloaitour);
	}

	function banner_update($mabanner,$tenbanner,$chitietbanner,$hinhanhbanner,$maloaitour){
		$sql = "UPDATE banner SET Ten_banner=?,Chi_tiet=?,Hinh_anh=?,Ma_loaitour=? WHERE Ma_banner=?";
		pdo_execute($sql,$tenbanner,$chitietbanner,$hinhanhbanner,$maloaitour,$mabanner);
	}
	function banner_deletes($mabanner){
		$sql = "DELETE FROM banner WHERE Ma_banner=?";
		if(is_array($mabanner)){
			foreach($mabanner as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $mabanner);
		}
	}
	function banner_select_all(){
		$sql = "SELECT * FROM banner ORDER BY Ma_banner DESC";
		return pdo_query($sql);
	}
	function banner_select_loaitour_1(){
		$sql = "SELECT * FROM banner  WHERE Ma_loaitour=1 ORDER BY Ma_banner DESC LIMIT 1 ";
		return pdo_query($sql);
	}
	function banner_select_loaitour_2(){
		$sql = "SELECT * FROM banner  WHERE Ma_loaitour=2 ORDER BY Ma_banner DESC LIMIT 1 ";
		return pdo_query($sql);
	}
	function banner_select_by_id($mabanner){
		$sql = "SELECT * FROM banner WHERE Ma_banner=?";
		return pdo_query_one($sql, $mabanner);
	}
	function banner_select_by_name($ten){
		$sql = "SELECT * FROM banner WHERE Ten_banner=?";
		return pdo_query_one($sql, $ten);
	}
?>