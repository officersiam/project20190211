<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Sliders</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="slider.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>image</th>
            <th>title</th>
            <th>discription</th>
            <th>link</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM slider ORDER BY id DESC LIMIT 3");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Slider</h1>
      <label for="inputUsername">Slider Image</label>
      <input type="file" name="sliderimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">Slider Title</label>
      <input type="text" name="slidertitle" class="form-control" placeholder="Slider Title"><br/>
      <label for="inputUsername">Slider Discription</label>
      <input type="text" name="sliderdiscription" class="form-control" placeholder="Slider Discription"><br/>
      <label for="inputUsername">Slider Link</label>
      <input type="text" name="sliderlink" class="form-control" placeholder="Slider Link"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="slider" type="submit">Done</button>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $sliderimg = $row['sliderimg'];
        $slidertitle = $row['slidertitle'];
        $sliderdiscription = $row['sliderdiscription'];
        $sliderlink = $row['sliderlink'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="../img/banner/<?php echo $sliderimg; ?>" class="img-fluid" alt="" width="60px"></td>
            <td><?php echo $slidertitle; ?></td>
            <td><?php echo $sliderdiscription; ?></td>
            <td><?php echo $sliderlink; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM slider ORDER BY id DESC LIMIT 3");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Slider</h1>
      <label for="inputUsername">Slider Image</label>
      <input type="file" name="sliderimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">Slider Title</label>
      <input type="text" name="slidertitle" class="form-control" placeholder="Slider Title"><br/>
      <label for="inputUsername">Slider Discription</label>
      <input type="text" name="sliderdiscription" class="form-control" placeholder="Slider Discription"><br/>
      <label for="inputUsername">Slider Link</label>
      <input type="text" name="sliderlink" class="form-control" placeholder="Slider Link"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="slider" type="submit">Done</button>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $sliderimg = $row['sliderimg'];
        $slidertitle = $row['slidertitle'];
        $sliderdiscription = $row['sliderdiscription'];
        $sliderlink = $row['sliderlink'];
?>
      <h1 class="h3 mb-3 font-weight-normal">Slider</h1>
      <label for="inputUsername">Site Logo</label>
      <input type="file" name="sliderimg" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">Slider Title</label>
      <input type="text" name="slidertitle" class="form-control" placeholder="Slider Title"><br/>
      <label for="inputUsername">Slider Discription</label>
      <input type="text" name="sliderdiscription" class="form-control" placeholder="Slider Discription"><br/>
      <label for="inputUsername">Slider Link</label>
      <input type="text" name="sliderlink" class="form-control" placeholder="Slider Link"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="slider" type="submit">Done</button>
    <?php } } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>