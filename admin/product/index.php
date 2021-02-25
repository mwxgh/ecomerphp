 <?php require_once 'header.php'; ?>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="" class="simple-text logo-normal">
          Film Cameras | Admin
        </a></div>
      <div class="sidebar-wrapper">
            <?php require_once 'sidebar.php'; ?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Products Manage</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="search" name="search_product" value="<?php echo $search_product ?>" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <?php require_once '../navbar.php' ?>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                      <div class="row">
                          <div class="col-md-10">
                              <h4 class="card-title ">Products</h4>
                          </div>
                          <div class="col-md-2">
                              <a href="add.php">
                                  <h5 class="card-category">Add Product + </h5>
                              </a>
                          </div>
                      </div>
                  </div>
              <?php
              	require_once '../../includes/dbconnect.php';
                $search_product = '';
                    if(isset($_GET['search_product'])){
                    $search_product = $_GET['search_product'];
                    }
                    $sql ="select
                    products.*,
                    brands.brand_title as brand_title
                    categories.cat_title as cat_title
                    accessories.access_title as access_title
                    from products
                    join brands on product.brand_id = brands.brand_id
                    join categories on product.cat_id = categories.cat_id
                    join accessories on product_access_id = accessories.access_id
                    where products.product_name like '%$search_product%'";
                    $array= mysqli_query($connect,$sql);
                    $total_product = mysqli_num_rows($array);

                    $limit = 8;

                    $current_page = 1;
                    if(isset($_GET['page'])){
                    	$current_page = $_GET['page'];
                    }
                    $offset = ($current_page - 1) * $limit;


                    $total_page = ceil($total_product/$limit);

                    $sql = "$sql
                    limit $limit offset $offset";
                    $array = mysqli_query($connect,$sql);

                mysqli_close($connect);
              	?>
                  <div class="card-body">
                      <?php for($i=1;$i<=$total_page;$i++){ ?>
				<a href="?page=<?php echo $i ?>&search_product=<?php echo $search_product ?>">
					<?php echo $i ?>
				</a>
			         <?php } ?>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          <th>
                              ID
                          </th>
                          <th>
                              Name
                          </th>
                          <th>
                              Category
                          </th>
                          <th>
                              Brand
                          </th>
                          <th>
                              Accessory
                          </th>
                          <th>
                              Price
                          </th>
                          <th>
                              Image
                          </th>
                          <th>
                              Description
                          </th>
                          <th>
                              Action
                          </th>
                        </thead>

                        <tbody>
                            <?php foreach ($array as $each): ?>
                          <tr>
                            <td>
                              <?php echo $each['product_id'] ?>
                            </td>
                            <td>
                              <?php echo $each['product_name'] ?>
                            </td>
                            <td>
                              <?php echo $each['cat_title'] ?>
                            </td>
                            <td>
                              <?php echo $each['brand_title'] ?>
                            </td>
                            <td>
                                <?php echo $each['access_title'] ?>
                            </td>
                            <td>
                                <?php echo $each['product_price'] ?>
                            </td>
                            <td>
  			                  <img src="../../image/<?php echo $each['product_images']; ?>"height='200'>
                            </td>
                            <td>
                                <?php echo $each['product_description'] ?>
                            </td>
                            <td>
                                <a href="update.php?product_id=<?php echo $each['product_id']?>">Sửa</a>/
                                <a href="delete.php?product_id=<?php echo $staff['product_id']?>">Xóa</a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>

                      </table>

                    </div>
                  </div>
                  <?php mysqli_close($connect); ?>
                </div>
              </div>
            </div>
          </div>
      </div>
     <?php require_once 'footer.php'; ?>
