<?php
session_start();
include 'inc/header.php';
?>
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h1 class="text-white">Contact Us</h1>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-left'></i>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                  
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
             <!-- contact Area -->
             <section class="contact-section pb-100">
            <div class="container">
                <div class="section-title text-center">
                <h1  style="color: #071a7a;" class="p-3 mt-5">Drop A Message For Any Query</h1>
                </div>
                <div class="contact-wrap pt-45">
                   <div class="contact-wrap-form">
                   <?php
                    if( isset($_SESSION['abc'])): 
                     ?>
                     <div class="alert alert-success">
                      <?=$_SESSION['abc'] ?>
                     </div>
                      <?php
                         endif;
                     ?>

                   <form class="form-request "  action="contact-post.php" method="POST">
                       <h2 style="color:#0d1bba;" class="text-center mb-5">CONTACT US</h2>
             <div class="form-group">
              <input type="text" name="name" class="form-control"    placeholder="Name*">
             <?php if(isset($_SESSION['name_error'])): ?>
              <small class="text-danger"><?=$_SESSION['name_error'] ?></small>
              <?php endif; ?>
            </div>
            <div class="form-group">
               <input type="number" name="phone_number" class="form-control"  placeholder="phone number*">
               <?php if(isset($_SESSION['phone_number_error'])): ?>
              <small class="text-danger"><?=$_SESSION['phone_number_error'] ?></small>
              <?php endif; ?>
            </div>
             <div class="form-group">
               <input type="email" name="email"  class="form-control"  placeholder="Email Address*">
               <?php if(isset($_SESSION['email_error'])): ?>
              <small class="text-danger"><?=$_SESSION['email_error'] ?></small>
              <?php endif; ?>
             </div>
             <div class="form-group">
              <textarea rows="3" name="message"  class="form-control" placeholder="Message"></textarea>
              <?php if(isset($_SESSION['message_error'])): ?>
              <small class="text-danger"><?=$_SESSION['message_error'] ?></small>
              <?php endif; ?>
             </div>

             <div class="form-group mb-0 text-center">
               <button type="submit" class="default-btn">Submit</button>
             </div>
            </form>
                   </div>
                </div>
            </div>
        </section>
        <!-- contact Area End -->
        <!-- Contact Area -->
        <div class="contact-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class='flaticon-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:+1123456789">
                                    +880-22-22270456
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+19876543210">
                                    +880-22-22270447
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-paper-plane"></i>
                            <ul>
                                <li>
                                    Email
                                </li>
                                <li>
                                    <a href="#">connect@feenixlab.com</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="contact-card">
                            <i class='flaticon-pin'></i>
                            <ul>
                                <li>
                                Business 48, 7th Floor, Block-F, Road-11, Banani, Dhaka 1213  Bangladesh.
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->


<?php
 include 'inc/footer.php';
 session_unset();
?>