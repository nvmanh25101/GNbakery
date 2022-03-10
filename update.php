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
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="img/logo.png">
    <title>UPDATE-GNBAKERY</title>
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	


</head>
<body>
<<<<<<< HEAD
<header class="medium-header">
    <div class="site-header">
      <div class="header-left">

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <div class="drawer_header">
            <a href="#"><img style="width:40%;height: 40%;
   margin-bottom: 15px;" src="img/logo.png"></a>
          </div>

          <a href="Home-user.html">Trang chủ</a>

          <button class="dropdown-btn">Bánh sinh nhật<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>

          <button class="dropdown-btn">Bánh mì <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
          
          <a href="#">Đăng Nhập</a>
          <a href="#">Đăng Ký</a>

        </div>

        <div id="main">

          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        </div>

        <div class="logo">
          <h1>
            <a href="#">
              <img src="img/logo.png">
            </a>
          </h1>
        </div>

        <div class="search">
          <form action="/search" method="get" class="input-search" role="search">
            <input type="hidden" name="type" value="product">
            <input type="search" name="q" value placeholder="Tim kiem..." class="input-field" aria-label="Tim kiem ...">
            <span class="input-group-btn">
              <button type="submit" class="btn icon-fallback-text">
                <i class="bi bi-search" aria-hidden="true"></i>

              </button>

            </span>
          </form>
        </div>
      </div>


      <div class="header-right">
        <ul class="list-item">
          <a class="item" href="tel:0333135698">
            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
            <span>0333135698</span>
          </a>
          <a class="item" href="#">
            <i class="bi bi-house-fill" aria-hidden="true"></i>
            <span>
            90 Nguyễn Tuân Hà Nội
            </span>
          </a>
          <a class="item" href="user.html">
            <i class="bi bi-people-fill" aria-hidden="true"></i>
            Chào , user
          </a>
           <a class="item" href="signout.php">
            <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
            Đăng Xuất
          </a>
          <a class="item" href="#">
            <div class="cart-total-price">
              <i class="bi bi-cart-dash-fill" aria-hidden="true"></i>
              <span id="CartCount">0</span>
=======
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
>>>>>>> 18effde46df79b8cc1ce72a27993766abdb16075
            </div>
          </a>
          <ul>

      </div>

    </div>
    <nav class="container">
      <ul id="main-menu">
        <li><a href="">TRANG CHỦ</a></li>
        <li>
          <a href="">BÁNH SINH NHẬT</a>
          <ul class="sub-menu">
            <li><a href="">Gateaux Kem Tươi</a></li>
            <li><a href="">Gateaux Kem Bơ</a></li>
            
          </ul>
        </li>
        <li>
          <a href="">BÁNH Mì & BÁNH MẶN</a>
          <ul class="sub-menu">
            <li><a href="">Bánh mì</a></li>
            <li><a href="">Bánh mặn</a></li>
          </ul>
        </li>
       
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
                            <div class="btnup">
                                <button class="btnUpdate" name="btnUpdate" type="submit">Cập nhật</button>
<<<<<<< HEAD
                                <a href=""><button  class="btnUpdatet">Quay lại</button></a>
=======
                                <button style="margin-left:300px;" class="btnUpdate"><a style="text-decoration:none;color:#FF1493;" href="user.php">Quay lại</a></button>
>>>>>>> 18effde46df79b8cc1ce72a27993766abdb16075
                            </div>
                </div>
        </div>
    </form>
    <footer>
    <div class="footer-top">
      <div class="footer-top-overlay"></div>
      <div class="wrapper">
        <div class="inner">
          <div class="grid-item">
            <div class="contact-item ">
              <div class="ft-contact">

                <div class="ft-contact-logo ">
                  <a href="/"><img style="width: 50%;height:50%;" src="img/logo.png"
                      alt="GN BAKERY - Bánh ngọt Pháp"></a>
                </div>

                <div class="ft-contact-address">
                  <i class="fa fa-home" aria-hidden="true"></i> 90 Nguyễn Tuân TP. Hà Nội
                </div>
                <div class="ft-contact-tel">
                  <i class="fa fa-mobile" aria-hidden="true"></i> <a style=" text-decoration: none; color: white; font-weight: bolder;"
                    href="tel:0333135698">0333135698</a>
                </div>
                <div class="ft-contact-email">
                  <i class="fa fa-envelope" aria-hidden="true"></i> <a style="text-decoration: none; color: white;font-weight: bolder;"
                    href="mailto:info@gnbakery.vn">info@gnbakery.vn</a>
                </div>
              </div>
            </div>

            <div class="menu ">
              <div class="ft-menu">
                <h4>Chính sách</h4>
                <ul class="list">


                  <li><a style="text-decoration: none;" href="">Chính sách và quy định chung</a></li>

                  <li><a style="text-decoration: none;" href="">Chính sách giao dịch, thanh toán</a></li>

                  <li><a style="text-decoration: none;" href="">Chính sách đổi trả</a></li>

                  <li><a style="text-decoration: none;" href="">Chính sách bảo mật</a></li>

                  <li><a style="text-decoration: none;" href="">Chính sách vận chuyển</a></li>

                </ul>
              </div>
            </div>

            <div class="subscribe ">
              <div class="ft-subscribe-wrapper">
                <h4>GN Bakery</h4>
                <div class="ft-subscribe">
                  <p>Tên đơn vị: Công ty Cổ phần Bánh ngọt GN
                    Số giấy chứng nhận đăng ký kinh doanh: 0104802706
                    Ngày cấp: 21/07/2010
                    Nơi cấp: Sở Kế hoạch và Đầu tư Tp. Hà Nội

                  </p>

                  <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post"
                    name="myForm" onsubmit="validateForm()">
                    <input name="form_type" type="hidden" value="customer">
                    <input name="utf8" type="hidden" value="✓">

                    <div class="input-group-intro">
                      <input type="email" required="" value="" placeholder="Nhập email của bạn..." name="contact[email]"
                        id="your-Email" class="input-group-field" aria-label="email@example.com">
                      <input type="hidden" name="contact[tags]" value="newsletter">
                      <span class="input-group-intro-btn">
                        <button type="submit" name="subscribe" id="subscribe-btn" value="GỬI"><i
                            class="fa fa-paper-plane" aria-hidden="true"></i></button>
                      </span>
                    </div>

                  </form>

                </div>
              </div>
              <div class="ft-social-network">

                <a href="" target="_blank"><i class="bi bi-facebook" aria-hidden="true"></i></a>


                <a href="" target="_blank"><i class="bi bi-twitter" aria-hidden="true"></i></a>


                <a href="" target="_blank"><i class="bi bi-instagram" aria-hidden="true"></i></a>


                <a href="" target="_blank"><i class="bi bi-google" aria-hidden="true"></i></a>


                <a href="" target="_blank"><i class="bi bi-youtube" aria-hidden="true"></i></a>

              </div>
            </div>

            <div class="connect">
              <p>Mỗi tháng chúng tôi đều có những đợt giảm giá dịch vụ và sản phẩm nhằm tri ân khách hàng. Để có thể cập
                nhật kịp thời những đợt giảm giá này, vui lòng nhập địa chỉ email của bạn vào ô dưới đây
              <p>
              <div id="owl-home-main-banners-slider-ft" class="owl-carousel owl-theme"
                style="opacity: 1; display: block;">

                <div class="owl-wrapper-outer">
                  <div class="owl-wrapper"
                    style="width: 424px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                    <div class="owl-item" style="width: 212px;">
                      <div class="item">

                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-controls clickable" style="display: none;">
                  <div class="owl-pagination">
                    <div class="owl-page active">
                      <span class="">

                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="wrapper">
        <div class="inner">
          <div class="grid">
            <div class="grid__item ">
              <div class="ft-copyright-menu text-right">
                <ul class="no-bullets">


                </ul>
              </div>
            </div>
            <div class="grid__item ">
              <div class="ft-copyright">
                Copyrights © 2018 by <a style="text-decoration:none;" target="_blank" href="">GN Bakery</a>.
              </div>
            </div>
          </div>
        </div>
      </div></div>

    </footer>
    <div id="hotline">
      <a href="tel:0333135698" id="yBtn">
        <i class="bi bi-telephone-fill"></i>
      </a>
      <div class="text-quotes">
        <a href="tel:0333135698">0333135698</a>
      </div>
    </div>
    <div id="backtop">
      <i class="bi bi-chevron-compact-up"></i>
    </div>


    <script src="js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>