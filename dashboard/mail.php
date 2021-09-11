<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Contact Mails</h1>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Message</th>
            <th>date</th>
          </tr>
        </thead>
        <tbody>
<?php
$query = $db->query("SELECT * FROM mail ORDER BY id DESC");
$count = mysqli_num_rows($query);
if ($count == 0) {
  echo "No Result!";
 }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $subject = $row['subject'];
        $message = $row['message'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $message; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
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