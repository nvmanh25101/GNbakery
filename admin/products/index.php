<?php 
    require_once '../check_admin_signin.php';
    $page = 'products';

    require_once '../../database/connect.php';

    $page_current = 1;
    if(isset($_GET['page'])) {
        $page_current = $_GET['page'];
    }

    $search = '';
    if(isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $sql_num_product = "select count(*) from products 
                    where name like '%$search%'";
    $arr_num_product = mysqli_query($connect, $sql_num_product);
    $result_num_product = mysqli_fetch_array($arr_num_product);
    $num_product = $result_num_product['count(*)'];

    $num_product_per_page = 5;

    $num_page = ceil($num_product / $num_product_per_page);
    $skip_page = $num_product_per_page * ($page_current - 1);

    $sql = "select products.*, category_detail.name as category_name, admin.name as admin_name, products.admin_id
    from products
    join category_detail
    on category_detail.id = products.category_detail_id
    join admin
    on admin.id = products.admin_id
    where products.name like '%$search%'
    order by products.id desc
    limit $num_product_per_page offset $skip_page
    ";
    $result = mysqli_query($connect, $sql);

    require_once '../navbar-vertical.php';
?>

        <div class="main__container">
            <div class="container-fluid px-4">
                <a href="form_insert.php" class="btn btn-dark btn-lg fs-3">Thêm</a>
                <div class="row gx-5">
                   <div class="col-12">
                    <table class="product__table table table-sm table-dark table-bordered table-hover align-middle">

                        <!-- <?php require_once '../error_success.php' ?> -->
                        <thead>
                            <tr>
                            <th scope="col">Mã</th>
                            <th scope="col">Tên bánh</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Kích thước</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Người thêm</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $each) { ?>
                                <tr>
                                    <th scope="row"><?= $each['id'] ?></th>
                                    <td>
                                        <a href="show.php?id=<?= $each['id'] ?>" class="text-decoration-none"><?= $each['name'] ?></a>
                                    </td>
                                    <td>
                                        <img class="products__img" src="../../assets/images/products/<?= $each['image'] ?>" alt="">
                                    </td>
                                    <td><?= $each['size'] ?> cm</td>
                                    <td><?= number_format($each['price'], 0, '.', ' ') ?>&#8363</td>
                                    <td><?= $each['category_name'] ?></td>
                                    <td><?= $each['admin_name'] ?></td>
                                    <td>
                                        <a href="form_update.php?id=<?= $each['id'] ?>&admin_id=<?= $each['admin_id'] ?>">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete.php?id=<?= $each['id'] ?>&admin_id=<?= $each['admin_id'] ?>">
                                        <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                           
                        </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
        
<?php require_once '../footer.php'; ?>