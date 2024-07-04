<?php require_once('../private/initialize.php'); ?>

<?php

     $sql = "SELECT * FROM catalogue WHERE category='Geography'";
     $product_set = mysqli_query($db, $sql);
     confirm_result_set($product_set);
     if (!$product_set) {
        exit("Database query failed.");
     }

?>

<?php include(SHARED_PATH . '/header.php'); ?>

    <!-- Large Picture Heading -->
    <section>
        <div class="jumbotron jumbotron-fluid subpage mt-0 mb-3 py-0">
            <img class="img-fluid" src="images/Elementary6-9_3840x1200px_1.jpg" alt="...">
            <div>
                <h2>Geography</h2>
                <p class="d-none d-md-block">With the Geography Materials, the child<br>
                    is given the facts of his physical world – that<br>
                    it is a sphere, that this sphere is composed of land<br>
                    masses and bodies of water, that these have different<br>
                    forms and that these forms have names.
                </p>
            </div>
    </section>
    <!-- Navigation to filter product according to age/grade -->
    <section>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="#" class="btn btn-grade-active mx-2 mb-2">All</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-grade mx-2 mb-2">Toddler 0-3</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-grade mx-2 mb-2">Early Childhood 3-6</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-grade mx-2 mb-2">Elementary 6-9</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-grade mx-2 mb-2">Elementary 9-12</a>
                </li>
            </ul>
        </nav>
    </section>
    <!-- Product Catalogue -->
    <section class="container-fluid mb-5">
        <div class="d-flex justify-content-center flex-wrap align-items-stretch">

            <?php while ($product = mysqli_fetch_assoc($product_set)) { ?>
            <div class="card m-3" style="width: 20rem;">
                <img class="card-img-top" src="admin/catalogue/<?php echo h($product['image_path']) ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo h($product['product_name']) ?></h4><hr>
                    <p>Item Number: <?php echo h($product['item_no']) ?></p>
                    <p>Price: USD <?php echo h($product['price']) ?></p><hr>
                    <a href="<?php echo url_for('/product_page.php?id=' . h(u($product['id']))); ?>" class="btn btn-details">Details</a>
                    <a href="#" class="btn btn-shopping">Add <i class="fa fa-shopping-basket fa-md"></i></a>
                </div>
            </div>
            <?php } ?>

        </div>
    </section>

    <?php
        mysqli_free_result($product_set);
    ?>

<?php include(SHARED_PATH . '/footer.php') ?>
