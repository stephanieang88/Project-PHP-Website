<?php

   require_once('../../../private/initialize.php');

   require_login();

   if (!isset($_GET['id'])) {
      redirect_to(url_for('/admin/admin_users/index.php'));
   }

   $id = $_GET['id'];

   if (is_post_request()) {
      $result = delete_admin($id);
      $_SESSION['message'] = 'Admin deleted.';
      redirect_to(url_for('/admin/admin_users/index.php'));
   }
   else {
      $admin = find_admin_by_id($id);
   }

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container mt-5">

   <a class="text-danger" href="<?php echo url_for('/admin/admin_users/index.php') ?>">&laquo; Back to List</a>

   <h1>Delete Admin User: <?php echo h($admin['username']); ?> ?</h1>

   <h4 class="mt-5 mb-5 text-danger"><em>Are you sure you want to delete this admin?</em></h4>

   <form class="mt-3" action="<?php url_for('/admin/admin_users/delete.php?id=' . h(u($admin['id']))); ?>" method="post">
      <button type="submit" name="commit" class="btn btn-danger" value="Delete Admin">Delete Admin User</button>
   </form>

</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
