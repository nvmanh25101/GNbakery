<?php 
    require_once '../check_admin_signin.php';

    $page = 'products';
    require_once '../navbar-vertical.php';

    require_once '../../database/connect.php';

    $sql = "select * from categories";
    $result = mysqli_query($connect, $sql);
?>
    <div class="main__form">
        <div class=" container-fluid px-4">
            <?php include '../error_success.php' ?>
        
            <div class="row gx-5">
                <div class="col-12 text-white">

                    <form action="process_insert.php" method="post" enctype="multipart/form-data">
                        <div class="mb-4 fs-4">
                            <label class="form-label" for="name">Tên</label>
                            <input type="text" name="name" id="name" class="form__input form-control" autocomplete="off"/>
                        </div>

                        <div class="mb-4 fs-4">
                            <label class="form-label" for="image">Ảnh</label>
                            <input type="file" name="image" id="image" accept=".jpg, .png" class="form__input form-control"/>
                        </div>
                        <div class="mb-4 fs-4">
                            <label class="form-label" for="image">Kích thước(cm)</label>
                            <input type="number" name="size" id="size" class="form__input form-control"/>
                        </div>
                        <div class="mb-4 fs-4">
                            <label class="form-label" for="image">Giá(vnđ)</label>
                            <input type="number" name="price" id="price" class="form__input form-control"/>
                        </div>

                        <div class="mb-4 fs-4">
                            <label class="form-label">Mô tả</label>
                            <textarea name="description" class="form__input form-control"></textarea>
                        </div>

                        <div class="mb-4 fs-4">
                            <label class="form-label">Thể loại</label>
                            <select class="form__select form-select" id="category">
                                <option value="" selected disabled hidden>Choose here</option>
                                <?php foreach ($result as $each) { ?>
                                    <option value="<?= $each['id'] ?>">
                                        <?= $each['name'] ?>
                                    </option>
                                <?php } ?>
                            </select>

                            <select class="form__select form-select d-none" name="category_id" id="category_detail">
                                <option value="" selected disabled hidden>Choose here</option>
                            </select>

                        <input type="hidden" name="admin_id" value="1">
                        </div>

                        <button type="submit" class="form__btn btn-primary mb-4">Thêm</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
   
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#category').change(function() {
            let category_id = $(this).val();
            $.ajax({
                url: './get_category_detail.php',
                type: 'POST',
                dataType: 'json',
                data: {category_id}
            })

            .done(function(res) {
                const arrId = Object.keys(res);
                const arrName = Object.values(res);
                   
                $('#category_detail').removeClass('d-none');
                for (let i = 0; i < arrId.length; i++) {
                    $('#category_detail').append(`
                        <option value="${arrId[i]}">${arrName[i]}</option>
                    `);
                }
            })
         
        });
    });
</script>
</body>

</html>