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
		<title>ĐĂNG NHẬP</title>
		<link rel="stylesheet" type="text/css" href="dangnhap.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
	</head>
	<body>
		<?php            
            if (isset($_POST["btn_submit"])) {
                
                $email = $_POST["email"];
                $password = md5($_POST["password"]);
               
              
                if ($email == "" || $password =="") {
                    echo '<script>alert("username hoặc password bạn không được để trống!");</script>';
                }
				if ($email== "admin"){
					$sqlql = "select * from khachhang where Email = '$email' and MatKhau = '$password' ";
                    $queryql = mysqli_query($conn,$sqlql);
                    $rowsql = mysqli_num_rows($queryql);
                    if ($rowsql==0) {
						echo '<script>alert("tên đăng nhập hoặc mật khẩu không đúng !");</script>';}
					else{
						while ( $dataql = mysqli_fetch_array($queryql) ) {
                            $_SESSION["HoTenKH"] = $dataql["HoTenKH"];
                            $_SESSION['DiaChi'] =  $dataql["DiaChi"];
                            $_SESSION["sdt"] = $dataql["SoDienThoai"];
                            $_SESSION["emailql"] = $email;
							$_SESSION["password"] = $dataql["MatKhau"];
                        }
						echo '<script>alert("Đăng nhập thành công");</script>';
						echo '<script>location.href = "./sanpham.php";</script>';
					}
				}
				else{
                    $sql = "select * from khachhang where Email = '$email' and MatKhau = '$password' ";
                    $query = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($query);
                    if ($num_rows==0) {
                        echo '<script>alert("tên đăng nhập hoặc mật khẩu không đúng !");</script>';
                    }else{
                        while ( $data = mysqli_fetch_array($query) ) {
                            $_SESSION["HoTenKH"] = $data["HoTenKH"];
                            $_SESSION['DiaChi'] =  $data["DiaChi"];
                            $_SESSION["sdt"] = $data["SoDienThoai"];
                            $_SESSION["email"] = $email;
							$_SESSION["password"] = $data["MatKhau"];
                        }
                        
                        echo '<script>alert("Đăng nhập thành công ");</script>';
                        echo '<script>location.href = "./btlon.php";</script>';
                    }
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
						<img src="./hinh/Door.jpg" width="90%" style="margin-top:115px;">
					</div>
					<div >
						Đăng nhập để có thể cập nhật liên tục những tựa game mới ra mắt với giá tốt nhất 
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
						<form class="form-dangnhap" action="#" method="post">
							<p style="font-size:20px;font-weight:bold">Chào mừng bạn trở lại!</p>
							<input type="text" name="email" placeholder="Email" style="margin-bottom:10px;"></input>
							<input type="password" name="password" placeholder="Mật khẩu" style="margin-bottom:10px;"></input>
							<input type="submit" name="btn_submit" value="Đăng nhập" style="cursor:pointer"></input>
							<p style="font-size:20px;font-weight:bold">Bạn chưa có tài khoản?</p>
							<a href="./Dangki.php" style="text-align:center;background:rgb(239, 239, 239);border:1px solid rgb(118, 118, 118);padding:1px 6px;border-radius:2px;">Đăng kí</a>
						</form>
					</div>
				</div>
				<div class="empty"></div>
			</div>
			<div class="footer">Copyright © 2021 AGSTORE. All Rights Reserved.</div>
		</div>
	</body>
</html>