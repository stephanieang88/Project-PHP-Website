<?php

   require_once('../../private/initialize.php');

   $errors = [];
   $username = '';
   $password = '';

   if (is_post_request()) {
      $username = $_POST['username'] ?? '';
      $password = $_POST['password'] ?? '';

      // Validations
      if (is_blank($username)) {
         $errors[] = "Username cannot be blank.";
      }
      if (is_blank($password)) {
         $errors[] = "Password cannot be blank.";
      }

      // if there were no errors, try to login
      if (empty($errors)) {

         // Using one variable ensures that msg is the same
         $login_failure_msg = "Log in was unsuccessful.";

         $admin = find_admin_by_username($username);

         if ($admin) {
            if (password_verify($password, $admin['hashed_password'])) {
               // password matches
               log_in_admin($admin);
               redirect_to(url_for('/admin/index.php'));
            }
            else {
               // username found, but password do not match
               $errors[] = $login_failure_msg;
            }
         }

         else {
            // no username found
            $errors[] = $login_failure_msg;
         }

      }

   }

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container mt-5">
   <h1>Log In</h1>

   <?php echo display_errors($errors); ?>

   <form action="login.php" method="post">
      <div class="form-group mt-4">
         <label for="username">Username</label>
         <input type="text" class="form-control" name="username" value="<?php echo h($username); ?>">
      </div>
      <div class="form-group">
         <label for="password">Password</label>
         <input type="password" class="form-control" name="password" value="">
      </div>
      <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
   </form>
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
