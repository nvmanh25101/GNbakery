<?php 
    require_once '../check_super_admin_signin.php';
    $page = 'categories';
    require_once '../navbar-vertical.php';

    if(empty($_GET['id'])) {
        $_SESSION['error'] = 'Không có dữ liệu để sửa!';
        header('location:index.php');
    }

    $id = $_GET['id'];
    require_once '../../database/connect.php';
    $sql = "select * from categories where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
?>
    <div class="main__form">
        <div class=" container-fluid px-4">
            <?php include '../error_success.php' ?>
          
            <div class="row gx-5">
                <div class="col-12 text-white">
                    <form action="process_update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $each['id'] ?>">
                        <div class="mb-4 fs-4">
                            <label class="form-label" for="name"><a style="color:#3d1a1a;font-weight:bolder;">Tên</a></label>
                            <input type="text" name="name" id="name" value="<?= $each['name'] ?>" class="form__input form-control" autocomplete="off"/>
                            <span id="error" class="error_input"></span>
                        </div>

                        <div class="mb-4 fs-4">
                            <label class="form-label"><a style="color:#3d1a1a;font-weight:bolder;">Ảnh cũ</a></label>
                            <img src="../../assets/images/categories/<?= $each['image']?>" class="img-thumbnail" alt="">
                            <input type="hidden" name="image_old" value="<?= $each['image'] ?>" />
                        </div>

                        <div class="mb-4 fs-4">
                            <label class="form-label"><a style="color:#3d1a1a;font-weight:bolder;">Đổi ảnh mới</a></label>
                            <input type="file" name="image_new" accept=".jpg, .png" class="form__input form-control"/>
                        </div>

                        <button type="submit" class="form__btn btn btn-dark mb-4">Sửa</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
   
</div>
    
</body>
</html>