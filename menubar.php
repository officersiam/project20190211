        <!-- Add your site or application content here -->
        <header class="header_area">
            <div class="container">
                <div class="row">

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
                    <div class="col-sm-7 logo">
                        <a href="index.php" style="color:#000;text-decoration:none"><img src="img/<?php echo $sitelogo; ?>" class="img-fluid" alt=""><?php echo $sitename; ?></a>
                    </div>
                <?php } } ?>
                    <nav class="navbar navbar-expand-sm col-sm-5 navbar-light menu">
                        <button class="navbar-toggler batal" data-toggle="collapse" data-target="#collapse_target"><i class="fa fa-bars"></i></button>
                        <div class="collapse navbar-collapse" id="collapse_target">
                            <ul class="navbar-nav">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item active"><a class="nav-link" href="products.php">Products</a></li>
                                <li class="nav-item active"><a class="nav-link" href="social.php">Social Service</a></li>
                                <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Us</a></li>
                                <?php
                                    if (!isLoggedIn()) { ?>
                                <li class="nav-item active"><a class="nav-link" href="dashboard/">Login</a></li>
                                <?php }else{ ?>
                                <li class="nav-item active"><a class="nav-link" href="dashboard/">Dashboard</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>