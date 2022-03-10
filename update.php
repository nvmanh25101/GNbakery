<?php
  session_start();
  if(empty($_SESSION['id'])){
    header("location:signin.php");
  }
  
  $id = $_SESSION['id'];
  $connect = mysqli_connect('localhost','root','','GNbakery');
  $sql = "SELECT * FROM customers WHERE (id = '$id')" ;
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNBAKERY</title>
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="medium-down--hide">
        <div id="site-header" class="medium-down--hide  bg-index">
        <div class="wrapper">
            <div class="inner">
                <div class="grid mg-left-15">
                    <div class="grid__item large--one-twelfth pd-left0">
                        <div class="logo">
                            <h1>
                                <a href="#" >
                                    <img style="margin-top:20px;" src="img/logo.png" >
                                </a>
                            </h1>
                        </div>
                    </div>
                 <div class="grid__item large--three-twelfths pd-left15 hd-searchbar">
                     <form action="/search" method="get" class="input-search" role="search">
                         <input type="hidden" name="type" value="product">
                         <input type="search" name="q" value placeholder="Tìm kiếm ..." class="input-field" aria-label="Tim kiem ...">
                         <span class="input-group-btn">
                             <button type="submit" class="btn icon-fallback-text">
                                 <i class="bi bi-search" ></i>
                                 <span class="fallback-text">Tìm kiếm</span>
                             </button>
                         </span>
                     </form>
                 </div>
                 <div class="grid__item large--eight-twelfths pd-left15">
                     <div class="list-item">
                         <a href="tel:0333135698">
                             <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                             <span>0333135698</span>
                         </a>
                         <a href="#">
                             <i class="bi bi-house-fill" aria-hidden="true"></i>
                             <span>
                                 Hệ Thống<b></b> 
                                 Cửa hàng
                             </span>
                         </a>
                         <a href="#">
                             <i class="bi bi-people-fill" aria-hidden="true" ></i>
                             Tài khoản
                         </a>
                         <a href="#">
                             <div class="cart-total-price">
                             <i class="bi bi-cart-dash-fill" aria-hidden="true"></i>
                             <span id="CartCount">0</span>
                         </div>
                         </a>
                     </div>
                 </div>
    
                </div>
                <nav class="container">
                <ul id="main-menu">
                    <li ><a href="">TRANG CHỦ</a></li>
                    <li><a href="">BÁNH SINH NHẬT</a>
                      <ul class="sub-menu">
                          <li><a href="">Gateaux Kem Tươi</a></li>
                          <li><a href="">Gateaux Kem Bơ</a></li>
                          <li><a href="">BánhMousse</a></li>
                          <li><a href="">Bộ Sưu Tập Bánh Phụ Kiện</a></li>
                          <li><a href="">Bánh Valentine - Trái Tim</a></li>
                          <li><a href="">Bánh Sinh Nhật Bé Trai</a></li>
                          <li><a href="">Bánh Sinh Nhật Bé Gái</a></li>
                          <li><a href="">Bánh In Ảnh</a></li>
                          <li><a href="">Bánh Vẽ</a></li>
                          <li><a href="">Bánh Sự Kiện</a></li>
                          <li><a href="">Bánh SỰ KIỆN THEO YÊU CẦU</a></li>
                          <li><a href="">Hộp Quà Tết Xuân Nhâm Dần 2022</a></li>
                      </ul>
                    </li>
                    <li><a href="">BÁNH MỲ & BÁNH MẶN</a>
                    <ul class="sub-menu">
                        <li><a href="">Bánh mì</a></li>
                          <li><a href="">Bánh mặn</a></li>
                    </ul>
                    </li>
                    <li><a href="">COOKIES & MINICAKE</a>
                      <ul class="sub-menu">
                          <li><a href="">Cookies</a></li>
                          <li><a href="">Mini Cake</a></li>
                          <li><a href="">Tea Break</a></li>
    
                      </ul>
                       </li>
                    <li><a href="">TIN TỨC</a></li>
                    <li><a href="">KHUYẾN MÃI</a></li>
                </ul>
              </nav>
            </div>
            
        </div> 
        </div>
    </header>
    <form action="process-update.php" method = "post">
        <div class="page_container">
                <div class="main_content">
                        
                            <h2>Thông tin</h2>
                            Email:<span name = "email"> <?php echo $row['email'] ?></span>
                            <input type="text" name="id" style="display:none;" value = "<?php echo $row['id']?>">
                            <small style="color:green;">
                                    <?php
                                        if(isset($_GET['error'])){
                                            echo "{$_GET['error']}";
                                        }else{
                                            echo "";
                                        }
                                    ?>
                    	        </small>
                            <small style="color:red;">
                                    <?php
                                        if(isset($_GET['error1'])){
                                            echo "{$_GET['error1']}";
                                        }else{
                                            echo "";
                                        }
                                    ?>
                    	        </small>
                            <div class="form_name">
                                <label for="">Họ và tên</label>
                                <input type="text" name = "name" class="form-control" placeholder = "Nhập họ tên" value ="<?php echo $row['name']?>" required>
                              </div>
                            <div class="form_name">
                                <label for="">Password</label>
                                <input type="password" name = "password" class="form-control" placeholder="Nhập mật khẩu mới">
                                <small style="color:red;">
                                    <?php
                                        if(isset($_GET['errorpass'])){
                                            echo "{$_GET['errorpass']}";
                                        }else{
                                            echo "";
                                        }
                                    ?>
                    	        </small>
                              </div>
                            <div class="form_address">
                                <label for="">Địa chỉ</label>
                                <input type="" name = "address" class="form-control" placeholder="Thêm địa chỉ" value = "<?php
                                                                                                                if($row['address']==NULL){
                                                                                                                    echo "";
                                                                                                                }else{
                                                                                                                    echo $row['address'];
                                                                                                                }
                                                                                                            ?>">
                              </div>
                            <div class="form_phone">
                                  <label for="">Số điện thoại</label>
                                <input type="" name = "phone" class="form-control" placeholder="Thêm số điện thoại" value = "<?php
                                                                                                                if($row['phone']==NULL){
                                                                                                                    echo "";
                                                                                                                }else{
                                                                                                                    echo $row['phone'];
                                                                                                                }
                                                                                                            ?>">
                              </div>
                            <div style="display:flex;">
                                <button class="btnUpdate" name="btnUpdate" type="submit">Cập nhật</button>
                                <button style="margin-left:300px;" class="btnUpdate"><a style="text-decoration:none;color:#FF1493;" href="user.php">Quay lại</a></button>
                            </div>
                </div>
        </div>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>