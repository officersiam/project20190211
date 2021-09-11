<?php
    include ('header.inc.php');
    $p = $_GET['p'];
?>

    <div class="container">
      <div class="py-5 text-center">
        <div class="title">
            <h3>Order</h3>
                <?php
                $res = $db->query("SELECT * FROM pricing WHERE title='$p';");
                while($row=$res->fetch_array()){
                  $name = $row['name'];
                  $amount = $row['amount']; ?>
            <p style="font-weight:bold">you choose <?php echo $name; ?> plan for just only <?php echo $amount; ?> Dollars</p>
                <?php } ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <form class="form-signin" method="post" enctype="multipart/form-data" action="success.php">
            <div class="mb-12">
                <label for="Name">Full Name</label>
                <input type="text" class="form-control" id="lastName" name="name" placeholder="Your Full Name" required>
            </div>

            <div class="mb-3">
              <label for="username">Phone Number</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="tel" class="form-control" id="number" name="phone" placeholder="Phone Number" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="address">Address & Location</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Address & Location" required>
            </div>
                <label for="link">Your Site Link</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Your Site Link" required>
                <?php
                $res = $db->query("SELECT * FROM pricing WHERE title='$p';");
                while($row=$res->fetch_array()){
                  $name = $row['name'];
                  $amount = $row['amount']; ?>
                <input type="text" class="form-control" name="product" value="you choose <?php echo $name; ?> plan for just only <?php echo $amount; ?> Dollars" hidden>
                <?php } ?>
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
                                  <h3><img src="img/payment/<?php echo $img; ?>" alt="" style="width:135px;height: 65px;"></h3>
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
            <button class="btn btn-primary btn-lg btn-block" name="orderservice" type="submit">Order</button><br/><br/><br/>
          </form>
        </div>
      </div>
    </div>

<?php
    include ('footer.inc.php');
?>