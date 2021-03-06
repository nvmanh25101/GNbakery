<?php

session_start();
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

<?php require './header.php'; ?>
  <!--product-->

  <div class="hero-image">
    <div>

      <p class="hero-text"><?= $each['name'] ?></p>

    </div>
  </div>
  <form action="view_cart.php" method="GET">
  <div class="product">
    <div class="product-content">
    
       <div class="product-content-left">
                <img class="image-img" style="width:100%;" src="./assets/images/products/<?= $each['image'] ?>" data-zoom-image="./assets/images/products/<?= $each['image'] ?>" />
       </div>

        <div class="product-content-right">
                <div class="product-content-right-name">
                  <h1><?= $each['name'] ?></h1>
                  <p>M?? s???n ph???m: GN<?= $each['id'] ?></p>

                </div>
                <hr>
                <div class="product-price">

                  <p class="line-price">
                    <span class="">Gi??</span>
                    <span class="ProductPrice" itemprop="price" content="220000">
                      <?= number_format($each['price'], 0, '.', ' ') ?>&#8363
                    </span>/

                  </p>

                </div>

                <div class="product-select-swatch">
                  <div class="product-select-swatch-text">
                    <p>K??ch Th?????c:</p>
                  </div>
                  <div class="select-swap">
                    <div class="data-one">
                      <input type="radio" name="option1" value="<?= $each['size'] ?>" class="input-opt">
                      <label for="swatch-19" class="">
                        <?= $each['size'] ?> cm
                        <img class="crossed-out" src="img/pro1.jpg">
                        <img class="img-check" src="img/pro2.jpg">
                      </label>
                    </div>
                  </div>
                </div>
                
              <div class="product-quantity">
                <div class="text">
                  <p>S??? l?????ng:</p>
                </div>
                <div class="buttons_added">
                <input type = "number" name="quantity" value = "1" max="30" min="1">
                <input type="hidden" name="id" value="<?php echo $each['id'] ?>" >
                </div>
                
              </div>

              <div class="product-actions">
                
              
                <button type="submit" name="add" id="AddToCart" class="btnAddtocart">Th??m v??o gi??? h??ng</button>
              


              </div>
            </div>
  
   </div>
  </div>
  </form>

  <div class="product-tab">
    <div class="tab">
      <button class="tablinkss">M?? t??? chung</button>
    

    </div>
    <div class="content-product-tab">
      <div id="Content" class="tablinks">
        <?= nl2br($each['description']) ?>
      </div>


  
    </div>
  </div>

  <div id="Home-notice">
    <div class="latest-wrap">
      <div class="title-notice">
        <h3>C?? TH??? B???N TH??CH</h3>
        <h2>S???N PH???M C??NG LO???I</h2>

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
                <form action="view_cart.php?id=<?= $each['id'] ?>" method="POST">
                  <button type="submit" name="addcart" class="btn-action"><i class="bi bi-cart-fill"></i>
                  </button>
        </form>
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
                  <a href="/"><img style="width: 50%;height:50%;" src="img/logo.png" alt="GN BAKERY - B??nh ng???t Ph??p"></a>
                </div>

                <div class="ft-contact-address">
                  <i class="fa fa-home" aria-hidden="true"></i> 90 Nguy???n Tu??n TP. H?? N???i
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
                <h4>Ch??nh s??ch</h4>
                <ul class="list">


                  <li><a href="">Ch??nh s??ch v?? quy ?????nh chung</a></li>

                  <li><a href="">Ch??nh s??ch giao d???ch, thanh to??n</a></li>

                  <li><a href="">Ch??nh s??ch ?????i tr???</a></li>

                  <li><a href="">Ch??nh s??ch b???o m???t</a></li>

                  <li><a href="">Ch??nh s??ch v???n chuy???n</a></li>

                </ul>
              </div>
            </div>

            <div class="subscribe ">
              <div class="ft-subscribe-wrapper">
                <h4>GN Bakery</h4>
                <div class="ft-subscribe">
                  <p>T??n ????n v???: C??ng ty C??? ph???n B??nh ng???t GN
                    S??? gi???y ch???ng nh???n ????ng k?? kinh doanh: 0104802706
                    Ng??y c???p: 21/07/2010
                    N??i c???p: S??? K??? ho???ch v?? ?????u t?? Tp. H?? N???i

                  </p>

                  <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post" name="myForm" onsubmit="validateForm()">
                    <input name="form_type" type="hidden" value="customer">
                    <input name="utf8" type="hidden" value="???">



                    <div class="input-group-intro">
                   
                      <input type="hidden" name="contact[tags]" value="newsletter">
                     
                    </div>

                  </form>



                </div>
              </div>
            
            </div>

            <div class="connect">
              <h4>M???i th??ng ch??ng t??i ?????u c?? nh???ng ?????t gi???m gi?? d???ch v??? v?? s???n ph???m nh???m tri ??n kh??ch h??ng. ????? c?? th??? c???p nh???t k???p th???i nh???ng ?????t gi???m gi?? n??y, vui l??ng nh???p ?????a ch??? email c???a b???n v??o ?? d?????i ????y</h4>
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
                Copyrights ?? 2018 by <a target="_blank" href="">GN Bakery</a>.
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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>


  <!--footer-->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  
  <script src="js/app.js"></script>
  <script src="js/product.js"></script>
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