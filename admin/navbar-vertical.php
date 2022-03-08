<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="../../img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/responsive_admin.css">
    <title>ADMIN-GN Bakery</title>
</head>
<body>
<div class="main">
    <nav class="navbar navbar-vertical position-fixed top-0 start-0 bottom-0 p-0 navbar-collapse hide-on-mobile-tablet">
        <div class="navbar__content">
            <a class="navbar-brand px-5 d-block" href="#">
                <img class="navbar-brand__img" src="../../source (1).gif" alt="">
                <!-- <img src="../../8f554a44aec8cd5a8b4689876d4a4f01.gif" alt="" style="width: 200px; height: 80px;"> -->
            </a>

            <ul class="nav navbar__list flex-column">
                <li class="nav-item navbar__item">
                    <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'root'?'active':'' ?>" href="../root">
                        <i class="navbar__link-icon bi bi-house-fill"></i>
                        <span>Trang chủ</span> 
                    </a>
                </li>
                <li class="nav-item navbar__item">
                    <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'orders'?'active':'' ?>" href="../playlists">
                        <i class="navbar__link-icon bi bi-cart-dash-fill"></i>
                        <span>Đơn hàng</span> 
                    </a>
                </li>
                <li class="nav-item navbar__item">
                    <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'products'?'active':'' ?>" href="../products">
                        <i class="navbar__link-icon bi bi-vinyl"></i>
                        <span>Sản phẩm</span> 
                    </a>
                    <div class="sub-navbar">
                        <ul class="list-group">
                            <li class="sub-navbar__item">
                                <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../products/form_insert.php">Thêm sản phẩm</a>
                            </li>
                            <li class="sub-navbar__item">
                                <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../products?search_status=1">Đang bán</a>
                            </li>
                            <li class="sub-navbar__item">
                                <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../products?search_status=0">Ngừng bán</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item navbar__item">
                    <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'categories'?'active':'' ?>" href="../categories">
                        <i class="navbar__link-icon bi bi-slack"></i>
                        <span>Loại Hàng</span> 
                    </a>
                    <div class="sub-navbar">
                        <ul class="list-group">
                            <li class="sub-navbar__item">
                                <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../categories">Loại bánh chính</a>
                            </li>
                            <li class="sub-navbar__item">
                                <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../categories/category_detail">Loại bánh phụ</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item navbar__item">
                    <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'employees'?'active':'' ?>" href="../employees">
                        <i class="navbar__link-icon bi bi-person"></i>
                        <span>Nhân viên</span> 
                    </a>
                </li>
                <li class="nav-item navbar__item">
                    <a class="nav-link d-flex align-items-center navbar__link" href="../signout.php">
                        <i class="navbar__link-icon bi bi-box-arrow-in-right"></i>
                        <span>Đăng xuất khỏi Trái Đất</span> 
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="header__navbar-overlay btn-menu"></div>
    <nav class="navbar navbar-vertical-mobile position-fixed top-0 start-0 bottom-0 p-0 navbar-collapse">
        <div class="navbar-logo">
            <a class="navbar-mobile-brand px-5 d-block" href="#">
                <!-- <img src="../../source (1).gif" alt="" style="width: 200px; height: 100px;"> -->
                <img src="../../8f554a44aec8cd5a8b4689876d4a4f01.gif" alt="" style="width: 200px; height: 80px;">
            </a>
            <i class="btn-close btn-menu bi bi-x-lg"></i>
        </div>

        <ul class="nav navbar__list-mobile flex-column">
            <li class="nav-item navbar__item">
                <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'root'?'active':'' ?>" href="../root">
                    <i class="navbar__link-icon bi bi-house-fill"></i>
                    <span>Trang chủ</span> 
                </a>
            </li>
            <li class="nav-item navbar__item">
                <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'orders'?'active':'' ?>" href="../playlists">
                    <i class="navbar__link-icon bi bi-cart-dash-fill"></i>
                    <span>Đơn hàng</span> 
                </a>
            </li>
            <li class="nav-item navbar__item">
                <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'products'?'active':'' ?>" href="../products">
                    <i class="navbar__link-icon bi bi-vinyl"></i>
                    <span>Sản phẩm</span> 
                </a>
                <div class="sub-navbar">
                    <ul class="list-group">
                        <li class="sub-navbar__item">
                            <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../products/form_insert.php">Thêm sản phẩm</a>
                        </li>
                        <li class="sub-navbar__item">
                            <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../products?search_status=1">Đang bán</a>
                        </li>
                        <li class="sub-navbar__item">
                            <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../products?search_status=0">Ngừng bán</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item navbar__item">
                <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'categories'?'active':'' ?>" href="../categories">
                    <i class="navbar__link-icon bi bi-slack"></i>
                    <span>Loại Hàng</span> 
                </a>
                <div class="sub-navbar">
                    <ul class="list-group">
                        <li class="sub-navbar__item">
                            <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../categories">Loại bánh chính</a>
                        </li>
                        <li class="sub-navbar__item">
                            <a class="sub-navbar__link list-group-item-action text-decoration-none" href="../categories/category_detail">Loại bánh phụ</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item navbar__item">
                <a class="nav-link d-flex align-items-center navbar__link <?= $page == 'employees'?'active':'' ?>" href="../employees">
                    <i class="navbar__link-icon bi bi-person"></i>
                    <span>Nhân viên</span> 
                </a>
            </li>
            <li class="nav-item navbar__item">
                <a class="nav-link d-flex align-items-center navbar__link" href="../signout.php">
                    <i class="navbar__link-icon bi bi-box-arrow-in-right"></i>
                    <span>Đăng xuất</span> 
                </a>
            </li>
        </ul>
    </nav>

    <header class="header d-flex justify-content-between align-items-center">
        <div class="header__mobile-icon align-items-center">
            <button class="btn-menu header__mobile-btn align-items-center me-1">
                <i class="bi bi-list"></i>
            </button>
            <button class="header__mobile-btn align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search-heart">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z"/>
                </svg>
            </button>
        </div>
        <a class="header-text" href="">GNBakery</a>
        <form action="" class="form__search hide-on-mobile-tablet">
            <input type="search" name="search" class="input__search" value="<?php $search?? '' ?>" placeholder="Nhập tên để tìm kiếm">
        </form>
        <div class="header__user d-flex align-items-center">
            <img class="header__user-img" src="../../assets/images/admin/<?= $_SESSION['image'] ?>" alt="avt-user">
            <span class="header__user-name"><?= $_SESSION['name'] ?></span>

            <div class="header__signout">
                <a href="../signout.php">
                    <i class="bi bi-box-arrow-right"></i>
                    Đăng xuất
                </a>
            </div>
        </div>
    </header>

