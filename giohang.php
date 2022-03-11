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
		<link rel="stylesheet" type="text/css" href="giohang.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">	
		<style>
			.div-giaodich{
				display: none;
			}	
		</style>
	</head>
	<body>
		<div class="web">
			<div class="header">
				<div id="text1">
					<a href="btlon.php"style="text-decoration:none">
						<span style="color:red">A<span style="color:yellow">G</span></span><span style="color:white">STORE</span>
					</a >
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
					$giohang=[];
					if(isset($_SESSION['giohang'])){
						$giohang=$_SESSION['giohang'];
					}
					else
						$giohang=[];

				?>
				<div class="main-frame">
					<div class="div-dathang">
					<!--
						<div class="main-frame-top ">
							<div class="title"><p>Giỏ hàng</p></div>
							<div class="col-md-9 col-xs-12 bar-buy-product product-content-button" style="margin-left:3px;margin-top:10px;width:auto">
								<div id="button-cart-redirect" data-loading-text="Đang tải..." class="btn btn-mua col-md-5 product-content-button-ml" style="width: 144px;margin-right:10px;">Xóa hết sản phẩm
								</div>
								<div id="button-cart" data-loading-text="Đang tải..." class="btn btn-them col-md-5 add-cart-orange" style="width: 144px;padding-left: 0px;">
								Tiếp tục mua hàng
								</div>
							</div>
						</div>
						-->
						<div class="main-frame-bottom " style="    box-shadow: 0 6px 12px darkolivegreen;border-radius:6px">
						        <h1 style="text-align: center; padding-top:20px; font-family: Motiva Sans, Sans-serif;border-bottom:2px solid gray;color:yellow;background:#c0c0c0">GIỎ HÀNG</h1>

							<div class="container py-4">
								<form method="post">
									<table class="table table-striped table-hover table-responsive-sm" id="tbl" >
										<thead>
											<tr>
												<th class="text-center" >
													STT
												</th>
												<th colspan="2" class="text-center">
													Tên sản phẩm
												</th>
												<th class="text-center">
													Giá
												</th>
												<th class="text-center" width="100px">
													Số lượng
												</th>
										
												<th class="text-center">
													Thành tiền
												</th>
												<th class="text-center">
													Thao tác
												</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$i = 1; 
												$tongtt = 0;
											?>
											<?php foreach($giohang as $sp): ?>
												<?php $tongtt += $sp['thanhtien']; ?>
												
											<tr >
												<td class="align-middle text-center">
													<?= $i++; ?>                 
												</td>
												<td class="align-middle" style="width: 100px;">
													<img src="<?= $sp['DuongDan']; ?>" class="img-fluid" width="100px" />
												</td>
												<td class="align-middle" >
													<?= $sp['TenHH']; ?>
												</td>
												<td class="align-middle text-right" style="text-align:center">
													 <?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ
												</td>
												<td class="align-middle" width="100px" style="text-align:center" >
													<?= $sp['soluong']?>
												</td>
												<td class="align-middle text-right" style="text-align:center">
													<?= number_format($sp['thanhtien'], 0, ".", ","); ?> VNĐ
												</td>
												<td class="align-middle text-canter" style="text-align:center" >
													<a href="xoagiohang.php?MSHH=<?= $sp['MSHH'] ?>" class="btn btn-warning" style="background:none;border:0">
														<i style="color:red"class="fa fa-trash" aria-hidden="true"></i>
													</a>
												</td>
											</tr>
											<?php endforeach?>
										</tbody>
											<tfoot>
												<tr>
													<td colspan="5"  style="font-weight:bold;font-size:20px">Tổng tiền: </td>
													<td></td>
													<td style="text-align:right">                                    
														<?= number_format($tongtt, 0, ".", ","); ?> VNĐ
													</td>
												</tr>
											</tfoot>
									</table>
								</form>
							<div class="row" >
								<div class="col-md" >
									<?php if(isset($_SESSION['email'])): ?>
										<?php if(isset($_SESSION['giohang']) ): ?>
											<button style="float:right;background:lightgreen;border:1px solid black;color:white;font-family:monospace;font-size:19px;border-radius:4px" name="btnDatHang" id="btnDatHang" onclick="dathang();" class="btn btn-warning my-btn-warning">
												Đặt Hàng
											</button>

										<?php else: ?>
											<a style="float:right;background:lightgreen;border:1px solid black;color:white;font-family:monospace;font-size:19px;border-radius:4px" href="btlon.php"  class="btn btn-warning my-btn-info">
												Đặt Hàng
											</a>
										<?php endif; ?>
									<?php else: ?>
										<a style="float:right;background:lightgreen;border:1px solid black;color:white;font-family:monospace;font-size:19px;border-radius:4px" href="dangnhap.php"  class="btn btn-warning my-btn-info">
											Đặt Hàng
										</a>
									<?php endif; ?>
								
								</div>
							</div>
					</div>
				</div>	
				</div>
			</div>
			<!--
				<?php 
            /* Du lieu khach hang */
            $tendangnhap = isset($_SESSION['email'])?$_SESSION['email']:0;
            $sqlKH = "select * from khachhang where Email='$tendangnhap'";
            $queryKH = mysqli_query($conn,$sqlKH);
            while ($row = mysqli_fetch_array($queryKH, MYSQLI_ASSOC)) {
                $khachhang[]= array( 
                    'MSKH' => $row['MSKH'],
                    'HoTenKH' => $row['HoTenKH'],
                    'Email' => $row['Email'],
                    'MatKhau' => $row['MatKhau'],                                      
                    'DiaChi' => $row['DiaChi'],                   
                    'SoDienThoai' => $row['SoDienThoai'],                   
                                       
                );             
            }

            /* Du lieu nhan vien */
            $MaNV = rand(1,6);
            $sqlNV = "select * from nhanvien where MSNV=$MaNV;";
            $queryNV = mysqli_query($conn,$sqlNV);
            $rowNV = mysqli_fetch_array($queryNV);
            $MSNV = $rowNV['MSNV'];
            $tenNV = $rowNV['HoTenNV'];
            //var_dump($MSNV); die();   
			
        ?>
		<!-- Thong tin giao dich -->
        <div class="container py-4 div-giaodich">
        <h1 style="text-align: center; padding-top:20px; font-family: Motiva Sans, Sans-serif;border-bottom:2px solid gray;color:yellow;background:#c0c0c0">THÔNG TIN GIAO DỊCH</h1>
            <div class="row " style="background-color: whitesmoke;">
                <div class="col-md-12" style="box-shadow: 0 6px 12px ;border-radius:6px;border:1px solid black">
                    <?php foreach($khachhang as $kh): ?>
                    <form action="" method="post" name="frmThanhToan" id="frmThanhToan">
                        <div class="form-row pt-3">
                            <div class="form-group col-md-4">
                                <label for=""><h4>Tên khách hàng:</h4></label>
                                <input type="hidden" class="form-control" id="MSKH" name="MSKH" value="<?= $kh['MSKH']; ?>" >
                                <input type="email" class="form-control" id="HoTenKH" name="HoTenKH" value="<?= $kh['HoTenKH']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""><h4>Số điện thoại:</h4></label>
                                <input type="email" class="form-control" id="SoDienThoai" name="SoDienThoai" value="<?= $kh['SoDienThoai']; ?>" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4"><h4>Email:</h4></label>
                                <input type="email" class="form-control" id="Email" name="Email" value="<?= $kh['Email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress"><h4>Địa chỉ giao hàng:</h4></label>
                            <input type="text" class="form-control" id="DiaChi" name="DiaChi" value="<?= $kh['DiaChi']; ?>" >
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity"><h4>Tên nhân viên:</h4></label>
                                <input type="email" class="form-control" id="HoTenNV" name="HoTenNV" value="<?= $tenNV; ?>" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity"><h4>Ngày giao:</h4></label>
                                <input type="date" class="form-control" id="NgayGH" name="NgayGH" min="<?= date('Y-m-d', strtotime(' + 1 days')) ?>" value="<?= date('Y-m-d', strtotime(' + 5 days')) ?>">
                            </div>
                        </div>
                        <h4 class="pt-3">Giỏ hàng:</h4>
                        <table class="table table-sm  table-responsive-sm" id="tbl">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        STT
                                    </th>
                                    <th class="text-center">
                                        Tên sản phẩm
                                    </th>
                                    <th class="text-center">
                                        Giá
                                    </th>
                                    <th class="text-center">
                                        Số lượng
                                    </th>
                                    <th class="text-center">
                                        Thành tiền
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $i = 1; 
                            ?>
                            <?php foreach($giohang as $sp): ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $i++ ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $sp['TenHH'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ
									</td>
                                    <td class="text-center">
                                        <?= $sp['soluong'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= number_format($sp['thanhtien'], 0, ".", ","); ?> VNĐ
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right font-weight-bold" style="font-family: 'Snippet', sans-serif;">Tổng tiền: </td>
                                    <td class="text-right">
                                        <?= number_format($tongtt, 0, ".", ","); ?> VNĐ
                                    </td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                        <button style="margin-bottom:20px;float:right;background:lightgreen;border:1px solid black;color:white;font-family:monospace;font-size:19px;border-radius:4px" type="submit" name="btnThanhToan" class="btn btn-primary  my-btn-info">Thanh toán</button>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>               
        </div>
        <!-- Thong tin giao dich -->

        <!-- Xu ly giao dich -->
        <?php 
            if(isset($_POST['btnThanhToan'])){
                $MSKH = $_POST['MSKH'];
                $NgayDH = date('Y-m-d');
                $NgayGH = $_POST['NgayGH'];

                $sqlInsertKH = "INSERT INTO dathang (MSKH, MSNV, NgayDH, NgayGH) VALUES ($MSKH, $MSNV, ' $NgayDH', '$NgayGH');";
                $queryInsertDH = mysqli_query($conn,$sqlInsertKH);
                
                $SoDonDH = $conn->insert_id;
                foreach($giohang as $gh){
                    $MSHH = $gh['MSHH'];
                    $GiaDatHang = $gh['Gia'];
                    $soluong = $gh['soluong'];
                    $sqlInsertCTDH = "INSERT INTO chitietdathang (SoDonDH,MSHH,SoLuong,GiaDatHang) VALUES ($SoDonDH,$MSHH,$soluong,$GiaDatHang);";
                    $queryInsertCTDH = mysqli_query($conn,$sqlInsertCTDH);
                    //var_dump($sqlInsertCTDH );die();
                }
				$sqlsoluongconlai="select SoLuongHang from hanghoa where MSHH=$MSHH";
				$query=mysqli_query($conn,$sqlsoluongconlai);
				$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
				$tongsoluong=$row['SoLuongHang'];
				$soluongconlai=$tongsoluong-$soluong;
				if($soluongconlai < 0){
					echo'<script>alert("Số lượng hàng còn lại không đủ");</script>';
					//var_dump($sqlInsertHH );die();
					echo '<script>location.href = "./giohang.php";</script>';
					}
				else{
					$sqlInsertHH="UPDATE hanghoa SET SoLuongHang=$soluongconlai WHERE MSHH=$MSHH";
					$queryHH=mysqli_query($conn,$sqlInsertHH);
					unset($_SESSION['giohang']);
					echo'<script>alert("Khách hàng đã đặt hàng thành công");</script>';
					echo '<script>location.href = "./btlon.php";</script>';
					}
				
				
            }
        
        
        ?>



        <!-- Xu ly giao dich -->

		</div>
			<div class="footer">
				<div class="footer-top-top" >
						<div class="footer-top-top-img">
							<img src="./hinh/tw.png" style="width:80%;margin-left:30px;">
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
		<script>
            function dathang(){
                var x = document.getElementsByClassName("div-dathang");
                x[0].style. display = "none";
                
                var y = document.getElementsByClassName("div-giaodich");
                y[0].style. display = "block";
            }
        </script>
	</body>
	
	<script src="./jquery.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>	
</html>