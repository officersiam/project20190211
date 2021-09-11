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

          <!-- Page Heading -->
          <h1 class="h1 mb-4 text-gray-800 text-center" id="service">Services</h1>
          <!-- pricing table -->
        <section class="pricing_social price py-5">
          <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-top:50px;margin-bottom:50px;">
                    <div class="card" style="background: linear-gradient(to right, #efb5ff, #8dfdeb)">
                      <div class="pages_card">
                            <a class="click" href="service.php?p=twitter">
                                <div class="uk-padding">
                                    <i class="fa fa-twitter"></i>
                                    <h3>Twitter</h3>
                                </div>
                            </a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top:50px;margin-bottom:50px;">
                    <div class="card" style="background: linear-gradient(to right, #8dfdeb, #efb5ff, #8dfdeb)">
                      <div class="pages_card">
                            <a class="click" href="service.php?p=instagram">
                                <div class="uk-padding">
                                    <i class="fa fa-instagram"></i>
                                    <h3>Instagram</h3>
                                </div>
                            </a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top:50px;margin-bottom:50px;">
                    <div class="card" style="background: linear-gradient(to right, #8dfdeb, #efb5ff)">
                      <div class="pages_card">
                            <a class="click" href="service.php?p=facebook">
                                <div class="uk-padding">
                                    <i class="fa fa-facebook"></i>
                                    <h3>Facebook</h3>
                                </div>
                            </a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top:50px;margin-bottom:50px;">
                    <div class="card" style="background: linear-gradient(to top, #efb5ff, #8dfdeb)">
                      <div class="pages_card">
                            <a class="click" href="service.php?p=youtube">
                                <div class="uk-padding">
                                    <i class="fa fa-youtube"></i>
                                    <h3>Youtube</h3>
                                </div>
                            </a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top:50px;margin-bottom:50px;">
                    <div class="card" style="background: linear-gradient(to top, #8dfdeb, #efb5ff, #8dfdeb)">
                      <div class="pages_card">
                            <a class="click" href="service.php?p=traffic">
                                <div class="uk-padding">
                                    <i class="fa fa-globe"></i>
                                    <h3>Website Traffic</h3>
                                </div>
                            </a>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
          <!-- Page Heading -->
          <h1 class="h1 mb-4 text-gray-800 text-center" id="product">Products</h1>
        <!-- pricing table -->
        <section class="products py-5">
          <div class="container">
            <div class="row">
<?php
$query = $db->query("SELECT * FROM products");
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $img = $row['img'];
?>
                <div class="col-lg-4" style="margin-top:50px;">
                    <div class="card">
                      <div class="pages_card">
                            <div class="uk-padding">
                                <h3><?php echo $name; ?></h3>
                                <p style="font-weight:bold;color:#0078D7">Price: <?php echo $price; ?></p>
                                <img src="../img/products/<?php echo $img; ?>" alt="" style="width:200px;height:200px">
                                <a class="click" href="details.php?id=<?php echo $id; ?>">
                                    <button class="uk-light uk-background-secondary uk-button uk-button-default">Order</button>
                                </a>
                            </div>
                      </div>
                    </div>
                </div>
<?php } ?>
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