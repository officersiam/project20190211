<?php
    include ('header.inc.php');
    $page = $_GET['page'];
?>

<form class="form-signin" method="post" enctype="multipart/form-data" action="success.php?page=<?php echo $page; ?>">
    <div class="container" style="margin-bottom:100px">
      <div class="py-5 text-center">
        <div class="title">
            <h3 style="color:red">* Must Read</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut aliquid, ullam accusantium blanditiis eveniet hic cupiditate, minima, aspernatur sed iure dolorem non placeat eum aliquam officiis temporibus quia a magni.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 order-md-1">
            <div class="order_main" align="center">
                <ul class="uk-child-width-expand uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium" uk-tab>
                    <li class="uk-active"><a href="#">Bkash</a></li>
                    <li><a href="#">Ipay</a></li>
                    <li><a href="#">Payoneer</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="uk-card uk-card-default uk-card-body">
                            <h3 class="uk-card-title">Bkash</h3>
                            <label for="inputUsername">Bkash Number</label>
                              <input type="text" name="payment" class="form-control" placeholder="Name"><br/>
                              <label for="inputUsername">Transcode</label>
                              <input type="text" name="transcode" class="form-control" placeholder="Trans Code"><br/>
                              <button class="btn btn-lg btn-primary btn-block" name="<?php echo $page; ?>" type="submit">Done</button>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default uk-card-body">
                            <h3 class="uk-card-title">Ipay</h3>
                            <label for="inputUsername">Ipay Number</label>
                              <input type="text" name="payment" class="form-control" placeholder="Name"><br/>
                              <label for="inputUsername">Transcode</label>
                              <input type="text" name="transcode" class="form-control" placeholder="Trans Code"><br/>
                              <button class="btn btn-lg btn-primary btn-block" name="<?php echo $page; ?>" type="submit">Done</button>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default uk-card-body">
                            <h3 class="uk-card-title">Payoneer</h3>
                            <label for="inputUsername">Your Payoneer Address</label>
                              <input type="text" name="payment" class="form-control" placeholder="Name"><br/>
                              <label for="inputUsername">Details</label>
                              <input type="text" name="paymentdetails" class="form-control" placeholder="Payoneer Details"><br/>
                              <button class="btn btn-lg btn-primary btn-block" name="order<?php echo $page; ?>" type="submit">Done</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</form>

<?php
    include ('footer.inc.php');
?>