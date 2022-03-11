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
		<link rel="stylesheet" type="text/css" href="./chitietsanpham.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<div class="web">
			<div class="header">
				<div id="text1">
					<a href="btlon.php"style="text-decoration:none">
						<span style="color:red">A<span style="color:yellow">G</span></span><span style="color:white">STORE</span>
					</a>
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
									<a href="./Dangxuat.php" style="text-decoration:none;color:gray;padding:5px 5x"><b>Đăng xuất</b></a>
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
				
				<?php 
            
					$id = $_GET['MSHH'];

					$sqlSanPham = "select *,loaihanghoa.TenLoaiHang from hanghoa,loaihanghoa WHERE hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang and MSHH=$id ";
					$querySP = mysqli_query($conn,$sqlSanPham);
					while ($row = mysqli_fetch_array($querySP, MYSQLI_ASSOC)) {
						$sanpham[]= array( 
							'MSHH' => $row['MSHH'],
							'TenHH' => $row['TenHH'],
							'DuongDan' => $row['DuongDan'],
							'TenLoai' => $row['TenLoaiHang'],                   
							'QuyCach' => $row['QuyCach'],                   
							'Gia' => $row['Gia'],                   
							'SoLuongHang' => $row['SoLuongHang'],                   
							'GhiChu' => $row['GhiChu'],                   
						);             
					}

					/* $sql = "INSERT INTO hanghoa(TenHH,HinhAnh,QuyCach,Gia,SoLuongHang,MaLoaiHang,GhiChu ) 
					VALUES ('$ten','$hsp_tenfile','$quycach',$gia,$soluong,$loai,'$ghichu');";
					$sql = "in" */
				?>
	
				<div class="main-frame">
					 <?php foreach ($sanpham as $sp) : ?>
					<div class="container overflow-hidden" >
						  <div class="row gx-5">
							<div class="title"> <a style="text-decoration:none;color:black" href="./btlon.php?id=<?= $sp['MSHH'] ?>" class="card-title my-card-title font-weight-bold">
											<p ><?= $sp['TenHH'] ?></p>
										</a>
							</div>
							<div class="col" style="padding-left:0px;padding-right:0px;margin-left:0px;margin-bottom:0px;margin-right:10px;">
								<div><img src=<?= $sp['DuongDan']  ?>  width="100%"></div>
							</div>
							<div class="col" style="padding-left:0px;padding-right:0px;margin-right:0px;margin-bottom:0px;margin-left:10px">
								<div style="float:left">
									<span style="color: #919191;text-transform: uppercase;font-size: 12px;">
										<b>Mã sản phẩm:</b> <span style="font-family:gothamvnu-book; font-size:18;color:red"><?= $sp['MSHH'] ?></span>
									</span>
								</div>
								<?php if ($sp['SoLuongHang']>0):?>
								<div style="float:right;padding-right:35px">
									<span style="color: #919191;text-transform: uppercase;font-size: 12px;">
										<b>Số lượng còn lại:</b> <span style="font-family:gothamvnu-book; font-size:18;color:red"><?= $sp['SoLuongHang'] ?></span>
									</span>
								</div>
								<?php else:?>
								<div style="float:right;padding-right:35px">
									<span style="color: #919191;text-transform: uppercase;font-size: 12px;">
										<b>Số lượng còn lại:</b> <span style="font-family:gothamvnu-book; font-size:18;color:red">Hết hàng</span>
									</span>
								</div>
								<?php endif; ?>
								<div class="sp-info" >
									
									<div class="sp-info-top">
										<div style="font-weight:bold"class="sp-price-text">Giá sản phẩm</div>
										<div class="sp-price"><?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ</div>
									</div>
									<div class="sp-info-bottom">
										<form action="themgiohang.php" method="post" name="frmThanhToan" id="frmThanhToan">
											<div class="row bar-info-product d-flex product-display-block" >
												<div class="col-md-3 col-xs-12 product-content-button" style="padding: 0 0 10px 15px;width:100%">
													<!-- From an lay du lieu -->
													<input type="hidden" value="<?= $sp['MSHH'];?>" name="MSHH" id="MSHH">
													<input type="hidden" value="<?= $sp['TenHH'];?>" name="TenHH" id="TenHH">
													<input type="hidden" value="<?= $sp['DuongDan'];?>" name="DuongDan" id="DuongDan">
													<input type="hidden" value="<?= $sp['Gia'];?>" name="Gia" id="Gia">
													<!-- From an lay du lieu -->
												
													<!-- form(Số lượng giỏ hành) -->
													<div class="form-group row" style="margin-top:20px" >
														<div class="col-md">
															<label style="font-weight:bold;margin-top:0px" for="num" class="sp-price-text" >Số lượng : </label>
														</div>
														<div class="col-md">
															<input type="number" name="soluong" id="soluong" min="1" value="1"  style="width:30%">
														</div>
													</div>
													<!-- form(Số lượng giỏ hành) -->
													<!-- Thêm sp vào giỏ -->
													<div class=" row" >
														<div class="col-md-4"></div>
														<div class="col-md" style="margin-top:70px">
													<!-- <button class="btn text-danger btn-add">Thêm vào giỏ hàng </button> -->
														<button class="bt"style="background:lightgreen;border:1px solid black;border-radius:4px;"type="sumbit" name="btnThemVaoGioHang" id="btnThemVaoGioHang" class="btn btn-info my-btn">		
															  <span class="them"style="font-size:19px;font-family:monospace;color:white">Thêm sản phẩm</span>
														</button>    
														</div>
													</div>
                                        <!-- Thêm sp vào giỏ -->
													
													
											</div>
											</div>
										</form>
	
								
							</div>
						  </div>
						                                     
                                        
                                    
						</div>
						
					</div>
					<div style="border-bottom:2px solid gray;margin-top:20px;"></div>
					<div class="thongtin" style="padding-left:12px;padding-right:12px">
						<div class="title"> <p>Chi tiết sản phẩm</p></div>
						<div><?= $sp['GhiChu'] ?></div>
					</div>
					<div style="border-bottom:2px solid gray;margin-top:20px;"></div>
					<div class="thongtin" style="padding-left:12px;padding-right:12px">
						<div class="title"> <p>Cấu hình chi tiết</p></div>
						<div class="row cau-hinh">
							<div class="col-xs-12">
								<?= $sp['QuyCach'] ?>
							</div>
						</div>
					</div>
					 <?php endforeach; ?>
					 			<?php
							$id = $_GET['MSHH'];
							$sql = "select MaLoaiHang from hanghoa where hanghoa.MSHH=$id";
							$querySP = mysqli_query($conn,$sql);
							$row = mysqli_fetch_array($querySP, MYSQLI_ASSOC);
							$MaLoaiHang=$row['MaLoaiHang'];
						
							//var_dump($row);die();
							$sqlSanPham= "select * from hanghoa where hanghoa.MaLoaiHang=$MaLoaiHang and hanghoa.MSHH!=$id";
							$query = mysqli_query($conn,$sqlSanPham);
							 while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
									$sanphamData[]= array( 
										'MSHH' => $row['MSHH'],
										'TenHH' => $row['TenHH'],
										'DuongDan' => $row['DuongDan'],             
										'QuyCach' => $row['QuyCach'],                   
										'Gia' => $row['Gia'],                                   
										'GhiChu' => $row['GhiChu']                  
								);             
							};
							?>
					<div style="border-bottom:2px solid gray;margin-top:20px;"></div>
					<div class="container" style="margin-top:20px;">
							<div class="title"> <p>Sản phẩm liên quan</p></div>
				
						  <div class="row">
							 <?php foreach ($sanphamData as $sp) : ?>
							<div class="col">
								<div class="card" >
									<div class="card-body">
												<img src="<?= $sp['DuongDan']  ?>" style="width:100%;height:170px;" class="card-img-top" alt="...">
												<a style="text-decoration:none;color:black" href="./chitietsanpham.php?MSHH=<?= $sp['MSHH'] ?>" >
													<h5 class="card-title" ><?= $sp['TenHH']  ?></h5>
												</a>
												<a href="./chitietsanpham.php?MSHH=<?= $sp['MSHH'] ?>" class="btn btn-primary" style="background:yellow;border:0.5px solid black;color:black;"><?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ</a>
											</div>
								</div>
							</div>
							<?php endforeach ?>
						
						  </div>
					</div>
				</div>			
				       
						
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
							<li class="li" id="li1" style="border:0px;"> <a style="color:black" > Trang chủ </a></li>
							<li class="li" id="li1"> <a style="color:black;text-decoration:none"href="thongtin.html" target="_blank"> Thông tin </a></li>
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