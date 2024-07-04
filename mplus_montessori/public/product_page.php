<?php require_once('../private/initialize.php'); ?>

<?php
   $id = $_GET['id'] ?? '1';
   $product = find_product_by_id($id);
?>

<?php include(SHARED_PATH . '/header.php'); ?>

	<section>
		<!-- Decorative images at the side -->
		<div class="row no-gutters">
			<div class="col-md-2 d-none d-md-block">
				<img class="img-fluid" src="images/EarlyChildhood3-6_1462x738px_7.jpg" alt="...">
				<img class="img-fluid" src="images/EarlyChildhood3-6_1462x738px_8.jpg" alt="...">
				<img class="img-fluid" src="images/Toddler0-3_1640x1000px_2.jpg" alt="...">
				<img class="img-fluid" src="images/Toddler0-3_1462x738px_3.jpg" alt="...">
				<img class="img-fluid" src="images/Toddler0-3_1462x738px_2.jpg" alt="...">
				<img class="img-fluid" src="images/Toddler0-3_1462x738px_1.jpg" alt="...">
				<img class="img-fluid" src="images/Elementary6-9_1462x738px_1.jpg" alt="...">
				<img class="img-fluid" src="images/EarlyChildhood3-6_1462x738px_10.jpg" alt="...">
				<img class="img-fluid" src="images/EarlyChildhood3-6_1462-x-738px_9.jpg" alt="...">
			</div>
			<div class="col-md-10 mb-5">
				<!-- Breadcrumb -->
				<nav class="product-breadcrumb" aria-label="breadcrumb" role="navigation">
            	<ol class="breadcrumb">
               	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
               	<li class="breadcrumb-item">
                    <a href="<?php
                        if ($product['category'] == "Practical Life") {
                            echo "practical_life";
                        } else
                            echo h(strtolower($product['category']))
                    ?>.php"><?php echo h($product['category']); ?></a>
                </li>
               	<li class="breadcrumb-item active" aria-current="page"><?php echo h($product['product_name']); ?></li>
            	</ol>
				</nav>
				<!-- Product image and descriptions -->
				<div class="row no-gutters">
            	<div class="col-md-5 pl-xl-3 pl-md-1">
               	<img class="img-fluid" src="admin/catalogue/<?php echo h($product['image_path']) ?>" alt="...">
            	</div>
            	<div class="col-md-6 px-5 px-md-0 product-desc">
               	<h2><?php echo h($product['product_name']); ?></h2><hr>
               	<p><?php echo h($product['description']); ?></p>
               	<p>Material for : <?php echo h($product['grade']) ?></p><hr>
               	<p>Item Number : <?php echo h($product['item_no']) ?></p><hr>
						<p>Price : USD <span class="font-weight-bold"><?php echo h($product['price']) ?></span></p><hr>
						<form class="form-inline">
							<div class="form-group">
								<label class="mr-2" for="inputOrderQty">Quantity</label>
								<select class="form-control" id="inputOrderQty">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<a href="#" class="btn btn-shopping ml-4">Add <i class="fa fa-shopping-basket fa-md"></i></a>
						</form>
					</div>
					<div class="col-md-1 d-none d-md-block"></div>
				</div>
			</div>
		</div>
	</section>

<?php include(SHARED_PATH . '/footer.php') ?>
