<?php

   require_once('../../../private/initialize.php');

   require_login();

   $product_set = find_all_products();

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">
      <h1>Catalogue</h1>
      <a class="btn btn-success mt-2" href="<?php echo url_for('/admin/catalogue/create.php'); ?>" role="button">Create New Product</a>

      <table class="table table-responsive table-striped mt-3">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Category</th>
               <th scope="col">Grade</th>
               <th scope="col">Position</th>
               <th scope="col">Visible</th>
               <th scope="col">Product Name</th>
               <th scope="col">Price</th>
               <th scope="col">&nbsp;</th>
               <th scope="col">&nbsp;</th>
               <th scope="col">&nbsp;</th>
            </tr>
         </thead>
         <?php while ($product = mysqli_fetch_assoc($product_set)) { ?>
            <tbody>
               <tr>
                  <td><?php echo h($product['id']); ?></td>
                  <td><?php echo h($product['category']); ?></td>
                  <td><?php echo h($product['grade']); ?></td>
                  <td><?php echo h($product['position']); ?></td>
                  <td><?php echo $product['visible'] == 1 ? 'true' : 'false'; ?></td>
                  <td><?php echo h($product['product_name']); ?></td>
                  <td><?php echo h($product['price']); ?></td>
                  <td><a class="text-primary" href="<?php echo url_for('/admin/catalogue/read.php?id=' . h(u($product['id']))); ?>">Read</a></td>
                  <td><a class="text-success" href="<?php echo url_for('/admin/catalogue/update.php?id=' . h(u($product['id']))); ?>">Update</a></td>
                  <td><a class="text-danger" href="<?php echo url_for('/admin/catalogue/delete.php?id=' . h(u($product['id']))); ?>">Delete</a></td>
               </tr>
            </tbody>
         <?php } ?>
      </table>

      <?php
         mysqli_free_result($product_set);
      ?>

   </div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>
