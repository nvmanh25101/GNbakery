
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Orders-GNBAKERY</title>
  <link rel="shortcut icon" type="image" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="../../assets/css/admin_order.css">
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
                Đơn Hàng
            </a>
        </div>
    </div>
    <div class="container-fluid  " id = "container_box">
            <div class="row gx-5">
                <div class="col-12">
                    <div class="table-responsive-sm">
                        <table class="product_table table table-sm table-light align-middle">
                            <thead style = "text-align : center;">
                                <tr>
                                <th class = "id-product" scope="col">Mã</th>
                                <th class = "orderer-product" scope="col">Người đặt</th>
                                <th class = "recipient-product" scope="col">Người nhận</th>
                                <th class = "time-product" scope="col">Thời gian đặt</th>
                                <th class = "status-order"  scope="col">Trạng thái</th>
                                <th class = "manage-order"  scope="col">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody style ="text-align:center;">
                                <tr>
                                    <th class ="id-numbers" scope="col"  >
                                    <a style = "text-decoration:none; color:#333;"href="" >1</a>
                                    </th>
                                    <th   scope="col">
                                        <span class = "nameofyou">Phạm Vân Ly</span>
                                    </th>
                                    <th scope="col">
                                       <span class="nameofyou">Nguyễn Thùy Ninh </span> <br>
                                       <span>Học viện báo chí và tuyên truyền - Xuân Thủy - Dịch Vọng Hậu - Hà Nội</span>
                                    </th>
                                    <th scope="col">16/3/2022</th>
                                    <th scope="col" style = "font-weight:600;" >Đang chuẩn bị hàng</th>
                                    <th scope="col" class ="two_buttons">
                                        <button class = "btnBrowser">Duyệt</button>
                                        <button >Hủy</button>
                                     </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <!-- <div class="total-payments">
                <span class = "t-pay">Tổng tiền Thanh Toán </span>
                <span class="t-money">300000đ</span>
            </div> -->
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
