<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Users</h1>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Password</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM users ORDER BY id DESC");
$count = mysqli_num_rows($query);
if ($count == 0) {
  echo "No Result!";
}else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $username = $row['username'];
        $phone = $row['phone'];
        $user_type = $row['user_type'];
        $password = $row['password'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $username; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $user_type; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
          <?php }} ?>
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