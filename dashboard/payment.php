<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Payment Methods</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="payment.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>ID</th>
            <th>IMG</th>
            <th>Method</th>
            <th>Details</th>
            <th>Address</th>
            <th>Date</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM payment ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $img = $row['img'];
        $method = $row['method'];
        $details = $row['details'];
        $address = $row['address'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="../img/payment/<?php echo $img; ?>" alt=""></td>
            <td><?php echo $method; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $date; ?></td>
            <td>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="edit">Edit</button>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="delete">Delete</button>
            </td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM payment ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Payment Method</h1>
      <label for="inputUsername">Image</label>
      <input type="file" name="payimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">Method</label>
      <input type="text" name="method" class="form-control" placeholder="Payment Method"><br/>
      <label for="inputUsername">Details</label>
      <textarea type="text" id="editor" name="details" class="form-control" style="height:300px;"></textarea><br/>
      <label for="inputCategory">Address</label>
      <input type="text" name="address" class="form-control" placeholder="Address"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="payment" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">Payment Method</h1>
      <label for="inputUsername">Image</label>
      <input type="file" name="payimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">Method</label>
      <input type="text" name="method" class="form-control" placeholder="Payment Method"><br/>
      <label for="inputUsername">Details</label>
      <textarea type="text" id="editor" name="details" class="form-control" style="height:300px;"></textarea><br/>
      <label for="inputCategory">Address</label>
      <input type="text" name="address" class="form-control" placeholder="Address"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="payment" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>