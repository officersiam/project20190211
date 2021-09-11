<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Top-Up Wallet (<span style="text-decoration:underline">Just Login To Your Account And Send Money To Us</span>):</h1>
            <div class="topup" style="margin-top:50px;margin-bottom:50px">
          <form class="form-signin" method="post" enctype="multipart/form-data" action="index.php">
          <div class="row">
            <div class="col-lg-12">
              <ul style="margin:0;padding:0;list-style:none">
          <?php
          $res = $db->query("SELECT * FROM payment ORDER BY id") or die('could not search!');
          while($row=$res->fetch_array()){
                  $method = $row['method'];
                  $address = $row['address'];
          ?>

                  <li style="color:#000;font-weight:bold;font-size:18px"><input class="uk-radio" type="radio" name="method" value='<?php echo $method; ?>'> <?php echo $method; ?> <span style="color:#466CD9;font-weight:none">(<?php echo $address; ?>)</span></li>
          <?php } ?>
              </ul>
            </div>
          </div>
            <p>
            <div class="mb-12">
                <label for="code">Top-Up Amount:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Balance" required>
                <label for="code">Transaction Code:</label>
                <input type="text" class="form-control" id="transcode" name="transcode" placeholder="Transaction Code" required>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['user']['username']; ?>" hidden>
            </div><br/>
            <button class="btn btn-primary btn-lg btn-block" name="topup" type="submit">Top - Up</button><br/><br/><br/>
          </form>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>