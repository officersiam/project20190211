<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Orders</h1>
<div class="row">
    <div class="table-responsive">
      <table class="table table-striped table-lg" style="border: 2px solid rebeccapurple;">
        <thead>
          <tr>
            <th>ID</th>
            <th>Page</th>
            <th>Name</th>
            <th>Product</th>
            <th>Payment Address</th>
            <th>Transcode</th>
            <th>Status</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
<?php
$query = $db->query("SELECT * FROM orders ORDER BY id DESC");
$count = mysqli_num_rows($query);
if ($count == 0) {
  echo "No Result!";
 }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $page = $row['page'];
        $name = $row['name'];
        $product = $row['product'];
        $method = $row['method'];
        $transcode = $row['transcode'];
        $status = $row['status'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $page; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $product; ?></td>
            <td><?php echo $method; ?></td>
            <td><?php echo $transcode; ?></td>
            <td>
                <?php
                    if ($status == 'cancel') {
                        echo "<span class='uk-label uk-label-danger'>Cancel</span>";
                    }elseif ($status == 'accept') {
                        echo "<span class='uk-label'>Working</span>";
                    }elseif ($status == 'done') {
                        echo "<span class='uk-label uk-label-success'>Done</span>";
                    }else{
                        echo "<span class='uk-label uk-label-warning'>Pending</span>";
                    }
                ?>
            </td>
            <td><a class="click" href="ordersfull.php?p=<?php echo $id; ?>"><i class="fa fa-eye"></i></a></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>
</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>