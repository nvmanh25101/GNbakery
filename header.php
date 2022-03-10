<?php 
  $sql = "select * from categories";
  $categories = mysqli_query($connect, $sql);
?>
  <header class="medium-header">
    <div class="site-header">
      <div class="header-left">

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <div class="drawer_header">
            <a href="#">
              <img style="width:40%;height: 40%; margin-bottom: 15px;" src="img/logo.png">
            </a>
          </div>

          <a href="/">Trang chủ</a>
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
        
          <a href="./signin.php">Đăng Nhập</a>
          <a href="./signup.php">Đăng Ký</a>

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
          <?php if(empty($_SESSION['id'])) { ?>
            <a class="item" href="./signin.php">
              <i class="bi bi-people-fill" aria-hidden="true"></i>
              Tài khoản
            </a>
            
          <?php } else { ?>
            <a class="item" href="user.php">
              <i class="bi bi-people-fill" aria-hidden="true"></i>
              Chào , <?= $_SESSION['name']?>
            </a>
            <a class="item" href="./signout.php">
              <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
              Đăng Xuất
            </a>
          <?php } ?>
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
        <li>
          <a href="/">TRANG CHỦ</a>
        </li>
        <?php foreach($categories as $each_category) { ?>
            <li>
                <a href=""><?= $each_category['name'] ?></a>
                <ul class="sub-menu">
                  <?php  
                      $sql = "select * from category_detail where category_id = '$each_category[id]'";
                      $result_sub = mysqli_query($connect,$sql);
                      foreach($result_sub as $each_sub) {
                  ?>
                    <li>
                      <a href=""><?= $each_sub['name'] ?></a>
                    </li>
                  <?php } ?>
                </ul>
            </li>
<<<<<<< HEAD
          <?php } ?>
       
=======
        <?php } ?>
        <!-- <li><a href="">TIN TỨC</a></li>
        <li><a href="">KHUYẾN MÃI</a></li> -->
>>>>>>> 18effde46df79b8cc1ce72a27993766abdb16075
      </ul>
    </nav>

  </header>