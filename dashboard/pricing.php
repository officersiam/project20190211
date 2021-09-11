<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pricing Table</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="pricing.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Pricing Class</th>
            <th>Pricing Title</th>
            <th>Pricing Name</th>
            <th>Pricing Amount</th>
            <th>Pricing Details</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM pricing ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $class = $row['class'];
        $title = $row['title'];
        $name = $row['name'];
        $amount = $row['amount'];
        $details = $row['details'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $class; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $amount; ?></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM pricing ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Pricing List</h1>
      <label for="inputUsername">Pricing Name</label>
      <select name="name" class="custom-select d-block w-100">
        <option value="basic">Basic</option>
        <option value="plus">Plus</option>
        <option value="pro">Pro</option>
        <option value="featured">Featured</option>
      </select>
      <label for="inputUsername">Pricing Class</label>
      <select name="class" class="custom-select d-block w-100">
        <option value="card_head_1">Table 1</option>
        <option value="card_head_2">Table 2</option>
        <option value="card_head_3">Table 3</option>
        <option value="card_head_4">Table 4</option>
      </select>
      <p style="color:#FEE34A;">Table 1 is yellow</p>
      <p style="color:#FF664C;">Table 2 is orange</p>
      <p style="color:#FF4B68;">Table 3 is pink</p>
      <p style="color:#149F5B;">Table 4 is green</p>
      <br/>
      <label for="inputUsername">Pricing Amount</label>
      <input type="text" name="amount" class="form-control" placeholder="Pricing Details"><br/>
      <label for="inputUsername">Pricing Details</label>
      <textarea type="text" name="details" class="form-control" placeholder="Pricing Details"></textarea>
      <p style="color:red"><?php echo er("<i class=\"fa fa-check\"></i>"); ?> would be <i class="fa fa-check"></i> & <?php echo er("<i class=\"fa fa-times\">"); ?> would be <i class="fa fa-times"></i></p>
      <h3 style="color:red">you need to follow this format:</h3><hr>
      <i class="fa fa-check"></i><?php echo er("<li><i class=\"fa fa-check\"></i> Name Of Product</li>"); ?>
      <br>
      <i class="fa fa-times"></i><?php echo er("<li><i class=\"fa fa-times\"></i> Name Of Product</li>"); ?>
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" name="pricing" type="submit">Done</button>
<?php }else{
?>
    <h1 class="h3 mb-3 font-weight-normal">Pricing List</h1>
      <label for="inputUsername">Pricing Name</label>
      <select name="name" class="custom-select d-block w-100">
        <option value="basic">Basic</option>
        <option value="plus">Plus</option>
        <option value="pro">Pro</option>
        <option value="featured">Featured</option>
      </select>
      <label for="inputUsername">Pricing Class</label>
      <select name="class" class="custom-select d-block w-100">
        <option value="card_head_1">Table 1</option>
        <option value="card_head_2">Table 2</option>
        <option value="card_head_3">Table 3</option>
        <option value="card_head_4">Table 4</option>
      </select>
      <p style="color:#FEE34A;">Table 1 is yellow</p>
      <p style="color:#FF664C;">Table 2 is orange</p>
      <p style="color:#FF4B68;">Table 3 is pink</p>
      <p style="color:#149F5B;">Table 4 is green</p>
      <br/>
      <label for="inputUsername">Pricing Amount</label>
      <input type="text" name="amount" class="form-control" placeholder="Pricing Details"><br/>
      <label for="inputUsername">Pricing Details</label>
      <textarea type="text" name="details" class="form-control" placeholder="Pricing Details"></textarea>
      <p style="color:red"><?php echo er("<i class=\"fa fa-check\"></i>"); ?> would be <i class="fa fa-check"></i> & <?php echo er("<i class=\"fa fa-times\">"); ?> would be <i class="fa fa-times"></i></p>
      <h3 style="color:red">you need to follow this format:</h3><hr>
      <i class="fa fa-check"></i><?php echo er("<li><i class=\"fa fa-check\"></i> Name Of Product</li>"); ?>
      <br>
      <i class="fa fa-times"></i><?php echo er("<li><i class=\"fa fa-times\"></i> Name Of Product</li>"); ?>
      <br>
      <br>
      <button class="btn btn-lg btn-primary btn-block" name="pricing" type="submit">Done</button>
  </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php }
  include ('footer.php');
?>