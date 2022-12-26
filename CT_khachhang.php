<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
            include_once('./layout/head.php'); 
        ?>
    </head>

    <body>
        <!-- Topbar Start -->
        <?php 
            include_once('./layout/topbar.php')
        ?>
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
        <!-- Page Header End -->


        <!-- Cart Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage text_align_left">
                                <h2>HỒ SƠ CÁ NHÂN</h2>
                            </div>
                        </div>
                    </div>
                    <div class="protect1">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="profile">
                                    <div class="profile_box">
                                        <div class="profile_img text-center">
                                            <img class="img_hinh rounded-circle"
                                                src="./img/<?php echo $p->laycot("SELECT Hinh from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                                alt="Cập nhập ảnh đại diện đi">
                                        </div>
                                        <br>
                                        <div class=" form-group">
                                            <div class="control-label"><span lang="thongtinsinhvien-mssv">Mã khách
                                                    hàng</span>:
                                                <b><?php echo $p->laycot("SELECT MaKhachHang from khachhang WHERE Email = '$TaiKhoan' limit 1")?></b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="control-label"><span lang="thongtinsinhvien-hovaten">Họ
                                                    tên</span>:
                                                <b><?php echo $p->laycot("SELECT HoTen from khachhang WHERE Email = '$TaiKhoan' limit 1")?></b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="control-label"><span lang="thongtinsinhvien-gioitinh">Giới
                                                    tính</span>: <b>
                                                    <?php echo $p->laycot("SELECT GioiTinh from khachhang WHERE Email = '$TaiKhoan' limit 1")?>
                                                </b></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="portlet">
                                    <div class="">
                                        <div class="col-md-12">
                                            <form class="">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label class="col-md-6"><span>Năm sinh</span>: <span
                                                                class="bold"><?php echo $p->laycot("SELECT NamSinh from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                        <label class="col-md-5"><span>CMND/CCCD</span>: <span
                                                                class="bold"><?php echo $p->laycot("SELECT CMND_CCCD from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-6"><span>Email</span>: <span
                                                                class="bold"><?php echo $p->laycot("SELECT Email from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                        <label class="col-md-5"><span>SĐT</span>:
                                                            <span
                                                                class="bold"><?php echo $p->laycot("SELECT SDT from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-6"><span>Quận Huyện</span>: <span
                                                                class="bold"><?php echo $p->laycot("SELECT QuanHuyen from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                        <label class="col-md-5"><span>Phường xã</span>: <span
                                                                class="bold"><?php echo $p->laycot("SELECT PhuongXa from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12"><span>Địa Chỉ</span>:
                                                            <span
                                                                class="bold"><?php echo $p->laycot("SELECT DiaChi from khachhang WHERE Email = '$TaiKhoan' limit 1") ?></span></label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#exampleModal">
                                                Cập Nhập Thông Tin
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        <!--icon chat-->
        <?php 
            include_once('./layout/iconchat.php');
        ?>
        <!--end icon chat-->
        <!--modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel"><span class="bold">CẬP NHẬP THÔNG TIN CÁ
                                NHÂN</span></h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="modal-body">
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for="Name">
                                        <h6 class="text-uppercase">Họ Tên Khách Hàng</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="HoTen" id="HoTen"
                                        value="<?php echo $p->laycot("SELECT HoTen from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                        class="w-100">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for="Name">
                                        <h6 class="text-uppercase">Năm Sinh</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="NamSinh" id="NamSinh"
                                        value="<?php echo $p->laycot("SELECT NamSinh from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                        class="w-25">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for="Name">
                                        <h6 class="text-uppercase">CMND_CCCD</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="cmnd_cccd" id="cmnd_cccd"
                                        value="<?php echo $p->laycot("SELECT CMND_CCCD from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                        class="w-25">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <?php echo $p->laycot("SELECT GioiTinh from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>
                                    <label for="Name">
                                        <h6 class="text-uppercase">GIỚI TÍNH</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="GioiTinh" id="GioiTinh"
                                        value="<?php echo $p->laycot("SELECT GioiTinh from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                        class="w-25">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for="Name">
                                        <h6 class="text-uppercase">EMAIL</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="Email" id="Email"
                                        value="<?php echo $p->laycot("SELECT Email from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                        class="w-50">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Name">
                                                <h6 class="text-uppercase">SDT</h6>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="SDT" id="SDT"
                                                value="<?php echo $p->laycot("SELECT SDT from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                                class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="Name">
                                                <h6 class="text-uppercase">TỈNH THÀNH</h6>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="TinhThanh" id="TinhThanh"
                                                value="<?php echo $p->laycot("SELECT TinhThanh from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                                class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="Name">
                                                <h6 class="text-uppercase">QUẬN HUYỆN</h6>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="QuanHuyen" id="QuanHuyen"
                                                value="<?php echo $p->laycot("SELECT QuanHuyen from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                                class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="Name">
                                                <h6 class="text-uppercase">PHƯỜNG XÃ</h6>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="PhuongXa" id="PhuongXa"
                                                value="<?php echo $p->laycot("SELECT PhuongXa from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                                class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for="Name">
                                        <h6 class="text-uppercase">ĐỊA CHỈ</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="DiaChi" id="DiaChi"
                                        value="<?php echo $p->laycot("SELECT DiaChi from khachhang WHERE Email = '$TaiKhoan' limit 1") ?>"
                                        class="w-100">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <label for="Name">
                                        <h6 class="text-uppercase">HÌNH ẢNH</h6>
                                    </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="hinh" id="hinh" class="w-100">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-md-3">
                                    <h6 class="text-uppercase">THÔNG BÁO</h6>
                                </div>
                                <div class="col-md-9">
                                    <?php
                                    if(isset($_POST['nut'])){
                                        switch ($_POST['nut']) {
                                            case 'Cập Nhập': {
                                                $HoTen = $_REQUEST['HoTen'];
                                                $NamSinh = $_REQUEST['NamSinh'];
                                                $cmnd_cccd = $_REQUEST['cmnd_cccd'];
                                                $GioiTinh = $_REQUEST['GioiTinh'];
                                                $Email = $_REQUEST['Email'];
                                                $SDT = $_REQUEST['SDT'];
                                                $QuocGia = 'Việt Nam';
                                                $TinhThanh = $_REQUEST['TinhThanh'];
                                                $QuanHuyen = $_REQUEST['QuanHuyen'];
                                                $PhuongXa = $_REQUEST['PhuongXa'];
                                                $DiaChi = $_REQUEST['DiaChi'];
                                                $name = $_FILES['hinh']['name'];
                                                $tmp_name = $_FILES['hinh']['tmp_name'];
                                                $type = $_FILES['hinh']['type'];
                                                $size = $_FILES['hinh']['size'];
                                                echo $name;
                                                if ($TaiKhoan != '') {
                                                    if ($name != '') {
                                                        $name = time() . "_" . $name;
                                                        $p->myupfile($name, $tmp_name, './img');
                                                        if($p->themxoasua("UPDATE khachhang SET `HoTen` = '$HoTen',`NamSinh` = '$NamSinh', `CMND_CCCD` = '$cmnd_cccd', `QuocGia` = '$QuocGia', `TinhThanh` = '$TinhThanh', `QuanHuyen` = '$QuanHuyen', `PhuongXa` = '$PhuongXa',
                                                        `GioiTinh` = '$GioiTinh',`Email` = '$Email',`SDT` = '$SDT',`DiaChi` = '$SDT', `Hinh` = '$name' WHERE Email = '$TaiKhoan' LIMIT 1")==1){
                                                            echo "
                                                                <script>
                                                                    location.reload();
                                                                    window.location.href = 'CT_khachhang.php';
                                                                    alert('Cập Nhập Thành Công');
                                                                </script>";
                                                        }
                                                    } else 
                                                    {
                                                        if($p->themxoasua("UPDATE khachhang SET `HoTen` = '$HoTen',`NamSinh` = '$NamSinh', `CMND_CCCD` = '$cmnd_cccd', `QuocGia` = '$QuocGia', `TinhThanh` = '$TinhThanh', `QuanHuyen` = '$QuanHuyen', `PhuongXa` = '$PhuongXa',
                                                        `GioiTinh` = '$GioiTinh',`Email` = '$Email',`SDT` = '$SDT',`DiaChi` = '$SDT' WHERE Email = '$TaiKhoan' LIMIT 1")==1)
                                                        {
                                                            echo "
                                                            <script>
                                                                location.reload();
                                                                window.location.href = 'CT_khachhang.php';
                                                                alert('Cập Nhập Thành Công');
                                                            </script>"; 
                                                        }
                                                    }
                                                } else {
                                                    echo '<div class="alert alert-danger" role="alert">THIẾU THÔNG TIN</div>';
                                                }
                                            }
                                        }
                                    }
                                        
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" name="nut" id="nut" value="Cập Nhập" class="btn btn-success">Cập
                                Nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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