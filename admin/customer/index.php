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
            <a class="navbar-brand" href="javascript:;">Customers Manage</a>
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
                              <h4 class="card-title ">Customers</h4>
                          </div>
                          <div class="col-md-2">
                              <a href="add.php">
                                  <h5 class="card-category">Add Customer + </h5>
                              </a>
                          </div>
                      </div>
                  </div>
              <?php
              	require_once '../../includes/dbconnect.php';
              	$sql="select * from customer " ;
              	$array_customer=mysqli_query($connect,$sql);
              	?>
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
                              Email
                          </th>
                          <th>
                              Phone Number
                          </th>
                          <th>
                              Gender
                          </th>
                          <th>
                              Address
                          </th>
                          <th>
                              Action
                          </th>
                        </thead>

                        <tbody>
                            <?php foreach ($array_customer as $customer): ?>
                          <tr>
                            <td>
                              <?php echo $customer['customer_id'] ?>
                            </td>
                            <td>
                              <?php echo $customer['first_name'] ?> &nbsp; <?php echo $customer['last_name'] ?>
                            </td>
                            <td>
                              <?php echo $customer['customer_email'] ?>
                            </td>
                            <td>
                              <?php echo $customer['customer_tel'] ?>
                            </td>
                            <td>
                                <?php if ($customer['customer_gender']==1
                                    ) {
                                      echo "Nam";
                                    } else {
                                      echo "Nữ";
                                    }
                                     ?>
                            </td>
                            <td>
  			                  <?php echo $customer['customer_address'] ?>
                            </td>
                            <td>
                                <a href="update.php?customer_id=<?php echo $customer['customer_id']?>">Sửa</a>/
                                <a href="delete.php?customer_id=<?php echo $customer['customer_id']?>">Xóa</a>
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
