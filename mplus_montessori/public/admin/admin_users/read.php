<?php

   require_once('../../../private/initialize.php');

   require_login();

   $id = $_GET['id'] ?? '1';  // PHP > 7.0
   $admin = find_admin_by_id($id);

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">
      <a class="text-primary" href="<?php echo url_for('/admin/admin_users/index.php') ?>">&laquo; Back to List</a>
      <h1>Admin User: <?php echo h($admin['username']); ?></h1>
      <div class="read_display mt-4">
         <div class="row">
           <div class="col-3"><h5>First Name</h5></div>
           <div class="col-9"><h5><?php echo h($admin['first_name']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Last Name</h5></div>
           <div class="col-9"><h5><?php echo h($admin['last_name']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Email Address</h5></div>
           <div class="col-9"><h5><?php echo h($admin['email']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Username</h5></div>
           <div class="col-9"><h5><?php echo h($admin['username']); ?></h5></div>
         </div>
      </div>
   </div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
