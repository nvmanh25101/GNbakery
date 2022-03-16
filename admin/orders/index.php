<?php 
    require_once '../check_admin_signin.php';
    $page = "orders";
    require_once '../navbar-vertical.php';
    require_once '../../database/connect.php';
    $sql = "SELECT orders.id, name_receiver, address_receiver, phone_receiver, DATE_FORMAT(created_at, '%d/%m/%Y %T') as created_at, status, customers.name 
    from orders
    join customers on orders.customer_id = customers.id";
    $result = mysqli_query($connect, $sql);
?>
<div class="main__container">
    <div class="main-container-text d-flex align-items-center">
        <a class="header__name text-decoration-none" href="#">
            Đơn Hàng
        </a>
    </div>

    <div class="container-fluid">
            <div class="row gx-5">
                <div class="col-12">
                    <div class="table-responsive-sm">
                        <table class="order_table table table-sm table-light align-middle">
                            <thead style = "text-align : center;">
                                <tr>
                                    <th class = "id-product" scope="col">Mã đơn</th>
                                    <th class = "orderer-product" scope="col">Người đặt</th>
                                    <th class = "recipient-product" scope="col">Người nhận</th>
                                    <th class = "time-product" scope="col">Thời gian đặt</th>
                                    <th class = "status-order"  scope="col">Trạng thái</th>
                                    <th class = "manage-order"  scope="col">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody style ="text-align:center;">
                            <?php foreach($result as $each){ ?>
                                <tr>
                                    <th class ="id-numbers" scope="col">
                                        <a style = "text-decoration:none; color:#333;"href="./detail.php?id=<?= $each['id'] ?>" >GN<?= $each['id'] ?></a>
                                    </th>
                                    <th scope="col">
                                        <span class = "nameofyou"><?= $each['name'] ?></span>
                                    </th>
                                    <th scope="col">
                                       <span class="nameofyou"><?= $each['name_receiver'] ?></span> <br>
                                       <span><?= $each['phone_receiver'] ?></span> <br>
                                       <span><?= $each['address_receiver'] ?></span>
                                    </th>
                                   
                                    <th scope="col"><?= $each['created_at'] ?></th>
                                    <th scope="col" style = "font-weight:600;" >
                                        <?php switch ($each['status']) {
                                            case 0:
                                                echo "Mới đặt";
                                                break;
                                            case 1:
                                                echo "Đã duyệt";
                                                break;
                                            case 2:
                                                echo "Đã huỷ";
                                                break;
                                        }
                                        ?>
                                    </th>
                                    <th scope="col">
                                        <div class="two_buttons">
                                            <?php if($each['status'] == 2 || $each['status'] == 1) { }
                                            else { ?>
                                            <a href="./update.php?id=<?= $each['id'] ?>&status=1" class = "btnBrowser">Duyệt</a>
                                            <a href="./update.php?id=<?= $each['id'] ?>&status=2">Hủy</a>
                                            <?php } ?>
                                        </div>
                                     </th>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
