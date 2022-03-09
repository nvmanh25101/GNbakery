<?php
require_once './database/connect.php';

$id = $_GET['id'];
$sql = "select * from products
  where products.id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);

$category_id = $each['category_detail_id'];
$sql = "select * from products
  where category_detail_id = '$category_id'";
$result_category = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width">
  <title>SANPHAM - BANH NGOT HUONG VI PHAP</title>
  <link rel="shortcut icon" type="image" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</head>

<body>

  <header class="medium-header">
    <div class="site-header">
      <div class="header-left">

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <div class="drawer_header">
            <a href="#"><img style="width:40%;height: 40%;
   margin-bottom: 15px;" src="img/logo.png"></a>
          </div>

          <a href="/">Trang chủ</a>

          <button class="dropdown-btn">Bánh sinh nhật<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>

          <button class="dropdown-btn">Bánh my <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
          <a href="#">Tin tức</a>
          <a href="#">Khuyến mãi</a>
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
              Hệ Thống<b>14</b>
              Cửa hàng
            </span>
          </a>
          <a class="item" href="user.html">
            <i class="bi bi-people-fill" aria-hidden="true"></i>
            Chào , user
          </a>
          <a class="item" href="#">
            <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
            Đăng Xuất
          </a>
          <a class="item" href="#">
            <div class="cart-total-price">
              <i class="bi bi-cart-dash-fill" aria-hidden="true"></i>
              <span id="CartCount">0</span>
            </div>
          </a>
          <ul>

      </div>

    </div>
    <nav class="container">
      <ul id="main-menu">
        <li><a href="Home-user.html">TRANG CHỦ</a></li>
        <li>
          <a href="">BÁNH SINH NHẬT</a>
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
        <li>
          <a href="">BÁNH MỲ & BÁNH MẶN</a>
          <ul class="sub-menu">
            <li><a href="">Bánh mì</a></li>
            <li><a href="">Bánh mặn</a></li>
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
  <!--product-->

  <div class="hero-image">
    <div>

      <p class="hero-text"><?= $each['name'] ?></p>

    </div>
  </div>

  <div class="product">
    <div class="product-content">
      <div class="product-content-left">
        <img class="image-img" style="width:100%;" src="./assets/images/products/<?= $each['image'] ?>" data-zoom-image="./assets/images/products/<?= $each['image'] ?>" />
      </div>

      <div class="product-content-right">
        <div class="product-content-right-name">
          <h1><?= $each['name'] ?></h1>
          <p>Mã sản phẩm: GN<?= $each['id'] ?></p>

        </div>
        <hr>
        <div class="product-price">

          <p class="line-price">
            <span class="">Giá</span>
            <span class="ProductPrice" itemprop="price" content="220000">
              <?= number_format($each['price'], 0, '.', ' ') ?>&#8363
            </span>/

          </p>

        </div>

        <div class="product-select-swatch">
          <div class="product-select-swatch-text">
            <p>Kích Thước:</p>
          </div>
          <div class="select-swap">
            <div class="data-one">
              <input type="radio" name="option1" value="19cm" class="input-opt">
              <label for="swatch-19" class="">
                <?= $each['size'] ?>
                <img class="crossed-out" src="img/pro1.jpg">
                <img class="img-check" src="img/pro2.jpg">
              </label>
            </div>
          </div>
        </div>
        
      <div class="product-quantity">
        <div class="text">
          <p>Số lượng:</p>
        </div>
        <div class="buttons_added">
          <input class="minus is-form" type="button" value="-">
          <input aria-label="quantity" class="input-qty" max="30" min="1" name="" type="number" value="1">
          <input class="plus is-form" type="button" value="+">
        </div>

      </div>

      <div class="product-actions">

        <button type="submit" name="add" id="AddToCart" class="btnAddtocart">Thêm vào giỏ hàng</button>
        <button type="button" name="buy" id="buy-now" class="btnBuynow">Mua ngay</button>

      </div>
    </div>
  </div>

  <div class="product-tab">
    <div class="tab">
      <button class="tablinkss">Mo ta chung</button>
      <button class="tablinks">Binh Luan</button>

    </div>
    <div class="content-product-tab">
      <div id="Content" class="tablinks">
        <?= nl2br($each['description']) ?>
      </div>


      <div id="Comment" class="tabcontent">

        <div class="cmt-comment">
          <span> 0 comment</span>
        </div>
        <div class="text-comment">
          <form action="" class="form-txt">

            <input type="text" class="fname" id="fname" name="fname" placeholder="add comment"><br><br>

          </form>
        </div>
      </div>
    </div>
  </div>



  <div id="Home-notice">
    <div class="latest-wrap">
      <div class="title-notice">
        <h3>CÓ THỂ BẠN THÍCH</h3>
        <h2>SẢN PHẨM CÙNG LOẠI</h2>

      </div>
      <ul class="productss">
        <?php foreach($result_category as $category_product) { ?>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="./assets/images/products/<?= $category_product['image'] ?>" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat"><?= $category_product['name'] ?></a>
              <p class="product-name">GN<?= $category_product['id'] ?></p>
              <div class="product-price-action">
                <p class="product-price"><?= number_format($category_product['price'], 0, '.', ',') ?></p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
        <!-- <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic2.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic3.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic4.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic5.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic6.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic7.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic8.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic9.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic10.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic11.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic12.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="img/pic13.jpg" alt="">

              </a>
            </div>
            <div class="product-info">
              <a href="" class="product-cat">FRUIT CAKE</a>
              <p class="product-name">KT017</p>
              <div class="product-price-action">
                <p class="product-price">220,000</p>
                <div class="product-action">
                  <button type="button" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </li> -->


      </ul>


    </div>
  </div>

  <footer>
    <div class="footer-top">
      <div class="footer-top-overlay"></div>
      <div class="wrapper">
        <div class="inner">
          <div class="grid-item">
            <div class="contact-item ">
              <div class="ft-contact">

                <div class="ft-contact-logo ">
                  <a href="/"><img style="width: 50%;height:50%;" src="img/logo.png" alt="GN BAKERY - Bánh ngọt Pháp"></a>
                </div>

                <div class="ft-contact-address">
                  <i class="fa fa-home" aria-hidden="true"></i> 10 xx TP. Hà Nội
                </div>
                <div class="ft-contact-tel">
                  <i class="fa fa-mobile" aria-hidden="true"></i> <a style="color: white; font-weight: bolder;" href="tel:0333135698">0333135698</a>
                </div>
                <div class="ft-contact-email">
                  <i class="fa fa-envelope" aria-hidden="true"></i> <a style="color: white;font-weight: bolder;" href="mailto:info@gnbakery.vn">info@gnbakery.vn</a>
                </div>
              </div>
            </div>

            <div class="menu ">
              <div class="ft-menu">
                <h4>Chính sách</h4>
                <ul class="list">


                  <li><a href="">Chính sách và quy định chung</a></li>

                  <li><a href="">Chính sách giao dịch, thanh toán</a></li>

                  <li><a href="">Chính sách đổi trả</a></li>

                  <li><a href="">Chính sách bảo mật</a></li>

                  <li><a href="">Chính sách vận chuyển</a></li>

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

                  <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post" name="myForm" onsubmit="validateForm()">
                    <input name="form_type" type="hidden" value="customer">
                    <input name="utf8" type="hidden" value="✓">



                    <div class="input-group-intro">
                      <input type="email" required="" value="" placeholder="Nhập email của bạn..." name="contact[email]" id="your-Email" class="input-group-field" aria-label="email@example.com">
                      <input type="hidden" name="contact[tags]" value="newsletter">
                      <span class="input-group-intro-btn">
                        <button type="submit" name="subscribe" id="subscribe-btn" value="GỬI"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
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
              <h4>Mỗi tháng chúng tôi đều có những đợt giảm giá dịch vụ và sản phẩm nhằm tri ân khách hàng. Để có thể cập nhật kịp thời những đợt giảm giá này, vui lòng nhập địa chỉ email của bạn vào ô dưới đây</h4>
              <div id="owl-home-main-banners-slider-ft" class="owl-carousel owl-theme" style="opacity: 1; display: block;">






                <div class="owl-wrapper-outer">
                  <div class="owl-wrapper" style="width: 424px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                    <div class="owl-item" style="width: 212px;">
                      <div class="item">

                      </div>
                    </div>
                  </div>
                </div>


                <div class="owl-controls clickable" style="display: none;">
                  <div class="owl-pagination">
                    <div class="owl-page active"><span class=""></span></div>
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
                Copyrights © 2018 by <a target="_blank" href="">GN Bakery</a>.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
  <script src="js/product.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>


  <!--footer-->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
  <script>
    $(".image-img").ezPlus({
      zoomWindowFadeIn: 500,
      zoomWindowFadeOut: 500,
      lensFadeIn: 500,
      lensFadeOut: 500
    });
  </script>
</body>

</html>