<?php 
    //require_once '../check_admin_signin.php';
    require_once '../navbar-vertical.php';
   // require_once '../../database/connect.php';

?>
    <div class="main__form">
        <div class="main-container-text d-flex align-items-center">
            <a class="header__name text-decoration-none" href="#">
                Chi Tiết Đơn Hàng
            </a>
        </div>
    </div>
    <div class="container-fluid px-4">
            <a href="form_insert.php" class="btn-insert btn btn-light btn-lg">Thêm</a>
            <div class="row gx-5">
                <div class="col-12">
                    <div class="table-responsive-sm">
                        <table class="product__table table table-sm table-light table-bordered table-hover align-middle">
                            <thead>
                                <tr>
                                <th scope="col">Mã</th>
                                <th scope="col">Tên bánh</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Kích thước</th>
                                <th scope="col">Giá</th>
                                </tr>
                            </thead>
                            <tbody>

                                
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