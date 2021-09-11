<?php
    $p = $_GET['p'];
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
          $query = $db->query("SELECT * FROM services");
              while ($row = mysqli_fetch_array($query)) {
                  $title = $row['title'];
                  $seo_title = $row['seo_title'];
                  $seo_keyword = $row['seo_keyword'];
                  $seo_discription = $row['seo_discription'];

                  if ($title == $p) {
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
                                <a class="click" href="buy_<?php echo $p; ?>_<?php echo $title; ?>.php">
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

<?php
    include ('footer.inc.php');
?>