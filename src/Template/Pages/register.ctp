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
      Register
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
               <li class="nav-item active">
                  <a class="nav-link" href="/"> <i class="fas fa-home"></i> Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Services</a>
               </li>
               <li class="nav-item">
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
   <section class="features-icons">
      <div class="container">
         <div class="row">
            <div class="col-lg-3">
               &nbsp;
            </div>
            <div class="col-lg-6">
               <div class="card" style="width: 30rem;">
                  <div class="card-body">
                     <h3 class="card-subtitle mb-2 text-muted text-center">Register</h3>
                     <form action="#" id="registerForm">
                        <div class="form-group">
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-envelope"></i>
                                 </span>
                              </div>
                              <input type="email" class="form-control radius-0" id="email" name="email"
                                 placeholder="Email" aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-user"></i>
                                 </span>
                              </div>
                              <input type="text" class="form-control radius-0" id="name" name="name" placeholder="Name"
                                 aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-mobile-alt"></i>
                                 </span>
                              </div>
                              <input type="text" class="form-control radius-0" id="mobile" name="mobile"
                                 placeholder="Mobile" aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-key"></i>
                                 </span>
                              </div>
                              <input type="password" class="form-control radius-0" id="password" name="password"
                                 placeholder="Password" aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <!-- <label for="exampleInputEmail1">Email address</label> -->
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text radius-0" id="inputGroupPrepend">
                                    <i class="fas fa-lock"></i>
                                 </span>
                              </div>
                              <input type="password" class="form-control radius-0" id="confirmPassword"
                                 name="confirmPassword" placeholder="Confirm Password"
                                 aria-describedby="inputGroupPrepend" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="chkbx-container">
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>
                           </label>
                           <label class="form-check-label" for="exampleCheck1" style="padding-left: 30px;"><a href="#"
                                 style="text-decoration: underline;">Agree Terms And Conditions</a></label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block radius-0"><i
                              class="fas fa-user-plus"></i> Register</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               &nbsp;
            </div>
         </div>
      </div>
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