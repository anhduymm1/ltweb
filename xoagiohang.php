<?php
if (session_id() === '') {
    session_start();
}

$id = $_GET['MSHH'];

if(isset($_SESSION['giohang'])) {
    $data = $_SESSION['giohang'];
    if (isset($data[$id])) {
        unset($data[$id]);
    }
    $_SESSION['giohang'] = $data;
}
header('location:./giohang.php');
echo json_encode($_SESSION['giohang']);
?>