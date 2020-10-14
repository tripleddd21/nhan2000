<?php 
	function gallery_insert($tengallery,$hinhanhgallery){
		$sql = "INSERT INTO gallery(Ten_gallery,Hinh_anh) VALUES(?,?)";
		pdo_execute($sql,$tengallery,$hinhanhgallery);
	}

	function gallery_update($magallery,$tengallery,$hinhanhgallery){
		$sql = "UPDATE gallery SET Ten_gallery=?,Hinh_anh=? WHERE Ma_gallery=?";
		pdo_execute($sql,$tengallery,$hinhanhgallery,$magallery);
	}
	function gallery_deletes($magallery){
		$sql = "DELETE FROM gallery WHERE Ma_gallery=?";
		if(is_array($magallery)){
			foreach($magallery as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $magallery);
		}
	}
	function gallery_select_all(){
		$sql = "SELECT * FROM gallery ORDER BY Ma_gallery DESC LIMIT 8";
		return pdo_query($sql);
	}
	function gallery_select_by_id($magallery){
		$sql = "SELECT * FROM gallery WHERE Ma_gallery=?";
		return pdo_query_one($sql, $magallery);
	}
	function gallery_select_by_name($tengallery){
		$sql = "SELECT * FROM gallery WHERE Ten_gallery=?";
		return pdo_query_one($sql, $tengallery);
	}
?>