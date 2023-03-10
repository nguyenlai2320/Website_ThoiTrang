<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['TaiKhoan']) && isset($_SESSION['MatKhau']) && isset($_SESSION['PhanQuyen']) && isset($_SESSION['unique_id'])) {
    header('location:index.php');
} else {
    include("./class/config.php");
    include('./class/clslogin.php');
    $p = new login();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Đăng Nhập</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="./css/util.css">

        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <!--===============================================================================================-->
    </head>

    <body>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-01.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" method="post">
                        <span class="login100-form-title">
                            <b>Đăng Nhập Quản Trị</b>
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="<?php echo 'Không được để trống' ?>">
                            <input class="input100" type="text" name="TaiKhoan" placeholder="Tài Khoản"
                                value="<?php if(isset($_POST["TaiKhoan"])){echo $_POST["TaiKhoan"];} ?>">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="<?php echo 'Không được để trống' ?>">
                            <input class="input100" type="password" name="MatKhau" placeholder="Mật Khẩu">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" id="btn_submit" name="btn_submit"
                                value="Đăng nhập">
                                <b>Đăng Nhập</b>

                            </button>
                        </div>
                        <br><br><br />
                        <?php
                            if(isset($_POST['btn_submit'])){
                                switch ($_POST['btn_submit']) {
                                    case 'Đăng nhập': {
                                            $TaiKhoan = $_POST["TaiKhoan"];
                                            $MatKhau = $_POST["MatKhau"];
                                            if ($p->mylogin($TaiKhoan, $MatKhau) == 1) {
                                                header('location:index.php');
                                            } else {
                                                echo 'Đăng Nhập Không Thành Công';
                                            }
                                            break;
                                        }
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
        </script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </body>

</html>