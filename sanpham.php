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
		<title>QUẢN LÝ</title>
		<link rel="stylesheet" type="text/css" href="sanpham.css">
		<link href="./fontawesome/css/all.css" rel="stylesheet">
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">	
		<style>
			.div-danhsachsanpham{
				display:none;
			}
			.div-khachhang{
				display:none;
			}
			.div-dondathang{
				display:block;
			}
		</style>
	</head>
	<body>
		<?php 	
				if(isset($_SESSION['emailql']))
					echo '<script>header.href = "./sanpham.php";</script>'; 
				else
					echo '<script>location.href = "./dangnhap.php";</script>';
		?>
		 <?php 
            $sqlSanPham = "select *,loaihanghoa.TenLoaiHang from hanghoa,loaihanghoa WHERE hanghoa.MaLoaiHang = loaihanghoa.MaLoaiHang; ";
            $querySP = mysqli_query($conn,$sqlSanPham);
            while ($row = mysqli_fetch_array($querySP, MYSQLI_ASSOC)) {
                $sanpham[]= array( 
                    'MSHH' => $row['MSHH'],
                    'TenHH' => $row['TenHH'],
					'HinhAnh' => $row['DuongDan'],
                    'TenLoai' => $row['TenLoaiHang'],                   
                    'QuyCach' => $row['QuyCach'],                   
                    'Gia' => $row['Gia'],                   
                    'SoLuongHang' => $row['SoLuongHang'],                   
                    'GhiChu' => $row['GhiChu'],                   
                );             
            };
        ?>
		<?php
			$sqlKH = "select * from khachhang; ";
            $queryKH = mysqli_query($conn,$sqlKH);
            while ($rowkh = mysqli_fetch_array($queryKH, MYSQLI_ASSOC)) {
                $khachhang[]= array( 
                    'MSKH' => $rowkh['MSKH'],
                    'HoTenKH' => $rowkh['HoTenKH'],
					'DiaChi' => $rowkh['DiaChi'],
                    'SoDienThoai' => $rowkh['SoDienThoai'],                   
                    'Email' => $rowkh['Email'],                                   
                );             
            };
		?>
		<?php
			$sqlDH = "select *,SoLuong,GiaDatHang from dathang,chitietdathang where dathang.SoDonDH=chitietdathang.SoDonDH; ";
            $queryDH = mysqli_query($conn,$sqlDH);
            while ($rowdh = mysqli_fetch_array($queryDH, MYSQLI_ASSOC)) {
                $donhang[]= array( 
					'SoDonDH'=>$rowdh['SoDonDH'],
                    'MSKH' => $rowdh['MSKH'],
                    'MSNV' => $rowdh['MSNV'],
					'NgayDH' => $rowdh['NgayDH'],
                    'NgayGH' => $rowdh['NgayGH'],                   
                    'MSHH' => $rowdh['MSHH'],
					'SoLuong'=>$rowdh['SoLuong'],
					'GiaDatHang'=>$rowdh['GiaDatHang'],
					'TrangThai'=>$rowdh['TrangThai']
                );             
            };
		
		?>

		<div class="web">
			<div class="header">
				<div id="text1">
					<a href="btlon.php" style="text-decoration:none">
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
						<?php if(isset($_SESSION['emailql'])) : $name=$_SESSION['emailql']?>	
						
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
			</div>
			<div class="main">
				<div class="container-fuild">
					<div class="row " style="width: 100%;">
						<div class="col-md-3 my-sidebar" style="width: 17%;">
							<h4 style="text-align: center; padding:20px 0px 10px 0px; font-family: 'Space Mono', monospace; text-decoration: none;color: red !important;font-size:30px;"><span style="border-bottom:2px solid gray">Mục lục</span></h4>
					 
							<ul class="ul1">
								<li class="li1" onClick="donhang()" style="cursor:pointer;">
								<i style="color:red;" ></i>&ensp;<span class="list-a" style="font-weight:bold">Đơn đặt hàng</span>
								</li >
								<li class="li1" onClick="khachhang()" style="cursor:pointer;">
								<i style="color:red"></i>&ensp;<span class="list-a" style="font-weight:bold">Khách hàng</span>
								</li >
								<li class="li1" onClick="sanpham()" style="cursor:pointer;" >
								<i style="color:red"></i>&ensp;<span class="list-a" style="font-weight:bold">Sản phẩm</span>
								</li >
							</ul>
						</div> 
                <!-- Phần sản phẩm -->
                <div class="col-md div-danhsachsanpham" style="width: 90%;padding-right: 0px;margin-left:50px;margin-right:40px;margin-bottom:40px;margin-top:40px;">
              
                <div class="card shadow mb-4" style="min-height: 800px;">
                    <div class="card-header py-3"style="box-shadow: 0 6px 12px rgb(158, 148, 154);">
                        <h1 style="color: #4d4d4d !important;"class="h2 text-gray-800 text-center m-0 font-weight-bold text-primary">Danh sách sản phẩm</h1>
                    </div>
                    <div class="col-md-12 mt-3">
                        <a href="create.php" style="float:right;padding-right:16px;"><button style="background:lightgreen;border:none;color:black"type="button" class="btn btn-primary">Thêm mới</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tblDanhSach" class="table mx-auto table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr class="text-center" style="background:#c0c0c0">
                                        <th width="50px">STT</th>
                                        <th width="150px">Tên</th>
                                        <th width="100px">Hình</th>
                                        <th width="50px">Loại</th>
										<th width="80px">Quy cách</th>
                                        <th width="120px">Giá</th>
                                        <th width="100px">Số lượng</th>
                                        <th width="170px">Ghi chú</th>                                    
                                        <th width="90px">Thực thi</th>
									
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($sanpham as $sp) : ?>
                                        <tr>
                                       <td class="text-center align-middle"><?= $i++; ?></td>
                                            <td class="text-center align-middle"><?= $sp['TenHH']; ?></td>
                                            <td class="text-center align-middle">
                                                
												<img src="<?= $sp['HinhAnh']; ?>" class="img-fluid" width="100px" />
                                                
                                            </td>
                                            <td class="text-center align-middle"><?= $sp['TenLoai']; ?></td>
                                            <td class="text-center align-middle"><?= $sp['QuyCach']; ?></td>
                                            <td class="text-center align-middle"> <?= number_format($sp['Gia'], 0, ".", ","); ?> VNĐ</td>
                                            <td class="text-center align-middle"><?= $sp['SoLuongHang']; ?></td>
                                            <td class="text-center align-middle"><?= $sp['GhiChu']; ?></td>
                                            <td>
                                                <a href="edit.php?MSHH=<?= $sp['MSHH'];?>" style="text-decoration:none">
                                                    <button type="button" style="width:100%;color:black;margin-bottom:20px;margin-top:20px"class="btn btn-danger">Sửa</button>
                                                </a>
                                                <a href="delete.php?MSHH=<?= $sp['MSHH'];?>" style="text-decoration:none">
                                                    <button type="button" style="width:100%;color:black" class="btn btn-warning">Xóa</button>                                               
                                                </a>
												
                                            </td>
											
                                           </tr> 
                                    <?php endforeach ?>
                                </tbody>
                            </table>
						</div>
				
					</div>
				</div>
			
			</div>
			<!-- kt sản phẩm-->
			<!-- phần khách hàng-->
			<div class="col-md div-khachhang" style="width: 90%;padding-right: 0px;margin-left:50px;margin-right:40px;margin-bottom:40px;margin-top:40px;">
              
                <div class="card shadow mb-4" style="min-height: 800px;">
                    <div class="card-header py-3"style="box-shadow: 0 6px 12px rgb(158, 148, 154);">
                        <h1 style="color: #4d4d4d !important;"class="h2 text-gray-800 text-center m-0 font-weight-bold text-primary">Danh sách khách hàng</h1>
                    </div>
                  
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tblDanhSach" class="table mx-auto table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr class="text-center" style="background:#c0c0c0">
                                        <th width="50px">STT</th>
                                        <th width="150px">MSKH</th>
                                        <th width="100px">Họ tên</th>
                                        <th width="50px">Địa chỉ</th>
										<th width="80px">Số điện thoại</th>
                                        <th width="120px">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($khachhang as $kh) : ?>
                                        <tr>
                                       <td class="text-center align-middle"><?= $i++; ?></td>
                                            <td class="text-center align-middle"><?= $kh['MSKH']; ?></td>
                                            <td class="text-center align-middle"><?= $kh['HoTenKH']?></td>
                                            <td class="text-center align-middle"><?= $kh['DiaChi']; ?></td>
                                            <td class="text-center align-middle"><?= $kh['SoDienThoai']; ?></td>
                                            <td class="text-center align-middle"><?= $kh['Email']; ?></td>
                                           
                                           </tr> 
                                    <?php endforeach ?>
                                </tbody>
                            </table>
						</div>
				
					</div>
				</div>
			
			</div>
			<!-- kết thúc khách hàng -->
			<div class="col-md div-dondathang" style="width: 90%;padding-right: 0px;margin-left:50px;margin-right:40px;margin-bottom:40px;margin-top:40px;">
              
                <div class="card shadow mb-4" style="min-height: 800px;">
                    <div class="card-header py-3"style="box-shadow: 0 6px 12px rgb(158, 148, 154);">
                        <h1 style="color: #4d4d4d !important;"class="h2 text-gray-800 text-center m-0 font-weight-bold text-primary">Danh sách đơn đặt hàng</h1>
                    </div>
                  
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tblDanhSach" class="table mx-auto table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr class="text-center" style="background:#c0c0c0">
                                        <th width="50px">STT</th>
										<th width="50px">SDĐH</th>
                                        <th width="50px">MSKH</th>
                                        <th width="50px">MSNV</th>
                                        <th width="120px">Ngày đặt hàng</th>
										<th width="120px">Ngày giao hàng</th>
                                        <th width="50px">MSHH</th>
										<th width="120px">Số lượng</th>
										<th width="120px">Giá đặt hàng</th>
										<th width="90px">Trạng thái</th>
										<th width="90px">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($donhang as $dh) : ?>
                                        <tr>
                                       <td class="text-center align-middle"><?= $i++; ?></td>
                                            <td class="text-center align-middle"><?= $dh['SoDonDH']; ?></td>
                                            <td class="text-center align-middle"><?= $dh['MSKH']?></td>
                                            <td class="text-center align-middle"><?= $dh['MSNV']; ?></td>
                                            <td class="text-center align-middle"><?= $dh['NgayDH']; ?></td>
                                            <td class="text-center align-middle"><?= $dh['NgayGH']; ?></td>
											<td class="text-center align-middle"><?= $dh['MSHH']; ?></td>
											<td class="text-center align-middle"><?= $dh['SoLuong']; ?></td>
											<td class="text-center align-middle"><?= number_format($dh['GiaDatHang'], 0, ".", ","); ?> VNĐ</td>
											<td class="text-center align-middle">
												<?php if ($dh['TrangThai'] == 0) : ?>
                                                    <span>Chưa xử lý</span>
                                                <?php else : ?>
                                                    <span>Đã giao hàng</span>
                                                <?php endif; ?>
											</td>
											<td>
												<a  href="duyetdon.php?SoDonDH=<?= $dh['SoDonDH']?>"  style="text-decoration:none">
                                                     <button type="button" style="width:100%;color:black" class="btn btn-warning">Duyệt</button>                                                 
                                                </a>
											</td>
                                           </tr> 
                                    <?php endforeach ?>
                                </tbody>
                            </table>
						</div>
				
					</div>
				</div>
			
			</div>
			</div>
			</div>
			</div>
			<div class="footer">
				Copyright © 2020 AGSTORE. All Rights Reserved.
			</div>
		</div>
		<script>
            function khachhang(){
                var x = document.getElementsByClassName("div-danhsachsanpham");
                x[0].style. display = "none";
                var y = document.getElementsByClassName("div-khachhang");
                y[0].style. display = "block";
				var z = document.getElementsByClassName("div-dondathang");
                z[0].style. display = "none";
            };
			
			  function sanpham(){
                var x = document.getElementsByClassName("div-danhsachsanpham");
                x[0].style. display = "block";
                var y = document.getElementsByClassName("div-khachhang");
                y[0].style. display = "none";
				var z = document.getElementsByClassName("div-dondathang");
                z[0].style. display = "none";
            };
			
			  function donhang(){
                var x = document.getElementsByClassName("div-danhsachsanpham");
                x[0].style. display = "none";
                var y = document.getElementsByClassName("div-khachhang");
                y[0].style. display = "none";
				var z = document.getElementsByClassName("div-dondathang");
                z[0].style. display = "block";
            };
		
        </script>
		
	</body>
	<script src="./jquery.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>	
</html>