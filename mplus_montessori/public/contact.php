<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>

	<!-- Large Picture Heading -->
   <section>
		<div class="jumbotron jumbotron-fluid subpage mt-0 mb-3 py-0">
			<img class="img-fluid" src="images/EarlyChildhood3-6_3840x1200px_3.jpg" alt="...">
			<div>
				<h2>Contact Us</h2>
				<p class="d-none d-md-block">We look forward to hearing from you<br>
					and will try to respond within one<br>
					business day.
				</p>
			</div>
   </section>
   <section class="container-fluid mt-5 mb-5 contact-info">
      <div class="row">
         <!-- Map and Address -->
         <div class="col-lg-3 pl-4 pr-4 lg-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.3490867486885!2d6.345013915707042!3d52.00051657971921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7859f95647377%3A0x4c3f9079a8b0c398!2sIndustriepark+14%2C+7021+BL+Zelhem%2C+Netherlands!5e0!3m2!1sen!2ssg!4v1510391887606" width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
            <h4 class="mt-4">Contact Details</h4>
            <p class="mt-3"><span class="font-weight-bold">M+ Montessori</span><br>
               Industriepark 14<br>
               7021 BL<br>
               Zelhem, The Netherlands
            </p>
				<p>Phone: +31 314 627 127</p>
				<hr class="d-lg-none">
         </div>
         <!-- Contact Form -->
         <div class="col-lg-9 pl-4 pr-5 contact-form">
            <h3 class="mb-4">Contact Form</h3>
            <form>
               <div class="form-group">
                  <label for="inputName"><span class="required-input">* </span>Name</label>
                  <input type="text" class="form-control" id="inputName" placeholder="First and Last Name" required>
               </div>
               <div class="form-group">
                  <label for="inputEmail"><span class="required-input">* </span>Email address</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="name@provider.nl" required>
               </div>
               <div class="form-group">
                  <label for="inputEmail"><span class="required-input">* </span>Repeat Email address</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="name@provider.nl" required>
               </div>
               <div class="form-group">
                  <label for="inSubject"><span class="required-input">* </span>Subject</label>
                  <select multiple class="form-control" id="inputSubject">
                     <option>Open Orders</option>
                     <option>Request a Catalogue</option>
                     <option>Product Query</option>
                     <option>General Query</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Question</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
               </div>
               <p class="font-italic"><span class="required-input">* </span>denotes required input.</p>
               <button class="btn btn-send" type="submit">Send</button>
            </form>
         </div>
      </div>
   </section>

<?php include(SHARED_PATH . '/footer.php') ?>
