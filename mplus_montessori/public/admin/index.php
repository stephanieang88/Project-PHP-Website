<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">
      <h1>Main Menu</h1>
      <ul class="list-group">
         <li class="list-group-item"><a class="text-dark" href="<?php echo url_for('/admin/admin_users/index.php'); ?>">&raquo; Admin Users</a></li>
         <li class="list-group-item"><a class="text-dark" href="<?php echo url_for('/admin/catalogue/index.php'); ?>">&raquo; Catalogue</a></li>
      </ul>
   </div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>
