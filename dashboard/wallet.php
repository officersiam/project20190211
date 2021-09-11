<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Wallet</h1>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Price</th>
            <th>Added</th>
            <th>Cuted</th>
            <th>date</th>
          </tr>
        </thead>
        <tbody>
<?php
        $user = $_SESSION['user']['username'];
    $query = $db->query("SELECT * FROM wallet WHERE name='$user' ");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $added = $row['added'];
        $cuted = $row['cuted'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo $added; ?></td>
            <td><?php echo $cuted; ?></td>
            <td><?php echo $date; ?></td>
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