<?php 
	function admin_insert($ten,$email,$password,$phone){
		$sql = "INSERT INTO admin(Ten_admin,Email,Password,Phone) VALUES(?,?,?,?)";
		pdo_execute($sql,$ten,$email,$password,$phone);
	}
	function admin_select_by_email($email){
		$sql = "SELECT * FROM admin WHERE Email=?";
		return pdo_query_one($sql,$email);
	}
	function admin_select_all(){
		$sql = "SELECT * FROM admin ORDER BY Ma_admin DESC";
		return pdo_query($sql);
	}
?>