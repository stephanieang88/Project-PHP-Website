<?php

   require_once('../../../private/initialize.php');

   require_login();

   $id = $_GET['id'] ?? '1';
   $product = find_product_by_id($id);

?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">
      <a class="text-primary" href="<?php echo url_for('/admin/catalogue/index.php') ?>">&laquo; Back to List</a>
      <h1>Product: <?php echo h($product['product_name']); ?></h1>
      <div class="read_display mt-4">
         <div class="row">
           <div class="col-3"><h5>Category</h5></div>
           <div class="col-9"><h5><?php echo h($product['category']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Grade</h5></div>
           <div class="col-9"><h5><?php echo h($product['grade']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Position</h5></div>
           <div class="col-9"><h5><?php echo h($product['position']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Visible</h5></div>
           <div class="col-9"><h5><?php echo $product['visible'] == '1' ? 'true' : 'false'; ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Item Number</h5></div>
           <div class="col-9"><h5><?php echo h($product['item_no']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Product Name</h5></div>
           <div class="col-9"><h5><?php echo h($product['product_name']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Price</h5></div>
           <div class="col-9"><h5><?php echo h($product['price']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Description</h5></div>
           <div class="col-9"><h5><?php echo h($product['description']); ?></h5></div>
         </div>
         <div class="row mt-2">
           <div class="col-3"><h5>Image</h5></div>
           <div class="col-9"><img class="img-thumbnail" src="<?php echo h($product['image_path']); ?>" alt="..."></div>
         </div>
         <div class="row mt-4">
           <div class="col-3"><h5>Last Update</h5></div>
           <div class="col-9"><h5><?php echo h($product['submission_date']); ?></h5></div>
         </div>
      </div>
   </div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>
