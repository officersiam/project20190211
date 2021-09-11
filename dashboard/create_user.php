<?php
  include ('header.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Create A New User</h1>
    <form class="form-signin" method="post" action="create_user.php">

      <?php echo display_error(); ?>
      <label for="inputUsername">Username</label>
      <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus><br/>
      <label for="inputNumber">Phone Number</label>
      <input type="tel" name="phone" id="inputNumber" class="form-control" placeholder="Phone Number" required autofocus><br/>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Role Select</label>
            <select name="user_type" id="user_type" class="form-control" id="exampleFormControlSelect1">
                <option value="">Select One..</option>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="user">User</option>
            </select>
        </div>
      <label for="inputPassword">Password</label>
      <input type="password" name="password_1" id="inputPassword" class="form-control" placeholder="Password" required><br/>
      <label for="inputPassword">Confirm Password</label>
      <input type="password" name="password_2" id="inputPassword" class="form-control" placeholder="Password" required><br/>
      <button class="btn btn-lg btn-primary btn-block" name="register_btn" type="submit">Create User</button>
    </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include ('footer.php');
?>