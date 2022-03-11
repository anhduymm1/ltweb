<?php
$conn = mysqli_connect("localhost", "anhduy", "anhduymm098","quanlydathang")
or die("Could not connect: " . mysqli_connect_error());
if (session_id() == '') {
		session_start();
	}
	$MSHH =  $_POST['MSHH'];
    $TenHH = $_POST['TenHH'];
    $DuongDan = $_POST['DuongDan'];
    $Gia = $_POST['Gia'];  
    $soluong =  $_POST['soluong'];
  

    if (isset($_SESSION['giohang'])) {
        $data = $_SESSION['giohang'];
        $soluong_cu = isset($data[$MSHH]['soluong'])? $data[$MSHH]['soluong']:0;
        $data[$MSHH] = array(
            'MSHH' => $MSHH,
            'TenHH' => $TenHH,
            'soluong' => ($soluong_cu + $soluong),
            'Gia' => $Gia,
            'thanhtien' => (($soluong_cu + $soluong) * $Gia),
            'DuongDan' => $DuongDan
        );
        $_SESSION['giohang'] = $data;
        
    } 
        else {
        $data[$MSHH] = array(
            'MSHH' => $MSHH,
            'TenHH' => $TenHH,
            'soluong' => $soluong,
            'Gia' => $Gia,
            'thanhtien' => ($soluong * $Gia),
            'DuongDan' => $DuongDan
        );
    
        $_SESSION['giohang'] = $data;
    }
    //var_dump( $data); die();
    header('location:giohang.php');
    echo json_encode($_SESSION['giohang']);
?>
