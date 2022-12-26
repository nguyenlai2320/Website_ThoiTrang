<?php 
if (isset($_SESSION['TaiKhoan']) && isset($_SESSION['MatKhau']) && isset($_SESSION['PhanQuyen']) && isset($_SESSION['unique_id'])) 
{
    echo '
    <a href="users.php" class="open-button">
        <img src="./img/icon.png" alt="khong co hinh">
    </a>';
}else{
    echo '
    <a href="signin.php" class="open-button">
        <img src="./img/icon.png" alt="khong co hinh">
    </a>';
}
?>