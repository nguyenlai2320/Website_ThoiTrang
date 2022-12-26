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
                                <h2>QUẢN LÝ ĐƠN HÀNG</h2>
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
                                        <div class="col-md-12">
                                            <div class="titlepage text_align_left">
                                                <h4>DANH SÁCH ĐƠN HÀNG</h4>
                                            </div>
                                            <div class="row">
                                                <table class="table">
                                                    <thead class="thead-dart">
                                                        <th scope="col">Mã Hóa Đơn</th>
                                                        <th scope="col">Sản Phẩm</th>
                                                        <th scope="col">Tổng Tiền</th>
                                                        <th scope="col">Phương Thức</th>
                                                        <th scope="col">Trạng Thái</th>
                                                        <th scope="col">Chức Năng</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $p->load_dsdh("SELECT bill.id, bill.MaDH, sanpham.TenSanPham, bill.TongTien, bill.TrangThai, trangthaidonhang.TenTrangThai, bill.PhuongThuc 
                                                        FROM bill
                                                        INNER JOIN billdetail ON bill.MaDH = billdetail.MaHD
                                                        INNER JOIN sanpham ON sanpham.MaSanPham = billdetail.MaSP
                                                        INNER JOIN khachhang ON bill.MaKH = Khachhang.Email
                                                        INNER JOIN trangthaidonhang ON trangthaidonhang.id = bill.TrangThai
                                                        WHERE Khachhang.Email = '$TaiKhoan'"); 
                                                        ?>
                                                    </tbody>
                                                </table>
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
            <!-- Modal -->
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