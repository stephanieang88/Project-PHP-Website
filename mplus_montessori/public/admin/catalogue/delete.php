<?php

   require_once('../../../private/initialize.php');

   require_login();

   if (!isset($_GET['id'])) {
      redirect_to(url_for('/admin/catalogue/index.php'));
   }

   $id = $_GET['id'];

   if (is_post_request()) {

        $result = delete_product($id);
        redirect_to(url_for('/admin/catalogue/index.php'));

    } else {

        $product = find_product_by_id($id);

    }

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">

      <a class="text-danger" href="<?php echo url_for('/admin/catalogue/index.php') ?>">&laquo; Back to List</a>

      <h1>Delete Product: <?php echo h($product['product_name']); ?> ?</h1>

      <img class="img-thumbnail mt-4" src="<?php echo h($product['image_path']); ?>" alt="...">

      <form class="mt-3" action="<?php url_for('/admin/catalogue/delete.php?id=' . h(u($product['id']))); ?>" method="post">
         <button type="submit" name="commit" class="btn btn-danger">Delete Product</button>
      </form>

   </div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>
