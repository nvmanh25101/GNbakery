<?php
require_once '../check_admin_signin.php';
$page = "orders";
require_once '../navbar-vertical.php';
require_once '../../database/connect.php';

// $id = $_GET['id'];
// $sql = "SELECT * FROM order_detail WHERE order_id = '$id'";
// $result = mysqli_query($connect, $sql);
// $each = mysqli_fetch_array($result);

?>
<div class="main__container">
    <div class="main-container-text d-flex align-items-center">
        <a class="header__name text-decoration-none" href="#">
            Chi Tiết Đơn Hàng
        </a>
    </div>

    <div class="container-fluid px-4">
        <div class="row gx-5">
            <div class="col-12">
                <div class="table-responsive-sm">
                    <table class="product_table table table-sm table-light table-hover align-middle">
                        <thead style="text-align : center;">
                            <tr>
                                <th class="name-product" scope="col">Tên sản phẩm</th>
                                <th class="pic-product" scope="col">Ảnh</th>
                                <th class="price-product" scope="col">Giá</th>
                                <th class="amount-product" scope="col">Số lượng</th>
                                <th class="payment" scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            <tr>
                                <th class="detail_product-item" scope="col">
                                    Chocolate cake mousee
                                </th>
                                <th class="detail_product-item" scope="col">
                                    <img class="img_prd" src="../../assets/images/products/cake_1646490220.jpg" alt="">
                                </th>
                                <th class="detail_product-item" style="font-weight:600; font-family: Roboto;" scope="col">
                                    300000đ
                                </th>
                                <th class="detail_product-item" scope="col">x1</th>
                                <th class="detail_product-item" scope="col" style="font-weight:600; font-family: Roboto;">300000đ</th>
                            </tr>
                            <tr>
                                <th class="detail_name_product" scope="col">
                                    <a href="">Chocolate cake mousee </a>
                                </th>
                                <th scope="col">
                                    <img class="img_prd" src="../../assets/images/products/cake_1646490220.jpg" alt="">
                                </th>
                                <th style="font-weight:600; font-family: Roboto;" scope="col">
                                    300000đ
                                </th>
                                <th scope="col">x1</th>
                                <th scope="col" style="font-weight:600; font-family: Roboto;">300000đ</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="total-payments">
            <span class="t-pay">Tổng tiền Thanh Toán </span>
            <span class="t-money">300000đ</span>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 
    $('.btn-menu').click(function() {
        $('.navbar-vertical-mobile').toggle("fast");
        $('.header__navbar-overlay').toggle("fast");
    });

</script>

</body>

</html>