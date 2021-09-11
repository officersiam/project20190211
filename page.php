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
          $query = $db->query("SELECT * FROM page");
              while ($row = mysqli_fetch_array($query)) {
                  $page = $row['page'];
                  $seo_title = $row['seo_title'];
                  $seo_keyword = $row['seo_keyword'];
                  $seo_discription = $row['seo_discription'];

                  if ($page == $p) {
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
<?php
    $query = $db->query("SELECT * FROM page ORDER BY id DESC LIMIT 1");
        while ($row = mysqli_fetch_array($query)) {
            $page = $row['page'];
            $title = $row['title'];
            $discription = $row['discription'];

                  if ($page == $p) {
?>

<section class="page">
    <div class="container">
      <div class="py-5 text-center">
        <div class="title">
            <h3><?php echo $title; ?></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <p><?php echo $discription; ?></p>
        </div>
      </div>
    </div>
</section>

<?php } } ?>

<?php
    include ('footer.inc.php');
?>