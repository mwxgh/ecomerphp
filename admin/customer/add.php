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
            <a class="navbar-brand" href="javascript:;">Customers Manage</a>
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
                    <h4 class="card-title">Add Customer</h4>
                  </div>
                  <div class="card-body">
                    <form action="processadd.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input type="email" name="email" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Password</label>
                            <input type="password" name="password" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Telephone Number</label>
                            <input type="number" name="telnum" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Gender</label> &emsp;
                                <input type="radio" name="gender" value="1" checked> Male &emsp;
		                        <input type="radio" name="gender" value="0"> Female
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
                            <label>Address</label>
                            <div class="form-group">
                              <label class="bmd-label-floating"> Detail address for easy contact</label>
                              <textarea class="form-control" name="address" rows="6"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary pull-right">Add</button>
                      <div class="clearfix"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
     <?php require_once 'footer.php'; ?>
