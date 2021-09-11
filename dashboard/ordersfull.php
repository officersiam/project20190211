<?php
    $p = $_GET['p'];
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Full Order View</h1><hr/>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="ordersfull.php?p=<?php echo $p; ?>">

      <?php echo display_error(); ?>
      <p style="color:#000"><b>ID:</b> <?php echo $p; ?><input type="text" name="id" style="color: #000" value="<?php echo $p; ?>" hidden></p>
<?php
$query = $db->query("SELECT * FROM orders WHERE id='$p' ");
$count = mysqli_num_rows($query);
if ($count == 0) {
  echo "No Result!";
 }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $page = $row['page'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $link = $row['link'];
        $product = $row['product'];
        $method = $row['method'];
        $transcode = $row['transcode'];
        $status = $row['status'];
        $file = $row['file'];
        $comment = $row['comment'];
        $date = $row['date'];
?>
      <p style="color:#000"><b>Page:</b> <?php echo $page; ?><input type="text" name="page" style="color: #000" value="<?php echo $page; ?>" hidden></p>
      <p style="color:#000"><b>Client Name:</b> <?php echo $name; ?><input type="text" name="name" style="color: #000" value="<?php echo $name; ?>" hidden></p>
      <p style="color:#000"><b>Client Email:</b> <?php echo $email; ?><input type="text" name="email" style="color: #000" value="<?php echo $email; ?>" hidden></p>
      <p style="color:#000"><b>Client Phone Number:</b> <?php echo $phone; ?><input type="text" name="phone" style="color: #000" value="<?php echo $phone; ?>" hidden></p>
      <p style="color:#000"><b>Client Address:</b> <?php echo $address; ?><input type="text" name="address" style="color: #000" value="<?php echo $address; ?>" hidden></p>
      <p style="color:#000"><b>Client Link:</b> <?php echo $link; ?><input type="text" name="link" style="color: #000" value="<?php echo $link; ?>" hidden></p>
      <p style="color:#000"><b>Client Product:</b> <?php echo $product; ?><input type="text" name="product" style="color: #000" value="<?php echo $product; ?>" hidden></p>
      <p style="color:#000"><b>Payment Method:</b> <?php echo $method; ?><input type="text" name="method" style="color: #000" value="<?php echo $method; ?>" hidden></p>
      <p style="color:#000"><b>Transaction Code:</b> <?php echo $transcode; ?><input type="text" name="transcode" style="color: #000" value="<?php echo $transcode; ?>" hidden></p>
      <p style="color:#000"><b>Order Date:</b> <?php echo $date; ?></p>
      <p style="color:#000"><b>Delivery Comment:</b> <?php echo $comment; ?></p>
      <p style="color:#000"><b>Delivery File:</b> <a href="../delivery/file/<?php echo $file; ?>">click here</a></p>
<?php
  if (isAdmin()) {
?>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><b>Order Status</b></label>
            <select name="status" class="form-control">
                <option value="">Your Currnet Status is <?php echo $status; ?></option>
                <option value="pending">Pending</option>
                <option value="accept">Working</option>
                <option value="done">Done</option>
                <option value="cancel">Cancel</option>
            </select>
        </div>
      <label for="inputFile">File</label>
      <input type="file" name="file" class="form-control-file"><br/>
      <label for="inputPassword"><b>Comment:</b></label>
      <textarea type="text" name="comment" class="form-control"></textarea><br/>
      <button class="btn btn-lg btn-primary btn-block" name="ordersfull" type="submit">Comment</button>

    <?php } } } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>