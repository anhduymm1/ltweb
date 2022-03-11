<?php
$conn = mysqli_connect("localhost", "anhduy", "anhduymm098","quanlydathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() === '') {
		session_start();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>ĐĂNG KÍ</title>
		<link rel="stylesheet" type="text/css" href="dangki.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
	</head>
	<body>
		<?php
			 if (isset($_POST["btn_submit"])) {
                $email = $_POST["email"];
				$password=md5($_POST["password"]);
				$nhaplaipassword=md5($_POST["nhaplaipassword"]);
                $hoten = $_POST["hoten"];	
                $diachi = $_POST["diachi"];	
                $sdt = $_POST["sdt"];				
              
				if ($password != $nhaplaipassword) {
					echo '<script>alert("Nhập lại mật khẩu không đúng!");</script>';
				}
				if ($email=="" or $password=="" or $nhaplaipassword=="" or $hoten=="" or $diachi=="" or $sdt=="" ){
					echo '<script>alert("Các trường không được để trống");</script>';
				}          
            else{
                $sql = "INSERT INTO khachhang(HoTenKH,DiaChi,SoDienThoai,Email,MatKhau) VALUES ('$hoten','$diachi', '$sdt', '$email','$password');";
                $query = mysqli_query($conn,$sql);
                echo '<script>alert("Da dang ky thanh cong");</script>';
                echo '<script>location.href = "./dangnhap.php";</script>';
               
            }
           
            
        }
		?>
		<div class="dangnhap">
			<div class="header">
				<div id="text1">
					<span style="color:red">A<span style="color:yellow">G</span></span><span style="color:white">STORE</span>
				</div>
			</div>
			<div class="main">
				<div class="empty"></div>
				<div class="main-img">
					<div>
						<img src="./hinh/register.jpg" width="90%" style="margin-top:115px;">
					</div>
					<div >
						Đăng kí để theo dõi những tựa game yêu thích cũng như nhận được nhiều ưu đãi hấp dẫn
					</div>
				</div>
				<div class="main-div">
					<div class="trove">
						<div class="trovetrangchu">
							<i class="fas fa-chevron-left"></i>
							<a href="./btlon.php"><b>Trở về trang chủ</b></a>
						</div>
						
					</div>
					<div class="main-form">
						<form class="form-dangnhap" action="#" method="POST">
							<p style="font-size:20px;font-weight:bold;margin-top:0px">Tạo tài khoản</p>
							<input type="text" name="email" placeholder="Email" style="margin-bottom:10px;"></input>
							<input type="password" name="password" placeholder="Mật khẩu" style="margin-bottom:10px;"></input>
							<input type="password" name="nhaplaipassword" placeholder="Nhập lại mật khẩu" style="margin-bottom:10px;"></input>
							<input type="text" name="hoten" placeholder="Họ tên" style="margin-bottom:10px;"></input>
							<input type="text" name="diachi" placeholder="Địa chỉ" style="margin-bottom:10px;"></input>
							<input type="text" name="sdt" placeholder="Số điện thoại" style="margin-bottom:10px;"></input>
							<input type="submit" name="btn_submit" value="Đăng kí" style="cursor:pointer"></input>
							<p style="font-size:20px;font-weight:bold">Bạn có sẵn tài khoản?</p>
							<a href="./Dangnhap.php" style="text-align:center;background:rgb(239, 239, 239);border:1px solid rgb(118, 118, 118);padding:1px 6px;border-radius:2px;">Đăng nhập</a>
						</form>
					</div>
				</div>
				<div class="empty"></div>
			</div>
			<div class="footer">Copyright © 2021 AGSTORE. All Rights Reserved.</div>
		</div>
	</body>
</html>