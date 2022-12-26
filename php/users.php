<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = "
SELECT *
FROM nhanvientuvan 
INNER JOIN taikhoan ON nhanvientuvan.TaiKhoan = taikhoan.TaiKhoan
WHERE NOT taikhoan.unique_id = {$outgoing_id}
AND nhanvientuvan.TaiKhoan = taikhoan.TaiKhoan
AND taikhoan.PhanQuyen = 3";
$query = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($query) == 0) {
    $output .= "Không có nhân viên";
} elseif (mysqli_num_rows($query) > 0) {
    include_once "data.php";
}
echo $output;