<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Youtube</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="youtube.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Youtube Name</th>
            <th>Youtube Details</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM youtube ORDER BY id");
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
$query = $db->query("SELECT * FROM youtube ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Youtube List</h1>
      <label for="inputUsername">Youtube Title</label>
      <input type="text" name="title" class="form-control" placeholder="Youtube Title"><br/>
      <label for="inputUsername">Youtube Name</label>
      <input type="text" name="name" class="form-control" placeholder="Youtube Name"><br/>
      <label for="inputUsername">Youtube Details</label>
      <textarea type="text" name="details" class="form-control" placeholder="Youtube Details"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="youtube" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">Youtube List</h1>
      <label for="inputUsername">Youtube Title</label>
      <input type="text" name="title" class="form-control" placeholder="Youtube Title"><br/>
      <label for="inputUsername">Youtube Name</label>
      <input type="text" name="name" class="form-control" placeholder="Youtube Name"><br/>
      <label for="inputUsername">Youtube Details</label>
      <textarea type="text" name="details" class="form-control" placeholder="Youtube Details"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="youtube" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>