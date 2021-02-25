<?php require_once 'header.php'; ?>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
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
            <a class="navbar-brand" href="javascript:;">Brand Manage</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
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
                    <h4 class="card-title">Update Brand</h4>
                  </div>
                  <div class="card-body">
                      <?php
                    	require_once '../../includes/dbconnect.php';
                    	$brand_id=$_GET['brand_id'];
                    	$sql="select * from brands where brand_id='$brand_id'" ;
                    	$array=mysqli_query($connect,$sql);
                    	$brand=mysqli_fetch_array($array);
                    	?>
                        <form action="processupdate.php" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Name</label>
                                <input type="text" name="name" class="form-control">
                              </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Category</label>
                                <select class="form-control"name="cat_id" >
                        			<?php foreach ($array_category as $category): ?>
                        				<option value="<?php echo $category['cat_id']; ?>">
                        					<?php echo $category['cat_title']; ?>
                        				</option>
                        			<?php endforeach ?>
                        		</select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Brand</label>
                                <select class="form-control" name="brand_id" >
                        			<?php foreach ($array_brand as $brand): ?>
                        				<option value="<?php echo $brand['brand_id']; ?>">
                        					<?php echo $brand['brand_title']; ?>
                        				</option>
                        			<?php endforeach ?>
                        		</select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="bmd-label-floating">Accessory</label>
                                <select class="form-control" name="access_id" >
                        			<?php foreach ($array_access as $access): ?>
                        				<option value="<?php echo $access['access_id']; ?>">
                        					<?php echo $access['access_title']; ?>
                        				</option>
                        			<?php endforeach ?>
                        		</select>
                              </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Price</label>
                                <input type="number" name="price" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="">
                                 <label class="bmd-label-floating">Image Profile</label> &emsp;
                                   <input type="file" name="images" accept="images/*">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Description</label>
                                <div class="form-group">
                                  <label class="bmd-label-floating"> Detail description for easy manage</label>
                                  <input type="text" name="description" class="form-control">
                                </div>
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary pull-right">Update</button>
                          <div class="clearfix"></div>
                        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
<?php require_once 'footer.php'; ?>
