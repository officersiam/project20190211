<?php
    $p = $_GET['id'];
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
            <div class="row">
<?php
$query = $db->query("SELECT * FROM products");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];

        if ($id == $p) {
        $name = $row['name'];
        $details = $row['details'];
        $img = $row['img'];
        $price = $row['price'];
?>
                <div class="col-lg-12" style="margin-bottom:50px;margin-top:100px">
                    <div class="mb-5 mb-lg-0">
                      <div class="details">
                            <div class="uk-padding">
                                <div class="col-md-6 pull-left"><img src="../img/products/<?php echo $img; ?>" alt=""></div>
                                <div class="col-md-6 pull-left">
                                    <h3>Name: <?php echo $name; ?></h3>
                                    <p>Price: <?php echo $price; ?></p>
                                    <p>Details: <?php echo $details; ?></p>
                                <a class="click" href="orderproducts.php?id=<?php echo $p; ?>"><button class="uk-light uk-background-secondary uk-button uk-button-default">Order Now</button></a>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
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