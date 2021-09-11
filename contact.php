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
          $query = $db->query("SELECT * FROM contact");
              while ($row = mysqli_fetch_array($query)) {
                  $seo_title = $row['seo_title'];
                  $seo_keyword = $row['seo_keyword'];
                  $seo_discription = $row['seo_discription'];
          ?>
        <title><?php echo $seo_title; ?></title>
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

    <div class="container">
      <div class="py-5 text-center">
        <div class="title">
            <h3>Contact</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
          <form class="form-signin" method="post" enctype="multipart/form-data" action="success.php">
            <div class="mb-12">
                <label for="Name">Full Name</label>
                <input type="text" class="form-control" id="lastName" name="name" placeholder="Your Full Name" required>
            </div>

            <div class="mb-3">
              <label for="username">Phone Number</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="tel" class="form-control" id="number" name="phone" placeholder="Phone Number" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
            </div>

            <div class="mb-3">
              <label for="address">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
            </div>

            <div class="mb-3">
              <label for="address">Your Message</label>
              <textarea type="text" class="form-control" id="message" name="message" placeholder="Your Message Here" required></textarea>
            </div>
            <button class="btn btn-primary btn-lg btn-block" name="contact" type="submit">Order</button><br/><br/><br/>
          </form>
        </div>
      </div>
    </div>

<?php
    include ('footer.inc.php');
?>