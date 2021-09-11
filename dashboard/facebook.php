<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Facebook</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="facebook.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Facebook Name</th>
            <th>Facebook Details</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM facebook ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $details = $row['details'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM facebook ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Facebook List</h1>
      <label for="inputUsername">Facebook Title</label>
      <input type="text" name="title" class="form-control" placeholder="Facebook Title"><br/>
      <label for="inputUsername">Facebook Name</label>
      <input type="text" name="name" class="form-control" placeholder="Facebook Name"><br/>
      <label for="inputUsername">Facebook Details</label>
      <textarea type="text" name="details" class="form-control" placeholder="Facebook Details"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="facebook" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">Facebook List</h1>
      <label for="inputUsername">Facebook Title</label>
      <input type="text" name="title" class="form-control" placeholder="Facebook Title"><br/>
      <label for="inputUsername">Facebook Name</label>
      <input type="text" name="name" class="form-control" placeholder="Facebook Name"><br/>
      <label for="inputUsername">Facebook Details</label>
      <textarea type="text" name="details" class="form-control" placeholder="Facebook Details"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="facebook" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>