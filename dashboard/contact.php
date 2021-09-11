<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Contact SEO Page</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="contact.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>SEO Title</th>
            <th>SEO Discription</th>
            <th>SEO Keyword</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM contact ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $seo_title = $row['seo_title'];
        $seo_discription = $row['seo_discription'];
        $seo_keyword = $row['seo_keyword'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $seo_title; ?></td>
            <td><?php echo $seo_discription; ?></td>
            <td><?php echo $seo_keyword; ?></td>
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
    <h1 class="h3 mb-3 font-weight-normal">List</h1>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="contactseo" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">List</h1>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="contactseo" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>