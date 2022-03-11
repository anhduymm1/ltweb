<?php
if (session_id() === '') {
    session_start();
}
if(isset($_SESSION['email'])) {
    unset($_SESSION['email']);
	echo'<script>alert("Đăng xuất thành công");</script>';
    header('location:./btlon.php');
    
}
elseif(isset($_SESSION['emailql'])) {
    unset($_SESSION['emailql']);
	echo'<script>alert("Đăng xuất thành công");</script>';
    header('location:./sanpham.php');
    
}
if(isset($_SESSION['giohang'])){
	unset($_SESSION['giohang']);
}
else {
    echo 'Người dùng chưa đăng nhập. Không thể đăng xuất dược!'; die;
}
?>