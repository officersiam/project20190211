<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Order Details</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="orderdetails.php">

      <?php echo display_error(); ?>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>id</th>
            <th>Page Name</th>
            <th>Service Title</th>
            <th>Service Discription</th>
            <th>SEO Title</th>
            <th>SEO Discription</th>
            <th>SEO Keyword</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = $db->query("SELECT * FROM orderdetails ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
<?php }else{
    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $page = $row['page'];
        $title = $row['title'];
        $discription = $row['discription'];
        $seo_title = $row['seo_title'];
        $seo_discription = $row['seo_discription'];
        $seo_keyword = $row['seo_keyword'];
        $date = $row['date'];
?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $page; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $discription; ?></td>
            <td><?php echo $seo_title; ?></td>
            <td><?php echo $seo_discription; ?></td>
            <td><?php echo $seo_keyword; ?></td>
            <td><?php echo $date; ?></td>
          </tr>
    <?php } } ?>
        </tbody>
      </table>
    </div>

<?php
$query = $db->query("SELECT * FROM orderdetails ORDER BY id");
$count = mysqli_num_rows($query);
if ($count == 0) { ?>
    <h1 class="h3 mb-3 font-weight-normal">Service List</h1>
      <label for="inputUsername">Service Page</label>
      <select name="page" class="custom-select d-block w-100">
        <option value="twitterlike">Twitter Like Page</option>
        <option value="twitterretweet">Twitter Retweet Page</option>
        <option value="twittertweet">Twitter Tweet Page</option>
        <option value="twitterfollow">Twitter Follow Page</option>
        <option value="instagramcomment">Instagram Comment Page</option>
        <option value="instagramlike">Instagram Like Page</option>
        <option value="instagramshare">Instagram Share Page</option>
        <option value="instagramfollow">Instagram Follow Page</option>
        <option value="facebookpagelike">Facebook Page Like Page</option>
        <option value="facebookpostlike">Facebook Post Like Page</option>
        <option value="facebookshare">Facebook Share Page</option>
        <option value="facebookfollow">Facebook Follow Page</option>
        <option value="youtubecomment">Youtube Comment Page</option>
        <option value="youtubelike">Youtube Like Page</option>
        <option value="youtubeshare">Youtube Share Page</option>
        <option value="youtubesubscribe">Youtube Subscribe Page</option>
        <option value="trafficvisitor">Web Traffic Page</option>
      </select>
      <label for="inputUsername">Service Title</label>
      <input type="text" name="title" class="form-control" placeholder="Service Title"><br/>
      <label for="inputUsername">Discription</label>
      <textarea type="text" id="editor" style="height:300px;" name="discription" class="form-control" placeholder="Discription"></textarea><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="Service Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="Service Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="Service Keyword"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="orderdetails" type="submit">Done</button>
<?php }else{
?>

    <h1 class="h3 mb-3 font-weight-normal">Service List</h1>
      <label for="inputUsername">Service Page</label>
      <select name="page" class="custom-select d-block w-100">
        <option value="twitterlike">Twitter Like Page</option>
        <option value="twitterretweet">Twitter Retweet Page</option>
        <option value="twittertweet">Twitter Tweet Page</option>
        <option value="twitterfollow">Twitter Follow Page</option>
        <option value="instagramcomment">Instagram Comment Page</option>
        <option value="instagramlike">Instagram Like Page</option>
        <option value="instagramshare">Instagram Share Page</option>
        <option value="instagramfollow">Instagram Follow Page</option>
        <option value="facebookpagelike">Facebook Page Like Page</option>
        <option value="facebookpostlike">Facebook Post Like Page</option>
        <option value="facebookshare">Facebook Share Page</option>
        <option value="facebookfollow">Facebook Follow Page</option>
        <option value="youtubecomment">Youtube Comment Page</option>
        <option value="youtubelike">Youtube Like Page</option>
        <option value="youtubeshare">Youtube Share Page</option>
        <option value="youtubesubscribe">Youtube Subscribe Page</option>
        <option value="trafficvisitor">Web Traffic Page</option>
      </select>
      <label for="inputUsername">Service Title</label>
      <input type="text" name="title" class="form-control" placeholder="Service Title"><br/>
      <label for="inputUsername">Discription</label>
      <textarea type="text" id="editor" style="height:300px;" name="discription" class="form-control" placeholder="Discription"></textarea><br/>
      <label for="inputUsername">SEO Title</label>
      <input type="text" name="seo_title" class="form-control" placeholder="Service Title"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="Service Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="Service Keyword"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="orderdetails" type="submit">Done</button>
    <?php } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>