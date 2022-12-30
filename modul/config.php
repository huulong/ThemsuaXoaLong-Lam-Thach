<?php 
	$con = new mysqli('localhost', 'root', '', '404');
		//Kiểm tra kết nối
		if ($con->connect_error) {
			die('kết nối không thành công ' . $connect->connect_error);
		}
 ?>