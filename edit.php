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
	</head>
	<body>
	     <!--   Phan xu ly php   -->
         <?php 
            
            $sqlLoai = "select * from LoaiHangHoa;";
            $query = mysqli_query($conn,$sqlLoai);
            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $loai[]= array( 
                    'maloai' => $row['MaLoaiHang'],
                    'tenloai' => $row['TenLoaiHang'],                   
                );
                //var_dump($loai); die();             
            }
            
            $id = $_GET['MSHH'];
            $sqlSanPham = "select * from hanghoa where MSHH=$id;";
            $querySanPham = mysqli_query($conn, $sqlSanPham);
            $sanphamData = mysqli_fetch_array($querySanPham, MYSQLI_ASSOC); 

               
            
            
            if (isset($_POST["btn_submit"])) {
                $ten = $_POST["TenHH"];
				$name='./hinh/'.basename( $_FILES['DuongDan']['name']);
                $loai = $_POST["maloai"];	
                $quycach = $_POST["QuyCach"];	
                $gia = $_POST["Gia"];		
                $soluong = $_POST["SoLuongHang"];	
                $ghichu = $_POST["GhiChu"];			
                //$sql = "INSERT INTO hanghoa(TenHH,QuyCach,Gia,SoLuongHang,MaLoaiHang,GhiChu ) VALUES ('$ten','$quycach', $gia, $soluong,$loai,'$ghichu');";
				$id = $_GET['MSHH'];
				$sqlSanPham = "select DuongDan from hanghoa WHERE hanghoa.MSHH =$id; ";
				$querySP = mysqli_query($conn,$sqlSanPham);
				$row = mysqli_fetch_array($querySP, MYSQLI_ASSOC);
				$sanpham = $row['DuongDan'];
				unlink($sanpham);
                $sql = "UPDATE `hanghoa` SET TenHH='$ten', QuyCach='$quycach', Gia='$gia', SoLuongHang=$soluong, MaLoaiHang=$loai, GhiChu='$ghichu', DuongDan='$name' WHERE MSHH=$id;";
				$_FILES['DuongDan']['tmp_name'];
                move_uploaded_file($_FILES['DuongDan']['tmp_name'], $name);
                // thực thi câu $sql với biến conn lấy từ file connection.php
                mysqli_query($conn,$sql);
                //echo "Nhân viên thêm thành công";
                header('Location: sanpham.php');
                //var_dump($sql); die();
            }
        ?>
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
						<i class="fas fa-user"></i>
						<b class="cart-text">Đăng nhập</b>
					</div>
					<div class="login-detail">
						<div class="detail">
							<div id="lg" class="dangnhap">
								<a href="./Dangnhap.html" style="text-decoration:none;color:white"><b>Đăng nhập</b></a>
							</div>
							<div id="register">
								<a href="./Dangki.html" style="text-decoration:none;color:white"><b>Tạo tài khoản</b></a>
							</div>
							<div id="img">
								<img width="100%" src="AGSTORE.png"></img>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="container-fuild">
            <div class="row " style="width: 100%;">
                <div class="col-md-3 my-sidebar" style="width: 17%;">
                    <h4 style="text-align: center; padding:20px 0px 10px 0px; font-family: 'Space Mono', monospace; text-decoration: none;color: #4d4d4d !important;">Mục lục</h4>
             
                    <ul class="ul1" >
                        <li class="li1">
                        <i style="color:red"class="fas fa-shopping-bag" aria-hidden="true"></i>&ensp;<a href="sanpham.php" class="list-a">Sản phẩm</a>
                        </li >
                        

                    </ul>
                </div> 
                <!-- Phần content -->
                <div class="col-md-9" style="width: 83%;padding-right: 0px;">
                 <div class="card shadow mb-4" style="min-height: 800px;">
                        <div class="card-header py-3" style="box-shadow: 0 6px 12px rgb(158, 148, 154);">
                            <h1 style="color: #4d4d4d !important;"class="h2 text-gray-800 text-center m-0 font-weight-bold text-primary">Sửa thông tin sản phẩm</h1>
                        </div>
                        <form name="frmsanpham" id="frmsanpham" method="post" action="" enctype="multipart/form-data" class="mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="TenHH"><b>Tên game:</b></label>
                                    <input type="text" class="form-control" id="TenHH" name="TenHH" value="<?= $sanphamData['TenHH'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="TenLoai"><b>Loại game:</b></label>
                                    <select class="form-control" id="maloai" name="maloai">
                                    <?php foreach($loai as $ls) : ?>
                                           <?php if ($ls['maloai']==$sanphamData['MaLoaiHang']): ?>
                                                <option value="<?= $ls['maloai'] ?>" selected><?= $ls['tenloai'] ?></option>
                                            <?php else: ?>
                                                <option value="<?= $ls['maloai'] ?>"><?= $ls['tenloai'] ?></option>
                                            <?php endif; ?>                                   
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="QuyCach"><b>Quy Cách:</b></label>
                                    <input type="text" class="form-control" id="QuyCach" name="QuyCach" value="<?= $sanphamData['QuyCach'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Gia"><b>Giá:</b></label>
                                    <input type="text" class="form-control" id="Gia" name="Gia"  value="<?= $sanphamData['Gia'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="SoLuongHang"><b>Số lượng hàng:</b></label>
                                    <input type="text" class="form-control" id="SoLuongHang" name="SoLuongHang"  value="<?= $sanphamData['SoLuongHang'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="GhiChu"><b>Ghi Chú</b></label>
                                    <input type="text" class="form-control" id="GhiChu" name="GhiChu"  value="<?= $sanphamData['GhiChu'] ?>">
                                </div>
                            </div>
								<div class="col-md-12">
                                <div class="form-group">
                                    <input  type="file" name="DuongDan" value="<?= $sanphamData['DuongDan'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12" style="text-align: right;margin-top:25px;">
								<a href="sanpham.php" style="text-decoration:none">
									<input style="background:lightgreen;border:none;color:black" type="button"  class="btn btn-primary" value="Về trang quản lý">
								</a>	
                                <input style="background:lightgreen;border:none;color:black" type="submit" name="btn_submit" class="btn btn-primary" value="Sửa đổi sản phẩm">
                            </div>
                         </form>
                    </div> 
				<!--  Phan sidebar -->
			</div>
			<div class="footer">
				Copyright © 2020 AGSTORE. All Rights Reserved.
			</div>
		</div>
	</body>
	<script src="./jquery.min.js"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>	
</html>