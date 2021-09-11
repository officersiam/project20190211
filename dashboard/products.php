<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Products</h1>
          <form class="form-signin" method="post" enctype="multipart/form-data" action="products.php">

      <?php echo display_error(); ?>
      <div class="table-responsive">
        <table class="table table-striped table-md">
          <thead>
            <tr>
              <th>id</th>
              <th>image</th>
              <th>seo_title</th>
              <th>seo_keyword</th>
              <th>seo_discription</th>
              <th>name</th>
              <th>details</th>
              <th>price</th>
              <th>date</th>
            </tr>
          </thead>
          <tbody>

  <?php
  $query = $db->query("SELECT * FROM products ORDER BY id");
  $count = mysqli_num_rows($query);
      while ($row = mysqli_fetch_array($query)) {
          $id = $row['id'];
          $img = $row['img'];
          $seo_title = $row['seo_title'];
          $seo_keyword = $row['seo_keyword'];
          $seo_discription = $row['seo_discription'];
          $name = $row['name'];
          $details = $row['details'];
          $price = $row['price'];
          $date = $row['date'];
  ?>
            <tr>
              <td><?php echo $id; ?></td>
              <td><img src="../img/products/<?php echo $img; ?>" class="img-fluid" alt="" width="60px"></td>
              <td><?php echo $seo_title; ?></td>
              <td><?php echo $seo_keyword; ?></td>
              <td><?php echo $seo_discription; ?></td>
              <td><?php echo $name; ?></td>
              <td><?php echo $details; ?></td>
              <td><?php echo $price; ?></td>
              <td><?php echo $date; ?></td>
            </tr>
      <?php } ?>
          </tbody>
        </table>
      </div>

<?php
$query = $db->query("SELECT * FROM products ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
      <label for="inputUsername">Image</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Keywords</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <textarea type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"></textarea><br/>
      <label for="inputUsername">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Name"><br/>
      <label for="inputUsername">Price</label>
      <input type="text" name="price" class="form-control" placeholder="Price"><br/>
      <label for="inputUsername">Details</label>
      <textarea type="text" id="editor" style="height:300px;" name="details" class="form-control" placeholder="Details"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="products" type="submit">Done</button>
<?php }else{
?>
      <label for="inputUsername">Image</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Keywords</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <textarea type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"></textarea><br/>
      <label for="inputUsername">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Name"><br/>
      <label for="inputUsername">Price</label>
      <input type="text" name="price" class="form-control" placeholder="Price"><br/>
      <label for="inputUsername">Details</label>
      <textarea type="text" id="editor" style="height:300px;" name="details" class="form-control" placeholder="Details"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="products" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>