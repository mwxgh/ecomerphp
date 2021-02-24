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
            <a class="navbar-brand" href="javascript:;">Staff Manage</a>
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
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Update Profile Staff</h4>
                      <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <?php
                    	require_once '../../includes/dbconnect.php';
                    	$staff_id=$_GET['staff_id'];
                    	$sql="select * from staff where staff_id='$staff_id'" ;
                    	$array=mysqli_query($connect,$sql);
                    	$staff=mysqli_fetch_array($array);
                    	?>
                        <form action="processupdate.php" method="post" enctype="multipart/form-data">
                          <div class="row">
                              <input type="hidden" name="staff_id" value="<?php echo $staff['staff_id'] ?>">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">First Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo $staff['first_name'] ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Last Name</label>
                                <input type="text" name="last_name" class="form-control"  value="<?php echo $staff['last_name'] ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input type="email" name="email" class="form-control"  value="<?php echo $staff['staff_email'] ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="bmd-label-floating">Phone Number</label>
                                <input type="number" name="telnum" class="form-control"  value="<?php echo $staff['staff_tel'] ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Gender</label> &emsp;
                                    <input type="radio" name="gender" value="1" <?php if ($staff['staff_gender']==1)echo "checked"?>> Male &emsp;
    		                        <input type="radio" name="gender" value="0" <?php if ($staff['staff_gender']==0)echo "checked"?>> Female
                              </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-6">
                              <div class="">
                                 <label class="bmd-label-floating">Former Image Profile</label> &emsp;
                                    <img src="../../images/<?php echo $staff['image'] ?>" height='200'>
                                   <input type="hidden" name="preimages" value="<?php echo $staff['image'] ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="">
                                 <label class="bmd-label-floating">New Image Profile</label> &emsp;
                                   <input type="file" name="newimages" accept="images/*">
                              </div>
                            </div>
                          </div> -->
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Address</label>
                                <div class="form-group">
                                  <!-- <label class="bmd-label-floating"></label> -->
                                  <textarea class="form-control" name="address" rows="6" value="<?php echo $staff['staff_address'] ?>" ></textarea>
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
                <div class="col-md-4">
                  <div class="card card-profile">
                    <div class="card-avatar">
                      <a href="javascript:;">
                        <img class="img" src="assets/img/faces/marc.jpg" />
                      </a>
                    </div>
                    <div class="card-body">
                      <h6 class="card-category text-gray"><?php echo $staff['first_name'] ?> <?php echo $staff['last_name'] ?></h6>
                      <h4 class="card-title"><?php echo $staff['staff_email'] ?></h4>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
<?php require_once 'footer.php'; ?>
