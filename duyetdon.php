<?php
$conn = mysqli_connect("localhost", "anhduy", "anhduymm098","quanlydathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() === '') {
		session_start();
	}
			$sddh= $_GET['SoDonDH'];
			$sqlDH = "select TrangThai from dathang where dathang.SoDonDH=$sddh";
            $queryDH = mysqli_query($conn,$sqlDH);
			//var_dump($sqlDH);die();
            $rowdh = mysqli_fetch_array($queryDH, MYSQLI_ASSOC) ;
            $donhang = $rowdh['TrangThai'];
			if($donhang==0){
				$sqltt="UPDATE dathang SET TrangThai = 1 WHERE dathang.SoDonDH= $sddh;";
				$querytt=mysqli_query($conn,$sqltt);
				
				header('location:sanpham.php');	
				}
			
		
?>