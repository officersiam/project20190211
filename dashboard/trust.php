<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Trust</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="trust.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>image</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM trust ORDER BY id DESC");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Trust</h1>
      <label for="inputUsername">Trust Image</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="trust" type="submit">Done</button>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $img = $row['img'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="../img/trust/<?php echo $img; ?>" class="img-fluid" alt="" width="60px"></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM trust ORDER BY id DESC LIMIT 1");
$count = mysqli_num_rows($query);
if ($count == 0) {  }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $img = $row['img'];
?>
    <h1 class="h3 mb-3 font-weight-normal">Trust</h1>
      <label for="inputUsername">Trust Image</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="trust" type="submit">Done</button>
    <?php } } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>