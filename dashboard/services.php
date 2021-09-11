<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Service</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="services.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Service Title</th>
            <th>Service Name</th>
            <th>Service Value</th>
            <th>SEO Title</th>
            <th>SEO Discription</th>
            <th>SEO Keyword</th>
            <th>Service Discription</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM services ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $title = $row['title'];
        $name = $row['name'];
        $details = $row['details'];
        $seo_title = $row['seo_title'];
        $seo_discription = $row['seo_discription'];
        $seo_keyword = $row['seo_keyword'];
        $discription = $row['discription'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $seo_title; ?></td>
            <td><?php echo $seo_discription; ?></td>
            <td><?php echo $seo_keyword; ?></td>
            <td><?php echo $discription; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM services ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Service List</h1>
      <label for="inputUsername">Service Title</label>
      <input type="text" name="title" class="form-control" placeholder="Service Title"><br/>
      <label for="inputUsername">Service Name</label>
      <input type="text" name="name" class="form-control" placeholder="Service Name"><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <label for="inputUsername">Service Value</label>
      <textarea type="text" name="details" class="form-control" placeholder="Service Details"></textarea><br/>
      <label for="inputUsername">Discription</label>
      <textarea type="text" id="editor" style="height:300px;" name="discription" class="form-control" placeholder="Discription"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="service" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">Service List</h1>
      <label for="inputUsername">Service Title</label>
      <input type="text" name="title" class="form-control" placeholder="Service Title"><br/>
      <label for="inputUsername">Service Name</label>
      <input type="text" name="name" class="form-control" placeholder="Service Name"><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <label for="inputUsername">Service Value</label>
      <textarea type="text" name="details" class="form-control" placeholder="Service Details"></textarea><br/>
      <label for="inputUsername">Discription</label>
      <textarea type="text" id="editor" style="height:300px;" name="discription" class="form-control" placeholder="Discription"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="service" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>