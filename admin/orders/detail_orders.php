
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail-Orders-GNBAKERY</title>
  <link rel="shortcut icon" type="image" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/detail_orders.css">
  <script src="js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
<?php 
    require_once '../check_admin_signin.php';
    $page = "orders";
    require_once '../navbar-vertical.php';
    require_once '../../database/connect.php';
?>
<div class="main-form">
        <div class="main-container-text d-flex align-items-center">
            <a class="header__name text-decoration-none" href="#">
                Chi Tiết Đơn Hàng
            </a>
        </div>
    </div>
    <div class="container-fluid px-5 " id = "container_box">
            <div class="row gx-5">
                <div class="col-12">
                    <div class="table-responsive-sm">
                        <table class="product_table table table-sm table-light table-hover align-middle">
                            <thead style = "text-align : center;">
                                <tr>
                                <th class = "name-product" scope="col">Tên sản phẩm</th>
                                <th class = "pic-product" scope="col">Ảnh</th>
                                <th class = "price-product" scope="col">Giá</th>
                                <th class = "amount-product" scope="col">Số lượng</th>
                                <th class = "payment"  scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody style ="text-align:center;">
                            <tr>
                                <th class ="detail_name_product" scope="col"  >
                                   <a href="">Chocolate cake mousee </a>
                                </th>
                                <th   scope="col">
                                    <img class="img_prd" src="../../assets/images/products/cake_1646490220.jpg" alt="">
                                </th>
                                <th style = "font-weight:600; font-family: Roboto;"  scope="col">
                                    300000đ
                                </th>
                                <th scope="col">x1</th>
                                <th scope="col" style = "font-weight:600; font-family: Roboto;" >300000đ</th>
                            </tr>
                            <tr>
                                <th class ="detail_name_product" scope="col"  >
                                   <a href="">Chocolate cake mousee </a>
                                </th>
                                <th   scope="col">
                                    <img class="img_prd" src="../../assets/images/products/cake_1646490220.jpg" alt="">
                                </th>
                                <th style = "font-weight:600; font-family: Roboto;"  scope="col">
                                    300000đ
                                </th>
                                <th scope="col">x1</th>
                                <th scope="col" style = "font-weight:600; font-family: Roboto;" >300000đ</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <div class="total-payments">
                <span class = "t-pay">Tổng tiền Thanh Toán </span>
                <span class="t-money">300000đ</span>
            </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
