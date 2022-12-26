<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
            include_once('./layout/head.php');
            if (!isset($_SESSION['unique_id'])) {
                header("location:signin.php");
            }
            else {
                $TaiKhoan = $_SESSION['TaiKhoan'];
            }
        ?>
    </head>

    <body>
        <!-- Topbar Start -->
        <?php 
            include_once('./layout/topbar.php')
        ?>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid">
            <div class="row border-top px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                        data-toggle="collapse" href="#navbar-vertical"
                        style="height: 65px; margin-top: -1px; padding: 0 30px;">
                        <h6 class="m-0">Danh Mục</h6>
                        <i class="fa fa-angle-down text-dark"></i>
                    </a>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                        id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                        <?php
                            include_once('./layout/category.php');
                        ?>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                    class="text-primary font-weight-bold border px-3 mr-1">K</span>HUONGCN</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php 
                            include_once('./layout/navbar.php')
                        ?>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid bg-secondary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Thanh Toán</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="">Trang Chủ</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Thanh Toán</p>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Checkout Start -->
        <div class="container-fluid pt-5">
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="row px-xl-5">
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <h4 class="font-weight-semi-bold mb-4">Địa chỉ thanh toán</h4>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label><b>Họ Và Tên:</b></label> <br>
                                    <?php echo $p->laycot("SELECT HoTen FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label><b>E-mail:</b></label> <br>
                                    <?php echo $TaiKhoan; ?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label><b>Số Điện Thoại:</b></label> <br>
                                    <?php echo $p->laycot("SELECT SDT FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label><b>Tình Thành:</b></label> <br>
                                    <?php echo $p->laycot("SELECT TinhThanh FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label><b>Quận Huyện:</b></label> <br>
                                    <?php echo $p->laycot("SELECT QuanHuyen FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label><b>Phường Xã:</b></label> <br>
                                    <?php echo $p->laycot("SELECT PhuongXa FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label><b>Địa Chỉ:</b></label>
                                    <?php echo $p->laycot("SELECT DiaChi FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label><b>Ghi Chú</b></label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea rows="10" name="GhiChu" id="GhiChu" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">Chi Tiết Đơn Hàng</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-medium mb-3">Sản Phẩm</h5>
                                <?php 
                                foreach($_SESSION['cart'] as $key => $cartitem)
                                {
                                    echo '
                                        <div class="d-flex justify-content-between">
                                        <p>'.$p->laycot("SELECT TenSanPham FROM sanpham WHERE id = '$key'").'</p>
                                        <p>'.number_format($p->laycot("SELECT GiaKM FROM sanpham WHERE id = '$key'")).'đ</p>
                                        </div>
                                    ';
                                }
                                ?>
                                <hr class="mt-0">
                                <div class="d-flex justify-content-between mb-3 pt-1">
                                    <h6 class="font-weight-medium">Tổng Tiền</h6>
                                    <h6 class="font-weight-medium">
                                        <?php if(!empty($_SESSION['cart'])){echo number_format($p->tongtien_giohang()).'đ';} ?>
                                    </h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">Vận Chuyển</h6>
                                    <h6 class="font-weight-medium">0đ (Free Ship)</h6>
                                </div>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <div class="d-flex justify-content-between mt-2">
                                    <h5 class="font-weight-bold">Tổng</h5>
                                    <h5 class="font-weight-bold">
                                        <?php if(!empty($_SESSION['cart'])){echo number_format($p->tongtien_giohang()).'đ';} 
                                            $TongTien = $p->tongtien_giohang();
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card border-secondary mb-5">
                            <div class="card-header bg-secondary border-0">
                                <h4 class="font-weight-semi-bold m-0">Phương Thức Thanh Toán</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="payment" value="1"
                                            id="paypal">
                                        <label class="custom-control-label" for="paypal">Thanh Toán QR MoMo</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="payment" value="3"
                                            id="ATM">
                                        <label class="custom-control-label" for="ATM">Thanh Toán Qua ATM</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="payment" value="2"
                                            id="directcheck">
                                        <label class="custom-control-label" for="directcheck">Thanh Toán Khi Nhận
                                            Hàng</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                    if(isset($_POST['nut'])){
                                        switch ($_POST['nut']) {
                                            case 'Xác Nhận': {
                                                    $GhiChu = $_POST['GhiChu'];
                                                    $ran_id = rand(10000,99999);
                                                    $MaHoaDon = 'HD'.$ran_id;
                                                    $MaKH = $TaiKhoan;
                                                    $_SESSION['TongTien'] = $TongTien;
                                                    $_SESSION['MaHoaDon'] = $MaHoaDon;
                                                    $TongTien;
                                                    $PhuongThuc = $_POST['payment'];
                                                    if($PhuongThuc==2){
                                                        $PT = 'Tiền Mặt';
                                                        if($p->themxoasua("INSERT INTO bill (`MaDH` ,`MaKH` ,`TongTien` ,`GhiChu`, `PhuongThuc`)VALUES ('$MaHoaDon','$MaKH','$TongTien','$GhiChu','$PT');")==1){
                                                            foreach($_SESSION['cart'] as $key => $cartitem)
                                                                {
                                                                    $MaSanPham = $p->laycot("SELECT MaSanPham FROM sanpham WHERE id = '$key'");
                                                                    $p->themxoasua("INSERT INTO billdetail (`MaHD` ,`MaSP` ,`SL`) VALUES ('$MaHoaDon', '$MaSanPham', '$cartitem');");
                                                                    unset($_SESSION["cart"][$key]);
                                                                }
                                                                echo "
                                                                <script>
                                                                    location.reload();
                                                                    window.location.href = 'thanhtoanthanhcong.php';
                                                                    alert('Đặt Hàng Thành Công');
                                                                </script>";
                                                        }
                                                    }
                                                    elseif($PhuongThuc==1)
                                                    {
                                                        $PT = 'Chuyển Khoản';
                                                        if($p->themxoasua("INSERT INTO bill (`MaDH` ,`MaKH` ,`TongTien` ,`GhiChu`, `PhuongThuc`)VALUES ('$MaHoaDon','$MaKH','$TongTien','$GhiChu','$PT');")==1){
                                                            foreach($_SESSION['cart'] as $key => $cartitem)
                                                                {
                                                                    $MaSanPham = $p->laycot("SELECT MaSanPham FROM sanpham WHERE id = '$key'");
                                                                    $p->themxoasua("INSERT INTO billdetail (`MaHD` ,`MaSP` ,`SL`) VALUES ('$MaHoaDon', '$MaSanPham', '$cartitem');");
                                                                }
                                                                echo "
                                                                <script>
                                                                window.location.href = 'formxulyQR.php';
                                                                </script>"
                                                                ;
                                                        }        
                                                    }
                                                    elseif($PhuongThuc==3)
                                                    {
                                                        $PT = 'Chuyển Khoản';
                                                        if($p->themxoasua("INSERT INTO bill (`MaDH` ,`MaKH` , `TongTien` , `GhiChu`, `PhuongThuc`)VALUES ('$MaHoaDon','$MaKH','$TongTien','$GhiChu','$PT');")==1){
                                                            foreach($_SESSION['cart'] as $key => $cartitem)
                                                                {
                                                                    $MaSanPham = $p->laycot("SELECT MaSanPham FROM sanpham WHERE id = '$key'");
                                                                    $p->themxoasua("INSERT INTO billdetail (`MaHD` ,`MaSP` ,`SL`) VALUES ('$MaHoaDon', '$MaSanPham', '$cartitem');");
                                                                }
                                                                echo "
                                                                <script>
                                                                window.location.href = 'formxulyATM.php';
                                                                </script>";
                                                        } 
                                                    }
                                                    
                                            }
                                        }                                            
                                    }
                                        
                                    ?>
                            </div>
                            <div class="card-footer border-secondary bg-transparent">
                                <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3"
                                    type="submit" name="nut" id="nut" value="Xác Nhận">Xác
                                    Nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Checkout End -->
        <!--icon chat-->
        <?php 
                include_once('./layout/iconchat.php');
            ?>
        <!--end icon chat-->

        <!-- Footer Start -->
        <?php
                include_once('./layout/footer.php');
            ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        </script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>