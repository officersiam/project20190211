<?php
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php
            $query = $db->query("SELECT * FROM sitesetting ORDER BY id DESC LIMIT 1");
            while ($row = mysqli_fetch_array($query)) {
                    $sitetitle = $row['sitetitle'];
                    $siteicon = $row['siteicon'];
        ?>
    <link rel="icon" href="../img/<?php echo $siteicon; ?>" type="image/png">

    <title><?php echo $sitetitle; ?> | Panel</title>
    <?php } ?>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../css/uikit.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../minified/themes/default.min.css" id="theme-style" />

    <script src="../minified/sceditor.min.js"></script>
    <script src="../minified/icons/monocons.js"></script>
    <script src="../minified/formats/xhtml.js"></script>

    <style>
      code:before {
        position: absolute;
        content: 'Code:';
        top: -1.35em;
        left: 0;
      }
      code {
        margin-top: 1.5em;
        position: relative;
        background: #eee;
        border: 1px solid #aaa;
        white-space: pre;
        padding: .25em;
        min-height: 1.25em;
      }
      code:before, code {
        display: block;
        text-align: left;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <?php
            $query = $db->query("SELECT * FROM sitesetting ORDER BY id DESC LIMIT 1");
                while ($row = mysqli_fetch_array($query)) {
                    $sitename = $row['sitename'];
                    $sitelogo = $row['sitelogo'];
        ?>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-text mx-3"><sup><img src="../img/<?php echo $sitelogo; ?>" class="img-fluid" alt="" width="17px"></sup> <?php echo $sitename; ?></div>
      </a>
                <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

<?php
  if (isAdmin()) {
?>

      <!-- Nav Item - Admin -->
      <li class="nav-item">
        <a class="nav-link">
          <center>Admin</center></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-users"></i>
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users:</h6>
            <a class="collapse-item" href="users.php">Users</a>
            <a class="collapse-item" href="create_user.php">Create User</a>
            <a class="collapse-item" href="mail_to_user.php">Mail to User</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="sitesetting.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Site Settings</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Services</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Services:</h6>
            <a class="collapse-item" href="services.php">Services</a>
            <a class="collapse-item" href="orderdetails.php">Order Details</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="products.php">
          <i class="fas fa-list-alt"></i>
          <span>Products</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="topup_request.php">
          <i class="fas fa-list-alt"></i>
<?php
$query = $db->query("SELECT * FROM topup WHERE status='pending' ");
$count = mysqli_num_rows($query);
?>
          <span>Top-Up Requests</span><span class="badge badge-danger badge-counter"><?php echo $count; ?></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="slider.php">
          <i class="fas fa-sliders-h"></i>
          <span>Slider</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">
          <i class="fas fa-award"></i>
          <span>About</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="page.php">
          <i class="fas fa-file"></i>
          <span>Pages</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="trust.php">
          <i class="fas fa-check"></i>
          <span>Trust</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="payment.php">
          <i class="fas fa-money-bill-alt"></i>
          <span>Payment Methods</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pricing.php">
          <i class="fas fa-receipt"></i>
          <span>Pricing Table</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="order.php">
          <i class="fas fa-shipping-fast"></i>
          <span>Orders</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="mail.php">
          <i class="fas fa-envelope"></i>
          <span>Mails</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">
          <i class="fas fa-envelope"></i>
          <span>Contact SEO</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Main
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwitter" aria-expanded="true" aria-controls="collapsetwitter">
          <i class="fab fa-twitter"></i>
          <span>Twitter</span>
        </a>
        <div id="collapsetwitter" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Twitter:</h6>
            <a class="collapse-item" href="twitter.php">Twitter</a>

<?php
    $query = $db->query("SELECT * FROM twitter");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
?>
            <a class="collapse-item" href="twitterproduct.php?p=twitter<?php echo $title; ?>"><?php echo $name; ?></a>
<?php } ?>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefacebook" aria-expanded="true" aria-controls="collapsefacebook">
          <i class="fab fa-facebook"></i>
          <span>Facebook</span>
        </a>
        <div id="collapsefacebook" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Facebook:</h6>
            <a class="collapse-item" href="facebook.php">Facebook</a>

<?php
    $query = $db->query("SELECT * FROM facebook");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
?>
            <a class="collapse-item" href="facebookproduct.php?p=facebook<?php echo $title; ?>"><?php echo $name; ?></a>
<?php } ?>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseinstagram" aria-expanded="true" aria-controls="collapseinstagram">
          <i class="fab fa-instagram"></i>
          <span>Instagram</span>
        </a>
        <div id="collapseinstagram" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Instagram:</h6>
            <a class="collapse-item" href="instagram.php">Instagram</a>

<?php
    $query = $db->query("SELECT * FROM instagram");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
?>
            <a class="collapse-item" href="instagramproduct.php?p=instagram<?php echo $title; ?>"><?php echo $name; ?></a>
<?php } ?>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseyoutube" aria-expanded="true" aria-controls="collapseyoutube">
          <i class="fab fa-youtube"></i>
          <span>Youtube</span>
        </a>
        <div id="collapseyoutube" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Youtube:</h6>
            <a class="collapse-item" href="youtube.php">Youtube</a>

<?php
    $query = $db->query("SELECT * FROM youtube");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
?>
            <a class="collapse-item" href="youtubeproduct.php?p=youtube<?php echo $title; ?>"><?php echo $name; ?></a>
<?php } ?>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetraffic" aria-expanded="true" aria-controls="collapsetraffic">
          <i class="fas fa-traffic-light"></i>
          <span>Traffic</span>
        </a>
        <div id="collapsetraffic" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Traffic:</h6>
            <a class="collapse-item" href="traffic.php">Traffic</a>

<?php
    $query = $db->query("SELECT * FROM traffic");
    while ($row = mysqli_fetch_array($query)) {
        $title = $row['title'];
        $name = $row['name'];
?>
            <a class="collapse-item" href="trafficproduct.php?p=traffic<?php echo $title; ?>"><?php echo $name; ?></a>
<?php } ?>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
<?php
  }
?>

<?php
  if (isAdmin()) {
?>
      <!-- Nav Item - Admin -->
      <li class="nav-item">
        <a class="nav-link">
          <center>User</center></a>
      </li>
      <hr class="sidebar-divider">

<?php
  }
?>
      <li class="nav-item">
        <a class="nav-link" href="topup.php">
          <i class="fas fa-wallet"></i>
          <span>Top-Up</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="wallet.php">
          <i class="fas fa-money-bill-alt"></i>
          <span>Wallet</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="userorder.php">
          <i class="fas fa-cart-plus"></i>
          <span>Order</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="userorderdetails.php">
          <i class="fas fa-list-ul"></i>
          <span>Order Status</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-envelope"></i>
          <span>Mail</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <!--<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!--<li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>-->
              <!-- Dropdown - Messages -->
              <!--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>-->

<?php
  if (isAdmin()) {
?>
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart fa-fw"></i>
                <!-- Counter - Alerts --><?php
$query = $db->query("SELECT * FROM orders ORDER BY id DESC");
$count = mysqli_num_rows($query);
?>
                <span class="badge badge-danger badge-counter"><?php echo $count; ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Orders
                </h6>
<?php
    while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                $link = $row['link'];
                $product = $row['product'];
                $method = $row['method'];
                $transcode = $row['transcode'];
                $status = $row['status'];
                $date = $row['date'];
?>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo $date; ?></div>
                    <span class="font-weight-bold"><?php echo $name; ?>, <?php echo $product; ?>, <?php echo $method; ?>, <?php echo $transcode; ?></span>
                  </div>
                </a>
<?php } ?>
                <a class="dropdown-item text-center small text-gray-500" href="order">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages --><?php
$query = $db->query("SELECT * FROM mail ORDER BY id DESC");
$count = mysqli_num_rows($query);
?>
                <span class="badge badge-danger badge-counter"><?php echo $count; ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
<?php
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $name = $row['name'];
        $subject = $row['subject'];
        $date = $row['date'];
?>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="font-weight-bold">
                    <div class="text-truncate"><?php echo $subject; ?></div>
                    <div class="small text-gray-500"><?php echo $name; ?> · <?php echo $date; ?></div>
                  </div>
                </a>
<?php } ?>
                <a class="dropdown-item text-center small text-gray-500" href="mail.php">Read More Messages</a>
              </div>
            </li>
<?php }else{ ?>
            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="font-weight-bold">
                    <div class="text-truncate">comming</div>
                    <div class="small text-gray-500">soon!</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
<?php } ?>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/profile.png">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php  if (isset($_SESSION['user'])) : ?>
                          <span><?php echo $_SESSION['user']['username']; ?> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</span>
                  <?php endif ?>
                </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->