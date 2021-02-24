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
            <a class="navbar-brand" href="javascript:;">Accessories Manage</a>
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
                    <h4 class="card-title">Update Accessory</h4>
                  </div>
                  <div class="card-body">
                      <?php
                    	require_once '../../includes/dbconnect.php';
                    	$access_id=$_GET['access_id'];
                    	$sql="select * from accessories where access_id='$access_id'" ;
                    	$array=mysqli_query($connect,$sql);
                    	$access=mysqli_fetch_array($array);
                    	?>
                    <form action="processupdate.php" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                              <input type="hidden" name="access_id" value="<?php echo $access['access_id'] ?>">
                            <label class="bmd-label-floating"><?php echo $access['access_title'] ?></label>
                            <input type="text" name="access_title" class="form-control" value="">
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
