<?php

   require_once('../../../private/initialize.php');

   require_login();

   if (is_post_request()) {

      // Handle form values sent by new.php
      $product = [];
      $product['category'] = $_POST['category'] ?? '';
      $product['grade'] = $_POST['grade'] ?? '';
      $product['position'] = $_POST['position'] ?? '';
      $product['visible'] = $_POST['visible'] ?? '';
      $product['item_no'] = $_POST['item_no'] ?? '';
      $product['product_name'] = $_POST['product_name'] ?? '';
      $product['price'] = $_POST['price'] ?? '';
      $product['description'] = $_POST['description'] ?? '';

      function GetImageExtension($imagetype){
         if(empty($imagetype)) return false;
         switch($imagetype) {
            case 'image/bmp': return '.bmp';
            case 'image/gif': return '.gif';
            case 'image/jpeg': return '.jpg';
            case 'image/png': return '.png';
            default: return false;
         }
      }

      if (!empty($_FILES["uploadedimage"]["name"])) {
          $file_name = $_FILES["uploadedimage"]["name"];
          $temp_name = $_FILES["uploadedimage"]["tmp_name"];
          $imgtype = $_FILES["uploadedimage"]["type"];
          $ext = GetImageExtension($imgtype);
          $imagename = $_FILES["uploadedimage"]["name"];
          $target_path = "catalogue_images/" . $imagename;

         if(move_uploaded_file($temp_name, $target_path)) {

            $product['image_path'] = $target_path;

            $result = insert_product($product);
            $new_id = mysqli_insert_id($db);
            redirect_to(url_for('/admin/catalogue/read.php?id=' . $new_id));
         }
      }
      else {
         exit("Error While uploading image on the server");
      }

   }

   else {
      $product = [];
      $product['category'] = '';
      $product['grade'] = '';
      $product['position'] = '';
      $product['visible'] = '';
      $product['item_no'] = '';
      $product['product_name'] = '';
      $product['price'] = '';
      $product['description'] = '';
      $product['image_path'] = '';

      $product_set = find_all_products();
      $product_count = mysqli_num_rows($product_set) + 1;
      mysqli_free_result($product_set);

      $product['position'] = $product_count;
   }
?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

   <div class="container mt-5">

      <a class="text-success" href="<?php echo url_for('/admin/catalogue/index.php') ?>">&laquo; Back to List</a>

      <h1>Create New Product</h1>

      <form class="mt-4" action="<?php url_for('/admin/catalogue/create.php') ?>" enctype="multipart/form-data" method="post">
         <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
               <select class="form-control" name="category">
                  <option value="">-- Select Category --</option>
                  <option value="Biology" <?php if ($product['category'] == 'Biology') echo " selected"; ?>>Biology</option>
                  <option value="Geography" <?php if ($product['category'] == 'Geography') echo " selected"; ?>>Geography</option>
                  <option value="Language" <?php if ($product['category'] == 'Language') echo " selected"; ?>>Language</option>
                  <option value="Mathematics" <?php if ($product['category'] == 'Mathematics') echo " selected"; ?>>Mathematics</option>
                  <option value="Practical Life" <?php if ($product['category'] == 'Practical Life') echo " selected"; ?>>Practical Life</option>
                  <option value="Sensorial" <?php if ($product['category'] == 'Sensorial') echo " selected"; ?>>Sensorial</option>
               </select>
             </div>
         </div>
         <div class="form-group row">
            <label for="grade" class="col-sm-2 col-form-label">Grade</label>
            <div class="col-sm-10">
               <select class="form-control" name="grade">
                  <option value="">-- Select Grade --</option>
                  <option value="Toddler 0-3" <?php if ($product['grade'] == 'Toddler 0-3') echo " selected"; ?>>Toddler 0-3</option>
                  <option value="Early Childhood 3-6" <?php if ($product['grade'] == 'Early Childhood 3-6') echo " selected"; ?>>Early Childhood 3-6</option>
                  <option value="Elementary 6-9" <?php if ($product['grade'] == 'Elementary 6-9') echo " selected"; ?>>Elementary 6-9</option>
                  <option value="Elementary 9-12" <?php if ($product['grade'] == 'Elementary 9-12') echo " selected"; ?>>Elementary 9-12</option>

               </select>
             </div>
         </div>
         <div class="form-group row">
            <label for="position" class="col-sm-2 col-form-label">Position</label>
            <div class="col-sm-10">
               <select class="form-control" name="position">
                  <?php
                     for ($i = 1; $i <= $product_count; $i++) {
                        echo "<option value=\"{$i}\"";
                        if ($product['position'] == $i) {
                           echo " selected";
                        }
                        echo ">{$i}</option>";
                     }
                  ?>
               </select>
            </div>
         </div>
         <div class="form-group row">
            <label for="visible" class="col-sm-2 col-form-label">Visible</label>
            <div class="col-sm-10">
               <input type="hidden" name="visible" value="0">
               <input type="checkbox" name="visible" value="1">
            </div>
         </div>
         <div class="form-group row">
            <label for="item_no" class="col-sm-2 col-form-label">Item Number</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="item_no" value="<?php echo h($product['item_no']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="product_name" value="<?php echo h($product['product_name']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="product_name" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="price" value="<?php echo h($product['price']); ?>">
            </div>
         </div>
         <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
               <textarea class="form-control" name="description" rows="5"><?php echo h($product['description']); ?></textarea>
            </div>
         </div>
         <div class="form-group row">
            <label for="image_path" class="col-sm-2 col-form-label">Upload Image</label>
            <div class="col-sm-10">
               <input type="file" class="form-control-file" name="uploadedimage">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
               <button type="submit" class="btn btn-success">Create Product</button>
            </div>
         </div>
      </form>

   </div>

<?php include(SHARED_PATH . '/admin_footer.php') ?>


