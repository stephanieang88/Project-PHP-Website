<?php

   require_once('../../../private/initialize.php');

   require_login();

   if (!isset($_GET['id'])) {
      redirect_to(url_for('/admin/admin_users/index.php'));
   }

   $id = $_GET['id'];

   if (is_post_request()) {
      $admin = [];
      $admin['id'] = $id;
      $admin['first_name'] = $_POST['first_name'] ?? '';
      $admin['last_name'] = $_POST['last_name'] ?? '';
      $admin['email'] = $_POST['email'] ?? '';
      $admin['username'] = $_POST['username'] ?? '';
      $admin['password'] = $_POST['password'] ?? '';
      $admin['confirm_password'] = $_POST['confirm_password'] ?? '';

      $result = update_admin($admin);
      if ($result === true) {
         $_SESSION['message'] = 'Admin updated.';
         redirect_to(url_for('/admin/admin_users/read.php?id=' . $id));
      }
      else {
         $errors = $result;
      }
   }

   else {

      $admin = find_admin_by_id($id);

   }

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">

      <a class="text-success" href="<?php echo url_for('/admin/admin_users/index.php') ?>">&laquo; Back to List</a>

      <h1>Update Admin User: <?php echo h($admin['username']); ?></h1>

      <?php echo display_errors($errors); ?>

      <form class="mt-4" action="<?php url_for('/admin/admin_users/update.php') ?>" enctype="multipart/form-data" method="post">
         <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="first_name" value="<?php echo h($admin['first_name']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="last_name" value="<?php echo h($admin['last_name']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="username" value="<?php echo h($admin['username']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="email" value="<?php echo h($admin['email']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
               <input type="password" class="form-control" name="password" value="">
            </div>
         </div>
         <div class="form-group row">
            <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
               <input type="password" class="form-control" name="confirm_password" value="">
               <p class="mt-3"><em>* Passwords should be at least 12 characters and include at least one uppercase letter, lowercase letter, number, and symbol.</em></p>
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
               <button type="submit" class="btn btn-success" value="Edit Admin">Update Admin User</button>
            </div>
         </div>
      </form>
   </div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
