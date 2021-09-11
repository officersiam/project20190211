            <div class="footer_main_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <h3>Unique</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, obcaecati, cum. Adipisci maxime tenetur, officiis eum eos consequuntur ipsam facilis vero cupiditate sint enim voluptatem, nostrum sequi rem! Numquam, tempore.</p>
                        </div>
                        <div class="col-sm-3">
                            <h3>Upcoming Events</h3>
                            <ul class="footer_menu">
                                <li class="nav-item"><a class="nav-link" href="coming.php">Vk </a></li>
                                <li class="nav-item"><a class="nav-link" href="coming.php">linkdin </a></li>
                                <li class="nav-item"><a class="nav-link" href="coming.php">Paypal </a></li>
                                <li class="nav-item"><a class="nav-link" href="coming.php">Website </a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h3>Pages</h3>
                            <ul class="footer_menu">
                                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="terms.php">Terms & Condition</a></li>
                                <li class="nav-item"><a class="nav-link" href="privacy.php">Privecy & Policies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h3>Contacts</h3>
                            <p>Support@gmail.com</p>
                            <p>Phone: 2024525632</p>
                            <p>Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer"><?php
                    $query = $db->query("SELECT * FROM sitesetting ORDER BY id DESC LIMIT 1") or die('could not search!');
                    $count = mysqli_num_rows($query);
                    if ($count == 0) {
                        echo 'There was no search results with '.$search.'!';
                    }else{
                        while ($row = mysqli_fetch_array($query)) {
                            $sitetitle = $row['sitetitle'];
                ?>
                            <div class="footer_main"><?php echo $sitename; ?> &copy; All Right Reserved!</div>
            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>





        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="js/analytics.js" async defer></script>
    </body>
</html>
