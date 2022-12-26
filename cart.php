<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
            include_once('./layout/head.php');
            if(isset($_GET['action']))
            {
                function update_cart($add = false)
                {
                    foreach($_POST['quantity'] as $id => $quantity){
                        if($quantity == 0){
                            unset($_SESSION["cart"][$_GET['id']]);
                        }else{
                            if($add){
                                $_SESSION['cart'][$id] += $quantity;
                                echo
                                "
                                <script>
                                    location.reload();
                                    window.location.href = 'cart.php';
                                </script>
                                ";
                            }else{
                                $_SESSION['cart'][$id] = $quantity;
                            }
                        }
                        
                    }
                }
                switch($_GET['action']){
                    case "add":
                        update_cart(true);
                        break;
                    case "delete":
                        if(isset($_GET['id'])){
                            unset($_SESSION["cart"][$_GET['id']]);
                        }
                    break;
                    case "submit":
                        if(isset($_POST['update_click'])){
                            update_cart();
                        }
                    break;
                }   
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
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Giỏ Hàng</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="">Trang Chủ</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Giỏ Hàng</p>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Cart Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <form id="cart-form" action="cart.php?action=submit" method="POST">
                        <table class="table table-bordered text-center mb-0">
                            <thead class="bg-secondary text-dark">
                                <tr>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá SP</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Tiền</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <button class="btn btn-info" type="submit" name="update_click"
                                            value="Cập nhật">Cập nhật Giỏ Hàng</button>
                                    </td>
                                </tr>
                            </tfoot>

                            <tbody class="align-middle">
                                <?php
                                if(!empty($_SESSION['cart'])){
                                    $p->insert_giohang();
                                }else{
                                    echo "
                                    <tr>
                                        <td colspan= '5' ><h6>Chưa Có Sản Phẩm</h6></td>
                                    </tr>
                                    ";
                                }
                            ?>
                            </tbody>
                        </table>

                    </form>
                </div>
                <div class="col-lg-4">
                    <form class="mb-5" action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-4" placeholder="Nhập mã giảm giá...">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sử Dụng</button>
                            </div>
                        </div>
                    </form>
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Tóm Tắt Giỏ Hàng</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Tổng Tiền</h6>
                                <h6 class="font-weight-medium">
                                    <?php if(!empty($_SESSION['cart'])){echo number_format($p->tongtien_giohang()).'đ';} ?>
                                </h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Chi Phí Vận Chuyển</h6>
                                <h6 class="font-weight-medium">0đ (Free Ship)</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Tổng</h5>
                                <h5 class="font-weight-bold">
                                    <?php if(!empty($_SESSION['cart'])){echo number_format($p->tongtien_giohang()).'đ';} ?>
                                </h5>
                            </div>
                            <a href="checkout.php" class="btn btn-block btn-primary my-3 py-3">Tiến Hành Thanh Toán</a>
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