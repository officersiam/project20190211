<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Orders</h1>
    <div class="table-responsive">
      <table class="table table-striped table-lg" style="border: 2px solid rebeccapurple;">
        <thead>
          <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Status</th>
            <th>Date</th>
            <th>View</th>
          </tr>
        </thead>
        <tbody>
<?php
        $user = $_SESSION['user']['username'];
    $query = $db->query("SELECT * FROM orders WHERE name='$user' ");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $product = $row['product'];
        $status = $row['status'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $product; ?></td>
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
            <td><?php echo $date; ?></td>
            <td><a class="click" href="ordersfull.php?p=<?php echo $id; ?>"><i class="fa fa-eye"></i></a></td>
          </tr>
    <?php } ?>
        </tbody>
      </table>
    </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>