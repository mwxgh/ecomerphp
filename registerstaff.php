<?php require_once 'header.php'; ?>
<body>
   <?php
   require_once 'includes/dbconnect.php';
   $sql= "select * from categories ";
   $array_category =mysqli_query($connect,$sql);
   $sql= "select * from brands ";
   $array_brand =mysqli_query($connect,$sql);
   $sql= "select * from accessories ";
   $array_accessory =mysqli_query($connect,$sql);
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
                                   <li><a href="contact.html">My Story</a></li>
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
       <!--================login_part Area =================-->
       <section class="login_part">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-lg-6 col-md-6">
                       <div class="login_part_text text-center">
                           <div class="login_part_text_iner">
                               <h2>Are you already have an account ?</h2>
                               <p>There are advances being made in science and technology
                                   everyday, and a good example of this is the</p>
                               <a href="loginstaff.php" class="btn_3">Continue with your Account</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                       <div class="login_part_form">
                           <div class="login_part_form_iner">
                               <h3>Welcome ! <br>
                                   Please Register now</h3>
                                   <form class="row contact_form" action="processregisterstaff.php" method="post" novalidate="novalidate">
                                       <div class="col-md-6 form-group p_star">
                                           <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                       </div>
                                       <div class="col-md-6 form-group p_star">
                                           <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                       </div>
                                       <div class="col-md-12 form-group p_star">
                                           <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                       </div>
                                       <div class="col-md-12 form-group p_star">
                                           <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                       </div>
                                       <div class="col-md-12 form-group p_star">
                                           <input type="number" class="form-control" id="telnum" name="telnum" placeholder="Telephone Number">
                                       </div>
                                       <div class="col-md-12 form-group p_star">
                                           <select class="form-control" name="gender">
                                               <option value="1">Male</option>
                                               <option value="0">Female</option>
                                           </select>
                                       </div>
                                       <input type="hidden" name="level" value="0">
                                       <div class="col-md-12 form-group p_star">
                                           <textarea name="address" rows="6" cols="40"></textarea>
                                       </div>
                                       <div class="col-md-12 form-group">
                                           <button type="submit" value="submit" class="btn_3">
                                               register
                                           </button>
                                       </div>
                                   </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--================login_part end =================-->
   </main>
       <?php require_once 'footer.php'; ?>
