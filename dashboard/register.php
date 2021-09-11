<?php
    include('functions.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Trusted Web Design & Developing Market">
    <meta name="author" content="Siam Al Mahmud">

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
    <link rel="icon" href="../img/<?php echo $siteicon; ?>" type="image/png">

    <title><?php echo $sitetitle; ?> | Panel</title>
    <?php }} ?>

    <!-- Bootstrap core CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-signin" method="post" action="login.php">

        <?php
            $query = $db->query("SELECT * FROM sitesetting ORDER BY id DESC LIMIT 1") or die('could not search!');
            $count = mysqli_num_rows($query);
            if ($count == 0) {
                echo 'There was no search results with '.$search.'!';
            }else{
                while ($row = mysqli_fetch_array($query)) {
                    $sitename = $row['sitename'];
                    $sitelogo = $row['sitelogo'];
        ?>
                <center style="font-size:30px;font-family:comic sans ms"><img src="../img/<?php echo $sitelogo; ?>" alt="" width="50" height="50"> <?php echo $sitename; ?></center>
                <?php } } ?>

                  <?php echo display_error(); ?>
                  <h1 class="h3 mb-3 font-weight-normal">Create A New Account</h1>
                  <label for="inputUsername">Username</label>
                  <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus><br/>
                  <label for="inputNumber">Phone Number</label>
                  <input type="tel" name="phone" id="inputNumber" class="form-control" placeholder="Phone Number" required autofocus><br/>
                  <label for="inputPassword">Password</label>
                  <input type="password" name="password_1" id="inputPassword" class="form-control" placeholder="Password" required><br/>
                  <label for="inputPassword">Confirm Password</label>
                  <input type="password" name="password_2" id="inputPassword" class="form-control" placeholder="Password" required><br/>
                  <button class="btn btn-lg btn-primary btn-block" name="register_btn" type="submit">Register</button>
                  <p class="mt-5 mb-3 text-muted">Already a member? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
<?php
  include ('footer.php');
?>