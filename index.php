<?php require_once 'header.php'; ?>
<body>
    <?php include'loginprocess.php'; ?>
    <?php
    require_once 'includes/dbconnect.php';
    $sql= "select * from categories ";
    $array_category =mysqli_query($connect,$sql);
    $sql= "select * from brands ";
    $array_brand =mysqli_query($connect,$sql);
    $sql= "select * from accessories ";
    $array_accessory =mysqli_query($connect,$sql);
    $sql= "select * from products ";
    $array_accessories =mysqli_query($connect,$sql);

    $search_product = '';
    if(isset($_GET['search_product'])){
	       $search_product = $_GET['search_product'];
       }
    $sql = "select * from product where name like '%$search_product%'";
     ?>
     <?php mysqli_close($connect) ?>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="#">Category</a>
                                        <ul class="submenu">
                                            <?php foreach ($array_category as $category): ?>
						                         <li><a href="index.php?category=<?php echo $category['cat_id']?>"><?php echo $category['cat_title']?></a></li>
					                        <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li><a href="#">Brands</a>
                                        <ul class="submenu">
                                            <?php foreach ($array_brand as $brand): ?>
						                         <li><a href="index.php?brand=<?php echo $brand['brand_id']?>"><?php echo $brand['brand_title']?></a></li>
					                        <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                        <ul class="submenu">
                                            <?php foreach ($array_accessory as $accessory): ?>
						                         <li><a href="index.php?accessory=<?php echo $accessory['access_id']?>"><?php echo $accessory['access_title']?></a></li>
					                        <?php endforeach ?>
                                        </ul>
                                    </li>
                                    <li><a href="story.php">My Story</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <form class="" action="results.php" method="get">
                                        <input type="text" name="search_product" placeholder="Search a Product" value="<?php echo $search_product ?>">
                                    </form>
                                </li>
                                <li><a href="customer/cart.php"><span class="flaticon-shopping-cart"></span></a> </li>
                                <li> <a href="logincustomer.php"><span class="flaticon-user"></span></a></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between ">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Your Perfect Memories</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"> We can use film camera to take a lot of beautiful pictures and store unforgettable memories</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Select Your New Perfect Style</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class="new-product-area section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                <img src="assets/img/gallery/new_product1.png" alt="">
                            </div>
                            <div class="product-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                <img src="assets/img/gallery/new_product2.png" alt="">
                            </div>
                            <div class="product-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-pro mb-30 text-center">
                            <div class="product-img">
                                <img src="assets/img/gallery/new_product3.png" alt="">
                            </div>
                            <div class="product-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Popular Items Start -->
        <div class="popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-70 text-center">
                            <h2>Popular Items</h2>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular1.png" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular2.png" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular3.png" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular4.png" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular5.png" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="assets/img/gallery/popular6.png" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                <span>$ 45,743</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="catagori.html" class="btn view-btn1">View More Products</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? Watch Choice  Start-->
        <div class="watch-area section-padding30">
            <div class="container">
                <div class="row align-items-center justify-content-between padding-130">
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>Watch of Choice</h2>
                            <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            <a href="shop.html" class="btn">Show Watches</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="assets/img/gallery/choce_watch1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="assets/img/gallery/choce_watch2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>Watch of Choice</h2>
                            <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            <a href="shop.html" class="btn">Show Watches</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Watch Choice  End-->
        <!--? Shop Method Start-->
        <div class="shop-method-area">
            <div class="container">
                <div class="method-wrapper">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-package"></i>
                                <h6>Free Shipping Method</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Secure Payment System</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-reload"></i>
                                <h6>Secure Payment System</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
    <?php require_once 'footer.php'; ?>
