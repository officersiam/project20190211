<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pages</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="page.php">

      <?php echo display_error(); ?>
      <table class="table table-striped table-lg">
        <thead>
          <tr>
            <th>id</th>
            <th>page</th>
            <th>title</th>
            <th>seo title</th>
            <th>seo discription</th>
            <th>seo keyword</th>
            <th>discription</th>
            <th>date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM page ORDER BY id DESC LIMIT 1");
$count = mysqli_num_rows($query);
if ($count == 0) { }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $page = $row['page'];
        $title = $row['title'];
        $seo_title = $row['seo_title'];
        $seo_discription = $row['seo_discription'];
        $seo_keyword = $row['seo_keyword'];
        $discription = $row['discription'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $page; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $seo_title; ?></td>
            <td><?php echo $seo_discription; ?></td>
            <td><?php echo $seo_keyword; ?></td>
            <td><?php echo $discription; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>

<?php
$query = $db->query("SELECT * FROM page ORDER BY id DESC LIMIT 1");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Page Details</h1>
      <label for="inputUsername">Page</label>
      <select name="page" class="custom-select d-block w-100">
        <option value="about">About Us</option>
        <option value="terms">Terms & Conditions</option>
        <option value="privacy">Privacy & Policies</option>
      </select><br/>
      <label for="inputUsername">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Title"><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <label for="inputUsername">Discription</label>
      <textarea type="text" id="editor" style="height:300px;" name="discription" class="form-control" placeholder="Discription"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="pages" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">Page Details</h1>
      <label for="inputUsername">Page</label>
      <select name="page" class="custom-select d-block w-100">
        <option value="about">About Us</option>
        <option value="terms">Terms & Conditions</option>
        <option value="privacy">Privacy & Policies</option>
      </select><br/>
      <label for="inputUsername">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Title"><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <label for="inputUsername">Discription</label>
      <textarea type="text" id="editor" style="height:300px;" name="discription" class="form-control" placeholder="Discription"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="pages" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>