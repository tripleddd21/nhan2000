<?php 
	function tour_insert($ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour){
		$sql = "INSERT INTO tour(Ten_tour,Mo_ta,Chi_tiet,Hinh_anh,Ngay_khoihanh,Thoi_gian,Gia,Ma_loaitour) VALUES(?,?,?,?,?,?,?,?)";
		pdo_execute($sql,$ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour);
	}

	function tour_update($matour,$ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour){
		$sql = "UPDATE tour SET Ten_tour=?,Mo_ta=?,Chi_tiet=?,Hinh_anh=?,Ngay_khoihanh=?,Thoi_gian=?,Gia=?,Ma_loaitour=? WHERE Ma_tour=?";
		pdo_execute($sql,$ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour,$matour);
	}
	/**
	 * Xóa một hoặc nhiều loại
	 * @param mix $ma_loai là mã loại hoặc mảng mã loại
	 * @throws PDOException lỗi xóa
	 */
	function tour_deletes($matour){
		$sql = "DELETE FROM tour WHERE Ma_tour=?";
		if(is_array($matour)){
			foreach($matour as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $matour);
		}
	}
	
	function tour_select_all(){
		$sql = "SELECT * FROM tour ORDER BY Ma_tour DESC";
		return pdo_query($sql);
	}
	function tour_select_loaitour_1(){
		$sql = "SELECT * FROM tour  WHERE Ma_loaitour=1 ORDER BY Ma_tour DESC LIMIT 3 ";
		return pdo_query($sql);
	}
	function tour_select_loaitour_1_all(){
		$sql = "SELECT * FROM tour  WHERE Ma_loaitour=1";
		return pdo_query($sql);
	}
	function tour_select_loaitour_2(){
		$sql = "SELECT * FROM tour WHERE Ma_loaitour=2 ORDER BY Ma_tour DESC LIMIT 3";
		return pdo_query($sql);
	}
	function tour_select_loaitour_2_all(){
		$sql = "SELECT * FROM tour WHERE Ma_loaitour=2 ";
		return pdo_query($sql);
	}
	function tour_select_by_id($matour){
		$sql = "SELECT * FROM tour WHERE Ma_tour=?";
		return pdo_query_one($sql, $matour);
	}
	function tour_select_by_name($ten){
		$sql = "SELECT * FROM tour WHERE Ten_tour=?";
		return pdo_query_one($sql, $ten);
	}
	function khach_hang_select_by_email($email){
		$sql = "SELECT * FROM khach_hang WHERE Email=?";
		return pdo_query_one($sql, $email);
	}
?>