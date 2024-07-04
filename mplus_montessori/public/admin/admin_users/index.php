<?php

   require_once('../../../private/initialize.php');

   require_login();

   $admin_set = find_all_admins();

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">
      <h1>Admin Users</h1>
      <a class="btn btn-success mt-2" href="<?php echo url_for('/admin/admin_users/create.php'); ?>" role="button">Create New Admin User</a>

      <table class="table table-responsive table-striped mt-3">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">First Name</th>
               <th scope="col">Last Name</th>
               <th scope="col">Email Address</th>
               <th scope="col">Username</th>
               <th scope="col">&nbsp;</th>
               <th scope="col">&nbsp;</th>
               <th scope="col">&nbsp;</th>
            </tr>
         </thead>
         <?php while ($admin = mysqli_fetch_assoc($admin_set)) { ?>
            <tbody>
               <tr>
                  <td><?php echo h($admin['id']); ?></td>
                  <td><?php echo h($admin['first_name']); ?></td>
                  <td><?php echo h($admin['last_name']); ?></td>
                  <td><?php echo h($admin['email']); ?></td>
                  <td><?php echo h($admin['username']); ?></td>
                  <td><a class="text-primary" href="<?php echo url_for('/admin/admin_users/read.php?id=' . h(u($admin['id']))); ?>">Read</a></td>
                  <td><a class="text-success" href="<?php echo url_for('/admin/admin_users/update.php?id=' . h(u($admin['id']))); ?>">Update</a></td>
                  <td><a class="text-danger" href="<?php echo url_for('/admin/admin_users/delete.php?id=' . h(u($admin['id']))); ?>">Delete</a></td>
               </tr>
            </tbody>
         <?php } ?>
      </table>

      <?php
         mysqli_free_result($admin_set);
      ?>

   </div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
