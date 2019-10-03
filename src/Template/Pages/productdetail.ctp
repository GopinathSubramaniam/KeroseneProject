<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;
?>
<!DOCTYPE html>
<html>

<head>
   <?= $this->Html->charset() ?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      Product Detail
   </title>

   <?= $this->Html->meta('icon') ?>

   <?= $this->Html->css("bootstrap.min.css"); ?>
   <?= $this->Html->css("fontawesome-free/css/all.min.css"); ?>
   <?= $this->Html->css("simple-line-icons/css/simple-line-icons.css"); ?>
   <?= $this->Html->css("https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"); ?>
   <?= $this->Html->css("landing-page.css"); ?>
   <?= $this->Html->css('style.css') ?>

</head>

<body>
   <nav class="navbar navbar-dark navbar-expand-lg bg-primary static-top">
      <div class="container">
         <a class="navbar-brand" href="#">Kerosene Ecommerce</a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="/"> <i class="fas fa-home"></i> Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Services</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="#"><i class="fas fa-burn"></i> Product</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-mobile-alt"></i> Contact Us</a>
               </li>
            </ul>
         </div>
         <a class="btn btn-primary btn-lg rounded" href="#"><i class="fas fa-sign-in-alt"></i> Sign In</a>
      </div>
   </nav>

   <!-- Icons Grid -->
   <section class="">
      <!-- Page Content -->
      <div class="container">
         <div> &nbsp; </div>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Product Detail</a></li>
               <li class="breadcrumb-item active" aria-current="page">Crown Kerosene</li>
            </ol>
         </nav>
         <!-- Portfolio Item Heading -->
         <h1 class="my-4">Crown Kerosene,
            <small>Gallon</small>
         </h1>

         <!-- Portfolio Item Row -->
         <div class="row">
            <div class="col-md-6">
               <!-- 750*500 -->
               <img class="img-fluid"
                  src="https://i5.wal.co/asr/7926ac69-95ac-4ad2-9170-fb9f407ce914_1.b20957a5ff5d6c7241c3e14ff63dade3.jpeg-bbb98f8f553c4957489317713ec0a816bb245530-legacy-q85-450x450.webp"
                  alt="">
            </div>
            <div class="col-md-6">
               <h3 class="my-3">About This Item</h3>
               <p>This Crown Kerosene, 1 qt, is an ideal choice for emergency preparedness and more. With it, you can be
                  ready for when you need to refuel important items. This K-1 grade kerosene is ideally suited for use
                  in kerosene-burning heaters, lanterns and stoves. It is also highly refined and easy to store. This
                  1-qt can of kerosene fuel is compact and simple to transport from place to place. A child-resistant
                  cap makes it safe to keep around small children. Buy one or multiple cans, depending on your needs.
               </p>
               <h3 class="my-3">Highlights</h3>
               <ul>
                  <li>Highly refined kerosene</li>
                  <li>K-1 grade fuel ideally suited for use in kerosene-burning heaters, lanterns and stoves</li>
                  <li>Easy-to-store and easy-to-transport qt-sized can</li>
                  <li>Child-resistant cap for family and pet safety</li>
               </ul>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <button class="btn btn-primary rounded"><i class="fas fa-truck"></i> Order Now</button>
                     </div>
                     <div class="col-md-6 vert-center">
                        <span class="badge badge-pill badge-light cursor float-right">
                           <i class="fas fa-info-circle"></i>
                           See More Info
                        </span>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <hr />
         <div class="col-md-12">
            <h4>Specifications</h4>
            <table class="table table-sm table-striped">
               <tr>
                  <td>Brand</td>
                  <td>Crown</td>
               </tr>
               <tr>
                  <td>Assembled Product Weight</td>
                  <td>2 lbs</td>
               </tr>
               <tr>
                  <td>Condition</td>
                  <td>New</td>
               </tr>
               <tr>
                  <td>Assembled Product Dimensions (L x W x H)</td>
                  <td>6.88 x 2.39 x 4.59 Inches</td>
               </tr>
            </table>
         </div>
         <hr />
         <div class="col-md-12">
            <h4>Customer Reviews</h4>
            <div class="row">

               <div class="col-md-6">
                  <font size="8">4.5</font>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star-half-alt"></span>
                  <span class="far fa-star"></span>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-2">5 Stars </div>
                     <div class="col-6 vert-center">
                        <div class="progress" style="height: 5px;">
                           <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="col-">
                        <font style="font-size: 80%;">10</font>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">4 Stars </div>
                     <div class="col-6 vert-center">
                        <div class="progress" style="height: 5px;">
                           <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="col-">
                        <font style="font-size: 80%;">2</font>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">3 Stars </div>
                     <div class="col-6 vert-center">
                        <div class="progress" style="height: 5px;">
                           <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="col-">
                        <font style="font-size: 80%;">2</font>
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-2">2 Stars </div>
                     <div class="col-6 vert-center">
                        <div class="progress" style="height: 5px;">
                           <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="col-">
                        <font style="font-size: 80%;">1</font>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-2">1 Star </div>
                     <div class="col-6 vert-center">
                        <div class="progress" style="height: 5px;">
                           <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <div class="col-">
                        <font style="font-size: 80%;">3</font>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-">
               <button type="button" class="btn btn-outline-dark rounded"><i class="fas fa-list-ul"></i> See All
                  Reviews</button>
               <button type="button" class="btn btn-primary rounded"><i class="fas fa-pencil-alt"></i> Write
                  Review</button>
            </div>
         </div>
         <hr />
         <div class="col-md-12">
            <p>5 of 5 Reviews</p>
            <div>
               <p>It is a good product</p>
               <small>Gopinath, Nov 03, 2019</small>
               <hr />
            </div>
            <div>
               <p>It is a good product</p>
               <small>Gopinath, Nov 03, 2019</small>
               <hr />
            </div>
            <div>
               <p>It is a good product</p>
               <small>Gopinath, Nov 03, 2019</small>
               <hr />
            </div>
            <div>
               <p>It is a good product</p>
               <small>Gopinath, Nov 03, 2019</small>
               <hr />
            </div>
            <div>
               <p>It is a good product</p>
               <small>Gopinath, Nov 03, 2019</small>
               <hr />
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>

   <section class="features-icons text-center">
      <div class="container">
         <div class="row">
            &nbsp;
         </div>
      </div>
   </section>
   <!-- Footer -->
   <footer class="footer bg-light">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
               <ul class="list-inline mb-2">
                  <li class="list-inline-item">
                     <a href="#">About</a>
                  </li>
                  <li class="list-inline-item">&sdot;</li>
                  <li class="list-inline-item">
                     <a href="#">Contact</a>
                  </li>
                  <li class="list-inline-item">&sdot;</li>
                  <li class="list-inline-item">
                     <a href="#">Terms of Use</a>
                  </li>
                  <li class="list-inline-item">&sdot;</li>
                  <li class="list-inline-item">
                     <a href="#">Privacy Policy</a>
                  </li>
               </ul>
               <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
               <ul class="list-inline mb-0">
                  <li class="list-inline-item mr-3">
                     <a href="#">
                        <i class="fab fa-facebook fa-2x fa-fw"></i>
                     </a>
                  </li>
                  <li class="list-inline-item mr-3">
                     <a href="#">
                        <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                     </a>
                  </li>
                  <li class="list-inline-item">
                     <a href="#">
                        <i class="fab fa-instagram fa-2x fa-fw"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
   <?= $this->Html->script("jquery.min.js"); ?>
   <?= $this->Html->script("bootstrap.bundle.min.js"); ?>
   <?= $this->Html->script("scripts/register.js"); ?>
</body>

</html>