<?php $this->layout = false; ?>
<!DOCTYPE html>
<html>

<head>
   <?= $this->Html->charset() ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      Home
   </title>

</head>

<body>
   <?= $this->element('header') ?>
   <!-- Masthead -->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="/img/11.jpg" alt="First slide">
               <div class="carousel-caption d-none d-md-block">
               <h5>Nice Kerosene</h5>
               <p>Build a landing page for your business or project and generate more leads!</p>
            </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="/img/21.jpg" alt="Second slide">
               <div class="carousel-caption d-none d-md-block">
               <h5>Good Kerosene</h5>
               <p>Build a landing page for your business or project and generate more leads!</p>
            </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="/img/41.jpg" alt="Third slide">
               <div class="carousel-caption d-none d-md-block">
               <h5>Best Kerosene</h5>
               <p>Build a landing page for your business or project and generate more leads!</p>
            </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
         </div>
      </div>
   <!-- Icons Grid -->
   <section class="features-icons bg-light text-center">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                     <i class="fas fa-industry m-auto text-primary"></i>
                  </div>
                  <h3>Excellent Service</h3>
                  <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                     <i class="fas fa-hands-helping m-auto text-primary"></i>
                  </div>
                  <h3>24*7 Support</h3>
                  <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                     <i class="fas fa-plane-departure m-auto text-primary"></i>
                  </div>
                  <h3>Quick Delivery</h3>
                  <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Image Showcases -->
   <section class="showcase">
      <div class="container-fluid p-0">
         <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img"
               style="background-image: url('https://is2.ecplaza.com/ecplaza2/products/e/e9/e9d/1824196738/oil-tin-can.jpg');">
            </div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
               <h2>Top Purchased Products</h2>
               <p class="lead mb-0">Customers are buying products frequently. </p>
            </div>
         </div>
         <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img"
               style="background-image: url('https://ae01.alicdn.com/kf/HTB1MwOgXfLsK1Rjy0Fbq6xSEXXav/Oil-Fuel-Tank-Gas-2-6-Gallon-Diesel-Fuel-Tank-Cans-Spare-Gallon-Portable-Diesel-Tanks.jpg');">
            </div>
            <div class="col-lg-6 my-auto showcase-text">
               <h2>18L Kerosene</h2>
               <p class="lead mb-0">18L kerosene with zero delivery charges </p>
            </div>
         </div>
         <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img"
               style="background-image: url('/img/bg-showcase-3.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
               <h2>Easy to Use &amp; Customize</h2>
               <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some
                  deeper customization options. Out of the box, just add your content and images, and your new landing
                  page will be ready to go!</p>
            </div>
         </div>
      </div>
   </section>

   <!-- Testimonials -->
   <section class="testimonials text-center bg-light">
      <div class="container">
         <h2 class="mb-5">What people are saying...</h2>
         <div class="row">
            <div class="col-lg-4">
               <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-1.jpg" alt="">
                  <h5>Margaret E.</h5>
                  <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-2.jpg" alt="">
                  <h5>Fred S.</h5>
                  <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super
                     nice landing pages."</p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-3.jpg" alt="">
                  <h5>Sarah W.</h5>
                  <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Call to Action -->
   <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-xl-9 mx-auto">
               <h2 class="mb-4">Ready to get started? Sign up now!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
               <form>
                  <div class="form-row">
                     <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="email" class="form-control form-control-lg"
                           placeholder="Enter your email to purchase">
                     </div>
                     <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>

   <?= $this->element('footer') ?>
</body>

</html>