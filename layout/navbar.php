<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav mr-auto py-0">
        <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
        <a href="shop.php" class="nav-item nav-link">Cửa Hàng</a>
        <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
    </div>
    <div class="navbar-nav ml-auto py-0">
        <?php 
            if(isset($_SESSION['TaiKhoan']))
            {
                echo '
                    <a href="Donhang.php" class="nav-item nav-link">Quản Lý Đơn Hàng</a> 
                    <a href="CT_khachhang.php" class="nav-item nav-link">Hồ Sơ Cá Nhân</a> 
                    <a href="logout.php" class="nav-item nav-link">Đăng Xuất</a>    
                ';
            }else{
                echo '
                    <a href="signin.php" class="nav-item nav-link">Đăng Nhập</a>
                    <a href="signup.php" class="nav-item nav-link">Đăng Kí</a>
                ';
            }
        ?>
    </div>
</div>