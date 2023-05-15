<?php
require_once 'classes/Product.php';
$id = $_GET['id'];
$product = new Product;
$result = $product->getById($id);
$products = $product->getAll();
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



    <!-- ==================== Breadcumb Start Here ==================== -->
    <section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcumb__wrapper">
                        <h1 class="breadcumb__title"> <?= $result['name'] ?> </h1>
                        <ul class="breadcumb__list">
                            <li class="breadcumb__item"><a href="index.html" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                            <li class="breadcumb__item"> / </li>
                            <li class="breadcumb__item"> <span class="breadcumb__item-text"> <?= $result['name'] ?> </span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcumb End Here ==================== -->

    <!-- ======================product details two section start here ====================-->
    <div class="product-details-section py-120">
        <div class="container">
            <div class="row align-items-center gy-4">

                <div class="col-lg-7 pe-lg-5">
                    <div class="row align-items-center">

                        <div class="col-lg-9 order-lg-2">
                            <div class="product-details__thumb">
                                <a href="product-two-details.html" class="product-details__image">
                                    <img src="assets/images/thumbs/pd-img01.png" alt="">
                                </a>
                                <a href="product-two-details.html" class="product-details__image">
                                    <img src="assets/images/thumbs/product/product05.png" alt="">
                                </a>
                                <a href="product-two-details.html" class="product-details__image">
                                    <img src="assets/images/thumbs/product/product04.png" alt="">
                                </a>
                                <a href="product-two-details.html" class="product-details__image">
                                    <img src="assets/images/thumbs/product/product06.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 order-lg-1">
                            <ul class="product-details-gallery">
                                <li class="product-details-gallery__image">
                                    <img src="assets/images/thumbs/pd-img01.png" alt="">
                                </li>
                                <li class="product-details-gallery__image">
                                    <img src="assets/images/thumbs/product/product05.png" alt="">
                                </li>
                                <li class="product-details-gallery__image">
                                    <img src="assets/images/thumbs/product/product04.png" alt="">
                                </li>
                                <li class="product-details-gallery__image">
                                    <img src="assets/images/thumbs/product/product06.png" alt="">
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="product-info">
                        <h3 class="product-info__title">
                            <?= $result['name'] ?>
                        </h3>
                        <ul class="product-info__rating mb-3">
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
                        <h6 class="product-info__price">
                            <span class="product-info__price-new">Rp. <?= number_format($result['purchase_price'], 0, ',', '.') ?></span> Rp. <?= number_format($result['sell_price'], 0, ',', '.') ?>
                        </h6>
                        <p class="product-info__desc">Aliquam ante augue, placerat ut massa id, fermentum facilisis nisi. Nunc mollis augue at mollis posuere. Morbi id lorem</p>
                        <div class="product-style">
                            <span class="product-style__title">SKU :</span>
                            <span class="product-style__size"> <?= $result['sku'] ?> </span>
                        </div>
                        <div class="product-style">
                            <span class="product-style__title">Type :</span>
                            <span class="product-style__size"> <?= $result['product_type_name'] ?> </span>
                        </div>
                        <div class="product-style">
                            <span class="product-style__title">Stock :</span>
                            <span class="product-style__size"> <?= $result['stock'] ?> </span>
                        </div>
                        <div class="product-info__button">
                            <a href="javascript:;" class="btn btn--base pill product-info__link">BUY NOW</a>
                            <a href="javascript:;" class="product-info__heart product-info__link"><i class="fas fa-heart"></i></a>
                            <a href="javascript:;" class="product-info__cart product-info__link"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="product-info__share">
                            <h6 class="product-info__share-text">Share :</h6>
                            <ul class="social-list style-four">
                                <li class="social-list__item"><a href="https://www.facebook.com/" class="social-list__link"><i class="fab fa-facebook-f"></i></a> </li>
                                <li class="social-list__item"><a href="https://www.twitter.com/" class="social-list__link"> <i class="fab fa-twitter"></i></a></li>
                                <li class="social-list__item"><a href="https://www.linkedin.com/" class="social-list__link"> <i class="fab fa-linkedin-in"></i></a></li>
                                <li class="social-list__item"><a href="https://www.pinterest.com/" class="social-list__link"> <i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================product details two section end here ====================-->

    <!-- =====================tab section start here ========================-->
    <div class="tab-section pb-120">
        <div class="container">
            <ul class="nav nav-pills mb-3 custom--tab" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Review</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Comment</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-change-tab" data-bs-toggle="pill" data-bs-target="#pills-change" type="button" role="tab" aria-controls="pills-change" aria-selected="false">Faq</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <p class="tab-desc">
                        Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists, comic book artists, graffiti artists, and now—anyone who arranges words, letters, numbers, and symbols for publication, display, or distributionDesign inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed ritten inhis book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <p class="tab-desc">
                        Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists, comic book artists, graffiti artists, and now—anyone who arranges words, letters, numbers, and symbols for publication, display, or distributionDesign inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed ritten inhis book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <p class="tab-desc">
                        pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper.
                    </p>
                </div>
                <div class="tab-pane fade" id="pills-change" role="tabpanel" aria-labelledby="pills-change-tab" tabindex="0">
                    <p class="tab-desc">
                        pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- ==============tab section end here ==============-->

    <!-- ==============related product section start here =========-->
    <div class="pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading style-two">
                        <h4 class="section-heading__title style-two">Related Products<span class="section-heading__bars style-two"></span></h4>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <?php foreach ($products as $key => $value) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <a href="detail.php?id=<?= $value['id'] ?>" class="product-item__thumb-link">
                                    <img src="assets/images/thumbs/product/product01.png" alt="">
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
                                <ul class="product-info__rating justify-content-center">
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
                                <a href="cart.html" class="btn btn--base pill btn--sm">Add to Cart </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- ===========related product section start here ===========-->


    <!--============================feature section start here =======================-->
    <div class="feature-section bg-img py-60" style="background-image: url(assets/images/thumbs/feature/feature-img.png);">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-3 col-sm-6 col-xxsm-6">
                    <div class="feature-item">
                        <div class="feature-item__thumb">
                            <img src="assets/images/thumbs/feature/f04.png" alt="">
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
                    <div class="feature-item">
                        <div class="feature-item__thumb">
                            <img src="assets/images/thumbs/feature/f03.png" alt="">
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
                    <div class="feature-item">
                        <div class="feature-item__thumb">
                            <img src="assets/images/thumbs/feature/f02.png" alt="">
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
                    <div class="feature-item">
                        <div class="feature-item__thumb">
                            <img src="assets/images/thumbs/feature/f01.png" alt="">
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


    <!-- ==========================feature setion end here ============================-->



    <!-- ========footer===== -->

    <!-- ==================== Footer Start Here ==================== -->
    <footer class="footer-area section-bg-light bg-img">

        <!-- bottom Footer -->
        <div class="bottom-footer section-bg py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-footer__text"> Copyright &copy; 2023 . All rights reserved by Viserpet.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==================== Footer End Here ==================== -->


    <!-- Jquery js -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
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

</body>

</html>