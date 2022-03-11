<?php
		session_start(); 
		$conn = mysqli_connect('localhost', 'anhduy', 'anhduymm098', 'quanlydathang') or die('Xin lỗi, database không kết nối được.');
		$id = $_GET['MSHH'];
		$sqlSanPham = "select DuongDan from hanghoa WHERE hanghoa.MSHH =$id; ";
		
        $querySP = mysqli_query($conn,$sqlSanPham);
        $row = mysqli_fetch_array($querySP, MYSQLI_ASSOC);
        $sanpham = $row['DuongDan'];
		unlink($sanpham);
		$sql = "DELETE FROM `hanghoa` WHERE MSHH=$id;";
		//var_dump($sql);die();
		// 3. Thực thi câu lệnh DELETE
		mysqli_query($conn, $sql);
		//var_dump($sql); die();
		// Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
		header('location:sanpham.php');
 ?>
