<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">About</h1>
          <form class="form-signin" method="post" enctype="multipart/form-data" action="about.php">

      <?php echo display_error(); ?>
      <table class="table table-striped table-sm table-responsive">
        <thead>
          <tr>
            <th>id</th>
            <th>image</th>
            <th>title</th>
            <th>discription</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM about ORDER BY id DESC LIMIT 1");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">About</h1>
      <label for="inputUsername">About Image</label>
      <input type="file" name="aboutimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">About Title</label>
      <input type="text" name="abouttitle" class="form-control" placeholder="About Title"><br/>
      <label for="inputUsername">About Discription</label>
      <textarea type="text" name="aboutdiscription" class="form-control" placeholder="About Discription"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="about" type="submit">Done</button>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $aboutimg = $row['aboutimg'];
        $abouttitle = $row['abouttitle'];
        $aboutdiscription = $row['aboutdiscription'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="../img/about/<?php echo $aboutimg; ?>" class="img-fluid" alt="" width="60px"></td>
            <td><?php echo $abouttitle; ?></td>
            <td><?php echo $aboutdiscription; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>

<?php
$query = $db->query("SELECT * FROM about ORDER BY id DESC LIMIT 1");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Slider</h1>
      <label for="inputUsername">About Image</label>
      <input type="file" name="aboutimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">About Title</label>
      <input type="text" name="abouttitle" class="form-control" placeholder="About Title"><br/>
      <label for="inputUsername">About Discription</label>
      <textarea type="text" name="aboutdiscription" class="form-control" placeholder="About Discription"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="about" type="submit">Done</button>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $aboutimg = $row['aboutimg'];
        $abouttitle = $row['abouttitle'];
        $aboutdiscription = $row['aboutdiscription'];
?>
    <h1 class="h3 mb-3 font-weight-normal">Slider</h1>
      <label for="inputUsername">About Image</label>
      <input type="file" name="aboutimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">About Title</label>
      <input type="text" name="abouttitle" class="form-control" value="<?php echo $abouttitle; ?>" placeholder="About Title"><br/>
      <label for="inputUsername">About Discription</label>
      <textarea type="text" name="aboutdiscription" class="form-control" placeholder="About Discription"><?php echo $aboutdiscription; ?></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="about" type="submit">Done</button>
    <?php } } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>