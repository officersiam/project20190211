<?php
    $p = $_GET['p'];
?>
<?php
  include ('header.php');
?>

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/uikit.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- pricing table -->
        <section class="pricing_social price py-5">
          <div class="container">
              <div class="py-5 text-center">
                <div class="title">
<?php
$query = $db->query("SELECT * FROM services");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
        $details = $row['details'];
        $discription = $row['discription'];

        if ($title == $p) {
?>
                    <h3><?php echo $name; ?></h3>
                    <p><?php echo $details; ?></p>
<?php }} ?>
                </div>
              </div>
            <div class="row">
<?php

if (isset($p)) {
    $query = $db->query("SELECT * FROM $p");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
        $details = $row['details'];
?>
                <div class="col-lg-4" style="margin-bottom:50px">
                    <div class="card mb-5 mb-lg-0">
                      <div class="pages_card">
                            <div class="uk-padding">
                                <h3><?php echo $name; ?></h3>
                                <p><?php echo $details; ?></p>
                                <a class="click" href="orderservice.php?p=<?php echo $p; ?><?php echo $title; ?>&s=<?php echo $p; ?>">
                                    <button class="uk-light uk-background-secondary uk-button uk-button-default">order</button>
                                </a>
                            </div>
                      </div>
                    </div>
                </div>
<?php }} ?>
            </div>
            <div style="margin-top:100px;margin-bottom:100px">
                <?php
                $query = $db->query("SELECT * FROM services");
                    while ($row = mysqli_fetch_array($query)) {
                        $discription = $row['discription'];

                        if ($title == $p) {
                ?>
                                    <p><?php echo $discription; ?></p>
                <?php }} ?>
            </div>
          </div>
        </section>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>