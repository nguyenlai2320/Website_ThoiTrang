<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
            include_once('./layout/head.php'); 
            $TaiKhoan = $_SESSION['TaiKhoan'];
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
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
                    <!-- Content Start -->
                    <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center"
                        style="max-width: 600px;">
                        <!-- This encapsulation is required to ensure correct rendering on Windows 10 Mail app. -->
                        <tr bgcolor="#d7d7d7">
                            <td
                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                <!-- Seperator Start -->
                                <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center"
                                    style="max-width: 600px; width: 100%;">
                                    <tr bgcolor="#d7d7d7">
                                        <td height="30"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                </table>
                                <!-- Seperator End -->

                                <!-- Generic Pod Left Aligned with Price breakdown Start -->
                                <table align="center" cellpadding="0" cellspacing="0" cols="3" bgcolor="white"
                                    class="bordered-left-right"
                                    style="border-left: 10px solid #d7d7d7; border-right: 10px solid #d7d7d7; max-width: 600px; width: 100%;">
                                    <tr height="50">
                                        <td colspan="3"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                        <td class="text-primary"
                                            style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                            <img src="http://dgtlmrktng.s3.amazonaws.com/go/emails/generic-email-template/tick.png"
                                                alt="GO" width="50"
                                                style="border: 0; font-size: 0; margin: 0; max-width: 100%; padding: 0;">
                                        </td>
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr height="17">
                                        <td colspan="3"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                        <td class="text-primary"
                                            style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                            <h1
                                                style="color: #F16522; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 30px; font-weight: 700; line-height: 34px; margin-bottom: 0; margin-top: 0;">
                                                Xác Nhận Hủy Đơn Hàng</h1>
                                        </td>
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td colspan="3"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                        <td
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                            <p
                                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                                Xin Chào
                                                <?php echo $p->laycot("SELECT HoTen FROM khachhang WHERE Email = '$TaiKhoan'");?>
                                            </p>
                                        </td>
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr height="10">
                                        <td colspan="3"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                        <td
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                            <p
                                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                                Bạn chắc chắn muốn hủy đơn hàng này chứ!</p>
                                            <br>
                                            <p
                                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                                Ghi chú lý do</p>
                                            <textarea name="" id="" class="w-100" rows="5"></textarea>
                                        </td>
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                        <td style="border-bottom: 1px solid #D3D1D1; color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;"
                                            class="text-center">
                                            <form action="" method="post" enctype="multipart/form-data" name="form1"
                                                id="form1">
                                                <?php 
                                                    if(isset($_POST['nut'])){
                                                        switch ($_POST['nut']) {
                                                            case 'Hủy': {
                                                                if($p->themxoasua("UPDATE bill SET `TrangThai` = '4' WHERE id = '$id' LIMIT 1")==1){
                                                                    echo "
                                                                        <script>
                                                                            location.reload();
                                                                            window.location.href = 'Donhang.php';
                                                                            alert('Huỷ Thành Công');
                                                                        </script>";
                                                                }
                                                                
                                                            }
                                                        }
                                                    }
                                                ?>
                                                <button type="submit" class="btn btn-danger" id="nut" name="nut"
                                                    value="Hủy">Xác
                                                    Nhận Hủy</button>
                                            </form>
                                        </td>
                                        <td
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr height="30">
                                        <td colspan="3"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                        <td
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                            <p
                                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                                <strong>Thông Tin Hỗ Trợ: IUH.edu@gmail.com</strong>
                                            </p>
                                            <p
                                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                                Thời Gian Làm Việc: 7:00AM - 21:30PM</p>
                                            <p
                                                style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 22px; margin: 0;">
                                            </p>
                                        </td>
                                        <td width="36"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                </table>
                                <!-- Generic Pod Left Aligned with Price breakdown End -->

                                <!-- Seperator Start -->
                                <table cellpadding="0" cellspacing="0" cols="1" bgcolor="#d7d7d7" align="center"
                                    style="max-width: 600px; width: 100%;">
                                    <tr bgcolor="#d7d7d7">
                                        <td height="50"
                                            style="color: #464646; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; vertical-align: top;">
                                        </td>
                                    </tr>
                                </table>
                                <!-- Seperator End -->

                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
        <!-- Cart End -->
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