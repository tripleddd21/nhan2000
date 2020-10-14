<?php 
	function news_insert($tennews,$motanews,$chitietnews,$hinhanhnews){
		$sql = "INSERT INTO news(Ten_news,Mo_ta,Chi_tiet,Hinh_anh) VALUES(?,?,?,?)";
		pdo_execute($sql,$tennews,$motanews,$chitietnews,$hinhanhnews);
	}

	function news_update($manews,$tennews,$motanews,$chitietnews,$hinhanhnews){
		$sql = "UPDATE news SET Ten_news=?,Mo_ta=?,Chi_tiet=?,Hinh_anh=? WHERE Ma_news=?";
		pdo_execute($sql,$tennews,$motanews,$chitietnews,$hinhanhnews,$manews);
	}
	/**
	 * Xóa một hoặc nhiều loại
	 * @param mix $ma_loai là mã loại hoặc mảng mã loại
	 * @throws PDOException lỗi xóa
	 */
	function news_deletes($manews){
		$sql = "DELETE FROM news WHERE Ma_news=?";
		if(is_array($manews)){
			foreach($manews as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $manews);
		}
	}
	/**
	 * Truy vấn tất cả các loại
	 * @return array mảng loại truy vấn được
	 * @throws PDOException lỗi truy vấn
	 */
	// function news_select_all(){
	// 	$sql = "SELECT * FROM news ORDER BY Ma_news DESC";
	// 	return pdo_query($sql);
	// }
	function news_select_all(){
		$sql = "SELECT * FROM news ORDER BY Ma_news DESC LIMIT 2";
		return pdo_query($sql);
	}

	function news_select_all_3(){
		$sql = "SELECT * FROM news ORDER BY Ma_news DESC LIMIT 3";
		return pdo_query($sql);
	}
	function news_select_by_id($manews){
		$sql = "SELECT * FROM news WHERE Ma_news=?";
		return pdo_query_one($sql, $manews);
	}
	function news_select_by_name($tennews){
		$sql = "SELECT * FROM news WHERE Ten_news=?";
		return pdo_query_one($sql, $tennews);
	}
?>