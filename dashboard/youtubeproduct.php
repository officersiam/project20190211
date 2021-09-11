<?php
  include ('header.php');
    $p = $_GET['p'];
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Youtube</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="<?php echo $p; ?>.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Value</th>
            <th>Date</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM $p ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $amount = $row['amount'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $amount; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM $p ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
      <label for="inputUsername">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Name"><br/>
      <label for="inputUsername">Amount</label>
      <input type="text" name="amount" class="form-control" placeholder="Amount"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="<?php echo $p; ?>" type="submit">Done</button>
<?php }else{
?>
      <label for="inputUsername">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Name"><br/>
      <label for="inputUsername">Amount</label>
      <input type="text" name="amount" class="form-control" placeholder="Amount"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="<?php echo $p; ?>" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>