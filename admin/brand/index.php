 <?php require_once 'header.php'; ?>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="" class="simple-text logo-normal">
          Film Cameras | Admin
        </a></div>
      <div class="sidebar-wrapper">
         <?php require_once 'sidebar.php' ?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Brands Manage</a>
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
                <input type="text" value="" class="form-control" placeholder="Search...">
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
                              <h4 class="card-title ">Brands</h4>
                          </div>
                          <div class="col-md-2">
                              <a href="add.php">
                                  <h5 class="card-category">Add Brand + </h5>
                              </a>
                          </div>
                      </div>
                      <?php
                      require_once '../../includes/dbconnect.php';
                      $sql= "select * from brands ";
                      $array_brand =mysqli_query($connect,$sql);

                      ?>
                  </div>
                  <div class="card-body">
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
                             Action
                          </th>
                        </thead>
                        <tbody>
                            <?php foreach ($array_brand as $brand): ?>
                            <tr>
                                <td><?php echo $brand['brand_id']?></td>
                                <td><?php echo $brand['brand_title']?></td>
                                <td>
                                    <a href="update.php?brand_id=<?php echo $brand['brand_id']?>">Sửa</a>/
                                    <a href="delete.php?brand_id=<?php echo $brand['brand_id']?>">Xóa</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                      </table>
                      <?php mysqli_close($connect); ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
<?php require_once 'footer.php'; ?>
