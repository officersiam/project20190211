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
          $query = $db->query("SELECT * FROM sitesetting");
              while ($row = mysqli_fetch_array($query)) {
                  $sitetitle = $row['sitetitle'];
                  $seo_keyword = $row['seo_keyword'];
                  $seo_discription = $row['seo_discription'];
          ?>
        <title><?php echo $sitetitle; ?></title>
        <meta name="keywords" content="<?php echo $seo_keyword; ?>">
        <meta name="description" content="<?php echo $seo_discription; ?>">
          <?php } ?>
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

        <!-- Slider Section -->
        <section class="slider">
            <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="ratio: 7:3; animation: push; autoplay: true">
                <ul class="uk-slideshow-items"><?php
            $query = $db->query("SELECT * FROM slider ORDER BY id DESC LIMIT 3");
            $count = mysqli_num_rows($query);
            if ($count == 0) {
                echo "no result!";
             }else{
                while ($row = mysqli_fetch_array($query)) {
                    $sliderimg = $row['sliderimg'];
                    $slidertitle = $row['slidertitle'];
                    $sliderdiscription = $row['sliderdiscription'];
        ?>
                    <li>
                        <img src="img/banner/<?php echo $sliderimg; ?>" alt="" uk-cover>
                            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left uk-transition-slide-bottom" style="margin-left:100px;width: 500px;line-height: 40px;margin-bottom: -100px;">
                                <h3 class="uk-margin-remove" style="color:#000;font-size:80px"><?php echo $slidertitle; ?></h3>
                                <p class="uk-margin-remove" style="color:#000;font-size:35px"><?php echo $sliderdiscription; ?></p>
                            </div>
                    </li>
                <?php } } ?>
                </ul>

            </div>
        </section>

        <!-- Our Service -->
        <section class="service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 title">
                        <h3>Our Services</h3>
                    </div>
                    <div class="col-sm-12 service_col">
                        <div class="col-sm-4 pull-left" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <a class="click" href="facebook.php">
                                <p class="pull-left"><i class="fa fa-facebook"></i></p>
                                <div class="pull-left">
                                    <ul class="service_ul">
                                        <li>Facebook like</li>
                                        <li>Facebook Follow</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pull-left" uk-scrollspy="cls: uk-animation-fade; repeat: true">
                            <a class="click" href="twitter.php">
                                <p class="pull-left"><i class="fa fa-twitter"></i></p>
                                <div class="pull-left">
                                    <ul class="service_ul">
                                        <li>Twitter like</li>
                                        <li>Twitter Follow</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pull-left" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <a class="click" href="youtube.php">
                                <p class="pull-left"><i class="fa fa-youtube"></i></p>
                                <div class="pull-left">
                                    <ul class="service_ul">
                                        <li>Youtube Like</li>
                                        <li>Youtube Subscribe</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 service_col">
                        <div class="col-sm-4 pull-left" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <a class="click" href="products.php">
                                <p class="pull-left"><i class="fa fa-shopping-bag"></i></p>
                                <div class="pull-left">
                                    <ul class="service_ul">
                                        <li>Buy Product</li>
                                        <li>Secure Delivery</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pull-left" uk-scrollspy="cls: uk-animation-fade; repeat: true">
                            <a class="click" href="traffic.php">
                                <p class="pull-left"><i class="fa fa-globe"></i></p>
                                <div class="pull-left">
                                    <ul class="service_ul">
                                        <li>Website Visitor</li>
                                        <li>SEO</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pull-left" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <p class="pull-left"><i class="fa fa-user"></i></p>
                            <div class="pull-left">
                                <ul class="service_ul">
                                    <li>24/7 Support</li>
                                    <li>High Quality Product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="about">
            <div class="about_main_area">
                <div class="container">
                    <div class="row">

        <?php
            $query = $db->query("SELECT * FROM about ORDER BY id DESC LIMIT 1") or die('could not search!');
            $count = mysqli_num_rows($query);
            if ($count == 0) {
                echo 'There was no search results!';
            }else{
                while ($row = mysqli_fetch_array($query)) {
                    $aboutimg = $row['aboutimg'];
                    $abouttitle = $row['abouttitle'];
                    $aboutdiscription = $row['aboutdiscription'];
        ?>
                        <div class="col-sm-6" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <img src="img/about/<?php echo $aboutimg; ?>" alt="">
                        </div>
                        <div class="col-sm-6" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <h3><?php echo $abouttitle; ?></h3>
                            <p><?php echo $aboutdiscription; ?></p>
                        </div>
                    </div>
    <?php }} ?>
                </div>
            </div>
        </section>

        <!-- pricing table -->
        <section class="pricing price py-5">
          <div class="container">
            <div class="row">
                <div class="title">
                    <h3>Pricing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut aliquid, ullam accusantium blanditiis eveniet hic cupiditate, minima, aspernatur sed iure dolorem non placeat eum aliquam officiis temporibus quia a magni.</p>
                </div>
              <!-- Free Tier -->

        <?php
            $query = $db->query("SELECT * FROM pricing ORDER BY id");
                while ($row = mysqli_fetch_array($query)) {
                    $class = $row['class'];
                    $title = $row['title'];
                    $name = $row['name'];
                    $amount = $row['amount'];
                    $details = $row['details'];
        ?>
              <div class="col-lg-3" style="margin-bottom:100px">
                <div class="card mb-5 mb-lg-0">
                    <div class="<?php echo $class; ?>">
                        <h5 class="card-title text-uppercase text-center" style="height: 100px;"><?php echo $name; ?></h5>
                        <h6 class="card-price text-center" style="font-size: 30px;font-weight: bold;margin-top: -10px;"><?php echo $amount; ?></h6>
                    </div>
                    <div class="card-body">
                        <ul class="card_ul">
                            <?php echo $details; ?>
                        </ul>
                        <a href="pricingorder.php?p=<?php echo $title; ?>" class="btn btn-block btn-primary text-uppercase">Order</a>
                    </div>
                </div>
              </div>
<?php } ?>
            </div>
          </div>
        </section>

        <!-- partners -->
        <section class="partners">
            <div class="container">
                <div class="row">
                    <div class="partners_main_area">
                        <div class="col-sm-12 title">
                            <h3>Payment Methods</h3>
                        </div>
                        <div class="col-sm-12 partners_main">
                            <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true">

                                <ul class="uk-slider-items uk-grid">

<?php
$query = $db->query("SELECT * FROM payment ORDER BY id");
while ($row = mysqli_fetch_array($query)) {
        $img = $row['img'];
?>
                                    <li>
                                        <div class="uk-panel">
                                            <img src="img/payment/<?php echo $img; ?>" alt="" style="width:135px;height: 65px;">
                                        </div>
                                    </li>
<?php } ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- trust -->
        <section class="trust">
            <img class="trustedimg" src="img/trust.png">
            <div class="trust_main">
                <div class="container">
                    <div class="row trusted">
                        <div class="col-sm-4" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <h3>Discription</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati qui possimus beatae. Assumenda alias, quisquam porro sequi maxime ex tempora optio quod impedit architecto accusantium et saepe veniam officiis eligendi.</p>
                        </div>
                        <div class="col-sm-4" uk-scrollspy="cls: uk-animation-fade; repeat: true">

<?php
$query = $db->query("SELECT * FROM trust ORDER BY id DESC LIMIT 2");
    while ($row = mysqli_fetch_array($query)) {
        $img = $row['img'];
?>
                            <img src="img/trust/<?php echo $img; ?>" alt="" style="width:40%;margin-left:10px;margin-top:30px">
    <?php } ?>
                        </div>
                        <div class="col-sm-4" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                            <h3>Discription</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati qui possimus beatae. Assumenda alias, quisquam porro sequi maxime ex tempora optio quod impedit architecto accusantium et saepe veniam officiis eligendi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    include ('footer.inc.php');
?>