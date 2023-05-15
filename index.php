<?php
require_once 'classes/Product.php';
require_once 'classes/ProductType.php';
$product = new Product;
$result = $product->getAll();
$productType = new ProductType;
$resultProductType = $productType->getAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Viserpet HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- countdown css link-->
    <link rel="stylesheet" href="assets/css/jquery.classycountdown.min.css">
    <!-- range css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- magnific css link -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader-p"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="body-overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="sidebar-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Bottom Header End Here ==================== -->
    <header class="header-two">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand " href="index.html">
                    <span class="logo">
                        <img src="assets/images/logo/h2-logo.png" alt="">
                    </span>
                </a>
                <button class="navbar-toggler header-button style-two" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="hiddenNav"><i class="las la-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-menu m-auto style-two">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="header-info style-two">
                    <div class="header-info__user">
                        <a href="page/auth/login.php" class="header-info__link">
                            <i class="far fa-user"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- ==================== Bottom Header End Here ==================== -->



    <!--====================banner-two section start here======================-->
    <section class="banner-two-section" style="background-image:url(assets/images/shapes/banner-bg.png)">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="banner-two-content">
                        <h3 class="banner-two-content__subtitle">Save 20 -30% Off</h3>
                        <h1 class="banner-two-content__title">Everything your pet need</h1>
                        <a href="javascript:;" class="btn btn--base-two pill">SHOP NOW</a>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none">
                    <div class="banner-two-section__thumb">
                        <img src="assets/images/thumbs/banner-two-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================banner-two section end here===================== -->
    <!-- =======================category section start here ===============-->

    <div class="category-section py-120">
        <div class="container-fluid">
            <div class="row justify-content-center gy-4">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                    <div class="category-item">
                        <a href="javascript:;" class="category-item__thumb">
                            <img src="assets/images/thumbs/category/cate01.png" alt="">
                        </a>
                        <h4 class="category-item__title">
                            <a href="javascript:;" class="category-item__title-link">
                                Accessories
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                    <div class="category-item">
                        <a href="javascript:;" class="category-item__thumb style-one">
                            <img src="assets/images/thumbs/category/cate02.png" alt="">
                        </a>
                        <h4 class="category-item__title">
                            <a href="javascript:;" class="category-item__title-link">
                                Dog Shop
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                    <div class="category-item">
                        <a href="javascript:;" class="category-item__thumb style-two">
                            <img src="assets/images/thumbs/category/cate03.png" alt="">
                        </a>
                        <h4 class="category-item__title">
                            <a href="javascript:;" class="category-item__title-link">
                                Cat Shop
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                    <div class="category-item">
                        <a href="javascript:;" class="category-item__thumb style-three">
                            <img src="assets/images/thumbs/category/cate04.png" alt="">
                        </a>
                        <h4 class="category-item__title">
                            <a href="javascript:;" class="category-item__title-link">
                                Fish Shop
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                    <div class="category-item">
                        <a href="javascript:;" class="category-item__thumb style-four">
                            <img src="assets/images/thumbs/category/cate05.png" alt="">
                        </a>
                        <h4 class="category-item__title">
                            <a href="javascript:;" class="category-item__title-link">
                                Small Animal
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                    <div class="category-item">
                        <a href="javascript:;" class="category-item__thumb style-five">
                            <img src="assets/images/thumbs/category/cate06.png" alt="">
                        </a>
                        <h4 class="category-item__title">
                            <a href="javascript:;" class="category-item__title-link">
                                Bird Shop
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================category section end here====================-->

    <!-- =====================feature product section start here =====================-->
    <div class="feature-product-section py-120 section-bg-two">
        <div class="feature-product-one">
            <img src="assets/images/shapes/fp-shap01.png" alt="">
        </div>
        <div class="feature-product-two">
            <img src="assets/images/shapes/fp-shap02.png" alt="">
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="section-heading-two">
                        <div class="section-heading-two__icon">
                            <img src="assets/images/icons/heading-img.png" alt="">
                        </div>
                        <div class="section-heading-two__title-wrapper">
                            <h3 class="section-heading-two__title style-two">Featured Products </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter">
                        <button type="button" data-filter="all" class="style-two mixitup-control-active">All</button>
                        <?php foreach ($resultProductType as $key => $value) : ?>
                            <button type="button" data-filter=".<?= $value['name'] ?>" class="style-two"><?= $value['name'] ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="product">
                    <div class="row justify-content-center gy-4">
                        <?php foreach ($result as $key => $value) : ?>
                            <div class=" col-xl-3 col-sm-6 col-xsm-6 mix <?= $value['product_type_name'] ?>">
                                <div class="product-item style-two">
                                    <div class="product-item__thumb">
                                        <a href="detail.php?id=<?= $value['id'] ?>" class="product-item__thumb-link">
                                            <img src="assets/images/thumbs/fp01.png" alt="">
                                        </a>
                                        <button class="product-item__icon">
                                            <span class="product-item__icon-style">
                                                <i class="las la-heart"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="product-item__content">
                                        <h5 class="product-item__title">
                                            <a href="detail.php?id=<?= $value['id'] ?>" class="product-item__title-link">
                                                <?= $value['name'] ?>
                                            </a>
                                        </h5>
                                        <ul class="product-info__rating justify-content-center style-two">
                                            <li class="product-info__rating-item">
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="product-info__rating-item">
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="product-info__rating-item">
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="product-info__rating-item">
                                                <i class="fas fa-star"></i>
                                            </li>
                                            <li class="product-info__rating-item">
                                                <i class="fas fa-star-half-alt"></i>
                                            </li>
                                            <li class="product-info__number">
                                                4.8
                                            </li>
                                        </ul>
                                        <h6 class="product-item__price">
                                            <span class="product-item__price-new">Rp. <?= number_format($value['purchase_price'], 0, ',', '.') ?></span> Rp. <?= number_format($value['sell_price'], 0, ',', '.') ?>
                                        </h6>
                                        <a href="cart.html" class="btn btn--base-two pill btn--sm">Add to Cart </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- =====================feature product section end here =====================-->

    <!-- ====================add section start here=======================-->
    <div class="add-section pb-60">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-6">
                    <a href="javascript:;" class="add-one">
                        <img src="assets/images/thumbs/add-img01.png" alt="">
                    </a>
                </div>
                <div class="col-sm-6">
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <a href="javascript:;" class="add-one">
                                <img src="assets/images/thumbs/add-img02.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:;" class="add-one">
                                <img src="assets/images/thumbs/add-img03.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- =====================add section end here =====================-->


    <!-- ======================news post section end here============-->
    <div class="feature-two-section py-60">
        <div class="container">
            <div class="row gy-4 ">
                <div class="col-md-3 col-sm-6 col-xxsm-6">
                    <div class="feature-item style-two">
                        <div class="feature-item__thumb">
                            <img src="assets/images/icons/ft-img01.png" alt="">
                        </div>
                        <div class="feature-item__info">
                            <h5 class="feature-item__title">
                                FREE SHIPPING
                            </h5>
                            <span class="feature-item__payment"> For All Order Over $99 </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xxsm-6">
                    <div class="feature-item style-two">
                        <div class="feature-item__thumb">
                            <img src="assets/images/icons/ft-img02.png" alt="">
                        </div>
                        <div class="feature-item__info">
                            <h5 class="feature-item__title">
                                FRIENDLY SUPPORT
                            </h5>
                            <span class="feature-item__payment"> 24/7 Customer Support </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xxsm-6">
                    <div class="feature-item style-two">
                        <div class="feature-item__thumb">
                            <img src="assets/images/icons/ft-img03.png" alt="">
                        </div>
                        <div class="feature-item__info">
                            <h5 class="feature-item__title">
                                SECURE PAYMENT
                            </h5>
                            <span class="feature-item__payment">100% Secure Payment</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xxsm-6">
                    <div class="feature-item style-two">
                        <div class="feature-item__thumb">
                            <img src="assets/images/icons/ft-img04.png" alt="">
                        </div>
                        <div class="feature-item__info">
                            <h5 class="feature-item__title">
                                SHIPPING & RETURN
                            </h5>
                            <span class="feature-item__payment"> within 30days For Refund </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========add two section start here =========-->
    <div class="add-two-section pt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="javascript:;" class="add-two-thumb">
                        <img src="assets/images/thumbs/add-two01.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- ===========add two section end here =========-->


    <!-- ========footer===== -->
    <footer class="footer-two-area">
        <div class="footer-two__top-shape">
            <img src="assets/images/shapes/footer-top-shape.png" alt="">
        </div>
        <div class="footer-two__shape-one">
            <img src="assets/images/shapes/footer-shape-one.png" alt="">
        </div>
        <div class="footer-two__shape-two">
            <img src="assets/images/shapes/footer-shape-two.png" alt="">
        </div>
        <div class="footer-two-area__inner">

        </div>
        <!-- Footer Top End-->

        <!-- bottom Footer -->
        <div class="bottom-footer style-two py-lg-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-footer__text"> &copy; Copyright 2023 . All rights by Viserpet.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Jquery js -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- mixitup js -->
    <script src="assets/js/mixitup.min.js"></script>
    <!-- countdown js -->
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.throttle.js"></script>
    <script src="assets/js/jquery.classycountdown.min.js"></script>
    <!-- range js -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <script>
        // mixitup 
        var mixer = mixitup('.product');
    </script>
</body>

</html>