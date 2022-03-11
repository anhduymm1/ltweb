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
		<title>AGSTORE</title>
		<link rel="stylesheet" type="text/css" href="trangchu.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<div class="web">
			<div class="header">
				<div id="text1">
					<span style="color:red">A<span style="color:yellow">G</span></span><span style="color:white">STORE</span>
				</div>
				<div id="search">
					<input type="text" id="filter_name" class="search-box" name="search" value="" placeholder="Nhập sản phẩm cần tìm..." autocomplete="off" style="border:1">
					<div id="bg-icon">
						<i class="fas fa-search" id="fa-search" style="color:white;padding-bottom:5px;font-size:15px;;"></i>
					</div>
				</div>
				<div id="login" class="mini-login">
				
					<div class="login" >
					<?php if(isset($_SESSION['email'])) : $name=$_SESSION['email']?>	
						
						<b style="color:gray"class="cart-text"><?= $name ?></b>
						<div class="login-detail">
							<div class="detail">
								<div id="dangxuat" style="background:lightgreen;margin-bottom:10px;border-radius:3px">
									<a href="./dangxuat.php" style="text-decoration:none;color:gray;padding:5px 5x"><b>Đăng xuất</b></a>
								</div>
								<div id="img">
									<img width="100%" src="./hinh/AGSTORE.gif"></img>
								</div>
							</div>
						</div>
					<?php else : ?>
						<i class="fas fa-user"></i>
						<b class="cart-text">Đăng nhập</b>
						<div class="login-detail">
						<div class="detail">
							<div id="lg" class="dangnhap">
								<a href="./Dangnhap.php" style="text-decoration:none;color:white"><b>Đăng nhập</b></a>
							</div>
							<div id="register">
								<a href="./Dangki.php" style="text-decoration:none;color:white"><b>Tạo tài khoản</b></a>
							</div>
							<div id="img">
								<img width="100%" src="./hinh/AGSTORE.gif"></img>
							</div>
						</div>
					</div>
					<?php endif; ?>
					</div>
					
				</div>
				<div id="cart">
					<a href="giohang.php" style="text-decoration:none;color:white">
						<div class="giohang">
							<i class="fas fa-cart-plus" style="padding: 10px 15px"></i>
							<b class="cart-text">Giỏ hàng</b>
							<?php
								if(isset($_SESSION['giohang']))
									$sl=count($_SESSION['giohang']);
								else
									$sl=0;	
							 ?>
							<span style="padding:2px 5px;height:10px;line-height:2px"><?=$sl?></span>
						</div>				
					</a>
				</div>
				<div class="login-main">
					<div id="login-main-img">
					</div>
				</div>
			</div>
				
			<div class="main">
					<!-- Xu ly php -->
					<?php 
						
						$sqlSanPham = "select *,loaihanghoa.TenLoaiHang from hanghoa,loaihanghoa WHERE hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang; ";
						$querySP = mysqli_query($conn,$sqlSanPham);
						while ($row = mysqli_fetch_array($querySP, MYSQLI_ASSOC)) {
							$sanpham[]= array( 
								'MSHH' => $row['MSHH'],
								'TenHH' => $row['TenHH'],
								'TenLoai' => $row['TenLoaiHang'],                   
								'QuyCach' => $row['QuyCach'],                   
								'Gia' => $row['Gia'],                   
								'SoLuongHang' => $row['SoLuongHang'],                   
								'GhiChu' => $row['GhiChu'], 
								'DuongDan' => $row['DuongDan']							
							);             
						}
					
					?>
					<!-- Xu ly php -->
				<div class="main-frame1">
				<!--
					<div class="main-left">
						
						<div style="font-size:20px;margin-top:40px;margin-bottom:25px;text-transform:uppercase;color:#4d4d4d"><i class="fas fa-bars" style="padding-left:3px"></i> Danh mục game</div>
						<ul class="ul-list">
					
							<li class="li-list"> <i class="fas fa-futbol" style="margin-right:5px;color:#10595c"></i>Thể thao</li>
							<li class="li-list"> <i class="fas fa-fighter-jet" style="margin-right:5px;color:#10595c"></i>Hành động</li>
							<li class="li-list"> <i class="fab fa-suse" style="margin-right:5px;color:#10595c"></i>Sinh tồn</li>
							<li class="li-list"> <i class="fas fa-ghost" style="margin-right:5px;color:#10595c"></i>Kinh dị</li>
							<li class="li-list"> <i class="fas fa-gopuram" style="margin-right:5px;color:#10595c"></i>Khám phá</li>
							<li class="li-list"> <i class="fas fa-puzzle-piece" style="margin-right:5px;color:#10595c"></i>Giải đố</li>
							<li class="li-list"> <i class="fas fa-city" style="margin-right:5px;color:#10595c"></i>Mô phỏng</li>
							<li class="li-list"> <i class="fas fa-grip-lines" style="margin-right:5px;color:#10595c"></i>Khác</li>
						</ul>
					</div> -->
					<div class="main-center"  >
						  <?php 
								$sqlha="SELECT DuongDan,MSHH FROM hanghoa WHERE rand(MSHH) LIMIT 3"; 
								$query=mysqli_query($conn,$sqlha);
								$rowat=mysqli_fetch_array($query, MYSQLI_ASSOC);
								$a=$rowat['DuongDan'];
								while ($rowha = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
									$hinhanh[]= array( 
									'DuongDan' => $rowha['DuongDan']							
								);             
								}
								//var_dump($a);die();
							?>
						<div class="title-in-main" style="margin-bottom:15px">Game nổi bật</div>
						
						<div style="width:100%;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						
						  <div class="carousel-indicators" >
							<button style="background-color: #87b8e4;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button style="background-color: #87b8e4;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button style="background-color: #87b8e4;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						  </div>
						
						  <div class="carousel-inner">
							<div class="carousel-item active" style="width:100%;height:500px">
							  <img style="width:60%;height:500px;" src=<?= $a ?> class="d-block w-100">
							</div>
							<?php foreach ($hinhanh as $ha) : ?>
							<div class="carousel-item" style="width:100%;height:500px">
							  <img style="width:60%;height:500px;" src=<?= $ha['DuongDan'] ?> class="d-block w-100">
							</div>
							<?php endforeach?>
						  </div>
						  
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span style="background-color: #d7d7c1"class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span style="background:red" class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span style="background-color: #d7d7c1" class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						  </button>
						  
						</div>
						
					</div>
				</div>
				<div class="main-frame2">
					<div class="main-frame2-top">
						<p class="title-in-main">Tất cả game</p>
						
						<div class="container px-4" style="width:106%">
							  <div class="row gx-3" >
								<?php foreach ($sanpham as $sp) : ?>
									<div class="col-md-4" style="padding-bottom:40px;">
										<div class="card" style="width: 280px;">
											<img style="width: 100%;height:170px;"src=<?= $sp['DuongDan']  ?> class="card-img-top" alt="...">
											<div class="card-body">
												<a style="text-decoration:none;color:black"href="./chitietsanpham.php?MSHH=<?= $sp['MSHH'] ?>" >
												<h5 class="card-title"><?= $sp['TenHH']  ?></h5>
												</a>
												<a href="./chitietsanpham.php?MSHH=<?= $sp['MSHH'] ?>" class="btn btn-primary" style="background:yellow;border:1px solid black;color:black;"><?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ</a>
												
											</div>
										</div>
									</div>
								<?php endforeach?>
								</div>
									
							  </div>
						
					
					</div>
					<!--
					<div class="main-frame2-bottom">
						<p class="title-in-main">Tất cả game</p>
						<div class="container" >
						
							  <div class="row align-items-start">
							  <?php foreach ($sanpham as $sp) : ?>
								<div class="col" style="width: 100%;">
								  <div class="card" style="width: 100%;">
											<img style="width: 100%;height:120px;" src=<?= $sp['DuongDan']  ?> class="card-img-top">
											<div class="card-body">
												<a style="text-decoration:none;color:black"href="./chitietsanpham.php?MSHH=<?= $sp['MSHH']?>" >
													<h5 class="card-title" style="font-size:15px;"><?= $sp['TenHH']  ?></h5>
												</a>
												<a href="./chitietsanpham.php?MSHH=<?= $sp['MSHH']?>" class="btn btn-primary" style="background:#d5e7f6;color:black;font-size:10px;"><?= $sp['Gia']  ?></a>
											</div>
									</div>
								</div>
								
								<?php endforeach ?>
							  </div>
							  <div class="collapse" id="collapseExample" >
									<a class="btn btn-primary" style="width:100%;background:#f2f2f2;color:black;border:none;margin-top:6px" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
										Xem Thêm
									</a>
									</p>
						
								</div>
						
							</div>
							<p>
						
					</div> -->
				
				</div>
		</div>
		<div class="footer">
				<div class="footer-top-top" >
						<div class="footer-top-top-img">
							<img src="./Hinh/tw.png" style="width:80%;margin-left:30px;">
						</div>
						<div class="footer-top-top-text">
							<p style="font-size:25px;color:#4d4d4d;padding-top:60px"> Bạn đang tìm những tựa game mới ?</p>
							<p> Hãy đăng kí để tham gia AGSTORE miễn phí</p>
							<p class="ttt"><a class="aaa" href="Dangki.php" style="text-decoration:none;color:#4d4d4d;font-weight:bold;background:#d5e7f6;padding: 5px 10px; border-radius:3px;">Đăng kí</a></p>
							<p> Hoặc <a href="Dangnhap.php" style="text-decoration:none;color:#4d4d4d"><b>đăng nhập</b></a> nếu bạn đã có tài khoản</p>
						</div>
				</div>	
				<div class="footer-top">
					<div class="footer-top-content">
						<i class="fas fa-rocket" style="color:red"></i>
						<span style="font-family:monospace;font-size:13px;font-weight:bold;text-transform:uppercase;">GIAO HÀNG SIÊU TỐC</span>
						<p style="font-family:monospace;font-size:13px;">Hệ thống giao hàng tự động chỉ trong 3 phút.</p>
					</div>
					<div class="footer-top-content">
						<i class="fas fa-house-user"style="color: #ffaa80"></i>
						<span style="font-family:monospace;font-size:13px;font-weight:bold;text-transform:uppercase;">BẢO HÀNH NHANH CHÓNG</span>
						<p style="font-size:13px;">Mọi yêu cầu hỗ trợ sẽ được đội ngũ tư vấn giải quyết trực tiếp.</p>
					</div>
						<div class="footer-top-content">
						<i class="fas fa-star"style="color:#ffff66"></i>
						<span style="font-family:monospace;font-size:13px;font-weight:bold;text-transform:uppercase;">UY TÍN 5 SAO</span>
						<p style="font-family:monospace;font-size:13px;font-family:monospace">Được cộng đồng bình chọn là shop game uy tín nhất VN.</p>
					</div>
						<div class="footer-top-content">
						<i class="fas fa-headset"style="color:#3385ff"></i>
						<span style="font-family:monospace;font-size:13px;font-weight:bold;text-transform:uppercase;">HỖ TRỢ TẬN TÌNH</span>
						<p style="font-family:monospace;font-size:13px;">Hệ thống hỗ trợ online liên tục từ 8h - 24h.</p>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="col" id="col1">
						<p style="margin-left:100px;"><span style="color:red;background:#C0C0C0 ">A<span style="color:yellow">G</span></span><span style="background:#C0C0C0;color:white">STORE</span></p>
						<ul class="ul" id="ul1">
							<li class="li" id="li1" style="border:0px;"> <a style="color:black"> Trang chủ </a></li>
							<li class="li" id="li1"> <a style="color:black"> Thông tin </a></li>
							<li class="li" id="li1"> <a style="color:black"> Liên hệ </a></li>
						</ul>
					</div>
					<div class="col">
						<ul class="ul" >
							<li class="li">
								<i class="fas fa-map-marked-alt" style="color:red"></i>
								<span>Số 75, Thị Trấn Ngã Sáu, Châu Thành, Hậu Giang</span>
							</li>
							<li class="li">
								<i class="fas fa-phone-alt" style="color:red"></i>
								<span>(+84)0354136770</span>
							</li>
							<li class="li">
								<i class="fas fa-clock" style="color:red"></i>
								<span>Hoạt động 24/7</span>
							</li>
							<li class="li">	
								<i class="fas fa-envelope" style="color:red"></i>
								<span>duybui100073@gmail.com</span>
							</li>
						</ul>
					</div>
					<div class="col">
						<p>Chúng tôi có đủ loại trò chơi với mức giá mà bạn không thể tìm được ở bất kì nơi nào khác ngoài AGSTORE</p>
						<div style="text-align:center">
							<a>
								<img src="./fb.webp">
							</a>
							<a>
								<img src="./tt.webp">
							</a>
							<a>
								<img src="./ins.webp">
							</a>
							<a>
								<img src="./yt.webp">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="./jquery.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>	
</html>