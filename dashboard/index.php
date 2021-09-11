<?php include('header.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

<?php
  if (isAdmin()) {
?>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
<?php
$query = $db->query("SELECT * FROM users ORDER BY id DESC");
$count = mysqli_num_rows($query);
?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Orders</div>
                      <?php
$query = $db->query("SELECT * FROM orders ORDER BY id DESC");
$count = mysqli_num_rows($query);
?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mails</div>
                      <?php
$query = $db->query("SELECT * FROM mail ORDER BY id DESC");
$count = mysqli_num_rows($query);
?>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Orders</div>
                      <?php
$query = $db->query("SELECT * FROM orders WHERE status='pending' ");
$count = mysqli_num_rows($query);
?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php }else{ ?>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Wallet</div>
                      <?php
        $user = $_SESSION['user']['username'];
$query = $db->query("SELECT * FROM wallet WHERE name='$user' ");
$count = mysqli_num_rows($query);
?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <?php
        $user = $_SESSION['user']['username'];
$query = $db->query("SELECT * FROM orders WHERE name='$user' ");
$count = mysqli_num_rows($query);
?>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ordered</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-bag fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mails</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Comming</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <?php
                      $user = $_SESSION['user']['username'];
                      $query = $db->query("SELECT status='pending' FROM orders WHERE status='pending' ORDER BY name='$user' ");
                        $count = mysqli_num_rows($query);
                      ?>
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php } ?>
<?php
  if (isAdmin()) {
?>
          <div class="row">
            <div class="table-responsive">
              <table class="table table-striped table-lg" style="border: 2px solid rebeccapurple;">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Page</th>
                    <th>Name</th>
                    <th>Product</th>
                    <th>Payment Address</th>
                    <th>Transcode</th>
                    <th>Status</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
        <?php
        $query = $db->query("SELECT * FROM orders ORDER BY id DESC");
        $count = mysqli_num_rows($query);
        if ($count == 0) {
          echo "No Result!";
         }else{
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $page = $row['page'];
                $name = $row['name'];
                $product = $row['product'];
                $method = $row['method'];
                $transcode = $row['transcode'];
                $status = $row['status'];
        ?>
                  <tr>
                    <td style="border: 1px solid royalblue;"><?php echo $id; ?></td>
                    <td style="border: 1px solid royalblue;"><?php echo $page; ?></td>
                    <td style="border: 1px solid royalblue;"><?php echo $name; ?></td>
                    <td style="border: 1px solid royalblue;"><?php echo $product; ?></td>
                    <td style="border: 1px solid royalblue;"><?php echo $method; ?></td>
                    <td style="border: 1px solid royalblue;"><?php echo $transcode; ?></td>
                    <td style="border: 1px solid royalblue;">
                        <?php
                            if ($status == 'cancel') {
                                echo "<span class='uk-label uk-label-danger'>Cancel</span>";
                            }elseif ($status == 'accept') {
                                echo "<span class='uk-label'>Working</span>";
                            }elseif ($status == 'done') {
                                echo "<span class='uk-label uk-label-success'>Done</span>";
                            }else{
                                echo "<span class='uk-label uk-label-warning'>Pending</span>";
                            }
                        ?>
                    </td>
                    <td><a class="click" href="ordersfull.php?p=<?php echo $id; ?>"><i class="fa fa-eye"></i></a></td>
                  </tr>
            <?php } } ?>
                </tbody>
              </table>
            </div>
          </div>
<?php }else{?>

          <div class="row">
            <div class="table-responsive">
              <table class="table table-striped table-lg" style="border: 2px solid rebeccapurple;">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
        <?php
        $query = $db->query("SELECT * FROM orders WHERE name='$user'");
        $count = mysqli_num_rows($query);
        if ($count == 0) {
          echo "No Result!";
         }else{
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $product = $row['product'];
                $status = $row['status'];
                $date = $row['date'];
        ?>
                  <tr>
                    <td style="border: 1px solid royalblue;"><?php echo $id; ?></td>
                    <td style="border: 1px solid royalblue;"><?php echo $product; ?></td>
                    <td style="border: 1px solid royalblue;">
                        <?php
                            if ($status == 'cancel') {
                                echo "<span class='uk-label uk-label-danger'>Cancel</span>";
                            }elseif ($status == 'accept') {
                                echo "<span class='uk-label'>Working</span>";
                            }elseif ($status == 'done') {
                                echo "<span class='uk-label uk-label-success'>Done</span>";
                            }else{
                                echo "<span class='uk-label uk-label-warning'>Pending</span>";
                            }
                        ?>
                    </td>
                    <td><?php echo $date; ?></td>
                    <td><a class="click" href="ordersfull.php?p=<?php echo $id; ?>"><i class="fa fa-eye"></i></a></td>
                  </tr>
            <?php } } ?>
                </tbody>
              </table>
            </div>
          </div>
<?php  } ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<?php include('footer.php'); ?>