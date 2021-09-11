<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Top-Up Requests</h1>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Method</th>
            <th>Price</th>
            <th>Transaction Code</th>
            <th>Status</th>
            <th>date</th>
            <th>edit</th>
          </tr>
        </thead>
        <tbody>
<?php
        $user = $_SESSION['user']['username'];
    $query = $db->query("SELECT * FROM topup");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $method = $row['method'];
        $price = $row['price'];
        $transcode = $row['transcode'];
        $status = $row['status'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $method; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo $transcode; ?></td>
            <td>
                <?php
                    if ($status == 'cancel') {
                        echo "<span class='uk-label uk-label-danger'>Canceled</span>";
                    }elseif ($status == 'added') {
                        echo "<span class='uk-label uk-label-success'>Added</span>";
                    }elseif ($status == 'cuted') {
                        echo "<span class='uk-label uk-label-info'>Cuted</span>";
                    }else{
                        echo "<span class='uk-label uk-label-warning'>Pending</span>";
                    }
                ?>
            </td>
            <td><?php echo $date; ?></td>
            <td><a href=""><i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i></a></td>
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