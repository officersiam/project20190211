<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Site Settings</h1>
    <form class="form-signin" method="post" enctype="multipart/form-data" action="sitesetting.php">

      <?php echo display_error(); ?>

<?php
$query = $db->query("SELECT * FROM sitesetting ORDER BY id DESC LIMIT 1") or die('could not search!');
$count = mysqli_num_rows($query);
if ($count == 0) {
    echo 'There was no search results with '.$search.'!';
}else{
    while ($row = mysqli_fetch_array($query)) {
        $sitename = $row['sitename'];
        $sitelogo = $row['sitelogo'];
        $siteicon = $row['siteicon'];
        $facebook = $row['facebook'];
        $twitter = $row['twitter'];
        $googleplus = $row['googleplus'];
        $instagram = $row['instagram'];
        $youtube = $row['youtube'];
?>
      <label for="inputUsername">Site Name</label>
      <input type="text" name="sitename" class="form-control" placeholder="Site Name" value="<?php echo $sitename; ?>" required><br/>
      <label for="inputUsername">Site Title</label>
      <input type="text" name="sitetitle" class="form-control" placeholder="Site Title" value="<?php echo $sitetitle; ?>" required><br/>
      <label for="inputUsername">Site Logo</label>
      <img src="../img/<?php echo $sitelogo; ?>" class="img-fluid" alt="" width="60px">
      <input type="file" name="sitelogo" value="<?php echo $sitelogo; ?>" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">Site Icon</label>
      <img src="../img/<?php echo $siteicon; ?>" class="img-fluid" alt="" width="60px">
      <input type="file" name="siteicon" value="<?php echo $siteicon; ?>" class="form-control-file" id="exampleFormControlFile1"><br/>
      <label for="inputUsername">SEO Discription</label>
      <input type="text" name="seo_discription" class="form-control" placeholder="SEO Discription"><br/>
      <label for="inputUsername">SEO Keyword</label>
      <input type="text" name="seo_keyword" class="form-control" placeholder="SEO Keyword"><br/>
      <label for="inputUsername">Facebook</label>
      <input type="text" name="facebook" class="form-control" placeholder="Facebook Link" value="<?php echo $facebook; ?>"><br/>
      <label for="inputUsername">Twitter</label>
      <input type="text" name="twitter" class="form-control" placeholder="Twitter Link" value="<?php echo $twitter; ?>"><br/>
      <label for="inputUsername">Google Plus</label>
      <input type="text" name="googleplus" class="form-control" placeholder="Google Plus Link" value="<?php echo $googleplus; ?>"><br/>
      <label for="inputUsername">Instagram</label>
      <input type="text" name="instagram" class="form-control" placeholder="Instagram Link" value="<?php echo $instagram; ?>"><br/>
      <label for="inputUsername">Youtube</label>
      <input type="text" name="youtube" class="form-control" placeholder="Youtube Link" value="<?php echo $youtube; ?>"><br/>
      <button class="btn btn-lg btn-primary btn-block" name="sitesetting" type="submit">Done</button>
    <?php } } ?>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>