<?php
    include ('dashboard/functions.php');
    if (isLoggedIn()) {
        header('location: dashboard/userorder.php#product');
    }
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
                    $sitename = $row['sitename'];
                    $siteicon = $row['siteicon'];
        ?>
    <link rel="icon" href="img/<?php echo $siteicon; ?>" type="image/png">
        <title>Product Page | <?php echo $sitename; ?></title>
        <meta name="keywords" content="products, service, account, create, unique, best">
        <meta name="description" content="you can buy best online product from this site. number one trusted site.">
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
                                <img src="img/products/<?php echo $img; ?>" alt="" style="width:200px;height:200px">
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

<?php
    include ('footer.inc.php');
?>