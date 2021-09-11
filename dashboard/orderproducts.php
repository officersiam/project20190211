<?php
    $p = $_GET['id'];
?>
<?php
  include ('header.php');
?>

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/uikit.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="col-md-12 order-md-1" style="margin-top:100px">
          <form class="form-signin" method="post" enctype="multipart/form-data" action="">
                <?php  if (isset($_SESSION['user'])) :
                       $user = $_SESSION['user']['username'];
                 endif ?>
            <div class="mb-12">
                <label for="Name"><b>Full Name:</b> <?php echo $user; ?></label>
                <input type="text" class="form-control" id="lastName" name="name" value="<?php echo $user; ?>" hidden>
            </div>

<?php
$query = $db->query("SELECT * FROM users WHERE username='$user' ");
    while ($row = mysqli_fetch_array($query)) {
        $phone = $row['phone'];
?>
            <div class="mb-3">
              <label for="username"><b>Phone Number:</b> <?php echo $phone; ?></label>
              <div class="input-group">
                <input type="tel" class="form-control" id="number" name="phone" value="<?php echo $phone; ?>" hidden>
              </div>
            </div>

    <?php } ?>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="address">Address & Location</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Address & Location" required>
            </div>
            <hr class="uk-divider-icon">
                <label for="product">Product</label>
                <select name="product" class="custom-select d-block w-100" id="product" required>
<?php
$query = $db->query("SELECT * FROM products ORDER BY id");
    while ($row = mysqli_fetch_array($query)) {
        $name = $row['name'];
        $price = $row['price'];
?>
                  <option value="<?php echo $name; ?> for just only <?php echo $price; ?>"><?php echo $name; ?> for just only <?php echo $price; ?></option>
    <?php } ?>
                </select>
            <hr class="mb-4">
          <div class="row">
            <div class="col-lg-12">
              <ul class="uk-tab" uk-switcher="animation: uk-animation-fade">
                <?php
                $res = $db->query("SELECT * FROM payment ORDER BY id") or die('could not search!');
                while($row=$res->fetch_array()){
                        $img = $row['img'];
                ?>
                        <li><a href="#">
                          <div class="card mb-5 mb-lg-0" style="background:#009688">
                            <div class="text-center">
                                <div class="uk-padding">
                                  <h3><img src="../img/payment/<?php echo $img; ?>" alt="" style="width:135px;height: 65px;"></h3>
                                </div>
                              </div>
                          </div>
                        </a></li>
                <?php } ?>
              </ul>
              <ul class="uk-switcher uk-margin">
          <?php
          $res = $db->query("SELECT * FROM payment ORDER BY id") or die('could not search!');
          while($row=$res->fetch_array()){
                  $method = $row['method'];
                  $details = $row['details'];
                  $address = $row['address'];
          ?>

                  <li>
                    <div class="col-md-12 pull-left" style="margin-bottom:50px">
                      <div class="card mb-5 mb-lg-0">
                        <div class="pages_card text-center">
                          <div class="uk-padding">
                              <h3><?php echo $method; ?></h3>
                              <h4><?php echo $details; ?></h4>
                              <h5><div class="toolt"><span class="tooltiptext">Checkbox</span>
                              <input class="uk-radio" type="radio" name="method" value='<?php echo $method; ?>: <?php echo $address; ?>'>
                              </div>
                              Address: <?php echo $address; ?> <span style="color:red">[Must Click The Checkbox, Which You Want For Payment]</span></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
          <?php } ?>
              </ul>
            </div>
          </div>
            <p>
            <div class="mb-12">
                <label for="code">Transaction Details</label>
                <input type="text" class="form-control" id="transcode" name="transcode" placeholder="Transaction Details" required>
            </div><br/>
            <button class="btn btn-primary btn-lg btn-block" name="orderproduct" type="submit">Order</button><br/><br/><br/>
          </form>
        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>