<?php
    $p = $_GET['id'];
?>
<?php
    include ('dashboard/functions.php');
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <?php
            $query = $db->query("SELECT * FROM sitesetting ORDER BY id DESC LIMIT 1") or die('could not search!');
            $count = mysqli_num_rows($query);
            if ($count == 0) {
                echo 'There was no search results with '.$search.'!';
            }else{
                while ($row = mysqli_fetch_array($query)) {
                    $sitetitle = $row['sitetitle'];
                    $siteicon = $row['siteicon'];
        ?>
    <link rel="icon" href="img/<?php echo $siteicon; ?>" type="image/png">
    <?php }} ?>
          <?php
          $query = $db->query("SELECT * FROM products");
              while ($row = mysqli_fetch_array($query)) {
                  $id = $row['id'];
                  $seo_title = $row['seo_title'];
                  $seo_keyword = $row['seo_keyword'];
                  $seo_discription = $row['seo_discription'];

                  if ($id == $p) {
          ?>
        <title><?php echo $seo_title; ?></title>
        <meta name="keywords" content="<?php echo $seo_keyword; ?>">
        <meta name="description" content="<?php echo $seo_discription; ?>">
          <?php }} ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/uikit.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<?php include ('menubar.php'); ?>

<!--

      ** Header END **

-->

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
                                <div class="col-md-6 pull-left"><img src="img/products/<?php echo $img; ?>" alt=""></div>
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

<?php
    include ('footer.inc.php');
?>